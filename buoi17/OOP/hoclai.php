<?php

// class Nguoi{

// 	private $chieucao;
// 	public $name;

// 	public function Nguoi($height){
// 		echo 'Lớp Nguoi được khởi tạo<br>';
// 		echo $this->chieucao = $height;
// 	}

// 	public function setChieucao($height){
// 		$this->chieucao = $height;
// 	}

// 	public function getChieucao(){
// 		return $this->chieucao;
// 	}

// 	public function setNameClass(){
// 		$ten = get_class($this);
// 		return $ten;
// 	}
// 	public function getNameClass(){
// 		return $this->name = $this->setNameClass();
		
// 	}

// 	public function __destruct(){
// 		echo 'Lớp Nguoi đã bị hủy';
// 	}
// }


// // $height = 145;
// // $hocsinh = new Nguoi($height);
// // echo $hocsinh->getNameClass();
// // die;
// // echo $hocsinh->getChieucao().'<br>';

// class SinhVien extends Nguoi{

// 	protected $chieucao;
// 	public $cannang;
// 	//$name

// 	public function __construct($height){
// 		echo "Lớp ".$this->getNameClass()." được khởi tạo".'<br>';
// 		echo $this->chieucao = $height;
// 		echo '<br>';
// 	}


// 	public function setCannang($weight){
// 		$this->cannang = $weight;
// 	}

// 	public function getCannang(){
// 		return $this->cannang;
// 	}


// 	public function __destruct(){
// 		echo 'Lớp '.$this->getNameClass().' đã bị hủy';
// 	}

// }

// //$sv = new SinhVien(130);

// class HocSinh extends SinhVien{

// 	// $chieucao 
// 	// $cannang

// 	//__construct()
// 	//setCannang();
// 	//getCannang()
// 	//__destruct()
// 	//setChieucao()
// 	//getChieucao()
// 	//getNameClass();
// }

// $hs = new HocSinh(80);
// //echo $hs->getNameClass();


// class Nguoi{

// 	public static $chieucao; //150

// 	public function setChieucao($height){
// 		Nguoi::$chieucao = $height;
// 	}

// 	public function getChieucao(){
// 		return Nguoi::$chieucao;
// 	}

// 	public  function getTuoi(){
// 		return 20;
// 	}


// }

// $banA = new Nguoi;
// $banA->setChieucao(150);
// echo 'chiều cao bạn A là '.$banA->getChieucao();
// echo "<br>";
// echo 'Tuổi bạn A là '.$banA->getTuoi();
// echo "<br>";

// $banB = new Nguoi;
// echo 'chiều cao bạn B là '.$banB->getChieucao();
// echo "<br>";
// echo 'Tuổi bạn B là '.$banB->getTuoi();
// echo "<br>";


// $banC = new Nguoi;
// echo 'chiều cao bạn C là '.$banC->getChieucao();


// abstract class AbstractClass
// {
//     abstract protected function getValue();
//     abstract protected function prefixValue($prefix);

//     public function printOut() {
//         print $this->getValue() . "\n";
//     }
// }
// class Class_Con extends AbstractClass{
// 	public function getValue(){
// 		echo "Đã tạo class";
// 	}
//     protected function prefixValue($prefix){
// 		echo $prefix;
// 	}

// 	public function echoA() {
//         echo 'A';
//     }

// }

// $class = new Class_Con;
// $class->getValue();
// $class->echoA();

interface tempt{

	public function getValue();
	public function prefixValue($prefix);

}

class Web implements tempt{
	function getValue(){
		echo 'A';
	}
	function prefixValue($prefix){
		echo $prefix;
	}

	function getName(){
		return get_class($this);
	}
}
$w = new Web;
echo $w->prefixValue('ABC');



?>