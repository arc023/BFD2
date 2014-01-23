<!DOCTYPE html>

<html>

<head>
<link href="css/style1.css" rel="stylesheet" type="text/css"/>
<title>MVC READ DATA</title>
</head>

<body>
<h1>MVC read data assignment</h1>
<p>Anna Carlson's address book. Login info: username = th password = th</p>

<?php
if (isset($_SESSION['loggedin'])){

	if($_SESSION['loggedin'] == 1){
		//var_dump($_SESSION);
		
 		echo "<a href='index.php?action=logout'>Logout</a>";
 		echo "<p></p>";
 		echo " <a href='protected.php=add'>add a contact</a> <a href='protected.php=delete'>delete a contact</a>";
 		echo "<p></p>";
 
	 }else{
 		echo "<a href='index.php?action=login'>Login</a>";
		echo "<p></p>";
 
 
	 }

}else{
echo "<a href='index.php?action=login'>Login</a>";
		echo "<p></p>";
		}
?>
