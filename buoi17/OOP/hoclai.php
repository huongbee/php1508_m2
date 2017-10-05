<?php

class Nguoi{

	private $chieucao;

	public function Nguoi($height){
		echo 'Lớp Nguoi được khởi tạo<br>';
		echo $this->chieucao = $height;
	}

	public function setChieucao($height){
		$this->chieucao = $height;
	}

	public function getChieucao(){
		return $this->chieucao;
	}

	public function getNameClass(){
		return get_class($this);
	}

	public function __destruct(){
		echo 'Lớp Nguoi đã bị hủy';
	}
}


// $height = 145;
// $hocsinh = new Nguoi($height);
// //$hocsinh->chieucao;

// echo $hocsinh->getChieucao().'<br>';

class SinhVien extends Nguoi{

	protected $chieucao;
	public $cannang;

	public function __construct($height){
		echo 'Lớp SinhVien được khởi tạo'.'<br>';
		echo $this->chieucao = $height;
		echo '<br>';
	}


	public function setCannang($weight){
		$this->cannang = $weight;
	}

	public function getCannang(){
		return $this->cannang;
	}


	public function __destruct(){
		echo 'Lớp SinhVien đã bị hủy';
	}

}

//$sv = new SinhVien(130);

class HocSinh extends SinhVien{

	

}

$hs = new HocSinh(80);


?>