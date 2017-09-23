<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact </title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
<?php
if(isset($_GET['btnSend'])){
	echo "Giá trị = ";
	echo $_GET['fullname'];


	echo $_GET['email'];
	echo $_GET['title'];
	echo $_GET['message'];
}


?>


<div class="container">
	<div class="col-8 offset-2">
	<form accept-charset="utf-8" method="GET">
		<h3>Contact Form</h3>
		<div class="form-group">
		    <label for="name">Full name:</label>
		    <input type="text" class="form-control" value="<?=@$_GET['fullname']?>" id="name" name="fullname" placeholder="Enter your name" required >
		    email ko rỗng
  		</div>
		
		<div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">		    
  		</div>

  		<div class="form-group">
		    <label for="title">Title:</label>
		    <input type="text" class="form-control" name="title" placeholder="Enter subject">
  		</div>

  		<div class="form-group">
		    <label for="message">Message:</label>
		    <textarea id="message" rows="5" name="message" class="form-control"></textarea>
  		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" name="btnSend">Send</button>
		</div>
	</form>
</div>

</body>
</html>
