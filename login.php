<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
//21600681
	include_once 'head.php';
	include("config.php");
   	session_start();
   
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		
		$myemail = mysqli_real_escape_string($db,$_POST['ACCOUNT_Email']);
		$mypassword = mysqli_real_escape_string($db,$_POST['ACCOUNT_Password']); 
		//passcode after and
		$sql = "SELECT ACCOUNT_ID FROM ACCOUNT WHERE ACCOUNT_Email = '$myemail' and ACCOUNT_Password = '$mypassword'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$active = $row['active'];
		
		$count = mysqli_num_rows($result);
		
		// If result matched $myemail and $mypassword, table row must be 1 row
			
		if($count == 1) {
			session_register("myemail");
			$_SESSION['login_user'] = $myemail;
			
			header("location: account.php");
		}else {
			$error = "Your Login Email or Password is invalid";
		}
	}
	
?>
<body>

<?php
	include_once 'navBar.php';
?>



<hr class="hide">
<div class="cont_login" id="kakaoContent">
	<div id="cMain">
		<div id="mArticle">
		<!--Cover Image Needed add in common.css-->
			<?php include_once 'bgcover.php'; ?>
			<div class="detail_black">
				<h2 class="tit_detail" id="kakaoBody">MEMBER LOGIN</h2>
				
				<form action = "" method = "post">
                  <label>Email  :</label><input type = "text" name = "ACCOUNT_Email" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "ACCOUNT_Password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
              	</form>

				<ul class="rel_login">
					
					<center>
						<a class="link_rel" style="color:#FFF" href="register.php"><p>Or</p><p>Create your account NOW!</p></a>
					</center>
					
					<center style="margin-top:50px;">
					<!--REMOVE AFTER-->
						<a class="link_rel" style="color:#FFF;" href="adminlogin.php"><p>TEMP ADMIN LOGIN!</p></a>
					</center>
				</ul>
				
			</div>
					
	<script>
var Remember = function() {
	return {
		getEmail: function(){ try{return window.localStorage.getItem('bdo_email'); } catch(e) {return;} },
		setEmail: function(email){ try {window.localStorage.setItem('bdo_email', email);} catch(e) {return;} },
		removeEmail: function(){ try { window.localStorage.removeItem('bdo_email'); } catch(e) {return;} },
	};
}();

$(document).ready(function($) {
	$( "#loginForm" ).submit(function( event ) {
		if ($('#email').val() != '' && $("#rememberEmail").prop('checked')) {
    		Remember.setEmail($('#email').val());	
    	}
	});
	
	$('#rememberEmail').change(function() {
	    if (this.checked) {
	    	if ($('#email').val() != '') {
	    		Remember.setEmail($('#email').val());	
	    	}
	    } else {
	    	Remember.removeEmail();
	    }
	});
	
	var rememberEmail = Remember.getEmail();
	if( rememberEmail ) {
		$("#email").val(rememberEmail);
		$("#rememberEmail").prop('checked', true);
		$("#password").trigger('focus');
	} else {
		$("#rememberEmail").prop('checked', false);
		$("#email").trigger('focus');
	}
	
});
</script>
</body>
<?php
	include_once 'foot.php';
?>
