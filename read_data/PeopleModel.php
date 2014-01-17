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
	
	$sql = "select * from userContacts";
	$st = $this->db->prepare($sql);
	$st->execute();
	
	return $st->fetchAll();
	
	//var_dump(getAll);
	
	}

public function getOne($id=0){

	$sql = "select * from userContacts where userID = :userID";
	$st = $this->db->prepare($sql);
	$st->execute(array(":userID"=>$id));
	var_dump($id);
	return $st->fetchAll();
	
	


}
public function getDetails(){
	
	$sql = "select * from usersContacts";
	$st = $this->db->prepare($sql);
	$st->execute();
	
	return $st->fetchAll();
	
	//var_dump(getDetails);
	
	}

}


	