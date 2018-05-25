<?php
	include 'head.php';
	include 'dbconn.php';
	
?>
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Update a Account</h3>
                    </div>
             
                    <form class="form-horizontal" action="update_verify.php?id=<?php echo $ADMIN_ID?>" method="post">
                      <div class="control-group <?php echo !empty($ADMIN_Password)?'error':'';?>">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input name="ADMIN_Password" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($ADMIN_Password)): ?>
                                <span class="help-inline"><?php echo $ADMIN_Password;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($ADMIN_EmailError)?'error':'';?>">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <input name="ADMIN_Email" type="text" placeholder="Email Address" value="<?php echo !empty($ADMIN_Email)?$ADMIN_Email:'';?>">
                            <?php if (!empty($ADMIN_EmailError)): ?>
                                <span class="help-inline"><?php echo $ADMIN_EmailError;?></span>
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