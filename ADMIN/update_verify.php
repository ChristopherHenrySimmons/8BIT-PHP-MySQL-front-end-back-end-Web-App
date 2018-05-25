<?php

    $dbConn = new PDO("mysql:host=localhost;dbname=8BITDB", "root", "root");
 							
    $ADMIN_ID = null;
    if ( !empty($_GET['ADMIN_ID'])) {
        $ADMIN_ID = $_REQUEST['ADMIN_ID'];
    }
     
    if ( null==$ADMIN_ID ) {
        header("Location: adminpage.php");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
        
        $ADMIN_EmailError = null;
        $ADMIN_Password = null;
         
        // keep track post values
        $ADMIN_Email = $_POST['ADMIN_Email'];
        $ADMIN_Password = $_POST['ADMIN_Password'];
         
        // validate input
        $valid = true;
                 
        if (empty($ADMIN_Email)) {
            $ADMIN_EmailError = 'Please enter Email Address';
            $valid = false;
        } else if ( !filter_var($ADMIN_Email,FILTER_VALIDATE_EMAIL) ) {
            $ADMIN_EmailError = 'Please enter a valid Email Address';
            $valid = false;
        }
         
        if (empty($ADMIN_Password)) {
            $ADMIN_Password = 'Please enter Password';
            $valid = false;
        }
         
        // update data
        if ($valid) {
			/*Keep or Change?*/
			$dbConn = new PDO("mysql:host=localhost;dbname=8BITDB", "root", "root");
            /*$pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
            $sql = "UPDATE ACCOUNT  set ADMIN_Password = ?, ADMIN_Email = ? WHERE id = ?";
            /*$q = $pdo->prepare($sql);
            $q->execute(array($ADMIN_Email,$id));*/
			$dbrs = $dbConn->prepare($sql);
			$dbrs->execute();
            /*Database::disconnect();*/
            header("Location: adminpage.php");
        }
    } else {
		$dbConn = new PDO("mysql:host=localhost;dbname=8BITDB", "root", "root");
		
		$sql = "SELECT * FROM ADMIN ORDER BY ADMIN_ID";
		$dbrs = $dbConn->prepare($sql);
		$dbrs->execute();
		
        /*$data = $q->fetch(PDO::FETCH_ASSOC);*/
        $ADMIN_Password = $data['ADMIN_Password'];
        $ADMIN_Email = $data['ADMIN_Email'];        
    }
?>