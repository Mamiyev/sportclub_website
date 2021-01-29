<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Регистрация</title>
	<link rel="stylesheet" href="style.css">


</head>
<body>
	<div class="reg-block" >
			<div class="reg">
				<form>
				
					<h4 class="sign-head">Регистрация</h4>
					<div class="input-data">
						<input type="text" name="username" placeholder="Введите логин">
					</div>
					<div class="input-data">
						<input type="text" name="email" placeholder="Введите email">
					</div>
					<div class="input-data">
						<input type="password" name="password" placeholder="Введите пароль">
					</div>
					<div class="input-btn">
						<input class="register-btn" type="submit" name="submit" value="Зарегистрироваться">
					</div>

                    <div class="msg none">
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>

					
				</form>
			</div>
	</div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>