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
	//var_dump($id);
	return $st->fetchAll();
	
	}
	
public function checklogin($usern='', $passw=''){

	$sql = "select * from usersInfo where username = :username and u_password= :u_password";
	$st = $this->db->prepare($sql);
	$st->execute(array(":username"=>$usern, ":u_password"=>$passw));
	
	$num=$st->rowCount();
	
	if($num>0){
	
		$_SESSION['loggedin'] = 1;
	
	}else{
	
		$_SESSION['loggedin'] = 0;
	
	}
	
	return $st->fetchAll(PDO::FETCH_COLUMN, 0);
	}
	
public function logout(){
	
	$_SESSION['loggedin'] = 0;	
	
	}
	
public function update( $firstname='', $lastname='', $dob='',$notesID='', $id=0){
	$sql = 'update userContacts set firstname=:firstname, lastname=:lastname, dob=:dob, notesID=:notesID, where userID = :userID';
	$st = $this->db->prepare($sql);
	$st->execute(array( ':firstname'=>$firstname, ':lastname'=>$lastname, ':dob'=>$dob,  ':notesID'=>$notesID, ':userID'=>$id));

}
public function delete($id=0){
	$sql='delete from userContacts where userID = :userID';
	$st = $this->db->prepare($sql);
	$st->execute(array(':userID'=>$id));
	
}

public function add( $firstname='', $lastname='', $dob='', $notesID=''){
	$sql= 'insert into userContacts(firstname, lastname, dob, notesID)
						values (:firstname, :lastname, :dob, :notesID)';
	$st = $this->db->prepare($sql);
	$st-> execute(array( ':firstname'=>$firstname, ':lastname'=>$lastname, ':dob'=>$dob, 'notesID'=>$notesID));

}
	
//closing brace	
}









	