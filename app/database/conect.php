<?php
	$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
	try{
		$pdo = new PDO(
			/*адрес БД*/'mysql:host=localhost;'.
			/*имя БД*/'dbname=my_blog;'.
			/*порт*/'port=4000;' . 
			/*кодировка*/ 'charset=utf8',

			/*пользователь БД*/'root',
			/*пароль пользователя*/'root',
			$options
		);
	}catch(PDOException $i){
		die('Ошибка подключения к базе данных');
	}	
?>