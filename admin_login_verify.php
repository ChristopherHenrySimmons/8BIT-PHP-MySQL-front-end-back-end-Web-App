<?php
session_start();

$con = new PDO ("mysql:host=localhost;dbname=8bitdb","root","root");

$ADMIN_Email = $_POST['Email'];
$ADMIN_Password = $_POST['Password'];

$select = $con->prepare("SELECT * FROM ADMIN WHERE ADMIN_Email=? and ADMIN_Password=?");
$select->execute(array($ADMIN_Email,$ADMIN_Password));
$numrow=$select->rowCount();

if($numrow == 0)
{
	header('location: adminlogin.php?status=-1');
}
else
{
	$_SESSION['Email'] = $ADMIN_Email;
<<<<<<< HEAD
	$_SESSION['LoggedInA'] = true;
=======
	$_SESSION['LoggedIn'] = true;
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985

	header("location: adminpage.php"); 
}


?>
