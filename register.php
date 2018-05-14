<!DOCTYPE html>

	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	
<?php
include_once 'head.php';
try{
	$con = new PDO ("mysql:host=localhost;dbname=8bitdb","root","root");
		if(isset($_POST['submit'])){
			$ACCOUNT_Email = $_POST['Email'];
			$ACCOUNT_Password = $_POST['Password'];
		
	
			$insert = $con->prepare("INSERT INTO ACCOUNT (ACCOUNT_Email, ACCOUNT_Password)
			VALUES(:Email,:Password) ");
			$insert->bindParam(':Email',$ACCOUNT_Email);
			$insert->bindParam(':Password',$ACCOUNT_Password);
			$insert->execute();
		}
	}

catch(PDOException $e){
	echo "error".$e->getMessage();
}
?>

<body>
	

<hr class="hide">
	<div class="cont_login" id="kakaoContent">
		<div id="cMain">
			<div id="mArticle">
			<!--Cover Image Needed add in common.css-->
			<?php include_once 'bgcover.php'; ?>
				
				
				<div class="detail_black">
					<h2 class="tit_detail" id="kakaoBody">CREATE YOUR ACCOUNT</h2>
					<p class="desc_login" style="color:#FFF">Join us on your next great happy adventure.</p>
					
					<center>
					<form method="post">

					<input type="text" name="Email" placeholder="Fake@Email.com"><br><br>
					<input type="password" name="Password" placeholder="**********"><br><br>
					<br><br>
					<input type="submit" name="submit" value="SIGN UP">
					</form>
					</center>

				</div>
						
				</div>
			
		<!-- // cMain -->
	</div>
	<!-- // kakaoContent -->
	<hr class="hide">
	
	
<!--21600681-->
<?php
	include_once 'foot.php';
?>