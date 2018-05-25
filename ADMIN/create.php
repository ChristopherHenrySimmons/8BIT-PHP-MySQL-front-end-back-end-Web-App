<?php
	include 'head.php';
?>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Create Admin</h3>
                    </div>
             
                    <form method="post" action="create_verify.php">
					<input type="text" name="Email" placeholder="Email Address"><br><br>
					<input type="password" name="Password" placeholder="Password"><br><br>
					<br><br>
					<input type="submit" name="submit" value="CREATE">
					</form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>