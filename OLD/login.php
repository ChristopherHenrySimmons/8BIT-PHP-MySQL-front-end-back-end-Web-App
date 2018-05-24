<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
//21600681

echo isset($_POST['signin']) ;

	include_once 'head.php';
		
	try{
		$con = new PDO ("mysql:host=localhost;dbname=8bitdb","root","root");

		
		
		if(isset($_POST['signin']))
		{
			$ACCOUNT_Email = $_POST['Email'];
			$ACCOUNT_Password = $_POST['Password'];

			$select = $con->prepare("SELECT * FROM ACCOUNT WHERE ACCOUNT_Email=? and ACCOUNT_Password=?");
			$select->execute(array($ACCOUNT_Email,$ACCOUNT_Password));
			$numrow=$select->rowCount();
			

			if($numrow == 0)
			{
				echo "invalid Email or Password";
			}
			else
			{
				$_SESSION['Email']=$ACCOUNT_Email;

				header("location:account.php"); 
			}
		}
	}
	catch(PDOException $e)
		{
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
						<form method="post" action="login.php">
						<input type="text" name="Email" placeholder="Email"><br><br>
						<input type="Password" name="Password" placeholder="Password"><br><br>
						<input type="submit" name="signin" value="SIGN IN">
						</center>

		</div>
						
	</div>
					
				
	</div>
			

<?php
	include_once 'foot.php';
?>
