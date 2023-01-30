<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='css/style.css'	>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	
	<title>My blog</title>
</head>
<body>
	
	<header>
		<div class="container">
			<div class='row'>

				<div class='header-logo col-4'>
					<h1 style='margin: 0; padding: 0;'><a href="/"> My blog</a></h1>				
				</div>
			
				<ul class='header-navbar col-8'>
					<li class='navbar-item'><a href='#'>Главная</a></li>
					<li class='navbar-item'><a href='#'>О нас</a></li>
					<li class='navbar-item'><a href='#'>Услуги</a></li>
					<li class='navbar-item navbar-user-account'>
						<a href='#'><i class='fa fa-user' style="padding-right:8px; display:inline-block;"></i>Кабинет</a>
						<ul class='user-account'>
							<li class='user-account-item'><a href='#'>Админ панель</a></li>
							<li class='user-account-item'><a href='#'>Выход</a></li>
						</ul>
					</li>	
				<ul>

			</div>
		</div>
	</header>
	<div class="topPost container">
		<div class="row">
			<div class=" topPost-sliderTitle h2">
				Топ публикации
			</div>
		</div>
		<div id="carouselExampleCaptions" class="topPost-carousel carousel slide">
			<div class="carousel-inner">
				<div class="carousel-item active ">
					<img src="./img/1670662446_44-almode-ru-p-samii-krasivii-makiyazh-na-novii-god-45.jpg" 
						class="d-block img-fluid"  alt="..."
					>
					<div class="carousel-caption d-block">
						<h5>First slide label</h5>
						<p>Some representative placeholder content for the first slide.</p>
					</div>
				</div>
				<div class="carousel-item" >
					<img src="./img/1645469031_35-sportishka-com-p-zimnii-baikal-turizm-krasivo-foto-35.jpg" 
						class="d-block " alt="..." >
					<div class="carousel-caption  d-block">
						<h5>Second slide label</h5>
						<p>Some representative placeholder content for the second slide.</p>
					</div>
					</div>
				<div class="carousel-item">
					<img src="./img/water-cafe-architecture-sky-boat-town-restaurant-river-canal-cityscape-vacation-travel-vehicle-tourism-waterway-body-of-water-holland-amsterdam-netherlands-dutch-channel-landform-geographical-feature-138.jpg" 
					 class="d-block " alt="..." >
					<div class="carousel-caption  d-block">
						<h5>Third slide label</h5>
						<p>Some representative placeholder content for the third slide.</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>