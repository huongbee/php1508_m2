<?php

try{
	
	$con = new PDO('mysql:host=localhost;dbname=php1508', 'root', ''); 
	$con->exec("set names utf8");

	//$result = $con->query('SELECT * FROM users'); //query()=>phải dùng vòng lặp để in data

	/*$result = $con->exec('
		INSERT INTO users(
			username,
			password,
			fullname,
			birthdate,
			gender,
			address,
			email,
			phone,
			role)
		VALUES(
			"huonghuong",
			"123456",
			"Hương Hương",
			"2000-12-12",
			"Nữ",
			"Quận 1",
			"huonghuong@gmail.com",
			"1234567890",
			"admin"
		)
	');*/
	
	// $result = $con->query("SELECT * FROM usersssss");

	// $stmt = $con->prepare($result->queryString);

	/*$stmt = $con->prepare('SELECT * FROM users');

	if($stmt->execute()){
		while($user = $stmt->fetch()){
			print_r($user);
		}
	}
	else{
		$err = $stmt->errorInfo();
		print_r($err);
	}*/


	

	// foreach($stmt->fetch() as $a){
	//  print_r($stmt->fetch());
	// }

	$username = "huonghuong";
	$id = 3;
	/*$stmt = $con->prepare("SELECT * FROM users WHERE username = ? OR id  = ? ");

	$stmt->bindParam(1,$username); //phải tạo biến $username bên ngoài bindParam()
	$stmt->bindParam(2,$id);*/

	$stmt = $con->prepare("SELECT * FROM users WHERE username = :ten_nguoi_dung ");

	$stmt->bindParam(":ten_nguoi_dung",$username);

	if($stmt->execute()){
		while($user = $stmt->fetch()){
			print_r($user);
		}
	}
	else{
		$err = $stmt->errorInfo();
		print_r($err);
	}



	$con = null;
}
catch(PDOException $e){
	echo $e->getMessage();
}


?>