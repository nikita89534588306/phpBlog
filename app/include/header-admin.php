<header>
	<div class="container">
		<div class='row'>

			<div class='header-logo col-4'>
				<h1 style='margin: 0; padding: 0;'><a href="/"> My blog</a></h1>				
			</div>
		
			<ul class='header-navbar col-8 my-4'>
				<?php if (isset($_SESSION["id"])):?>
					<li class='me-2'>
						<a href='#'>
							<i class="fa fa-users"></i>
							<?php echo $_SESSION['user_name']; ?>
						</a>
					</li>

					<li>
						<a href="/app/include/logout.php">Выход</a>
					</li>
				<?php endif; ?>
			<ul>

		</div>
	</div>
</header>