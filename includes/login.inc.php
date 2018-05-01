<?php

session_start();

#first if
if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';
	$ACCOUNT_Email = mysql_real_escape_string($conn, $_POST['ACCOUNT_Email']);
	$ACCOUNT_Password = mysql_real_escape_string($conn, $_POST['ACCOUNT_Password']);
	

	//Error handerlers
	//Check if this input are empty
	#second if
	if (empty($ACCOUNT_Email) || empty($ACCOUNT_Password)) {
		header("Location: ../index.php?login=empty");
		exit();
	}/*second else*/ else {
		$sql = "SELECT * FROM ACCOUNT WHERE ACCOUNT_Email='$ACCOUNT_Email'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		#third if
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		}/*third else*/ else {
			#forth if
			if ($row = mysqli_fetch_assoc($result)) {
				//de-hashing the password
				$hashedPwdCheck = password_verify($ACCOUNT_Password , $row['ACCOUNT_Password']);
				#fifth if
				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=error");
					exit();
				} /*fifth else*/ elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['ACCOUNT_Email'] = $row['ACCOUNT_Email'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
	}
}/*first else*/ else {
	header("Location: ../index.php?login=error");
	exit();
}