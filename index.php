

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('app/include/head.php'); ?>
</head>
<body>
	<?php include('app/include/header.php'); ?>
	
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
							<img src="./assets/img/1670662446_44-almode-ru-p-samii-krasivii-makiyazh-na-novii-god-45.jpg" 
								class="d-block img-fluid"  alt="..."
							>
							<div class="carousel-caption d-block">
								<h5>First slide label</h5>
								<p>Some representative placeholder content for the first slide.</p>
							</div>
						</div>
						<div class="carousel-item" >
							<img src="./assets/img/1645469031_35-sportishka-com-p-zimnii-baikal-turizm-krasivo-foto-35.jpg" 
								class="d-block " alt="..." >
							<div class="carousel-caption  d-block">
								<h5>Second slide label</h5>
								<p>Some representative placeholder content for the second slide.</p>
							</div>
							</div>
						<div class="carousel-item">
							<img src="./assets/img/water-cafe-architecture-sky-boat-town-restaurant-river-canal-cityscape-vacation-travel-vehicle-tourism-waterway-body-of-water-holland-amsterdam-netherlands-dutch-channel-landform-geographical-feature-138.jpg" 
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
							<img src="./assets/img/1645469031_35-sportishka-com-p-zimnii-baikal-turizm-krasivo-foto-35.jpg" 
								alr='...' 
								class='img-thumbnail'>
						</div>
						<div class="post-text col-12 col-md-8">
							<h3 class='header-post'>
								<a href='/single.php'>
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
							<img src="./assets/img/1645469031_35-sportishka-com-p-zimnii-baikal-turizm-krasivo-foto-35.jpg" 
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

	<?php include('app/include/footer.php'); ?>
	
	
</body>
</html>