<?php
session_start();

$con = new PDO ("mysql:host=localhost;dbname=8bitdb","root","root");
	if(isset($_POST['submit']))
	{
		$errMsg = '';
		
		$ADMIN_Email = $_POST['Email'];
		$ADMIN_Password = $_POST['Password'];
		
		if($ADMIN_Email == '')
			
			$errMsg = 'Enter your Email';
		
		if($ADMIN_Password == '')
		
			$errMsg = 'Enter password';
		

		if($errMsg == '')
		{
			try
			{
				$insert = $con->prepare("INSERT INTO ADMIN (ADMIN_Email, ADMIN_Password)VALUES(:Email,:Password) ");
				$insert->execute(array('Email' => $ADMIN_Email, 'Password' => $ADMIN_Password));
		
				header('Location: /8BIT/adminpage.php');
			}
			catch(PDOException $e) 
			{
				echo $e->getMessage();
			}		
		}	
		else
		{		
			header('Location: /8BIT/adminpage.php');
		}
	}