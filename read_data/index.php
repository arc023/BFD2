<?php

require_once "db.php";
require_once "PeopleModel.php";
require_once "viewModel.php";

$pagename = 'index';

$model = new PeopleModel(MY_DNS, MY_USER, MY_PASS);
$view = new viewModel();
$rows = $model->getAll();

$view->getView('views/header.inc');


//THIS - THIS DOES NOT WORK. HELP PLZ

//$result = $model->getAll();
//$view->getView('views/lastUser.inc',$rows);

if(!empty($_GET["action"])){
		
	if($_GET["action"]=="home"){
		
		$result = $model->getAll();
		$view->getView('views/lastUser.inc',$rows);
		
	}if($_GET["action"]=="details"){
		
		$result = $model->getOne($_GET['id']);
		$view->getView('views/lastUser.inc',$rows);
		
		}
	
	}else{
	
		$result = $model->getAll();
		$view->getView('views/lastUser.inc',$rows);
		}
		
	

$view->getView('views/footer.inc');	

?>



