<?php


class MonHoc{

	private $tenmon='HTML'; //thuộc tính

	//$this: class MonHoc

	protected function setTenMon($name){
		$this->tenmon = $name;
	}

	function getTenMon(){
		return $this->tenmon;
	}


	function setUp(){
		echo '12345ccc';
		return $this->getTenMon();
	}

}

// $subject = new MonHoc; //$subject: đối tượng

// echo $subject->tenmon; //HTML

// $subject->setTenMon('PHP');

// echo $subject->getTenMon(); //PHP?



/*$mh = new MonHoc;
$mh->setTenMon('MySQL');
echo $mh->tenmon; //MySQL*/


class MonPHP extends MonHoc{

	function setTen($name){
		//$this->tenmon = $name;
		$this->setTenMon($name);
	}
	function getTen(){
		return $this->tenmon;
	}
}


$php = new MonPHP;
$php->setTen('PHP');
echo $php->getTenMon();

// $subject = new MonHoc; //$subject: đối tượng

// //echo $subject->tenmon; //HTML
// echo $subject->getTenMon();
?>