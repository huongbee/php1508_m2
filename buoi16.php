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

	$fullname = trim($_GET['fullname']); //5
	$email = trim($_GET['email']);
	$title = trim($_GET['title']);
	$message = trim($_GET['message']);

	$err = [];

	if($fullname =="" || strlen($fullname)<5  || strlen($fullname)>30){ //sai
		//array_push($err, 'Vui lòng nhập lại tên');
		$err['fullname'] = 'Vui lòng nhập lại tên';
	}
	if($email=="" ){
		//array_push($err, 'Vui lòng nhập Email');
		$err['email'] = 'Vui lòng nhập Email';
	}
	elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		//array_push($err, 'Email không đúng định dạng');
		$err['email'] = 'Email không đúng định dạng';
	}
	if($title ==''){
		//array_push($err, 'Vui lòng nhập tiêu đề');
		$err['title'] = 'Vui lòng nhập tiêu đề';
	}
	if($message ==''){
		//array_push($err, 'Vui lòng nhập message');
		$err['message'] = "Vui lòng nhập message";
	}
	//print_r($err);

}
?>
<style>
	input:valid{
		color: green
	}
	input:invalid{
		border:  red dashed 3px!important
	}
</style>
<div class="container">
	<div class="col-8 offset-2">
	<form accept-charset="utf-8" method="GET" action="#">
		<h3>Contact Form</h3>
		<div class="form-group">
		    <label for="name">Full name:</label>
		    <input type="text" class="form-control" value="<?=@$_GET['fullname']?>" id="name" name="fullname" placeholder="Enter your name" title="Nhập tên" required minlength=5>
		    <p class="text-danger"><?= isset($err['fullname']) ? $err['fullname'] : ''?></p>
  		</div>
		
		<div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email"  value="<?=@$_GET['email']?>" placeholder="Enter email" required data-error="Email saiiiiiii">	
		    <p class="text-danger"><?= @$err['email']?></p>	    
  		</div>

  		<div class="form-group">
		    <label for="title">Title:</label>
		    <input type="text" class="form-control" name="title" placeholder="Enter subject"  value="<?=@$_GET['title']?>" id="title" required>
		    <p class="text-danger"><?= @$err['title']?></p>
  		</div>

  		<div class="form-group">
		    <label for="message">Message:</label>
		    <textarea required id="message" rows="5" name="message" class="form-control" ><?=@$_GET['message']?></textarea>
		    <p class="text-danger"><?= @$err['message']?></p>
  		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" name="btnSend">Send</button>

		</div>
	</form>
</div>
<script>


	function checkInput(id, message){
		input = document.getElementById(id);
		input.oninvalid = function(event){
			event.target.setCustomValidity(message);
		}
	}

	checkInput('name','Vui lòng nhập tên đúng định dạng')
	checkInput('email','Email phải sử dụng @ và . ')
	checkInput('title','Vui lòng nhập tiêu đề')
	checkInput('message','Vui lòng nhập nội dung.')


</script>

</body>
</html>