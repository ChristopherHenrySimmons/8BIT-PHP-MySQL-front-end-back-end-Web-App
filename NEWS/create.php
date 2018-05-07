<?php
     
	 //Updtae
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $ARTICLE_TitleError = null;
        $ARTICLE_CategoryError = null;
        $ARTICLE_DateError = null;
        $ARTICLE_MessageError = null;
                 
        // keep track post values
        $ARTICLE_Title = $_POST['ARTICLE_Title'];
        $ARTICLE_Category = $_POST['ARTICLE_Category'];
        $ARTICLE_Date = $_POST['ARTICLE_Date'];
        $ARTICLE_Message = $_POST['ARTICLE_Message'];
         
        // validate input
        $valid = true;
                 
        if (empty($ARTICLE_Title)) {
            $ARTICLE_TitleError = 'Please enter Title';
            $valid = false;
        }
         
        if (empty($ARTICLE_Category)) {
            $ARTICLE_CategoryError = 'Please enter Category';
            $valid = false;
        }

        if (empty($ARTICLE_Date)) {
            $ARTICLE_DateError = 'Please enter Date';
            $valid = false;
        }

        if (empty($ARTICLE_Message)) {
            $ARTICLE_MessageError = 'Please enter Message';
            $valid = false;
        }
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO customers (ARTICLE_Title, ARTICLE_Category, ARTICLE_Date, ARTICLE_Message) values(?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($ARTICLE_Title, $ARTICLE_Category, $ARTICLE_Date, $ARTICLE_Message));
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
                      <div class="control-group <?php echo !empty($ARTICLE_TitleError)?'error':'';?>">
                        <label class="control-label">ARTICLE_Title</label>
                        <div class="controls">
                            <input ARTICLE_Title="ARTICLE_Title" type="text" placeholder="Title" value="<?php echo !empty($ARTICLE_Title)?$ARTICLE_Title:'';?>">
                            <?php if (!empty($ARTICLE_TitleError)): ?>
                                <span class="help-inline"><?php echo $ARTICLE_TitleError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($ARTICLE_CategoryError)?'error':'';?>">
                        <label class="control-label">Category</label>
                        <div class="controls">
                            <input ARTICLE_Category="ARTICLE_Category" type="text"  placeholder="Category" value="<?php echo !empty($ARTICLE_Category)?$ARTICLE_Category:'';?>">
                            <?php if (!empty($ARTICLE_CategoryError)): ?>
                                <span class="help-inline"><?php echo $ARTICLE_CategoryError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($ARTICLE_DateError)?'error':'';?>">
                        <label class="control-label">Date</label>
                        <div class="controls">
                        <!--type date work?-->
                            <input ARTICLE_Date="ARTICLE_Date" type="date"  placeholder="dd/mm/yy" value="<?php echo !empty($ARTICLE_Date)?$ARTICLE_Date:'';?>">
                            <?php if (!empty($ARTICLE_DateError)): ?>
                                <span class="help-inline"><?php echo $ARTICLE_DateError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($ARTICLE_MessageError)?'error':'';?>">
                        <label class="control-label">Message</label>
                        <div class="controls">
                            <input ARTICLE_Message="ARTICLE_Message" type="text"  placeholder="Howdy" value="<?php echo !empty($ARTICLE_Message)?$ARTICLE_Message:'';?>">
                            <?php if (!empty($ARTICLE_MessageError)): ?>
                                <span class="help-inline"><?php echo $ARTICLE_MessageError;?></span>
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