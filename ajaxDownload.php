<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$city =  $_POST['city'];
	//$formsTag = $_POST[ 'formsTag' ];

	$message = "Заявка на скачивание каталога\n\n";
	$message .= "Имя: ".$name."\n\n";
	$message .= "Email: ".$email."\n\n";
	$message .= "Телефон: ".$tel."\n\n";
	$message .= "Город: ".$city."\n\n";
	
	if ( ( $name != '' ) AND ( $email != '' ) AND ( $tel != '' ) ) {
		mail( 'info@himmelrf.ru, vasilyev-r@mail.ru', 'Заявка на каталог', $message );
	}

	/*
	$roistatData = array(
		'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : 'nocookie',
		'key'     => 'MTQ3MDk2OjkxMzI0Ojk5ZDNkMWY5YTZiMzgxYzJjMWYwOTU2YjMyODgyNzRh', //вместо value нужно указать ключ для интеграции из вашего проекта Roistat
		'phone'   => $tel, //вместо value должен быть телефон клиента или переменная, в которую он передается
		'email'   => $email, //вместо value должна быть электронная почта клиента или переменная, в которую она передается
		'fields'  => array(
			'Город' => $city,
			'tags' => 'Сайт, Заявка на каталог',
		), //массив, в который можно передать значения дополнительных полей, а можно оставить пустым
	);
	file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData)); */

	echo '<h3 class="mb-5 text-uppercase text-center text-nowrap">Готово</h3>';
	echo '<div class="text-center">Скачивание начнется через несколько секунд!</div>';

	//AMOCRM	
	$data = $_POST;
	$data = array_merge($data, $_COOKIE);
	$data['subdomain'] = 'himmel';
	$data['script'] = 'himmel_site';
	$data['title'] = 'Скачать каталог';
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
 
?>