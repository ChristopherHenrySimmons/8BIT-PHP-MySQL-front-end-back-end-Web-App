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
				
				
<!--DELETED-->
		
<!----Login and register buttons----->
<div id="login"style="float:right;margin-right:10px">
<li>
						<a href="adminpage.php" class="link_gnb">ACCOUNT</a>
						<div class="gnb_sub">
							<ul class="list_sub">
								
								<li><a href="index.php" class="link_gnb_sub">LOGOUT</a></li>
							</ul>
						</div>
					</li>
<!--DELETED-->
					
					
					
<!----Buy now button----->
<li><a href="buyform.php" class="">
<span class="btn_regist" style="margin-top:12%;">BUY NOW</span></a></li>
</div>
</div>	

</ul>
</div>
<!----End of navigation bar------>	

<hr class="hide">
	<div class="cont_account" id="kakaoContent">
		<div id="cMain">
			<div id="mArticle">
				<?php include_once 'bgcover.php'; ?>
				<div class="detail_black">
					<div class="wrap_tit">
						<h2 class="tit_detail" id="kakaoBody"><span class="img_black"></span>ADMIN PAGE</h2>
					</div>
					<h3 class="tit_group"><span class="img_black ico_account"></span>ADMIN INFO</h3>
					<div class="group_detail group_account">
						<dl class="list_regist">
							<dt>EMAIL</dt>
							<dd>ADMIN@8BITMAIL.com</dd>
						</dl>
						<dl id="password" class="list_regist list_password">
							<dt>PASSWORD</dt>
							<dd><button class="btn_regist" id="changePassword" type="button">CHANGE PASSWORD</button></dd>
						</dl>
						<dl id="password_change" class="list_regist lab_comm" style="display:none;">
							<dt>PASSWORD</dt>
							<dd>
								<form id="passwordForm" method="POST">
									<div class="group_set curPwd">
										
										<div class="box_bit">
											<label class="screen_out" for="currentPw">Current password</label> <input class="bit_comm" id="currentPw" name="changePw" placeholder="Current password" type="password"> <span class="img_black ico_error"></span>
										</div>
										<span class="txt_error"></span>
									</div>
									<div class="group_set newPwd">
										
										<div class="box_bit">
											<label class="screen_out" for="newPw">New password</label> <input class="bit_comm" id="newPw" name="changePw" placeholder="New password" type="password"> <span class="img_black ico_error"></span>
										</div>
										<span class="txt_error"></span>
									</div>
									<div class="group_set confirmPwd">
										
										<div class="box_bit">
											<label class="screen_out" for="confirmPw">Confirm password</label> <input class="bit_comm" id="confirmPw" name="changePw" placeholder="Confirm password" type="password"> <span class="img_black ico_error"></span>
										</div>
										<button class="btn_regist btn_change" type="submit">Save changes</button>
										<span class="txt_error"></span>
									</div>
								</form>
							</dd>
						</dl>
						
						
						
					</div>
					<!--SCREENSHOT MANAGEMENT-->
					<form id="screenshotManagement" name="userManagement" method="POST" action="userManagement.php" autocomplete="on">
					<a class="anchor" id="screenshotmanagement"></a>
					<h3 id="coupon" class="tit_group"><span class="img_black ico_coupon"></span>SCREENSHOT MANAGEMENT</h3>
					<div class="group_detail group_coupon">
						<strong class="screen_out">My coupon</strong>
						<ul class="list_item">
							<div class="none_data">
									<span class="img_black"></span>
							<dl class="list_regist">
							<!--CLEAN UP LINE 154 to 176-->
							<!--IMAGE-->
							<!-- Images used to open the lightbox -->
							<dd>

<div class="row">
  <div class="">
    <img onmouseover="" style="cursor: pointer; width:200px; float:left; position:relative; margin-right:68px;" src="img/screenshot001.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
  
    <img onmouseover="" style="cursor: pointer; width:200px; float:left; position:relative; margin-right:68px;" src="img/screenshot002.png" onclick="openModal();currentSlide(2)" class="hover-shadow">
  
    <img onmouseover="" style="cursor: pointer; width:200px; float:left; position:relative; margin-right:68px;" src="img/screenshot003.png" onclick="openModal();currentSlide(3)" class="hover-shadow">
  
    <img onmouseover="" style="cursor: pointer; width:200px; float:left; position:relative; " src="img/screenshot004.png" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
</div>
</dd>


<!-- The Modal/Lightbox -->
<!-- ERROR RESALUTION AND/OR POSTION OF NEXT PRE -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="img/screenshot001.png" style="width:100%; height:600px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="img/screenshot002.png" style="width:100%; height:600px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="img/screenshot003.png" style="width:100%; height:600px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="img/screenshot004.png" style="width:100%; height:600px;">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

   
  </div>
</div>
<script>
// Open the Modal
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

</script>
<!--END IMAGE-->
							
							</dt>
							
							</dl>
							</div>
							
													</ul>
													<dd style="margin-bottom:10px;cursor: pointer;">
													<form action="db_uploadphoto.php" method="post" enctype="multipart/form-data">
													<input type="file" name="FileToUpload" style="background-color:#4e8064;cursor: pointer;">
													<input type="submit" value="Upload Image" name="submit" style="background-color:#4e8064;cursor: pointer;">
													</form>
													<!--EDIT PHP OVERRIDE SS4 OR EDIT = pop up? -->											
													</dd>
													
											</div>
											</form>
					<!--END SCREENSHOT MANAGEMENT-->
					<!--USERS-->
					<br>
					<form id="userManagement" name="userManagement" method="POST" action="userManagement.php" autocomplete="on">
					
					<h3 id="coupon" class="tit_group"><span class="img_black ico_coupon"></span>USER MANAGEMENT</h3>
					
					<div class="group_detail group_coupon">
						<strong class="screen_out">My coupon</strong>
						
						<ul class="">
							<div class="">
									<span class="img_black"></span>
							<dl class="list_regist">
								
								<dd>
								<div class="box_bit"> <input style="margin-top:10px; background:#4e8064;" class="bit_comm" id="userEmail" name="userEmail" type="text" ></div>
						
									<table id="ACCOUNT_TABLE">
									  <tr>
										<th>ACCOUNT_ID</th>
										<th>EMAIL</th>
										<th>PASSWORD</th>
										<!--<th>ACCOUNT STATUS</th>-->
									  </tr>
									  <!--PHP TABLE START-->
									  <?php
									  $conn = mysqli_connect("localhost","root","root","loginsystem");
									  if ($conn-> connect_error) {
										  die("Connection failed" . $ conn-> connect_error);							  
									  }
									  
									  $sql = "SELECT ACCOUNT_ID, ACCOUNT_Email, ACCOUNT_Password from loginsystem";
									  $result = $conn-> query($sql);
									  
									  if ($result-> num_rows > 0){
										  while ($row = $result-> fetch_assoc()){
											  echo "<tr><td>". $row[ACCOUNT_ID]"</td><td>". $row[ACCOUNT_Email] ."</td><td>" .$row[ACCOUNT_Password] ."</td></tr>";
										  }
										echo "</table>";
									  }
									  else{
										  echo "0 result";
									  }
									  
									  $conn-> close();
									  ?>
									  <!--PHP TABLE END-->
									  <tr>
										<td><input name="account_id" onfocus="if (this.value=='001') " type="text" value="001"></td>
										<td><input name="email" onfocus="if (this.value=='FAKE@EMAIL.COM') " type="text" value="FAKE@EMAIL.COM"></td>
										<td><input name="usertype" onfocus="if (this.value=='Member') " type="text" value="Member"></td>
										<td><input name="account_status" onfocus="if (this.value=='0') " type="text" value="0"></td>
										<!--0 or 1 ?-->
									  </tr>
									  
									  
									  </tr>
									</table>
								</dd>
							</dl>
							</div>
							
													</ul>
													
													<!--NEED THESES?-->
													<span class="btn_regist"style="margin-bottom:10px;cursor: pointer;" onclick="ACCOUNTmyCreateFunction()">Create row</span>
													<span class="btn_regist"style="float:;margin-bottom:10px;cursor: pointer;" onclick="ACCOUNTmyDeleteFunction()">Delete row</span><!--INPUT NEEDED-->
													<span class="btn_regist"style="float:;margin-bottom:10px;cursor: pointer;" onclick="ACCOUNTSaveFunction()">Save</span><!--FUNTION NEEDED-->
													
													<!--FUNTION ADD ROW PHP? 21600681-->
													<script>
													function ACCOUNTmyCreateFunction() {
														var table = document.getElementById("ACCOUNT_TABLE");
														var row = table.insertRow(-1);
														var cell1 = row.insertCell(0);
														var cell2 = row.insertCell(1);
														var cell3 = row.insertCell(2);
														var cell4 = row.insertCell(3);
														
														var element1 = document.createElement('input');
														element1.type="text";
														cell1.appendChild(element1);
														var element2 = document.createElement('input');
														element1.type="text";
														cell2.appendChild(element2);
														var element3 = document.createElement('input');
														element1.type="text";
														cell3.appendChild(element3);
														var element4 = document.createElement('');
														element1.type="text";
														cell4.appendChild(element4);
														<!--need create input text?-->
														
														
													}

													function ACCOUNTmyDeleteFunction() {
													<!--GET INPUT for Row deletion?-->
														document.getElementById("ACCOUNT_TABLE").deleteRow(-1);
													}
													</script>
											</div>
					</form>
					<!--USERS END-->
					

					<!--NEWS-->
					<br>
					<form id="newsManagement" name="newsManagement" method="POST" action="newsManagement.php" autocomplete="on">
					<a class="anchor" id="newsManagement"></a>
					<h3 id="coupon" class="tit_group"><span class="img_black ico_coupon"></span>NEWS</h3>
					<div class="group_detail group_coupon">
						<strong class="screen_out">My coupon</strong>
						<ul class="list_item">
															<div class="none_data">
									<span class="img_black"></span>
									<dl class="list_regist">
									
							<dt>TITLE</dt>
							<dd><input name="newsTitle" onfocus="if (this.value=='TITLE HERE') this.value = ''" type="text" value="TITLE HERE"></dd>
							
							</dl>
							<dl class="list_regist">
							<dt>MESSAGE</dt>
							<dd><input style="height:;" name="newsMessage" onfocus="if (this.value=='MESSAGE HERE') this.value = ''" type="text" value="MESSAGE HERE"></dd>
							
							</dl>
							<dl>
							<select style="float:left; ">
								  <option value="patchNotes">PATCH NOTES</option>
								  <option value="maintenance">MAINTENANCE</option>
								  <option value="events">EVENTS</option>
								  <option value="announcements">ANNOUNCEMENTS</option>
								</select>
								
													<dd style="margin-bottom:10px;cursor: pointer;">
													<form action="db_uploadphoto.php" method="post" enctype="multipart/form-data">
													<input type="file" name="FileToUpload" style="background-color:#4e8064;cursor: pointer;">
													<input type="submit" value="Upload Image" name="submit" style="background-color:#4e8064;cursor: pointer;">
													</form>
													<!--EDIT PHP OVERRIDE SS4 OR EDIT = pop up? -->											
													</dd>
							</dl>
								</div>
								
													</ul>
													
								
													<span onmouseover="" style="cursor: pointer;margin-bottom:10px;" class="btn_regist">POST</span>
													<a href="news.php" target="_blank"><span class="btn_regist"style="margin-bottom:10px; ">PREVEIW</span></a>
											</div>
											</form>
					<!--END NEWS-->
					<!--PRODUCT-->
					<br>
					<form id="productManagement" name="productManagement" method="POST" action="productManagement.php" autocomplete="on">
					<a class="anchor" id="productManagement"></a>
					<h3 id="coupon" class="tit_group"><span class="img_black ico_coupon"></span>PRODUCT</h3>
					<div class="group_detail group_coupon">
						<strong class="screen_out">My coupon</strong>
						<ul class="list_item">
															<div class="none_data">
									<span class="img_black"></span>
									<dl class="list_regist">
							<dd>
							<table id="PRODUCT_TABLE">
							  <tr>
								<th>PRODUCT_ID</th>
								<th>PRODUCT_TYPE</th>
								<th>TITLE</th>
								<th>PRICE</th>
							  </tr>
							  <tr>
								
								<td><input name="product_id" onfocus="if (this.value=='001') " type="text" value="001"></td>
								<td><input name="title" onfocus="if (this.value=='GAME') " type="text" value="GAME"></td>
								<td><input name="title" onfocus="if (this.value=='8-BIT GAME') " type="text" value="8-BIT GAME"></td>
								<td><input name="price" onfocus="if (this.value=='9.99USD') " type="text" value="9.99USD"></td>
							  </tr>
							  
							  
							  </tr>
							</table>

</dd>

							</dl>
								</div>
													</ul>
													<!--NEED THESES?-->
													<span class="btn_regist"style="margin-bottom:10px;cursor: pointer;" onclick="PRODUCTmyCreateFunction()">Create row</span>
													<span class="btn_regist"style="float:;margin-bottom:10px;cursor: pointer;" onclick="PRODUCTmyDeleteFunction()">Delete row</span><!--INPUT NEEDED-->
													<span class="btn_regist"style="float:;margin-bottom:10px;cursor: pointer;" onclick="PRODUCTSaveFunction()">Save</span><!--FUNTION NEEDED-->
													
													<!--FUNTION ADD ROW PHP? 21600681-->
													<script>
													function PRODUCTmyCreateFunction() {
														var table = document.getElementById("PRODUCT_TABLE");
														var row = table.insertRow(-1);
														var cell1 = row.insertCell(0);
														var cell2 = row.insertCell(1);
														var cell3 = row.insertCell(2);
														var cell4 = row.insertCell(3);
														
														var element1 = document.createElement('input');
														element1.type="text";
														cell1.appendChild(element1);
														var element2 = document.createElement('input');
														element1.type="text";
														cell2.appendChild(element2);
														var element3 = document.createElement('input');
														element1.type="text";
														cell3.appendChild(element3);
														var element4 = document.createElement('input');
														element1.type="text";
														cell4.appendChild(element4);
														<!--need create input text?-->
														
														
													}

													function PRODUCTmyDeleteFunction() {
													<!--GET INPUT for Row deletion?-->
														document.getElementById("PRODUCT_TABLE").deleteRow(-1);
													}
													</script>
													
											</div>
											</form>
					<!--END PRODUCT-->
					<!--ORDERS-->
					<br>
					<form id="orders" name="orders" method="POST" action="orders.php" autocomplete="on">
					<a class="anchor" id="orders"></a>
					<h3 class="tit_group"><span class="img_black ico_history"></span>ORDERS</h3>
					<div class="group_detail group_history">
						<strong class="screen_out">Purchase Tab Menu</strong>
						<ul class="list_tab">
							<li class="on">
								<a class="link_tab" data-target="cashHistory" href="javascript:;">Game Orders</a>
							</li>
							
						</ul>
						<ul id="cashHistory" class="list_item" style="display:block;">
															<div class="none_data">
									<dd>
									<table>
									  <tr>
										<th>ACCOUNT_EMAIL</th>
										<th>PRODUCT_ID</th>
										<th>PRODUCT_TYPE</th>
										<th>TITLE</th>
										<th>PRICE</th>
										<th>CONFIRMATION</th>
									  </tr>
									  <tr>
										<td>FAKE@EMAIL.COM</td>
										<td>001</td>
										<td>GAME</td>
										<td>8-BIT GAME</td>
										<td>9.99USD</td>
										<td>YES</td>
									  </tr>
									  
									  
									  </tr>
									</table>
									</dd>
								</div>
													</ul>
						
					</div>
					</form>
					<!--END ORDERS-->
				</div>
			</div><!--// mArticle -->
			
		</div><!-- // cMain -->
	</div><!-- // kakaoContent -->
	
<div class="bot">	
	<center>
           <b>&copy;8-Bit Game 2018. All rights reserved.</b>

</div>
<div style="background-color: #fff; border: 1px solid #ccc; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2); position: absolute; left: 0px; top: -10000px; transition: visibility 0s linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: #fff; opacity: 0.05;  filter: alpha(opacity=5)"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0; height: 0; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0; height: 0; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="bframe.htm" style="width: 100%; height: 100%;" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" name="3obl0eddig8" frameborder="0"></iframe></div></div></body></html><!--21600681-->