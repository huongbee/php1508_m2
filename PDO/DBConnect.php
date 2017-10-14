<?php

class DBConnect{

	protected $connect;
	protected $sql;
	protected $statement;


	public function __construct($databasename,$user,$password){
		try{
			$this->connect = new PDO("mysql:host=localhost;dbname=$databasename", "$user", "$password"); 
			$this->connect->exec("set names utf8");
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function setQuery($query){
		$this->sql = $query;
	}

	public function exec($option = []){
		$this->statement = $this->connect->prepare($this->sql);
		$sl = count($option);
		if($sl>0){
			for($i=0;$i<$sl;$i++){
				$this->statement->bindParam($i+1,$option[$i]);
			}
		}

		//$this->statement->execute(); //true||false
		return $this->statement;
	}

	//trả về nhiều dòng
	public function loadAllRows($option = []){

		$stmt = $this->exec($option);
		if($stmt->execute()){
			return $this->statement->fetchAll(PDO::FETCH_OBJ);
		}
		return false;
	}

	//trả về 1 dòng
	public function loadRow($option = []){

		$stmt = $this->exec($option);
		if($stmt->execute()){
			return $this->statement->fetch(PDO::FETCH_OBJ);
		}
		return false;
	}
}
//php1508


$c = new DBConnect('php1508','root','');

/*$query = "SELECT * FROM users";
$c->setQuery($query);
$result = $c->loadAllRows();*/

$query = "SELECT * FROM users WHERE username = ? OR id  = ? ";
$option = ['huonghuong',2];

$c->setQuery($query);
//$result = $c->loadAllRows($option);
$result = $c->loadRow($option);

echo "<pre>";
print_r($result);
echo "</pre>";



?>