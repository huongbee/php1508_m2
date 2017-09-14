<?php

$arr = ['PHP', 'iOS', 'Android'];

// echo $arr[1];
//chỉ in 2 phần tử đầu tiên của mảng $arr

// for($i=0; $i<2; $i++){
// 	echo $arr[$i];
// 	echo '<br>';
// }
// echo '<hr>';

// foreach($arr as $value){
// 	echo $value;
// 	echo '<br>';
// }


//tính tổng các số từ 1->10
$tong = 0;
for($i=1;$i<=10;$i++){
	$tong+=$i;
}
echo $tong;
echo "<hr>";

// $tongchan = 0;
// // for($i=1;$i<=10;$i++){
	
// // 	if($i%2==0){
// // 		$tongchan+=$i; //tong=tong+i
// // 	}
// // }

// for($i=2; $i<=10;$i+=2){
// 	$tongchan+=$i;
// }
// echo $tongchan;
$tong = 0;
$i = 1;
// while($i<=10){
// 	$tong+=$i;
// 	$i++;
// }


// echo $tong;
do{
	$tong+=$i;
	$i++;
}
while($i<=10);

//echo $tong;

$nam = 2017;
switch($nam%10){
	case 0:
		$can = "Canh"; break;
	case 1:
		$can = "Tân"; break;
	case 2:
		$can = "Nhâm"; break;
	case 3:
		$can = "Quí"; break;
	case 4:
		$can = "Giáp"; break;
	case 5:
		$can = "Ất"; break;
	case 6:
		$can = "Bính"; break;
	case 7:
		$can = "Đinh"; break;
	case 8:
		$can = "Mậu"; break;
	case 9:
		$can = "Kỷ"; break;
}
switch($nam%12){
	case 0:
		$chi = "Thân"; break;
	case 1:
		$chi = "Dậu"; break;
	case 2:
		$chi = "Tuất"; break;
	case 3:
		$chi = "Hợi"; break;
	case 4:
		$chi = "Tí"; break;
	case 5:
		$chi = "Sửu"; break;
	case 6:
		$chi = "Dần"; break;
	case 7:
		$chi = "Mão"; break;
	case 8:
		$chi = "Thìn"; break;
	case 9:
		$chi = "Tị"; break;
	case 10:
		$chi = "Ngọ"; break;
	case 11:
		$chi = "Mùi"; break;
}

echo "Năm $nam là năm: $can $chi";










?>