<?php 
	include 'app/controllers/users.php'
?>
<header>
	<div class="container">
		<div class='row'>

			<div class='header-logo col-4'>
				<h1 style='margin: 0; padding: 0;'><a href="/"> My blog</a></h1>				
			</div>
		
			<ul class='header-navbar col-8'>
				<li class='navbar-item'><a href='/'>Главная</a></li>
				<li class='navbar-item'><a href='#'>О нас</a></li>
				<li class='navbar-item'><a href='#'>Услуги</a></li>
				<li class='navbar-item navbar-user-account'>
					<a href='#'>
						<i class='fa fa-user' style="padding-right:8px; display:inline-block;"></i>
						<?php 
							if(isset($_SESSION['user_name'])) 
									echo $_SESSION['user_name'];
							else 
									echo "Кабинет"; 
						?> 
					</a>

					<ul class='user-account'>
						<?php 
							if(isset($_SESSION['admin'])&&$_SESSION['admin'] == 1) 
									echo "<li class='user-account-item'><a href='app/admin/admin.php'>Админ панель</a></li>";
						?>
						<?php 
							if(isset($_SESSION['user_name'])) 
									echo "<li class='user-account-item'><a href='./app/include/logout.php'>Выход</a></li>";
							else echo "<li class='user-account-item'><a href='./login.php'>Вход</a></li>";
						?>
					</ul>

				</li>	
			<ul>

		</div>
	</div>
</header>