<?php
	include 'head.php';
	include 'dbconn.php';
	
?>
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Delete a ADMIN </h3>
						
                    </div>
                     
                    <form class="form-horizontal" action="delete_verify.php" method="post">
                      <input type="hidden" name="ADMIN_ID" value="<?php echo $ADMIN_ID;?>"/>
                      <p class="alert alert-error">Are you sure to delete ?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn_regist">Yes</button>
                          <a class="btn_regist" href="/8BIT/adminpage.php">No</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>