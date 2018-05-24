<html>

<?php
session_start();

include 'head.php';

include "navBar.php";
	

?>
<body>
	<!--START: Content-->
	<hr class="hide">
		<div class="cont_login" id="kakaoContent">
			<div id="cMain">
				<div id="mArticle">
				<!--Cover Image Needed add in common.css-->
					<?php include_once 'bgcover.php'; ?>
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
						  <img class="mySlides" src="uploads/screenshot001.png" style="height:740px;">
						  <img class="mySlides" src="uploads/screenshot002.png" style="height:740px;">
						  <img class="mySlides" src="uploads/screenshot003.png" style="height:740px;">
						  <img class="mySlides" src="uploads/screenshot004.png" style="height:740px;">

						 
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