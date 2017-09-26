<?php

if(isset($_POST['btnLogin'])){

	print_r($_REQUEST);

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	
	if(isset($_POST['rememberme'])){
		$remember = $_POST['rememberme'];
		if($remember==1 || $remember=='on'){
			echo $remember;
		}	
	}

	if($username == 'admin' && $password=='admin123'){
		echo ' Đăng nhập thành công';
	}
	else{
		header('location:login.php');
	}

}
else{
	header('location:login.php');
}


?>