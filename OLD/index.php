<html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<!--Web Site title--->
	<title> 8-Bit Game Home</title>
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
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/gallerycss.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href rel="stylesheet" href="css/bootstrap.min.css">
	
	
	<style>
		@media (max-width: 1800px) {
							.gnb_comm .link_gnb{padding:34px 21px !important}
					}
	</style>
	

</head>



<!-----START: Navigation bar----->

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
		
			
				
					<form>
						<li><input class="link_gnb" type="text" name="ACCOUNT_Email" placeholder="Email"></li>
						<li><input class="link_gnb" type="password" name="ACCOUNT_Password" placeholder="Password"></li>
						<li><button class="link_gnb" type="submit" name="submit">LOGIN</button></li>
					</form>
				
				<li><a class="link_gnb" href="register.php">REGISTER</a></li>
				
			

								
								
			<div id="login"style="float:right;margin-right:10px">					
			<!----Buy now button----->
			<li><a href="buyform.php" class="">
			<span class="btn_regist" style="margin-top:12%;">BUY NOW</span></a></li>
		</div>
		

	</ul>
</div>
<!----END: of navigation bar------>	
<!--START: Body-->
<body>
	<!--START: Content-->
	<hr class="hide">
		<div class="cont_login" id="kakaoContent">
			<div id="cMain">
				<div id="mArticle">
				<!--Cover Image Needed add in common.css-->
					<div class="bg_cover"></div>
					<!--TITLE GIF-->
					<center><img style="" src="img/8BitGameGif.gif"/></center>
					<div class="detail_black">
						
						<p class="desc_login" style="color:#FFF">Join us on your next great happy adventure.</p>
						
						<!--Need Some way to draw DESCRIPTION from database id?-->
						<h3 class="tit_article">DESCRIPTION</h3>
						<div class="desc_login" style="color:#FFF">
						
						<p>From TEAM B (the creators of Dave the Writer, Dude wheres my banana and more) comes 8-BIT GAME,</p> 
						<p>a co-op action horror game for the PC that casts up to four players in an epic struggle for survival</p> 
						<p>against swarming zombie hordes and terrifying mutant monsters.</p>
						
						
						</div>
						<!--VIDEO-->
						<div style="margin-top:50px;"></div>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/Ab5aXHMcTLI?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						
						
						
					</div>
					
					<h3 class="tit_article">MEMBER SCREENSHOTS</h3>
					<center>
						<div class="w3-content w3-display-container">
						  <img class="mySlides" src="img/screenshot001.png" style="height:740px;">
						  <img class="mySlides" src="img/screenshot002.png" style="height:740px;">
						  <img class="mySlides" src="img/screenshot003.png" style="height:740px;">
						  <img class="mySlides" src="img/screenshot004.png" style="height:740px;">

						 
						</div>
					</center>
						<script>
						var myIndex = 0;
						carousel();

						function carousel() {
							var i;
							var x = document.getElementsByClassName("mySlides");
							for (i = 0; i < x.length; i++) {
							   x[i].style.display = "none";  
							}
							myIndex++;
							if (myIndex > x.length) {myIndex = 1}    
							x[myIndex-1].style.display = "block";  
							setTimeout(carousel, 2000); // Change image every 2 seconds
						}
						</script>
						<br>
						
					</div>
				
			<!-- // cMain -->
		</div>
		<!-- // kakaoContent -->
	<hr class="hide">
		</div>
	<!--END: Content-->
</body>
<!--END: Body-->
<!--START: Footer-->
<div class="bot">	
	<center>
           <b>&copy;8-Bit Game 2018. All rights reserved.</b>

</div>
<!--END: Footer-->
</html><!--21600681-->