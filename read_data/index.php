<?php

require_once "db.php";
require_once "PeopleModel.php";
require_once "viewModel.php";


$pagename = 'index';


$model = new PeopleModel(MY_DNS, MY_USER, MY_PASS);
$view = new viewModel();
$rows = $model->getAll();



 $view->getView('views/header.inc');


if(!empty($_GET["action"])){
		
	if($_GET["action"]=="home"){
		
		$result = $model->getAll();
		$view->getView('views/lastUser.inc',$result);
		
	}if($_GET["action"]=="details"){
		$result = $model->getOne($_GET['id']);
		$view->getView('views/details.inc',$result);
		
		}
	
	}else{
	
		$result = $model->getAll();
		$view->getView('views/lastUser.inc',$result);
		}
		

$view->getView('views/footer.inc');

?>



