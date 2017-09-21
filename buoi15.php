<?php

function checkSNT($n){
	for($i=2; $i<=sqrt($n);$i++){
		if( $n%$i == 0){
			return 0;
		}
	}
	return 1;
}

$a = 200;
$str = "Dãy các số ngto < $a là: ";
for($i = 2; $i<$a; $i++){
	if(checkSNT($i) == 1){
		$str = $str.($i.' ');
	}
}
echo $str;


try{
	//đoạn lệnh nghi ngờ bị lỗi
	echo $a;
}
catch(Exception $a){
	//echo $e->getMessage();
	echo 'lỗi';
}


echo "<br>";
// $b = -2;
// if($b==true){
// 	echo $b;
// }
// else echo 'đúng';

echo round(5.855,2);
echo "<br>";
echo abs(-5);
echo "<br>";




echo rand(99,999);//1||2||3||...|10
echo "<br>";
echo "<hr>";
//echo rand(1000000,999999,88,6);
//min<max rand(min,max)
//min>=max min||max
//parameter>2 
//$a[1];
function _rand($a=array()){

	if(!empty($a)){
		return $a[rand(0,count($a)-1)];
	}
	return false;
	
}

function UserRand($a,$b,$c="",$d=''){
	if($d!=''){
		$arr = [$a,$b,$c,$d];
		return _rand($arr);
	}
	if($c!=''){
		$arr = [$a,$b,$c];
		return _rand($arr);
	}
	else{
		//rand($a,$b)
		if($a<$b){
			echo rand($a,$b);
		}
		else{
			$arr = [$a,$b];
			return _rand($arr);
		}
	}
}

echo UserRand(71,9,'',2);
echo "<hr>";
// function inSo($a,$b='',$c=''){
// 	if($b!=''){
// 		echo 'b là '.$b;
// 	}
// 	if($c!=''){
// 		echo 'c là '.$c;
// 	}
// }


// inSo(1,'',4);



function inSo(){
	function inSo_sub(){
		echo 23456789;
	}
}

echo 'số là: ';
inSo();
inSo_sub();
echo "<hr>";


$str = ' cho b ';
// $str = trim($str);

// echo strlen($str);

// $str = str_replace(' ', '', $str);

// echo ($str);
 $a=	Checkdate(2,8,2007);
var_dump($a);
date_default_timezone_set('Asia/Ho_chi_minh');
echo Date('d/m/Y H:i:s'); 

echo "<hr>";
echo	Time() ;

print_r(Getdate());

echo "<hr>";
echo Strtotime(time());
//2017/5/6
echo date('d/m/Y H:i:s',Strtotime('2017/5/6 20:50:20'));


echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";