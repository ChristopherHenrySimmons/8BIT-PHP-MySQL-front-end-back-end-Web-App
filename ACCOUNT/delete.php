<?php
    include 'dbconn.php';
    $ACCOUNT_ID = 0;
     
    if ( !empty($_GET['ACCOUNT_ID'])) {
        $ACCOUNT_ID = $_REQUEST['ACCOUNT_ID'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $ACCOUNT_ID = $_POST['ACCOUNT_ID'];
         
        // delete data
        include 'dbconn.php';
		$sql = "SELECT * FROM ADMIN ORDER BY ADMIN_ID";
		$dbrs = $dbConn->prepare($sql);
		$dbrs->execute();

		$numrow = $dbrs->rowCount(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM customers  WHERE ACCOUNT_ID = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($ACCOUNT_ID));
        
        header("Location: index.php");
         
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Delete a Customer</h3>
                    </div>
                     
                    <form class="form-horizontal" action="delete.php" method="post">
                      <input type="hidden" name="ACCOUNT_ID" value="<?php echo $ACCOUNT_ID;?>"/>
                      <p class="alert alert-error">Are you sure to delete ?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">Yes</button>
                          <a class="btn" href="index.php">No</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>