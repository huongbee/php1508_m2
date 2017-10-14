<?php

//php1508
include('DBConnect.php');


$c = new DBConnect('php1508','root','');

/*$query = "SELECT * FROM users";
$c->setQuery($query);
$result = $c->loadAllRows();*/

/*$query = "SELECT * FROM users WHERE username = ? OR id  = ? ";
$option = ['huonghuong',2];

$c->setQuery($query);
//$result = $c->loadAllRows($option);
$result = $c->loadRow($option);
*/

/*$query = 'INSERT INTO users(
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
			"huonghuong3",
			"123456",
			"Hương Hương 3",
			"2000-12-15",
			"Nữ",
			"Quận 1",
			"huonghuong3@gmail.com",
			"1234567890",
			"admin"
		)';*/
//$query = "UPDATE users SET username = 'Khoa Phạm' WHERE id=4";
$query = "DELETE FROM users WHERE id=4";
$c->setQuery($query);
$result = $c->executeQuery();

echo "<pre>";
print_r($result);
echo "</pre>";

?>