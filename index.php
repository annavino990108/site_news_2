<?php
	require 'config/db.php';
	if (isset($_SESSION['logged_user']))
	{
		header('Location:web/view.php');
	}else
	{
		header('Location:web/index.php');
	}