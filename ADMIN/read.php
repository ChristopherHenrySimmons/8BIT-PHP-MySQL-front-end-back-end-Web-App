<?php
	include 'head.php';
    include 'dbconn.php';
    $ADMIN_ID = null;
    if ( !empty($_GET['ADMIN_ID'])) {
        $id = $_REQUEST['ADMIN_ID'];
    }
     
    if ( null==$ADMIN_ID ) {
        header("Location: adminpage.php");
    } else {
        $sql = "SELECT * FROM ADMIN ORDER BY ADMIN_ID";
		$dbrs = $dbConn->prepare($sql);
		$dbrs->execute();

		$numrow = $dbrs->rowCount(); 
    }
?>

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
                                <?php echo $dbrow['ADMINS_Password'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $dbrow['ADMINS_Email'];?>
                            </label>
                        </div>
                      </div>
                      
                        <div class="form-actions">
                          <a class="btn" href="adminpage.php">Back</a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>