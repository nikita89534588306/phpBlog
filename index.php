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

	
	<main>
		<div class="container">
			<!-- карусель с топ записями-->
			<div class="topPost" >
				<div class="row">
					<h2 class=" topPost-sliderTitle">
						Топ публикации
					</h2>
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
			
			<div class="content row">
				<div class="main-content col-md-9 col-12">
					<h2 class="header-main">Последние публикации</h2>

					<div class="post row">
						<div class="img col-12 col-md-4">
							<img src='./img/1645469031_35-sportishka-com-p-zimnii-baikal-turizm-krasivo-foto-35.jpg' 
								alr='...' 
								class='img-thumbnail'>
						</div>
						<div class="post-text col-12 col-md-8">
							<h3 class='header-post'>
								<a href='#'>
									Траливалт бблабалабла авоывомлжва
								</a>
							</h3>
							<i class='fa fa-user'>Имя автора</i>
							<i class='fa fa-calendar'>May 21, 2022</i>
							<p class='preview-text'>
								Lorem ipsum dolor sit, amet consectetur 
								adipisicing elit. Ut iure maxime blanditiis et, repellendus 
								possimus voluptas eaque eligendi itaque cum!
							</p>
						</div>
					</div>
					<div class="post row">
						<div class="img col-12 col-md-4">
							<img src='./img/1645469031_35-sportishka-com-p-zimnii-baikal-turizm-krasivo-foto-35.jpg' 
								alr='...' 
								class='img-thumbnail'>
						</div>
						<div class="post-text col-12 col-md-8">
							<h3>
								<a href='#'>
									Траливалт бблабалабла авоывомлжва
								</a>
							</h3>
							<i class='fa fa-user'>Имя автора</i>
							<i class='fa fa-calendar'>May 21, 2022</i>
							<p class='preview-text'>
								Lorem ipsum dolor sit, amet consectetur 
								adipisicing elit. Ut iure maxime blanditiis et, repellendus 
								possimus voluptas eaque eligendi itaque cum!
							</p>
						</div>
					</div>
				</div>
			
				<div class="sidebar col-md-3 col-12">
					<div class="sidebar-search sidebar-section">
						<h3 class='h3'>Поиск</h3>
						<form acrion='/' method="post">
							<input 
								type="text" 
								name='search-term' 
								class="text-input" 
								placeholder="Введите искомое слово..."
							>
						</form>
					</div>

					<div class="sidebar-topic sidebar-section">
						<h3 class='h3'>Категории</h3>
						<ul class='topic-list'>
							<li><a class='list-item'href='#'>Программирование</a></li>
							<li><a class='list-item'href='#'>Дизайн</a></li>
							<li><a class='list-item'href='#'>Визуализация</a></li>
							<li><a class='list-item'href='#'>Кейсы</a></li>
							<li><a class='list-item'href='#'>Мотивация</a></li>
						</ul>
					</div>
				</div>


			</div>
		</div>
	</main>
	<footer>
		<div class="footer container-fluid">
			<div class="footer-content container">
				
				<div class="row">
					<div class="footer-section about col-md-4 col-12">
						<h3 class="logo mb-1"> Мой блог </h3>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. 
							Fugiat corrupti fuga similique aperiam voluptates neque nulla quo.
								Pariatur, debitis totam dolor dolores quae quas beatae sint
								dolorem adipisci similique, corporis fugit,
								deleniti molestiae explicabo voluptates.
						</p>
						<div class="contact">
							<span><i class='fa fa-phone'></i> &nbsp; 123-456-789</span>
							<span><i class='fa fa-envelope'></i> &nbsp; test@mail.ru</span>
						</div>
						<div class="social">
							<a href="#"><i class='fa fa-facebook'></i></a>
							<a href="#"><i class='fa fa-instagram'></i></a>
							<a href="#"><i class='fa fa-twitter'></i></a>
							<a href="#"><i class='fa fa-youtube'></i></a>
						</div>
					</div>
				

					<div class="footer-section links col-md-4 col-12">
						<h3>Quick Links</h3>
						<br>
						<ul>
							<li><a href="#">События</a></li>
							<li><a href="#">Команда</a></li>
							<li><a href="#">Упражнения</a></li>
							<li><a href="#">Галерея</a></li>
							<li><a href="#">Что-то еще...</a></li>
						</ul>
					</div>

					<div class="footer-section contact-form col-md-4 col-12">
						<h3>Quick Links</h3>
						<br>
						<form action="index.php" method='post'>
							<input 
								type="email"
								name='email'
								class='text-input contact-input'
								placeholder='Введите свой email'
							>
							<textarea 
								name="message" 
								rows="4" 
								class='text-input contact-input'
								placeholder='Ваше сообщение...'></textarea>
							<button type='submit' class='btn btm-big contact-btn'>
								<i class="fa fa-envelope">Отправить</i>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>