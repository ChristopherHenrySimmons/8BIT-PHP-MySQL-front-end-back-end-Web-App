<?php

if (isset($_SESSION['LoggedIn']))
{
	$isLoggedIn = $_SESSION['LoggedIn'];
}
else
{
	$isLoggedIn = false;
}

?>

<div class="inner_head">
				
<ul class="gnb_comm">
			

<li>
<a href="index.php" class="link_gnb">HOME<span class="img_8bit ico_arr"></span></a>
</li>

<li>
<a href="news.php" class="link_gnb">NEWS<span class="img_8bit ico_arr"></span></a>
</li>


<div id="login"style="float:right;margin-right:10px">

<li>
<?php
if ($isLoggedIn) 
{ ?>
<?php }
else
{ ?>
<a href="register.php" class="link_gnb">Register<span class="img_8bit ico_arr"></span></a>
<?php }
?>

</li>

						<li>
						<a href="account.php" class="link_gnb">ACCOUNT</a>
						<div class="gnb_sub">
							<ul class="list_sub">
								<li><a href="account.php" class="link_gnb_sub">INFO</a></li>
								<?php
								if ($isLoggedIn) 
								{ ?>
									<li><a href="logout.php" class="link_gnb_sub">LOGOUT</a></li>
								<?php }
								else
								{ ?>
									<li><a href="login.php" class="link_gnb_sub">LOGIN</a></li>
								<?php }
								?>
							</ul>
						</div>
					</li>

<li><a href="buyform.php" class="">
<span class="btn_regist" style="margin-top:12%;">BUY NOW</span></a></li>
</div>
</div>	

</ul>
</div>
