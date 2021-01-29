<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    
    <title>Электрон</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>	
	<header class="header">
		<div class="container">
			<div class="header-inner">

				<div class="header-logo">
					<a class="logo" href="index.php"><img src="img/electron.png" width="65" height="65" alt="Electron"></a>
					<a class="logo-title" href="index.php">Студенческий спортивный клуб “Электрон”</a>
					
				</div>
					
				<nav class="navigator">
					<ul>
						<li><a href="index.php">Главная</a></li>
						<li><a href="pages/articles.html">Статьи</a></li>
						<li><a href="pages/games.html">Турниры</a></li>
						<li><a href="pages/albom.html">Фотоальбом</a></li>
					</ul>
					<ul>
						<li><a href="#" class="signIn">Войти</a></li>
					</ul>
				</nav>

			</div>

		</div>	
		<div class="sign-block" >
			<div class="sign" >
				<a class="exit" href="#"><i><strong>X</strong></i></a>
				<h4 class="sign-head">Вход</h4>

				<form  id="sign-bl">
					<div class="input-data">
						<input type="text" name="username" placeholder="Введите логин">
					</div>
					<div class="input-data">
						<input type="password" name="password" placeholder="Введите пароль">
					</div>
					<div class="input-btn">
						<input class="login-btn" type="submit" name="submit" value="ВОЙТИ">
					</div>
					
					<div class="notReg">
						<a href="registration.php">Зарегистрироваться</a>
					</div>
                    <div class="msg none">
                        <p>Error</p>
                    </div>

				</form>	
			</div>
		</div>
	</header>


	<section class="first-block">
		<div class="container">
			<div class="first-block-wrapper">
				<div class="block-inner">
					<div class="line">
						<a href="#">Все</a>
						<a href="#">Баскетбол</a>
						<a href="#">Волейбол</a>
						<a href="#">Футбол</a>
						<a href="#">Пауэрлифтинг</a>
					</div>

					<div class="cards">

						<div class="card-item">
						<img class="images" src="https://via.placeholder.com/260x340" alt="">
							<div class="card-list">
								<h3>Избран новый руководитель Студенческого Спортивного клуба «Электрон» МИЭТ!</h3>
									<p>🚩 12 октября состоялась отчётно-выборная конференция, по итогам которой должность руководителя занял Хворостов Николай!</p><br>
								<p>💪 Пожелаем Коле удачи, сил, мотивации и верных союзников в развитии студенческого спорта в МИЭТе!</p>
								
								<div class="time">
									<p>Дата публикации:  <strong>07.12.2020</strong></p>
								</div>
							</div>
						</div>

						<div class="card-item">
							<img class="images" src="https://via.placeholder.com/260x340" alt="">
							<div class="card-list">
								<h3>GAME DAY В ЭТОТ ЧЕТВЕРГ</h3>
								<p>🏀Миэтовцы продолжают борьбу в высшем дивизионе Московского студенческого баскетбола. В ближайший четверг, 22 октября МИЭТ примет на своей площадке сборную РАНХиГС.</p><br>
								<p>
								❗Парням нужна твоя поддержка в этом важном матче, но, из-за тяжёлой эпидемиологической ситуации, всем желающим посетить матч нужно заранее записаться в ЛС группы Сборной БК МИЭТ , ведь количество мест ограничено❗</p>
								<div class="time">
									<p>Дата публикации:  <strong>07.12.2020</strong></p>
								</div>
							</div>
						</div>

						<div class="card-item">
							<img class="images" src="https://via.placeholder.com/260x340" alt="">
							<div class="card-list">
								<h3>Благодарим Sergio Pizza за крутые призы</h3>
								<p>💥Подведя итоги розыгрыша, наши болельщики остались довольны выигранными пиццами, предоставлеными пиццерией Sergio Pizza !</p>
								<div class="time">
									<p>Дата публикации:  <strong>07.12.2020</strong></p>
								</div>
							</div>
						</div>

						<div class="card-item">
							<img class="images" src="https://via.placeholder.com/260x340" alt="">
							<div class="card-list">
								<h3>Друзья! Вот и настал тот долгожданный момент, когда решится кто же следующий взойдёт на трон председателя ССК "Электрон"!</h3>
								<p>🏆 Выражаем огромную благодарность за проделанную работу Денису Желнину и желаем успехов на предстоящем пути💪</p
								><br>
								<p>⚡ Сегодня вечером состоится ОВК с участием независимого наблюдателя в лице руководителя молодёжного департамента тренингов СтС МИЭТ Марии Мироновой!</p>
								<div class="time">
									<p>Дата публикации:  <strong>07.12.2020</strong></p>
								</div>
							</div>
						</div>
						
					</div>
				</div>

				<div class="info-block">
					<div class="info-geo">
						<h4>Мы находимся<hr></h4>
						<div class="info-inner">
							<ul class="about">
								<li><a href="#">г. Зеленоград, площадь Шокина, дом 1., Москва</a></li>
								<li><a href="#">+7 (999) 999-99-99 </a></li>
								<li><a href="#">vk.com/sport.miet</a></li>
								<li><a href="#">https://miet.ru/</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	
	<footer class="footer">
		<div class="container">
			<div class="footer-inner">
				<div class="first">
					2020 MIET
				</div>
				<div class="second"><p>Подписывайтесь на наши социальные сети</p></div>
				<div class="third">
					<a href="vk.com/sport.miet">VK</a>
					<a href="#">YouTube</a>
				</div>
			</div>
		</div>
	</footer>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/sign.js"></script>


</body>

</html>