<?php
class PeopleModel {


//include 'db.php';
private $db;

	public function __construct($dsn, $user, $pass){
	
	try {
	
		$this->db = new \PDO($dsn, $user, $pass);	
	}
	
	catch (\PDOException $e){
		var_dump($e);
		}
	
	}
	
	public function getAll(){
	
	$sql = "select * from usersInfo";
	$st = $this->db->prepare($sql);
	$st->execute();
	
	return $st->fetchAll();
	
	var_dump(getAll);
	
	}

public function getOne($id=0){

	$sql = "select * from userContacts where id = :userID";
	$st = $this->db->prepare($sql);
	$st->execute(array("userID"=>$id));
	
	return $st->fetchAll();
	
	var_dump(getOne);
	


}

}


	