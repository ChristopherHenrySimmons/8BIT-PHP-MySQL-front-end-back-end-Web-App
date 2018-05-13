<!DOCTYPE html>

	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<!--Web Site title--->
	<title> 8-BIT</title>
	<title><?php print $ptitle ?></title>
	<link rel="icon" href="img/ZombieIcon.png"> <!--browser icon-->
	<!------------------>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1920, user-scalable=yes, maximum-scale=1">
	
	<!--Get Access to css-->
	<!--link href="Black%20Desert%20Online%20Register_files/css.css" rel="stylesheet" type="text/css"-->
	<!---Icons and fonts references---->
	<link href="https://fonts.googleapis.com/css?family=Marcellus" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="img/ZombieIcon.png" type="image/x-icon">
	<link rel="icon" href="img/ZombieIcon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/common2.css">
	<link rel="stylesheet" type="text/css" href="css/gallerycss.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="payment_method.css">
	
	<style>
		@media (max-width: 1800px) {
							.gnb_comm .link_gnb{padding:34px 21px !important}
					}
	</style>
	
</head>

<?php
include_once 'navBar.php';
?>	
<body>



<hr class="hide">



	
<div class="cont_payment" id="kakaoContent">
	<div id="cMain">
		<div id="mArticle">
			<?php include_once 'bgcover.php'; ?>
			<div class="detail_black">
				<div class="wrap_tit">
					<h2 class="tit_detail" id="kakaoBody"><span class="img_black"></span>PAYMENT</h2>
				</div>
				
				<?php include_once 'order.php'; ?>
				
				<!--CONTENT BOXE-->
				<fieldset>
				<legend class="screen_out">Payment form</legend>
				<h3 class="tit_group">PAYMENT METHOD</h3>
			<div class="group_detail group_billing">

				<!--How do we find out who paye, does account need to be logined in.-->				
				<form action="./charge.php" method="post" id="payment-form">
				
				<div class="group_set" style="">
							<dl class="list_regist">
								
									<div class="group_set">
										<div class="box_tf">
											<input  class="tf_comm" id="fullName" name="fullName" type="text" placeholder="Full Name" required> <span class="img_black ico_error"></span>
										</div>
										<span class="txt_error">Required</span>
									</div>
								
							</dl>

					
				</div>

				<div class="group_set" style="">
							<dl class="list_regist">
								
									<div class="group_set">
										<div class="box_tf">
											<input  class="tf_comm" id="cardName" name="cardName" type="text" placeholder="Name on Card" required> <span class="img_black ico_error"></span>
										</div>
										<span class="txt_error">Required</span>
									</div>
								
							</dl>

					
				</div>
				<div class="group_set" style="">
							<dl class="list_regist">
								<label class="lab_comm" ></label>
								
									<div class="group_set">
										<div class="">
										<div id="card-element"><!-- A Stripe Element will be inserted here. --></div> <span class="img_black ico_error"></span>
										</div>
										<span class="txt_error">Required</span>
									</div>
								
							</dl>

					
				</div>
																				
				</ul>
											</div>
						<div class="wrap_btn  group_billing">	
							<button style="float:left;" onclick="goBack();">BACK</button>	
							<button style="float:right;">Submit Payment</button>
							<!--GOTO ACCOUNT ADD TO PURCHASE HISTORY 21600681-->
						</div>	
										</div>
										
									</div>
								</dd>
							</dl>
						</div>
					</div>
						
						
					</fieldset>
				</form>
			
			</div>
					</div><!--// mArticle -->
		
	</div><!-- // cMain -->
</div><!-- // kakaoContent -->


<hr class="hide">


<script async="" src="script/gtm.js"></script>
<script type="text/javascript" src="script/jquery-1.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"></script>

</body>
	
<div class="bot">	
	<center>
           <b>&copy;8-Bit Game 2018. All rights reserved.</b>

</div>
<div style="background-color: #fff; border: 1px solid #ccc; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2); position: absolute; left: 0px; top: -10000px; transition: visibility 0s linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: #fff; opacity: 0.05;  filter: alpha(opacity=5)"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0; height: 0; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0; height: 0; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="bframe.htm" style="width: 100%; height: 100%;" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" name="3obl0eddig8" frameborder="0"></iframe></div></div></body></html><!--21600681-->