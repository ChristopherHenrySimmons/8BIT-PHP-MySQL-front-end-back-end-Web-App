<?php
    require 'dbconn.php';
    $id = null;
    if ( !empty($_GET['ARTICLE_ID'])) {
        $id = $_REQUEST['ARTICLE_ID'];
    }
     
    if ( null==$id ) {
        header("Location: adminpage.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM NEWS where ARTICLE_ID = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
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
                        <h3>Read a Account</h3>
                    </div>
                     
                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['NEWS_Password'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['NEWS_Email'];?>
                            </label>
                        </div>
                      </div>
                      
                        <div class="form-actions">
                          <a class="btn" href="index.php">Back</a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>