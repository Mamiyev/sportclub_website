<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- Профиль -->
<div class="header">
    <div class="container">
        <div class="header-inner">

            <div class="header-logo">
                <a class="logo" href="index.php"><img src="img/electron.png" width="65" height="65" alt="Electron"></a>
                <a class="logo-title" href="index.php">Студенческий спортивный клуб “Электрон” </a>

            </div>

            <nav class="navigator">
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="pages/articles.html">Статьи</a></li>
                    <li><a href="pages/games.html">Турниры</a></li>
                    <li><a href="pages/albom.html">Фотоальбом</a></li>
                </ul>
                <ul>
                    <li><a href="vendor/logout.php" class="logout">Выход</a></li>
                </ul>
            </nav>

        </div>

    </div>

</div>

<div class="container">
    <form>
        <h1>Добро пожаловать <?= $_SESSION['user']['username'] ?>! Вы успешно авторизовались</h1>
    </form>
</div>



</body>
</html>