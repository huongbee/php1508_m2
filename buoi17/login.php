<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>

<?php

//tạo cookie
setcookie('monhoc','PHP-MySQL',time()+120);
echo 'đã setup cookie';



?>


<body>
	<div class="container">
		<div class="col-md-4 col-md-offset-4" style="margin:20px auto">
			<?php
			if(isset($_SESSION['username']) && isset($_SESSION['password'])){
				echo 'Bạn đã đăng nhập';
				header("refresh:5;url=home.php");
			}
			else{

			?>

			<form accept-charset="utf-8" method="POST" action="xuly_dangnhap.php">
				<h2>Login</h3>
				<div class="form-group">
				    <label>Username:</label>
				    <input type="text" class="form-control" placeholder="Enter username" name="username" >
		  		</div>

		  		<div class="form-group">
				    <label>Password:</label>
				    <input type="password" class="form-control" name="password">
				</div>
				<div class="form-group">
				    <label class="form-check-label"><input type="checkbox" class="form-check-input" name="rememberme"> Remember me</label>
				</div>
				<div class="form-group">
				    <button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
		  		</div>
		  	</form>
			<?php
			}
			?>


		</div>
	</div>
</body>
</html>


