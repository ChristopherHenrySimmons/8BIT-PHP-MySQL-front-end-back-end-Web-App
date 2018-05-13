<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
	include_once 'head.php';
	include_once 'navBar.php';
?>
<body>


<hr class="hide">
<div class="cont_login" id="kakaoContent">
	<div id="cMain">
		<div id="mArticle">
		<!--Cover Image Needed add in common.css-->
			<?php include_once 'bgcover.php'; ?>
			<div class="detail_black">
				<h2 class="tit_detail" id="kakaoBody">ADMIN LOGIN</h2>
				<!--adminpage.php to login_mid.php-->
				<form id="loginForm" name="form" action="adminpage.php" method="post">
				
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
									<input class="tf_comm" id="email" name="email" placeholder="Email" type="text"> 
									<span class="img_8bit ico_error"></span>
								</div>
								<span class="txt_error"></span>
							</div>
							<div class="group_set ">
								
								<div class="box_tf">
									<label class="img_8bit ico_password" for="password">Password (8~30 Characters)</label> 
									<input class="tf_comm" id="password" name="password" placeholder="Password (8~30 Characters)" type="password">
									<span class="img_8bit ico_error"></span>
								</div>
								<span class="txt_error"></span>
							</div>
							<div class="group_set ">
								<span class="txt_error"></span>
							</div>
							<center style="margin-top:50px;">
							<button style=""class="" type="submit"><span class="btn_regist">LOGIN</span></button>
							</center>
						</div>
					</fieldset>
				</form>
				
				
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
<div class="bot">	
	<center>
           <b>&copy;8-Bit Game 2018. All rights reserved.</b>

</div>
</html><!--21600681-->