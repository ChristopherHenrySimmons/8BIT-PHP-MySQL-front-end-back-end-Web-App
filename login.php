<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
	include_once 'head.php';
?>
<body>
<!-- Google Tag Manager -->

<noscript><iframe src="//www.googletagmanager.com/ns.php?id=GTM-WF45LL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager -->

<?php
	include_once 'navBarLogout.php';
?>



<hr class="hide">
<div class="cont_login" id="kakaoContent">
	<div id="cMain">
		<div id="mArticle">
		<!--Cover Image Needed add in common.css-->
			<?php include_once 'bgcover.php'; ?>
			<div class="detail_black">
				<h2 class="tit_detail" id="kakaoBody">MEMBER LOGIN</h2>
				<!--account.php to login_mid.php-->
				<form id="loginForm" name="form" action="account.php" method="post">
				
					<fieldset>
						<legend class="screen_out">login form</legend>
						<input id="accessToken" name="accessToken" value="" type="hidden">
						<input id="socialId" name="socialId" value="" type="hidden">
						<input id="socialType" name="socialType" value="" type="hidden">
						<input id="returnUrl" name="returnUrl" value="%2F" type="hidden">
						<div class="form_login">
							<div class="group_set ">
								
								<div class="box_tf">
									<label class="img_8bit ico_email" for="email">Email</label> 
									<input class="tf_comm" id="ACCOUNT_Email" name="ACCOUNT_Email" placeholder="Email" type="text"> 
									<span class="img_8bit ico_error"></span>
								</div>
								<span class="txt_error"></span>
							</div>
							<div class="group_set ">
								
								<div class="box_tf">
									<label class="img_8bit ico_password" for="ACCOUNT_Password">Password</label> 
									<input class="tf_comm" id="ACCOUNT_Password" name="ACCOUNT_Password" placeholder="Password" type="password">
									<span class="img_8bit ico_error"></span>
								</div>
								<span class="txt_error"></span>
							</div>
							<div class="group_set ">
								<span class="txt_error"></span>
							</div>
							<center style="margin-top:50px;">
							<button  style=""class="" type="submit" name="submit"><span class="btn_regist">LOGIN</span></button>
							</center>
						</div>
					</fieldset>
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
