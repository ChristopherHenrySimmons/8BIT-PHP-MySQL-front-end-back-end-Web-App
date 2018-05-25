<head>
	<link rel="stylesheet" type="text/css" href="css/common2.css">
</head>

<?php
<<<<<<< HEAD
session_start();

include 'head.php';

include "navBar.php";

=======
include_once 'navBar.php';
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
try{
	$con = new PDO ("mysql:host=localhost;dbname=8bitdb","root","root");
		if(isset($_POST['submit'])){
			$ORDERS_CreiditCard = $_POST['cardNum'];
			$ORDERS_NameOnCard = $_POST['cardName'];
			$ORDERS_ExpiryDate = $_POST['cardExp'];
			$ORDERS_SecurityNumber = $_POST['cardSec'];
	
			$insert = $con->prepare("INSERT INTO ORDERS (ORDERS_CreiditCard, ORDERS_NameOnCard, ORDERS_ExpiryDate, ORDERS_SecurityNumber)
			VALUES(:cardNum,:cardName,:cardExp,:cardSec) ");
			$insert->bindParam(':cardNum',$ORDERS_CreiditCard);
			$insert->bindParam(':cardName',$ORDERS_NameOnCard);
			$insert->bindParam(':cardExp',$ORDERS_ExpiryDate);
			$insert->bindParam(':cardSec',$ORDERS_SecurityNumber);
			$insert->execute();
		}
	}

catch(PDOException $e){
	echo "error".$e->getMessage();
}
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
		<?php
		if ($isLoggedIn) 
		{ ?>
				<legend class="screen_out">Payment form</legend>
				<h3 class="tit_group">PAYMENT METHOD</h3>
			<div class="group_detail group_billing">

				<!--How do we find out who paye, does account need to be logined in.-->				
				<form action="./charge.php" method="post" id="payment-form">
				
				<div class="group_set" style="">
							<dl class="list_regist">
								
									<div class="group_set">
										<div class="box_tf">
											<input  class="tf_comm" id="cardNum" name="cardNum" type="text" placeholder="Card Number" required> <span class="img_black ico_error"></span>
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

<<<<<<< HEAD
=======
				<div class="group_set" style="">
							<dl class="list_regist">
								
									<div class="group_set">
										<div class="box_tf">
											<input  class="tf_comm" id="cardExp" name="cardExp" type="text" placeholder="Expiration Date MM/YY" required> <span class="img_black ico_error"></span>
										</div>
										<span class="txt_error">Required</span>
									</div>
								
							</dl>

					
				</div>

>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
				<div class="group_set" style="">
							<dl class="list_regist">
								
									<div class="group_set">
										<div class="box_tf">
<<<<<<< HEAD
											<input  class="tf_comm" id="cardExp" name="cardExp" type="text" placeholder="Expiration Date MM/YY" required> <span class="img_black ico_error"></span>
=======
											<input  class="tf_comm" id="cardSec" name="cardSec" type="text" placeholder="Security Code" required> <span class="img_black ico_error"></span>
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
										</div>
										<span class="txt_error">Required</span>
									</div>
								
							</dl>

					
				</div>
<<<<<<< HEAD

				<div class="group_set" style="">
							<dl class="list_regist">
								
									<div class="group_set">
										<div class="box_tf">
											<input  class="tf_comm" id="cardSec" name="cardSec" type="text" placeholder="Security Code" required> <span class="img_black ico_error"></span>
										</div>
										<span class="txt_error">Required</span>
									</div>
								
							</dl>

					
				</div>
=======
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
				
																				
				</ul>
											</div>
						<div class="wrap_btn  group_billing">	
							<button style="float:left;" onclick="goBack();">BACK</button>	
<<<<<<< HEAD
							<input style="float:right;" type="submit" name="submit" value="Submit Payment">
=======
							<input style="float:right;" type="submit" name="submit" value="Subment Payment">
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
							<!--GOTO ACCOUNT ADD TO PURCHASE HISTORY 21600681-->
						</div>	
										</div>
										
									</div>
								</dd>
							</dl>
						</div>
					</div>
						
		<?php
		}
		else
		{ ?>
			
			<p style="color:black">If you would like to purchase our game first you have to make an account please.</p>
			<li><a href="login.php" class="link_gnb_sub">"Click here"</a></li>
		<?php 
		} ?>
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