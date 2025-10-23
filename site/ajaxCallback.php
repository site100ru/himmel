<?php

	$tel = $_POST[ 'tel' ];
	//$formsTag = $_POST[ 'formsTag' ];
	
	$message = "Заявка на получение обратного звонка\n\n";
	$message .= "Телефон: ".$tel."\n\n";
	
	if ( $tel != '' ) {
		mail( 'info@himmelrf.ru, vasilyev-r@mail.ru', 'Жду звонка', $message );
	}
	
	
	/*
	$roistatData = array(
		'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : 'nocookie',
		'key'     => 'MTQ3MDk2OjkxMzI0Ojk5ZDNkMWY5YTZiMzgxYzJjMWYwOTU2YjMyODgyNzRh', //вместо value нужно указать ключ для интеграции из вашего проекта Roistat
		'phone'   => $tel, //вместо value должен быть телефон клиента или переменная, в которую он передается
		'fields'  => array(
			'tags' => 'Сайт, Жду звонка',
		),
	);
	file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData)); */
	
	echo '<h3 class="mb-5 text-uppercase text-center text-nowrap">Отправлено</h3>';
	echo '<div class="text-center">Сообщение успешно отправлено.</div>';

	//AMOCRM	
	$data = $_POST;
	$data = array_merge($data, $_COOKIE);
	$data['subdomain'] = 'himmel';
	$data['script'] = 'himmel_site';
	$data['title'] = 'Обратный звонок';
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