<?php
    
    include 'dbconn.php';
    $ADMIN_ID = 0;
     
    if ( !empty($_GET['ADMIN_ID'])) {
        $ADMIN_ID = $_REQUEST['ADMIN_ID'];
    }
     
    if ( !empty($_POST)) {
		
        // keep track post values
        $ADMIN_ID = $_POST['ADMIN_ID'];
        include 'dbconn.php';
		$sql = "UPDATE ACCOUNT  set ADMIN_Password = ?, ADMIN_Email = ? WHERE id = ?";
		$dbrs = $dbConn->prepare($sql);
		$dbrs->execute();

		
        // delete data
       
        /*$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
		/*DELETE or DROP?*/
        $sql = "DELETE FROM ADMIN WHERE ADMIN_ID = ?";
        $dbrs = $dbConn->prepare($sql);
		$dbrs->execute();
        
        header("Location: /8BIT/adminpage.php");
         
    }
?>