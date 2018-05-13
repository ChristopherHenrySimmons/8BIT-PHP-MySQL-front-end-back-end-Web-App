<?php
    require 'dbconn.php';
    $ADMINS_ID = 0;
     
    if ( !empty($_GET['ADMINS_ID'])) {
        $ADMINS_ID = $_REQUEST['ADMINS_ID'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $ADMINS_ID = $_POST['ADMINS_ID'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM customers  WHERE ADMINS_ID = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($ADMINS_ID));
        Database::disconnect();
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
                      <input type="hidden" name="ADMINS_ID" value="<?php echo $ADMINS_ID;?>"/>
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