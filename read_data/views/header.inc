<!DOCTYPE html>

<html>

<head>
<link href="css/style1.css" rel="stylesheet" type="text/css"/>
<title>MVC READ DATA</title>
</head>

<body>
<h1>MVC read data assignment</h1>
<p>Anna Carlson's address book</p>
<?php
if($_SESSION['loggedin']==1){
echo "<a href='/index.php?action=logout'>Logout</a>";

}else "<a href='/index.php?action=login'>Login</a>";



?>

