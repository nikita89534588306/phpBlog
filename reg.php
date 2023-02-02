

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('app/include/head.php'); ?>
</head>
<body>

	<?php include('app/include/header.php'); ?>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-8 mt-4 mb-4">
				<div style='text-align: center;'class="h2">Форма регистрации</div>
				<form class="my-2" method="post" action="reg.php">
					<?php 

						if($authMsg == "Пользователь $login успешно зарегистрирован"){ 
							echo '<div class="alert alert-success" role="alert">' .$authMsg .'</div>';
						}else if($authMsg !== '') {
							 echo '<div class="alert alert-danger" role="alert">' .$authMsg .'</div>';	
						};

					?>  
					<div class="mb-3">
						<label for="nameAuth" class="form-label">Введите имя</label>
						<input type="text" value="<?=$login?>" class="form-control" name="login" id="nameAuth">
						<!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
					</div>

					<div class="mb-3">
						<label for="emailAuth" class="form-label">Email address</label>
						<input type="email" value="<?=$email?>" class="form-control" name="email" id="emailAuth" >
						<!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
					</div>

					<div class="mb-3">
						<label for="passwordAuth" class="form-label">Пароль</label>
						<input type="password" class="form-control" name="password" id="passwordAuth">
					</div>

					<div class="mb-3">
						<label for="confirmPass_Auth" class="form-label">Подтверждение пароля</label>
						<input type="password" name="confirmPass"class="form-control" id="confirmPass_Auth">
					</div>
					<div class="row justify-content-between mt-3"  >
						<button type="submit"  name="btn-reg" value="1" style='margin: 0 12px 0 12px;' class=" col-4 btn btn-secondary">Отправить</button>
						<a href="./login.html" style='margin: 0 12px 0 12px;' class="col-4  btn btn-light ">Войти</a>
					</div>
				</form>
				
			</div>
		</div>
	</div>

	<?php include('app/include/footer.php'); ?>

</body>
</html>