<?php
     
	 //Updtae
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $ADMINS_EmailError = null;
        $ADMINS_PasswordError = null;
         
        // keep track post values
        $ADMINS_Email = $_POST['ADMINS_Email'];
        $ADMINS_Password = $_POST['ADMINS_Password'];
         
        // validate input
        $valid = true;
                 
        if (empty($ADMINS_Email)) {
            $ADMINS_EmailError = 'Please enter Email Address';
            $valid = false;
        } else if ( !filter_var($ADMINS_Email,FILTER_VALIDATE_EMAIL) ) {
            $ADMINS_EmailError = 'Please enter a valid Email Address';
            $valid = false;
        }
         
        if (empty($ADMINS_Password)) {
            $ADMINS_PasswordError = 'Please enter Password';
            $valid = false;
        }
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO customers (ADMINS_Email, ADMINS_Password) values(?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($ADMINS_Email, $ADMINS_Password));
            Database::disconnect();
            header("Location: adminpage.php");
        }
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
                        <h3>Create a Account</h3>
                    </div>
             
                    <form class="form-horizontal" action="create.php" method="post">
                      <div class="control-group <?php echo !empty($ADMINS_EmailError)?'error':'';?>">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <input ADMINS_Email="ADMINS_Email" type="text" placeholder="Email Address" value="<?php echo !empty($ADMINS_Email)?$ADMINS_Email:'';?>">
                            <?php if (!empty($ADMINS_EmailError)): ?>
                                <span class="help-inline"><?php echo $ADMINS_EmailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($ADMINS_PasswordError)?'error':'';?>">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input ADMINS_Password="ADMINS_Password" type="text"  placeholder="Password" value="<?php echo !empty($ADMINS_Password)?$ADMINS_Password:'';?>">
                            <?php if (!empty($ADMINS_PasswordError)): ?>
                                <span class="help-inline"><?php echo $ADMINS_PasswordError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Create</button>
                          <a class="btn" href="index.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>