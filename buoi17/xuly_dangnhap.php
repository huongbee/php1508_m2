<?php
session_start();
if(isset($_POST['btnLogin'])){

	//print_r($_REQUEST);

	$_SESSION['username'] = trim($_POST['username']);
	$_SESSION['password'] = trim($_POST['password']);
	
	if(isset($_POST['rememberme'])){
		$remember = $_POST['rememberme'];
		if($remember==1 || $remember=='on'){
			echo $remember;
		}	
	}

	if($_SESSION['username'] == 'admin' && $_SESSION['password']=='admin123'){
		echo ' Đăng nhập thành công';
		echo $_SESSION['username'];
		echo $_SESSION['password'];
	}
	else{
		header('location:login.php');
	}

}
else{
	header('location:login.php');
}


?>