<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload file</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="hinh">
		<input type="submit" name="btnSend" value="Gửi">
	</form>
	
<?php

/*
I. upload sigle file
	1. kiểm tra file size < 300kb
	2. kiểm tra file type: cho phép doc, docx, xls, xlsx
	3. rename file trước khi upload

II. upload multifile
	nếu có lỗi thì rollback về ban đầu

*/
if(isset($_POST['btnSend'])){
	$err = [];

	$image = $_FILES['hinh'];

	$size = $image['size'];

	if($size <= 300*1024){
		//cho phép
		$name = $image['name'];

		$arrExt = ['doc', 'docx', 'xls', 'xlsx', 'jpg'];

		$ext = pathinfo($name,PATHINFO_EXTENSION);

		if(in_array($ext, $arrExt)){
			//được phép
			$basicName = pathinfo($name,PATHINFO_FILENAME);;

			$newName = $basicName.time().'.'.$ext;

			move_uploaded_file($image['tmp_name'], "images/$newName");
			echo 'Upload thành công';
		}
		else{
			//không được phép
			$err['ext'] = 'File không được phép chọn';

		}

	}
	else{
		$err['size'] = 'File quá lớn';
	}

	print_r($err);


}



?>
</body>
</html>