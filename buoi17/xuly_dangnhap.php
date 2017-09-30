<?php
session_start();
if(isset($_POST['btnLogin'])){

	//print_r($_REQUEST);

	$_SESSION['username'] = trim($_POST['username']);
	$_SESSION['password'] = trim($_POST['password']);
	
	if(isset($_POST['rememberme'])){
		$remember = $_POST['rememberme'];
		if($remember==1 || $remember=='on'){
			setcookie('username','admin',time()+300);
			setcookie('password','admin123',time()+300);
			header('location:home.php');
		}	
	}

	if($_SESSION['username'] == 'admin' && $_SESSION['password']=='admin123'){
		header('location:home.php');
	}
	else{
		header('location:login.php');
	}

}
else{
	header('location:login.php');
}


?>