<?php 
	include('../database/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='../../../assets/css/admin.css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<title>My blog</title>
</head>
<body>

	<?php include('../../app/include/header-admin.php'); ?>
	<div class="container">
		<div class="row mt-3">
			<div class="sidebar col-3 ">
				<ul class='sb-nav'>
					<li><a href="">Записи</a></li>
					<li><a href="">Пользователи</a></li>
					<li><a href="">Категории</a></li>
				</ul>
			</div>
			<div class="posts col-8 mx-4">
				<div class="btnEditPost row">
					<a href="create.php" class='mb-2 btn btn-success'>Add Post</a>
					<a href="index.php" class='mb-3 btn btn-warning'>Manage Posts</a>
				</div>
				<div class="h2 text-center">Управления записями</div>
				<div class="row title-pable">
					<div class="id col-1">ID</div>
					<div class="title col-5">Название статьи</div>
					<div class="author col-2">Автор</div>
					<div class="red col-4">Управление</div>
					
				</div>
				<div class="row post">
					<div class="id col-1">1543</div>
					<div class="title col-5">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
					<div class="author col-2">Lorem, ipsum.</div>
					<div class="red col-2"><a style='width:100%' class='btn btn-info' href="#">edit</a></div>
					<div class="del col-2"><a style='width:100%' class='btn btn-danger' href="#">delete</a></div>
				</div>
			</div>
		</div>
	</div>		

</body>
</html>