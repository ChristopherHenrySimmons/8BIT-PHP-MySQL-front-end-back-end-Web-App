<!DOCTYPE html>

	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
include_once 'head.php';
?>

<body>



<!-----Navigation bar----->

<div class="inner_head">
				
<ul class="gnb_comm">
			
			
<!--Home Temp-->
<li>
<a href="index.php" class="link_gnb">HOME<span class="img_8bit ico_arr"></span></a>
</li>
<!------------->		
<!---News dropdown menu---->
<li>
<a href="news.php" class="link_gnb">NEWS<span class="img_8bit ico_arr"></span></a>
<!--Deleted-->
</li>
<!--------------------------->
				
				
				
				
<!--DELETED-->
				
				

		
<!----Login and register buttons----->
<div id="login"style="float:right;margin-right:10px">
<li><a href="login.php" class="link_gnb">LOGIN</a></li>
<li><a href="register.php" class="link_gnb">REGISTER</a></li>

					
					
					
<!----Buy now button----->
<li><a href="buyform.php" class="">
<span class="btn_regist" style="margin-top:12%;">BUY NOW</span></a></li>
</div>
</div>	

</ul>
</div>
<!----End of navigation bar------>	

<hr class="hide">
	<div class="cont_login" id="kakaoContent">
		<div id="cMain">
			<div id="mArticle">
			<!--Cover Image Needed add in common.css-->
				<div class="bg_cover"></div>
				<div class="detail_black">
					<h2 class="tit_detail" id="kakaoBody">CREATE YOUR ACCOUNT</h2>
					<p class="desc_login" style="color:#FFF">Join us on your next great happy adventure.</p>
					
					
					<form action="includes/signup.inc.php" method="POST">
						<fieldset>
							<legend class="screen_out">create account form</legend>
							
							<div class="form_create">
								<div class="group_set">
									<div class="box_tf">
										<label class="img_8bit ico_email" for="email">Email</label>
										<input class="tf_comm"  name="ACCOUNT_Email" placeholder="Email" type="text"><span class="img_8bit ico_error"></span>
									</div>
									<span class="txt_error"></span>
								</div>
								<div class="group_set ">  
									<div class="box_tf">
										<label class="img_8bit ico_password" for="password">Password (8~30 Characters)</label>
										<input class="tf_comm"  name="ACCOUNT_Password" placeholder="Password" type="password"><span class="img_8bit ico_error"></span>
									</div>
									<span class="txt_error"></span>
								</div>
																
								<center>
								<button style="margin-top:50px;" type="submit" name="submit"><span class="btn_regist">SIGN UP</span></button>
								</center>
								
								
							</div>
						</fieldset>
						
					</form>
				</div>
						
				</div>
			
		<!-- // cMain -->
	</div>
	<!-- // kakaoContent -->
	<hr class="hide">
	
	<!--Needed?-->
	<script type="text/javascript" src="jquery-1.js"></script>
	<script src="api.js"></script>
	
<div class="bot">	
	<center>
           <b>&copy;8-Bit Game 2018. All rights reserved.</b>

</div>
</html><!--21600681-->
<div style="background-color: #fff; border: 1px solid #ccc; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2); position: absolute; left: 0px; top: -10000px; transition: visibility 0s linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: #fff; opacity: 0.05;  filter: alpha(opacity=5)"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0; height: 0; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0; height: 0; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="bframe.htm" style="width: 100%; height: 100%;" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" name="3obl0eddig8" frameborder="0"></iframe></div></div></body></html><!--21600681-->