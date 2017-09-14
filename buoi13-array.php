<?php

//$arr = ['PHP', 'iOS', 'Android'];
$arr = array('khoa'=>'PHP', 'iOS', 'Android', 12);
// print_r($arr);
// echo "<hr>";
// echo $arr['khoa'];
// echo "<hr>";
// echo $arr[1];
//echo count($arr);
// for($i=0;$i<count($arr);$i++){
// 	echo $arr[$i];
// }
foreach($arr as $key => $value){
	echo $key.': '.$value; //key:giá trị
	echo "<br>";
}

$mangsp = array(
	"1"=>array("TenSP"=>"iPhone X","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/93709/iphone-7-plus-red-128gb-400x460.png","Gia"=>30000000),
	"2"=>array("TenSP"=>"iPhone 6","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/87839/iphone-7-plus-128gb-de-400x460.png","Gia"=>40000000),
	"3"=>array("TenSP"=>"iPhone 7","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/73703/iphone-6s-128gb-hong-1-400x450.png","Gia"=>50000000),
	"4"=>array("TenSP"=>"iPhone 8","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/113126/sony-xperia-xz-premium-pink-gold-400x460.png","Gia"=>60000000),
	"5"=>array("TenSP"=>"iPhone 9","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/87839/iphone-7-plus-128gb-de-400x460.png","Gia"=>70000000),
	"6"=>array("TenSP"=>"iPhone ","Hinh"=>"https://cdn.tgdd.vn/Products/Images/42/103241/htc-u11-1-400x460.png","Gia"=>80000000)
);


?>