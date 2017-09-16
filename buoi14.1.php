<?php

function inCauChao($name="Tí"){
	echo "<br>";
	return "Chào bạn $name";

}

echo inCauChao('Khoa Phạm');


echo inCauChao('Hương');
echo inCauChao('Tèo');
echo inCauChao();
echo "<br>";

function inSo($n){
	$tam = '';

	for($i=1; $i<=$n; $i++){
		$tam = $tam.$i. ' '; //$tam = $tam.$i
	}


	return $tam;

}
echo inSo(10);
echo "<br>";
echo inSo(20);
echo "<br>";


function wap($start, $end){
	//C1
	// $t = $start;
	// $start = $end;
	// $end = $t;

	//C2
	$start = $start + $end; // s=4+8=12
	$end = $start - $end;	// e=12-8=4
	$start = $start - $end; // s=12-4=8

	return $start.' '.$end;
}

echo wap(4,3);
echo "<br>";


$a = 5;

function increOne($a){
	return $a-=-1; //a=a--1
}

echo increOne($a);




?>