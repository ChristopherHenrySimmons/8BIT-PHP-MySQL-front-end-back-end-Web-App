<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
//21600681



	include_once 'head.php';
	try{
	$con = new PDO ("mysql:host=localhost;dbname=8bitdb","root","root");
		if(isset($_POST['signin'])){
			$ACCOUNT_Email = $_POST['Email'];
			$ACCOUNT_Password = $_POST['Password'];
	 
			$select = $con->prepare("SELECT * FROM ACCOUNT WHERE Email='$ACCOUNT_Email' and Password ='$ACCOUNT_Password'");
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
			$data=$select->fetch();
				if($data['Email']!=$ACCOUNT_Email and $data['Password']!=$ACCOUNT_Password){
					echo "invalid email or pass";
				}
				elseif($data['Email']==$ACCOUNT_Email and $data['Password']==$ACCOUNT_Password){
					$_SESSION['Email']=$data['Email'];
					
					header("location:account.php"); 
				}
		}
	}
	catch(PDOException $e){
		echo "error".$e->getMessage();
	}
	?>

<hr class="hide">
	<div class="cont_login" id="kakaoContent">
		<div id="cMain">
			<div id="mArticle">
			<!--Cover Image Needed add in common.css-->
			<?php include_once 'bgcover.php'; ?>
				
				
				<div class="detail_black">
					<h2 class="tit_detail" id="kakaoBody">Member Login</h2>
					<p class="desc_login" style="color:#FFF">Get in here.</p>
						<center>
						<form method="post">
						<input type="text" name="Email" placeholder="example@example.com"><br><br>
						<input type="password" name="Password" placeholder="**********"><br><br>
						<input type="submit" name="signin" value="SIGN IN">
						</center>

		</div>
						
	</div>
					
				
	</div>
			
	<hr class="hide">
			
			
		<!--21600681-->
<?php
	include_once 'foot.php';
?>
