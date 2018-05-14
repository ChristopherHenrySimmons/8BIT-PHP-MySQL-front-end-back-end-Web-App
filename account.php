<!DOCTYPE html>

	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<?php
	//21600681
	include_once 'head.php';
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 02d5ba4bc7286a68a16e58423de5d031fa9f2e33
>>>>>>> c31c54cfe4989a4191d0eb0cd982dcfef64737c6
	if(empty($_SESSION['Email']))
		{
		header("location:login.php");
		}


<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
	
>>>>>>> 23b63dc70c627bdff329ff847680c6fa019a16bb
>>>>>>> 02d5ba4bc7286a68a16e58423de5d031fa9f2e33
>>>>>>> c31c54cfe4989a4191d0eb0cd982dcfef64737c6
	?>






<body>
	
	

	

<hr class="hide">
	<div class="cont_account" id="kakaoContent">
		<div id="cMain">
			<div id="mArticle">
				<?php include_once 'bgcover.php'; ?>
				<div class="detail_black">
					<div class="wrap_tit">
						<h2 class="tit_detail" id="kakaoBody"><span class="img_black"></span>ACCOUNT</h2>
					</div>
					<h3 class="tit_group"><span class="img_black ico_account"></span>ACCOUNT INFO</h3>
					<div class="group_detail group_account">
						<dl class="list_regist">
							<dt>EMAIL</dt>
<<<<<<< HEAD
							<dd> <?php echo $_SESSION['Email'];	?> </dd>
=======
<<<<<<< HEAD
							<dd> <?php echo $_SESSION['Email'];	?> </dd>
=======
<<<<<<< HEAD
							<dd> <?php echo $_SESSION['Email'];	?> </dd>
=======
							<dd>
							<?php
							echo $_SESSION['Email'];
							?>
							</dd>
>>>>>>> 23b63dc70c627bdff329ff847680c6fa019a16bb
>>>>>>> 02d5ba4bc7286a68a16e58423de5d031fa9f2e33
>>>>>>> c31c54cfe4989a4191d0eb0cd982dcfef64737c6
							
						</dl>
						<!--FUNTION NEEDED PHP JS SQL CHAGING PASSWORD ENTER PASSWORD-->
						<dl id="password" class="list_regist list_password">
							<dt>PASSWORD</dt>
							<dd><button class="btn_regist" id="changePassword" type="button">CHANGE PASSWORD</button></dd>
						</dl>
						<dl id="password_change" class="list_regist lab_comm" style="display:none;">
							<dt>PASSWORD</dt>
							<dd>
								<form id="passwordForm" method="POST">
									<div class="group_set curPwd">
										
										<div class="box_tf">
											<label class="screen_out" for="currentPw">Current password</label> <input class="tf_comm" id="currentPw" name="changePw" placeholder="Current password" type="password"> <span class="img_black ico_error"></span>
										</div>
										<span class="txt_error"></span>
									</div>
									<div class="group_set newPwd">
										
										<div class="box_tf">
											<label class="screen_out" for="newPw">New password</label> <input class="tf_comm" id="newPw" name="changePw" placeholder="New password" type="password"> <span class="img_black ico_error"></span>
										</div>
										<span class="txt_error"></span>
									</div>
									<div class="group_set confirmPwd">
										
										<div class="box_tf">
											<label class="screen_out" for="confirmPw">Confirm password</label> <input class="tf_comm" id="confirmPw" name="changePw" placeholder="Confirm password" type="password"> <span class="img_black ico_error"></span>
										</div>
										<button class="btn_regist btn_change" type="submit">Save changes</button>
										<span class="txt_error"></span>
									</div>
								</form>
							</dd>
						</dl>
						<dl class="list_regist">
							<dt>GAME ACCESS</dt>
							<dd>
																				<span>TRY FOR FREE (7 DAYS) (EXPIRATION DATE : <span  class="txt_time">1521772600</span>)</span>
																				<a href="buyform.php" class="btn_regist">BUY NOW</a>
																									
																
							</dd>
						</dl>
						<dl class="list_regist">
							<dt>GREEN CASH</dt>
							<dd><span class="txt_num">0</span> Cash</dd>
						</dl>
						
						
					</div>
					<a class="anchor" id="screenshotupload"></a>
					<h3 class="tit_group"><span class="img_black ico_newsletter"></span>SCREENSHOT UPLOAD</h3>
					<div class="group_detail group_newsletter">
					<dl class="list_regist">
						
						<dt>UPLOAD</dt>
						<form onmouseover="" style="cursor: pointer;" action="db_uploadphoto.php" method="post" enctype="multipart/form-data">
						<input type="file" name="FileToUpload" style="background-color:#4e8064;cursor: pointer;">
						<input type="submit" value="Upload Image" name="submit" style="background-color:#4e8064;cursor: pointer;">
						</form>
					</dl>
					</div>
					
					
					<a class="anchor" id="history"></a>
					<h3 class="tit_group"><span class="img_black ico_history"></span>PURCHASE HISTORY</h3>
					<div class="group_detail group_history">
						<strong class="screen_out">Purchase Tab Menu</strong>
						<ul class="list_tab">
							<li class="on">
								<a class="link_tab" data-target="cashHistory" href="javascript:;">Game Purchase</a>
							</li>
							
						</ul>
						<!--PHP JS SQL FUNTION NEEDED GET PAYMENT HISTORY FROM DB-->
						<ul id="cashHistory" class="list_item" style="display:block;">
															<div class="none_data">
									<span class="img_black"></span>No purchase history
								</div>
													</ul>
						
					</div>
				</div>
			</div><!--// mArticle -->
			
		</div><!-- // cMain -->
	</div><!-- // kakaoContent -->
	
<div class="bot">	
	<center>
           <b>&copy;8-Bit Game 2018. All rights reserved.</b>

</div>
<div style="background-color: #fff; border: 1px solid #ccc; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2); position: absolute; left: 0px; top: -10000px; transition: visibility 0s linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: #fff; opacity: 0.05;  filter: alpha(opacity=5)"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0; height: 0; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0; height: 0; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="bframe.htm" style="width: 100%; height: 100%;" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" name="3obl0eddig8" frameborder="0"></iframe></div></div></body></html><!--21600681-->