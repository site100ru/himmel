<?php
session_start();
require_once __DIR__ . '/validator.php';

$config = [
    'recipient_email' => 'info@himmelrf.ru, vasilyev-r@mail.ru',
    // 'recipient_email' => 'sidorov-vv3@mail.ru, vasilyev-r@mail.ru',
    'email_subject' => 'Заявка на обратный звонок (быстрая форма)',
    'log_file' => __DIR__ . '/spam_log.txt',
    'required_fields' => ['tel'],
    'validation' => [
        'require_all_fields' => true,
        'name_only_cyrillic' => false,
        'email_only_latin' => false,
        'phone_same_digits' => true,
        'phone_sequential_digits' => true,
        'city_only_cyrillic' => false,
        'phone_russian_operators' => true,
        'honeypot_name' => true,
        'phone_full_length' => true,
        'form_timestamp' => true
    ]
];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method not allowed');
}

$formData = [
    'tel' => $_POST['tel'] ?? '',
    'name' => $_POST['name'] ?? '',
    'form_timestamp' => $_POST['form_timestamp'] ?? '',
    'user_name' => '',
    'email' => '',
    'city' => ''
];

$logger = new SpamLogger($config['log_file']);
$validation = validateFormData($formData, $config, $russian_operator_codes, $config['required_fields']);

// ВОЗВРАЩАЕМ JSON
header('Content-Type: application/json; charset=utf-8');

if (!$validation['valid']) {
    $logger->logAttempt($formData, true, $validation['errors']);

    echo json_encode([
        'success' => false,
        'field_errors' => $validation['field_errors']
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

// Отправка письма
$message = "Заявка на обратный звонок (быстрая форма)\n\n";
$message .= "Телефон: " . htmlspecialchars($formData['tel']) . "\n";
$message .= "\n---\n";
$message .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";
$message .= "Дата: " . date('d.m.Y H:i:s') . "\n";

$headers = "From: noreply@" . $_SERVER['HTTP_HOST'] . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$sent = mail($config['recipient_email'], $config['email_subject'], $message, $headers);

//AMOCRM
$data = $_POST;
$data = array_merge($data, $_COOKIE);
$data['subdomain'] = 'himmel';
$data['script'] = 'himmel_site';
$data['title'] = 'Обратная связь';
$data['ref'] = $_SERVER['HTTP_REFERER'];
$ch = curl_init('https://s5-nova.ru/app/order/hook.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_exec($ch);
curl_close($ch);
//AMOCRM

if ($sent) {
    $logger->logAttempt($formData, false, []);
    echo json_encode([
        'success' => true,
        'message' => 'Ваша заявка успешно отправлена. Мы перезвоним вам в ближайшее время.'
    ], JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Не удалось отправить письмо. Попробуйте позже.'
    ], JSON_UNESCAPED_UNICODE);
}
