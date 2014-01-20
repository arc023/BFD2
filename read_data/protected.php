<?php
session_start();
require_once 'protector.php';

//protected controller
require_once "PeopleModel.php";
require_once "viewModel.php";

$pagename = 'protected';

$model = new PeopleModel();
$view = new viewModel();

$view->getView('views/header.inc');

//inside things / initial list
if(!empty($_GET["action"])){


}else{

//protected page


}


$view->getView('views/footer.inc');

?>