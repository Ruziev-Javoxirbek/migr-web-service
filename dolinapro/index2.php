<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style-reg-avt.css">
	<title>Вход в личный кабинет</title>
</head>
<body>
<?php
	$title="Главная страница"; 
	require __DIR__ . '/header.php'; 
	require "db.php"; 
?>
	<header class="header">
		<div class="container-reg">
			<div class="header-title">Добро пожаловать</div>
		</div>
	</header>
					
	<?php if(isset($_SESSION['logged_user'])) : ?>
	Привет, <?php echo $_SESSION['logged_user']->name; ?></br>
		
					
	<a href="logout.php">Выйти</a> 
	<?php else : ?>

					
	<a href="login.php">Авторизоваться</a><br>
	<a href="signup.php">Регистрация</a>
	<?php endif; ?>

	<?php require __DIR__ . '/footer.php'; ?>
</body>
</html>

