<?php
    require 'dbconn.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: adminpage.php");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
        
        $ACCOUNT_EmailError = null;
        $ACCOUNT_Password = null;
         
        // keep track post values
        $ACCOUNT_Email = $_POST['ACCOUNT_Email'];
        $ACCOUNT_Password = $_POST['ACCOUNT_Password'];
         
        // validate input
        $valid = true;
                 
        if (empty($ACCOUNT_Email)) {
            $ACCOUNT_EmailError = 'Please enter Email Address';
            $valid = false;
        } else if ( !filter_var($ACCOUNT_Email,FILTER_VALIDATE_EMAIL) ) {
            $ACCOUNT_EmailError = 'Please enter a valid Email Address';
            $valid = false;
        }
         
        if (empty($ACCOUNT_Password)) {
            $ACCOUNT_Password = 'Please enter Password';
            $valid = false;
        }
         
        // update data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE ACCOUNT  set ACCOUNT_Password = ?, ACCOUNT_Email = ? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($ACCOUNT_Email,$id));
            Database::disconnect();
            header("Location: adminpage.php");
        }
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM ACCOUNT where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $ACCOUNT_Password = $data['ACCOUNT_Password'];
        $ACCOUNT_Email = $data['ACCOUNT_Email'];
        Database::disconnect();
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
                        <h3>Update a Account</h3>
                    </div>
             
                    <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
                      <div class="control-group <?php echo !empty($ACCOUNT_Password)?'error':'';?>">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input name="ACCOUNT_Password" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($ACCOUNT_Password)): ?>
                                <span class="help-inline"><?php echo $ACCOUNT_Password;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($ACCOUNT_EmailError)?'error':'';?>">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <input name="ACCOUNT_Email" type="text" placeholder="Email Address" value="<?php echo !empty($ACCOUNT_Email)?$ACCOUNT_Email:'';?>">
                            <?php if (!empty($ACCOUNT_EmailError)): ?>
                                <span class="help-inline"><?php echo $ACCOUNT_EmailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href="index.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>