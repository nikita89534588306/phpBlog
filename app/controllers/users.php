<?php
	include 'app/database/database.php';

	$isSubmit = false;
	$errMsg = ''; 

	if($_SERVER["REQUEST_METHOD"] === 'POST'){
		echo 'POST';
		$login = trim($_POST['login']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$confirmPass = trim($_POST['confirmPass']);


		if(	$login === '' ||  $email === '' ||  $password=== '' || $confirmPass === ''){
			$errMsg = "Не все поля заполнены";
		}
		elseif(mb_strlen($login, 'UTF8') < 2){
			$errMsg = 'Логин не может быть короче 2-х символов';
		}
		elseif($password !== $confirmPass){
			$errMsg = 'Пароли не совпадают';
		}
		else
		{

			$query = $pdo->prepare("SELECT * FROM users WHERE email='".$email ."' LIMIT 1" );
			$query->execute();
			$existence = $query->fetch();
			tt($existence);
			tt($existence==true);
			if($existence==false){
				$errMsg = 'Пользователь с такой почтой уже зарегистрирован';
			}
			else
			{
				$dataUser = [
					'admin' => 0,
					"user_name" => $login,
					"email" => $email,
					"password" => password_hash($password, PASSWORD_DEFAULT)
				];
			}
	
			// $id = insert('users', $dataUser);
			$isSubmit = true;
		}

	}else{
		echo 'GET';
		$login = '';
		$email = '';
	}

