<?php 
	$host = 'localhost';
	$pass = 'DoubleG_123';
	$user = 'doubleno';
	$db   = 'doubleno_hashes';
	$conn = mysqli_connect($host, $user, $pass, $db);
	if (!$conn) die(mysqli_error($conn));
	
	if (!empty($_SERVER["HTTP_CLIENT_IP"])){
		$ip = $_SERVER["HTTP_CLIENT_IP"];
	}elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
		$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	}else{
		$ip = $_SERVER["REMOTE_ADDR"];
	}