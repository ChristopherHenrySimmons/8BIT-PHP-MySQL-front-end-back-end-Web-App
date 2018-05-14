<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
//21600681


<<<<<<< HEAD

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
=======

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
		elseif(isset($_POST['signin'])){
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
					
					header("location:Profile.php"); 
				}
		}
	}
	catch(PDOException $e){
		echo "error".$e->getMessage();
	}
	?>

<div style="width:500px ; height:600px; float:left;">
<div style="padding:85px;">
<h1>Create Account Here</h1>
<form method="post">

<input type="text" name="Email" placeholder="example@example.com"><br><br>
<input type="password" name="Password" placeholder="**********"><br><br>
<br><br>
<input type="submit" name="submit" value="SIGN UP">
</form>
</div>
</div>
<div style="width:500px ; float:right; height:600px;">
<div style="padding:85px;padding-right:200px;">

<h1>Log In Here</h1>
<form method="post">
<input type="text" name="Email" placeholder="example@example.com"><br><br>
<input type="password" name="Password" placeholder="**********"><br><br>
<input type="submit" name="signin" value="SIGN IN">
</div>
</div>
</body>
>>>>>>> 23b63dc70c627bdff329ff847680c6fa019a16bb
<?php
	include_once 'foot.php';
?>
