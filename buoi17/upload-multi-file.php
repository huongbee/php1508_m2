<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload Multiple File</title>
	<link rel="stylesheet" href="">
</head>
<?php
if(isset($_POST['btnGui'])){

	$image = $_FILES['hinh'];

	foreach($image['size'] as $key=>$size){
		if($size > 700000){
			echo "File ".$image['name'][$key]." quá lớn";
			die;
		}
	}

	$arrExt = ['doc', 'docx', 'xls', 'xlsx', 'jpg'];

	foreach($image['name'] as $hinh){
		$ext = pathinfo($hinh, PATHINFO_EXTENSION);
		if(!in_array($ext, $arrExt)){
			echo "File $hinh không thỏa mãn";
			die;
		}
	}

	foreach ($image['name'] as $key => $name) {
		$newName = time().'-'.$name;

		move_uploaded_file($image['tmp_name'][$key], "images/$newName");

	}

	echo 'thành công';


}



?>
<?php

//unset("images/1506605190-a.jpg");
?>
<body>

	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="hinh[]" multiple>
		<button type="submit" name="btnGui">Gửi</button>
	</form>
	
</body>
</html>