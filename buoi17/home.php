<?php
session_start();
//đăng nhập thông qua form đăng nhập
if(isset($_SESSION['password']) &&  isset($_SESSION['username'])){
	if($_SESSION['password']=='admin123' && $_SESSION['username']=="admin"){
		echo 'đăng nhập thành công qua session';
		echo '<a href="dangxuat.php"> Logout</a>';
	}
	
}
//đăng nhập ko có form, dùng cookie
elseif(isset($_COOKIE['password']) &&  isset($_COOKIE['username']) && $_COOKIE['username']=='admin' && $_COOKIE['password'] == 'admin123'){
	echo 'đăng nhập thành công qua cookie';
	echo '<a href="dangxuat.php"> Logout</a>';
}
//chưa đăng nhập và cũng ko tồn tại cookie
else{
	header('location:login.php');
}

?>