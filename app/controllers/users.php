<?php
	include 'app/database/database.php';

	$authMsg = ''; 
	//обработчик формы регистрации
if($_SERVER["REQUEST_METHOD"] === 'POST' && isset($_POST['btn-reg']) ){

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
			$user = selectOne('users', ['id' => $id]);

			$_SESSION['id'] = $user["id"];
			$_SESSION['user_name'] = $user["user_name"];
			$_SESSION['admin'] = $user["admin"];

			if($_SESSION['admin'] ) header('Location:' . 'http://localhost/admin/admin.php');
			else header('Location:' .  'http://localhost');
		}
		
	}

}
else{
	$login = '';
	$email = '';
}

//обработчик формы авторизации
if($_SERVER["REQUEST_METHOD"] === 'POST' && isset($_POST['btn-log'])){

	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	var_dump($_POST);
	var_dump($email === ''  ||  $password=== '');
	if(	$email === ''  ||  $password=== ''){
		$authMsg = "Не все поля заполнены";
	}
	else
	{
		$existence = selectOne("users", ["email" => $email]);
		if(
			$existence!==false  //если есть данные о пользователе
			&& password_verify($password, $existence['password']) //и пароль совпадает
		)
		{
			$_SESSION['id'] = $existence["id"];
			$_SESSION['user_name'] = $existence["user_name"];
			$_SESSION['admin'] = $existence["admin"];

			if($_SESSION['admin'] ) header('Location:' . 'http://localhost/app/admin/admin.php');
			else header('Location:' .  'http://localhost');
		}
		else
		{	
			//ошибка авторизации
			$authMsg = 'Email или пароль не верный'; 
		}
		
	}

}else{
	$email = '';
}

