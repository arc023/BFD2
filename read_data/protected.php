<?php
session_start();
require_once 'protector.php';

//protected controller
require_once "PeopleModel.php";
require_once "viewModel.php";
require_once "db.php";

$pagename = 'protected';

$model = new PeopleModel(MY_DNS, MY_USER, MY_PASS);
$view = new viewModel();

$view->getView('views/header.inc');

//inside things / initial list
if(!empty($_GET["action"])){

    //action ==update
    	if($_GET['action']=='update'){
    		$result = $model->getOne($_GET['id']);
    		$view->getView('views/updateform.html', $result);
    		
    	}else if($_GET['action']=='updateaction'){
    		$model->update( $_POST['firstname'],$_POST['lastname'],$_POST['dob'], $_POST['notesID'],$_GET['id']);
    		$result = $model->getAll();
    		$view->getView('views/protected.php', $result);  
    		  	
    //action == delete
    
    	}else if($_GET['action']=='delete'){
    		$model->delete($_GET['id']);
    		$result = $model->getAll();
    		$view->getView('views/protected.php', $result);
    
    //action == add
    		
    	}else if($_GET['action']=='add'){
    	
    		$view->getView("views/addform.html");
    	
    	}else if($_GET['action']=='addaction'){
    		$model->add($_POST['firstname'],$_POST['lastname'],$_POST['dob'], $_POST['notesID']);
    		$result = $model->getAll();
    		$view->getView('views/protected.php', $result);
    		
    	}
	 
		
	}else{
		$result = $model->getAll();
		$view->getView('views/protected.php', $result);
		

//protected page


}


$view->getView('views/footer.inc');

?>