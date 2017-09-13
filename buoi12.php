<?php

// $a = [];
// //echo $a;

// if(!empty($a)){
// 	print_r($a);
// }
// else{
// 	echo 'mảng rỗng';
// }


//$a = (string)1.3;

// if(is_numeric($a)){
// 	print_r($a);
// }
// else{
// 	echo 'ko phải số';
// }

//echo is_numeric($a) ? $a : "không phải số";



echo "<br>";
//tìm max
$b = 219;
$c = 145;
$d = 60;
//echo 'max = ';
// if($b>$c){
// 	echo $b;
// }
// else{
// 	echo $c;
// } 
//$t = $b>$c ? $b : $c;
//$d  vs $t
//echo $d>$t ? $d : $t;

//echo ($b>$c ? $b : $c) > $d  ?  ($b>$c ? $b : $c) : $d;

//echo ($b>$c && $b>$d) ? $b : ($c>$d ? $c : $d);
  



echo "<br>";


$thang = 2;

// switch($thang){
// 	case 1: 
// 		$thang = "Tháng Một";
// 		break;
// 	case 2:
// 		$thang = "Tháng Hai";
// 		break;
// 	case 3:
// 		$thang = "Tháng Ba";
// 		break;

// 	default: 
// 		$thang = "sai định dạng";
// 		break;
// }

if($thang == 1){
	$thang = "Tháng Một";
}
elseif($thang == 2){
	$thang = "Tháng Hai";
}
elseif($thang == 3){
	$thang = "Tháng Ba";
}
else{
	$thang = "sai định dạng";
}
//echo $thang;

/*



*
**
***
****
*****
******

     *
    **
   ***
  ****
 *****
******


******
 *****
  ****
   ***
    **
     *



*/

// for($i=0; $i<=10; $i++){
// 	echo $i. ' ';

// }
$str = '';
for($i=0; $i<6; $i++){
	$str = $str."*";
	echo $str;
	echo "<br>";
}



?>