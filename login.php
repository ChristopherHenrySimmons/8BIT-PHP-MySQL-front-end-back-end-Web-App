<?php
session_start();

include 'head.php';

include "navBar.php";
	
?>

<hr class="hide">
	<div class="cont_login" id="kakaoContent">
		<div id="cMain">
			<div id="mArticle">
			<!--Cover Image Needed add in common.css-->
			<?php include_once 'bgcover.php'; ?>
				
				
				<div class="detail_black">
					
					<h2 class="tit_detail" id="kakaoBody">Member Login</h2>
					<?php
<<<<<<< HEAD
					
					if (isset($_GET['status']))
					{
						if ($_GET['status'] == -1)
						{
							echo "<center><h3>Invalid Email or Password</h3></center>";
						}
					}
=======
					
					if (isset($_GET['status']))
					{
						if ($_GET['status'] == -1)
						{
							echo "<center><h3>Invalid Email or Password</h3></center>";
						}
					}
					
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
					?>
					<p class="desc_login" style="color:#FFF">Get in here.</p>
						<center>
						<form method="post" action="login_verify.php">
						<input type="text" name="Email" placeholder="Email"><br><br>
						<input type="Password" name="Password" placeholder="Password"><br><br>
						<input type="submit" name="signin" value="SIGN IN">
						</center>

		</div>
						
	</div>
					
				
	</div>