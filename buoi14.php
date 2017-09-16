<?php

$str = 'Chào tất cả các bạn';
echo $str;

$arr = explode(' ', $str);
echo "<pre>";
print_r($arr);
echo "</pre>";

// $str2 = implode(" --- ", $arr);

// echo $str2;
$array = ['PHP', 'iOS', 'NodeJS'];

array_push($array, 'Android');

echo "<pre>";
print_r($array);
echo "</pre>";

array_pop($array);

echo "<pre>";
print_r($array);
echo "</pre>";

// array_splice($array, 0, 0, 'ReactJS'); 
// //mảng cần thêm data, vị trí thêm, số phần từ remove, data thêm

// echo "<pre>";
// print_r($array);
// echo "</pre>";


// array_splice($array, 1, 0, 'ReactJS'); 
// //mảng cần thêm data, vị trí thêm, số phần từ remove, data thêm

// echo "<pre>";
// print_r($array);
// echo "</pre>";


// array_splice($array, 0, 1, 'ReactJS'); 
// // //mảng cần thêm data, vị trí thêm, số phần từ remove, data thêm

// echo "<pre>";
// print_r($array);
// echo "</pre>";



array_splice($array, 8, 0, ['ReactJS','SEO','FrontEnd']); 
// //mảng cần thêm data, vị trí thêm, số phần từ remove, data thêm

echo "<pre>";
print_r($array);
echo "</pre>";



$mang = [
			'username'=>'huonghuong',
			'password'=>'123456',
			'fullname'=>'Hương'
		];


if(array_key_exists('username', $mang)){
	echo $mang['username'];
}
else{
	echo 'không tồn tại khóa username';
}

echo "<hr>";

if(in_array('huonghuong2', $mang)){
	echo 'huonghuong';
}
else{
	echo 'Không tồn tại phân tử huonghuong trong mang';
}

?>