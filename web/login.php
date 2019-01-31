<?php
	require '../config/db.php';

	$data = $_POST;
	if(isset($data['do_login']))
	{
		$errors=array();
		$user=R::findOne('users','login=?',array($data['login']));
		if($user)
		{
			if(password_verify($data['password'],$user->password))
			{
				$_SESSION['logged_user']=$user;
				header('Location:view.php');
			}else
			{
				$errors[]='Неверный пароль';
			}
		}else
		{
			$errors[]='Пользователь не найден';
		}
		if(!empty($errors))
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
	<link rel="stylesheet" href="../web/style/style_userview.css" type="text/css"/>
	<title>Вход</title>
</head>
<body>
	<div class="login_block" id="reg_block">
		<div>
			<form id="login" action="login.php" method="POST">
				<input type="text" name="login" placeholder="Login" value="<?php echo @$data['login'];?>"></br>
				<input type="password" name="password" placeholder="Password" value="<?php echo @$data['password'];?>"></br>
				<button type="submit" name="do_login">Войти</button> 
			</form>
			<a href="../index.php"><button type="submit" name="do_signup">Закрыть</button></a>
		</div>
	</div>
	
</body>
</html>