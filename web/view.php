<?php
	require '../config/db.php';
	require('../parsing/checked_news.php');
	require('../parsing/parsing.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<link rel="stylesheet" href="style/style.css" type="text/css"/>
	<link rel="stylesheet" href="style/media.css" type="text/css"/>
	<link rel="stylesheet" href="style/news_card.css" type="text/css"/>
	<link rel="stylesheet" href="style/menu.css" type="text/css"/>
	<link rel="stylesheet" href="style/style_userview.css" type="text/css"/>
	<title>НОВОСТИ</title>
</head>
		<?php if (isset($_SESSION['logged_user'])) : ?>
	<body class="view">

			<nav class="top-menu">
				  <a class="navbar-logo" href="../index.php"><img src="images/_logo.png" id="img_logo"></a>
				  <ul class="menu-main">
				    <li style="margin-right: 50px;"><a href="logout.php" id="login">Выйти</a></li>
				  </ul>
			</nav>
    <div class="conteinerview">
    	<div class="list_news">
   		<?php

		    if($_SESSION['logged_user']->site1 == '1'){Habr();}

			if($_SESSION['logged_user']->site2 == '1'){Horror();}

			if($_SESSION['logged_user']->site3 == '1'){Sports();}

			if($_SESSION['logged_user']->site4 == '1'){Kt();}

			if($_SESSION['logged_user']->site5 == '1'){Newsru();}

			if($_SESSION['logged_user']->site6 == '1'){Yandex();}

		?>
<script src="/web/js/stir.js"></script>
</div>
</div>
</body>
		<?php else : ?>
	<body class="view">

			<nav class="top-menu">
				  <a class="navbar-logo" href="../index.php"><img src="images/_logo.png" id="img_logo"></a>
				  <ul class="menu-main">
				    <li><a href="singup.php">Регистрация</a></li>
				    <li style="margin-right: 50px;"><a href="login.php" id="login">Войти</a></li>
				  </ul>
			</nav>
    <div class="conteinerview">
    	<div class="list_news">
   		<?php

		    if(IsChecked('news','1')){Habr();}

			if(IsChecked('news','2')){Horror();}

			if(IsChecked('news','3')){Sports();}

			if(IsChecked('news','4')){Kt();}

			if(IsChecked('news','5')){Newsru();}

			if(IsChecked('news','6')){Yandex();}

		?>
<script src="/web/js/stir.js"></script>
</div>
</div>
</body>
<?php endif; ?>