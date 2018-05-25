<?php
session_start();

$con = new PDO ("mysql:host=localhost;dbname=8bitdb","root","root");

$ACCOUNT_Email = $_POST['Email'];
$ACCOUNT_Password = $_POST['Password'];

$select = $con->prepare("SELECT * FROM ACCOUNT WHERE ACCOUNT_Email=? and ACCOUNT_Password=?");
$select->execute(array($ACCOUNT_Email,$ACCOUNT_Password));
$numrow=$select->rowCount();

if($numrow == 0)
{
	header('location: login.php?status=-1');
}
else
{
	$_SESSION['Email'] = $ACCOUNT_Email;
	$_SESSION['LoggedIn'] = true;

	header("location: account.php"); 
}


?>
