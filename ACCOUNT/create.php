<?php
     
	 //Updtae
    require 'dbconn.php';
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $ACCOUNT_EmailError = null;
        $ACCOUNT_PasswordError = null;
         
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
            $ACCOUNT_PasswordError = 'Please enter Password';
            $valid = false;
        }
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO customers (ACCOUNT_Email, ACCOUNT_Password) values(?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($ACCOUNT_Email, $ACCOUNT_Password));
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
                      <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <input ACCOUNT_Email="ACCOUNT_Email" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">
                            <?php if (!empty($emailError)): ?>
                                <span class="help-inline"><?php echo $emailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($PasswordError)?'error':'';?>">
                        <label class="control-label">Password</label>
                        <div class="controls">
                        <!--<input ACCOUNT_Email?-->
                            <input ACCOUNT_Password="ACCOUNT_Password" type="text"  placeholder="Password" value="<?php echo !empty($Password)?$Password:'';?>">
                            <?php if (!empty($PasswordError)): ?>
                                <span class="help-inline"><?php echo $PasswordError;?></span>
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