<?php

require_once "db.php";
require_once "PeopleModel.php";
require_once "viewModel.php";


$pagename = 'index';


$model = new PeopleModel(MY_DNS, MY_USER, MY_PASS);
$view = new viewModel();


// $view->getView('views/header.inc');


//@var = documenting data types
if(@$_GET["action"]!="checklogin" && @$_GET["action"]!="logout"){
		$view->getView('views/header.inc');
	}
	
//initial list/screen
if(!empty($_GET["action"])){
		
		//if action = home full list (action is in url/anchor)
	if($_GET["action"]=="home"){
		
		$result = $model->getAll();
		$view->getView('views/lastUser.inc',$result);
		
		//if action = details show ONLY detail from specific id
	}if($_GET["action"]=="details"){
		$result = $model->getOne($_GET['id']);
		$view->getView('views/details.inc',$result);
		
		//if action = login go to form
	}if($_GET["action"]=='login'){
		$views->getView("views/loginform.html");
		
		//if action is checklogin go check table information
	}if($_GET["action"]=='checklogin'){
		$result = $model->checklogin($_post['usern'],$_post['passw']);
		
			if(count($result)>0){
				header("location: protected.php");
			}else{
				$views->getView("views/header.inc");
				echo "login error, sorry";
				$views->getView("views/loginform.html");
			}
	
	}if($_GET["action"]=='logout'){
	
		$model->logout();
		header("location: index.php");
		
		}
	
	}else{
	
		$result = $model->getAll();
		$view->getView('views/lastUser.inc',$result);
		}
		

$view->getView('views/footer.inc');

?>



