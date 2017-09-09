<?php

/*
echo 123456;
echo "<br>";

echo "Hello World!";
*/

// đây là chú thích

$bool = false;
$a = 1.3;

$str = "Chào bạn ";
$name = "Khoa Phạm";
//echo $str.$name;

//echo $str;
$arr = ['PHP', 12, 'Android', ['a','b',[1,2]]];
$arr = array('PHP', 12, 'Android', ['a','b',[1,2,3,4]]);
$json = json_encode($arr);


$array = json_decode($json);
//print_r($array);


class lopA{

}

$a = new lopA;


//var_dump($a);


define('pi',3.14);
// define('hang_so_a','aaaaa');
// echo pi;
// echo hang_so_a;
// define('pi2',3.14);
// echo pi2;



// $r = 10;
// $c = 2*pi*$r; 
// $s = pi*$r*$r;
// //echo 'chu vi hình tròn là: $c <br>Diện tích hình tròn là: $s';



// $a = 10;
// $b = '10';

// // $a-=$b; //$a = $a-$b
// // echo $a;

// if(!($a==$b)){ 
// 	echo 'đúng';
// }
// else{
// 	echo 'sai';
// }



$a = 3;
$b = 4;
$c = 5;


if($a+$b>$c && $a+$c>$b && $b+$c>$a){
	echo "Đây là tam giác. ";
	if($a==$b && $b==$c ){
		echo 'tam giác đều';
	}
	elseif($a==$b || $a==$c  || $b==$c){
		echo 'tam giá cân';
	}
	elseif(pow($a,2)==pow($b,2)+pow($c,2) || pow($b,2)==pow($a,2)+pow($c,2) || pow($c,2)==pow($b,2)+pow($a,2) ){
		echo 'tam giác vuông';
	}
	else{
		echo 'tam giác thường';
	}
}
else{
	echo "Ko phải tam giác";
}


?>