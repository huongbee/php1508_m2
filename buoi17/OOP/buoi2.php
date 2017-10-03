<?php
//constructor - destructor
/*
class hocsinh{
	
	public $tuoi; //thuộc tính


	// public function hocsinh(){ //phương thức
	// 	echo 'lớp hocsinh được khởi tạo';
	// }
	public function __destruct(){
		echo ' lớp học sinh đã bị hủy'."<br>";
	}


	public function __construct($age){
		echo 'lớp hocsinh được khởi tạo. ';
		echo $age;
	}


	

	public function setTuoi($age){
		return $this->tuoi = $age;
	}

	public function getTuoi(){
		return $this->tuoi;
	}
}

class hocsinhCap1 extends hocsinh{

	public function __construct(){
		echo "<br>".'lớp học sinh cấp 1 được khởi tạo'."<br>"	;
	}


	public function __destruct(){
		echo ' lớp học sinh cấp 1 đã bị hủy'."<br>";
	}


}


$hs = new hocsinh(15);
$hs->setTuoi(20);
echo "<br>".' Đã cài đặt tuổi mới cho hs: '.$hs->getTuoi();


$hsC1 = new hocsinhCap1(7);

*/


//static

/*
class hocsinh{
	public static $tuoi=14; 

	public static function setTuoi($age){
		hocsinh::$tuoi = $age;
	}

	public static function getTuoi(){
		//return $this->tuoi; ->sai
		return self::$tuoi;
	}


	public function getValue(){
		//echo 'tuổi của bạn là: '.$this->getTuoi(); //đúng
		echo 'tuổi của bạn là: '.hocsinh::getTuoi(); 
	}

	public function __destruct(){
		echo '<br>lớp hs bị hủy';
	}

}

$hs = new hocsinh;
$hs->setTuoi(15);
echo $hs->getTuoi();
echo '<br>';
echo $hs->getValue();

echo '<br>';


$hsc1 = new hocsinh;
//$hsc1->setTuoi(7);
echo $hsc1->getTuoi();
echo '<br>';
echo $hsc1->getValue();*/



//Abstract Class
/*
abstract class hocsinh{

	public $tuoi=15;
	abstract public function setTuoi($age);
	abstract protected function getTuoi();

	public function a(){
		echo 'a';
	}
}

class hocsinhCap1 extends hocsinh{

	public function setTuoi($age){
		$this->tuoi = $age;
	}

	public function getTuoi(){
		return $this->tuoi;
	}

	function getValue(){
		return $this->getTuoi();
	}
}


$hsc1 = new hocsinhCap1;
echo $hsc1->tuoi;
echo '<br>';
$hsc1->setTuoi(20);
echo $hsc1->getValue();
echo '<hr>';*/


//Obj Interface

Interface giaodien{

	public function header($a);
	public function content();
	public function footer();

}

class website implements giaodien{

	public function header($b,$c=2,$d=3){
		echo 'đây là header'. $b.$c.$d;
	}

	protected function content(){
		echo 'đây là content';
	}
	public function footer(){
		echo 'đây là footer';
	}

	public function left(){
		echo 'đây là templte bên trái';
	}
}


$w = new website;
$w->header(6,6);
echo '<br>';
$w->content();
echo '<br>';
$w->footer();
echo '<br>';
$w->left();




// $gd = new giaodien;






?>