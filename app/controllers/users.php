<?php
	include 'app/database/database.php';

	$authMsg = ''; 

	if($_SERVER["REQUEST_METHOD"] === 'POST'){
		echo 'POST';
		$login = trim($_POST['login']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$confirmPass = trim($_POST['confirmPass']);


		if(	$login === '' ||  $email === '' ||  $password=== '' || $confirmPass === ''){
			$authMsg = "Не все поля заполнены";
		}
		elseif(mb_strlen($login, 'UTF8') < 2){
			$authMsg = 'Логин не может быть короче 2-х символов';
		}
		elseif($password !== $confirmPass){
			$authMsg = 'Пароли не совпадают';
		}
		else
		{
			$existence = selectOne("users", ["email" => $email]);
			if($existence!==false){
				$authMsg = 'Пользователь с такой почтой уже зарегистрирован';
			}
			else
			{
				$dataUser = [
					'admin' => 0,
					"user_name" => $login,
					"email" => $email,
					"password" => password_hash($password, PASSWORD_DEFAULT)
				];
				$id = insert('users', $dataUser);
				$authMsg = "Пользователь $login успешно зарегистрирован";
			}
			
		}

	}else{
		echo 'GET';
		$login = '';
		$email = '';
	}

