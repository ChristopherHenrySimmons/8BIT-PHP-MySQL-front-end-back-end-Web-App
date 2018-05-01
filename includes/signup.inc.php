<?php

if(isset($_POST['submit'])){
	include_once 'dbh.inc.php';
	$ACCOUNT_Email = mysql_real_escape_string($conn, $_POST['ACCOUNT_Email']);
	$ACCOUNT_Password = mysql_real_escape_string($conn, $_POST['ACCOUNT_Password']);
	
	//ERROR HANDLERS
	//CHECK FOR EMPTY FIELDS
	//ERROR FIX
	if (empty($ACCOUNT_Email) || empty($ACCOUNT_Password)){
		
		header("Location: ../register.php?register=empty");
		exit();
		
	}	else{
		
		//CHECK IF INPUT CHARACTERS ARE VALID
		//Check if Email is valid
	if (!filter_var ($ACCOUNT_Email, FILTER_VALIDATE_EMAIL)){
			
		header("Location: ../register.php?register=email");
		exit();
			
		} else {
			
			$sql = "SELECT * FROM ACCOUNT WHERE ACCOUNT_Email='$ACCOUNT_Email'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			
			if($resultCheck > 0){
				
				header("Location: ../register.php?register=emailtaken");
				exit();
				
			} else{
				
				//HASHING THE PASSWORD
				$hashePwd = password_hash($ACCOUNT_Password, PASSWORD_DEFAULT);
				//INSERT USER INTO DATABASE
				$sql = "INSERT INTO ACCOUNT (ACCOUNT_Email, ACCOUNT_Password) VALUES('$ACCOUNT_Email', '$hashePwd');";
				
				$result = mysqli_query($conn, $sql);
				header("Location: ../register.php?register=success");
				exit();
			}
		}
		
	}
	
}	else {
	header("Location: ../register.php");
	exit();
}

//DEAD
//if(!preg_match("/^[a-zA-Z]*$", $ACCOUNT_Email)){
			
//header("Location: ../register.php?register=invalid")
//exit();