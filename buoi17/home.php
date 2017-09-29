<?php
session_start();
if(isset($_SESSION['password']) &&  isset($_SESSION['username'])){
	echo $_SESSION['password'];
	echo $_SESSION['username'];
?>

	<a href="dangxuat.php">Logout</a>

<?php
}


echo isset($_COOKIE['monhoc']) ? $_COOKIE['monhoc'] : "chưa có cookie";

?>