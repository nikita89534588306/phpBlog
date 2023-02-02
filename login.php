<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('app/include/head.php'); ?>
</head>
<body>

	<?php include('app/include/header.php'); ?>

	<div class="container login_form">
		<div class="row justify-content-center">
			<div class="col-8 mt-4 mb-4">
				<div style='text-align: center;'class="h2">Введите данные аккаунта</div>
				<?php
					if($authMsg !== '') {
								echo '<div class="alert alert-danger" role="alert">' .$authMsg .'</div>';	
							};
				?>
				<form class="my-2" method="post" action="login.php">
					<div class="mb-3">
						<label for="emailAuth" class="form-label">Email адрес</label>
						<input name="email" value="<?php echo $email?>"type="email" class="form-control" id="emailAuth" >
						<!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
					</div>

					<div class="mb-3">
						<label for="passwordAuth" class="form-label">Пароль</label>
						<input name="password" type="password" class="form-control" id="passwordAuth">
					</div>

					<div class="row justify-content-between mt-3"  >
						<button name='btn-log' value="1" type="submit" style='margin: 0 12px 0 12px;' class=" col-4 btn btn-secondary">Войти</button>
						<a href="./reg.php" style='margin: 0 12px 0 12px;' class=" col-4  btn btn-light ">Зарегистироваться</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include('app/include/footer.php'); ?>

</body>
</html>