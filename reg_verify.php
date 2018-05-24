<?php
session_start();

$con = new PDO ("mysql:host=localhost;dbname=8bitdb","root","root");
	if(isset($_POST['submit']))
	{
		$errMsg = '';
		
		$ACCOUNT_Email = $_POST['Email'];
		$ACCOUNT_Password = $_POST['Password'];
		
		if($ACCOUNT_Email == '')
			
			$errMsg = 'Enter your Email';
		
		if($ACCOUNT_Password == '')
		
			$errMsg = 'Enter password';
		

		if($errMsg == '')
		{
			try
			{
				$insert = $con->prepare("INSERT INTO ACCOUNT (ACCOUNT_Email, ACCOUNT_Password)VALUES(:Email,:Password) ");
				$insert->execute(array('Email' => $ACCOUNT_Email, 'Password' => $ACCOUNT_Password));
		
				header('Location: register.php?action=joined');
			}
			catch(PDOException $e) 
			{
				echo $e->getMessage();
			}		
		}	
		else
		{		
			header('Location: register.php');
		}
	}