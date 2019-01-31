<?php
	require '../config/db.php';

	$data = $_POST;
	if(isset($data['do_signup']))
	{

		$errors=array();
		if(trim($data['username'])=='')
		{
			$errors[]='Введите имя';
		}
		if(trim($data['login'])=='')
		{
			$errors[]='Введите логин';
		}
		if(trim($data['password'])=='')
		{
			$errors[]='Введите пароль';
		}

		if(R::count('users',"login=?",array($data['login']))>0)
		{
			$errors[]='Пользователь с таким логином уже существует';
		}
		if(empty($errors))
		{
			$user=R::dispense('users');
			$user->username=$data['username'];
			$user->login=$data['login'];
			$user->password=password_hash($data['password'],PASSWORD_DEFAULT);
			$user->site1=$data['news1'];
			$user->site2=$data['news2'];
			$user->site3=$data['news3'];
			$user->site4=$data['news4'];
			$user->site5=$data['news5'];
			$user->site6=$data['news6'];
			R::store($user);

			echo '<div style="color:green;">Регистрация прошла успешно</div>';
		}else
		{
			echo '<div style="color:red;">'.array_shift($errors).'</div>';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../web/style/singup.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<title>Регистрация</title>
</head>
<body>
	<div class="login_block" id="reg_block">
			<form id="login" action="singup.php" method="POST">
			<div class="input_block">
				<input id="input_text" type="text" name="username" placeholder="Name" value="<?php echo @$data['username'];?>"></br>
				<input id="input_text" type="text" name="login" placeholder="Login" value="<?php echo @$data['login'];?>"></br>
				<input id="input_text" type="password" name="password" placeholder="Password" value="<?php echo @$data['password'];?>"></br>
			</div>
				<div class="news"> 
	    		<div class="checkbox" >
	    			<input id="checkbox1" type="checkbox" name="news1" value="1">
						<label for="checkbox1">
	    			<img src="images/habra.png" class="img_news">
	    			</label>
	    		</div>	
	    		<div class="checkbox" >
	    			<input id="checkbox2" type="checkbox" name="news2" value="1">
						<label for="checkbox2">
	    			<img src="images/horror.png" class="img_news">
	    			</label>
	    		</div>
	    		<div class="checkbox" >
	    			<input id="checkbox3" type="checkbox" name="news3" value="1">
						<label for="checkbox3">
	    			<img src="images/sport.png" class="img_news">
	    			</label>
	    		</div>		
	    		<div class="checkbox" >
	    			<input  id="checkbox4" type="checkbox" name="news4" value="1">
						<label for="checkbox4">
	    			<img src="images/kt.png" class="img_news">
	    			</label>
	    		</div>	
	    		<div class="checkbox" >
	    			<input id="checkbox5" type="checkbox" name="news5" value="1">
						<label for="checkbox5">
	    			<img src="images/newsru.png" class="img_news">
	    			</label>
	    		</div>	
	    		<div class="checkbox" >
	    			<input id="checkbox6" type="checkbox" name="news6" value="1">
						<label for="checkbox6">
	    			<img src="images/yandex.png" class="img_news">
	    			</label>
	    		</div>	
    		</div>
    		<div class="input_submit">	
				<button type="submit" name="do_signup">Зарегистрироваться</button> 
			</div>
					<div id="footer" style="display: block;">
					<div>
						<a href="../index.php">Вернуться</a>
					</div>
			</div>
			</form>
		</div>
</body>
</html>