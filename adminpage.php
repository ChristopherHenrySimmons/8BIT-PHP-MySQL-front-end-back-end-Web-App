<!DOCTYPE html>
	
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<?php
	include_once 'head.php';
	
	?>

<body>
	



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

								<dd>
								
								<p>
                    				<a href="ADMINS/create.php" class="btn btn-success">Create</a>
                				</p>
									<table id="ADMIN_TABLE">
										<tr>
											<th>ADMINS_ID</th>
											<th>EMAIL</th>
											<th>PASSWORD</th>
											<th>ACTION</th>
										</tr>
									  <!--PHP TABLE START-->
									  <?php
										include 'dbconn.php';
										$prodCat = "Cable";

										$sql = "SELECT * FROM ADMINS ORDER BY ADMINS_ID ?";
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute(array($prodCat));

										$numrow = $dbrs->rowCount();
										
										foreach ($dbrs as $dbrow) {
													echo '<tr>';
													echo '<td>'. $row['ADMINS_ID'] . '</td>';
													echo '<td>'. $row['ADMINS_Email'] . '</td>';
													echo '<td>'. $row['ADMINS_Password'] . '</td>';
													echo '<td width=250>';
													echo '<a class="btn" href="ADMINS/read.php?id='.$row['ADMINS_ID'].'">Read</a>';
													echo ' ';
													echo '<a class="btn btn-success" href="ADMINS/update.php?id='.$row['ADMINS_ID'].'">Update</a>';
													echo ' ';
													echo '<a class="btn btn-danger" href="ADMINS/delete.php?id='.$row['ADMINS_ID'].'">Delete</a>';
													echo '</td>';
													echo '</tr>';
										}
										
										?>
									    
									  
									  </tr>
									</table>
								</dd>					
					</div>
					<!--SCREENSHOT MANAGEMENT-->
					<form id="screenshotManagement" name="userManagement" method="POST" action="userManagement.php" autocomplete="on">
					<a class="anchor" id="screenshotmanagement"></a>
					<h3 id="coupon" class="tit_group"><span class="img_black ico_coupon"></span>SCREENSHOT MANAGEMENT</h3>
					<div class="group_detail group_coupon">
						
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
	<?php
		include 'dbconn.php';
		$prodCat = "Cable";

		$sql = "SELECT * FROM ADMINS ORDER BY ADMINS_ID ?";
		$dbrs = $dbConn->prepare($sql);
		$dbrs->execute(array($prodCat));

		$numrow = $dbrs->rowCount();
		
		?>
		
  </div>
</div>
</dd>

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
						
						
						<ul class="">
							<div class="">
									<span class="img_black"></span>
							<dl class="list_regist">
								
								<dd>
								
								<p>
                    				<a href="ACCOUNT/create.php" class="btn btn-success">Create</a>
                				</p>
									<table id="ACCOUNT_TABLE">
										<tr>
											<th>ACCOUNT_ID</th>
											<th>EMAIL</th>
											<th>PASSWORD</th>
											<th>ACTION</th>
										</tr>
									  <!--PHP TABLE START-->
									  <?php
										include 'dbconn.php';
										$prodCat = "Cable";

										$sql = "SELECT * FROM ADMINS ORDER BY ADMINS_ID ?";
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute(array($prodCat));

										$numrow = $dbrs->rowCount();
										
										foreach ($dbrs as $dbrow) {
													echo '<tr>';
													echo '<td>'. $row['ACCOUNT_ID'] . '</td>';
													echo '<td>'. $row['ACCOUNT_Email'] . '</td>';
													echo '<td>'. $row['ACCOUNT_Password'] . '</td>';
													echo '<td width=250>';
													echo '<a class="btn" href="ACCOUNT/read.php?id='.$row['ACCOUNT_ID'].'">Read</a>';
													echo ' ';
													echo '<a class="btn btn-success" href="ACCOUNT/update.php?id='.$row['ACCOUNT_ID'].'">Update</a>';
													echo ' ';
													echo '<a class="btn btn-danger" href="ACCOUNT/delete.php?id='.$row['ACCOUNT_ID'].'">Delete</a>';
													echo '</td>';
													echo '</tr>';
										}
										
										?>
									    
									  
									  </tr>
									</table>
								</dd>
							</dl>
							</div>
							
						</ul>
													
					</div>
					</form>
					<!--USERS END-->
					

					<!--NEWS-->
					<br>
					<form id="newsManagement" name="newsManagement" method="POST" action="newsManagement.php" autocomplete="on">
					<a class="anchor" id="newsManagement"></a>
					<h3 id="coupon" class="tit_group"><span class="img_black ico_coupon"></span>NEWS</h3>
					<div class="group_detail group_coupon">

								<dd>
								
								<p>
                    				<a href="NEWS/create.php" class="btn btn-success">Create</a>
                				</p>
									<table id="ADMIN_TABLE">
										<tr>
											<th>ARTICLE_ID</th>
											<th>TITLE</th>
											<th>CATEGORY</th>
											<th>DATE</th>
											<th>MESSAGE</th>
											<th>ACTION</th>
										</tr>
									  <!--PHP TABLE START-->
									  <?php
										include 'dbconn.php';
										$prodCat = "Cable";

										$sql = "SELECT * FROM ADMINS ORDER BY ADMINS_ID ?";
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute(array($prodCat));

										$numrow = $dbrs->rowCount();
										
										foreach ($dbrs as $dbrow) {
													echo '<tr>';
													echo '<td>'. $row['ARTICLE_ID'] . '</td>';
													echo '<td>'. $row['ARTICLE_Title'] . '</td>';
													echo '<td>'. $row['ARTICLE_Category'] . '</td>';
													echo '<td>'. $row['ARTICLE_Date'] . '</td>';
													echo '<td>'. $row['ARTICLE_Message'] . '</td>';
													echo '<td width=250>';
													echo '<a class="btn" href="NEWS/read.php?id='.$row['ARTICLE_ID'].'">Read</a>';
													echo ' ';
													echo '<a class="btn btn-success" href="NEWS/update.php?id='.$row['ARTICLE_ID'].'">Update</a>';
													echo ' ';
													echo '<a class="btn btn-danger" href="NEWS/delete.php?id='.$row['ARTICLE_ID'].'">Delete</a>';
													echo '</td>';
													echo '</tr>';
										}
										
										?>
									    
									  
									  </tr>
									</table>
								</dd>
						
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
						
						<ul class="list_item">
															<div class="none_data">
									<span class="img_black"></span>
									<dl class="list_regist">
									<dd>
								
								<p>
                    				<a href="PRODUCT/create.php" class="btn btn-success">Create</a>
                				</p>
									<table id="ADMIN_TABLE">
										<tr>
											<th>PRODUCT_ID</th>
											<th>PRODUCT_Type</th>
											<th>PRODUCT_Title</th>
											<th>PRODUCT_Price</th>
											<th>PRODUCT_Version</th>
											<th>ACTION</th>
										</tr>
									  <!--PHP TABLE START-->
									  <?php
										include 'dbconn.php';
										$prodCat = "Cable";

										$sql = "SELECT * FROM ADMINS ORDER BY ADMINS_ID ?";
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute(array($prodCat));

										$numrow = $dbrs->rowCount();
										
										foreach ($dbrs as $dbrow) {
													echo '<tr>';
													echo '<td>'. $row['PRODUCT_ID'] . '</td>';
													echo '<td>'. $row['PRODUCT_Type'] . '</td>';
													echo '<td>'. $row['PRODUCT_Title'] . '</td>';
													echo '<td>'. $row['PRODUCT_Price'] . '</td>';
													echo '<td>'. $row['PRODUCT_Version'] . '</td>';
													echo '<td width=250>';
													echo '<a class="btn" href="PRODUCT/read.php?id='.$row['ARTICLE_ID'].'">Read</a>';
													echo ' ';
													echo '<a class="btn btn-success" href="PRODUCT/update.php?id='.$row['ARTICLE_ID'].'">Update</a>';
													echo ' ';
													echo '<a class="btn btn-danger" href="PRODUCT/delete.php?id='.$row['ARTICLE_ID'].'">Delete</a>';
													echo '</td>';
													echo '</tr>';
										}
										
										?>
									    
									  
									  </tr>
									</table>
								</dd>

							</dl>
								</div>
													</ul>
													s
													
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
								
								<p>
                    				<a href="ORDERS/create.php" class="btn btn-success">Create</a>
                				</p>
									<table id="ADMIN_TABLE">
										<tr>
											<th>ORDERS_ID</th>
											<th>ORDERS_CreiditCard</th>
											<th>ORDERS_ExpiryDate</th>
											<th>ORDERS_SecurityNumber</th>
											<th>ORDERS_NameOnCard</th>
											<th>ORDERS_DATE</th>
											<th>ACCOUNT_ID</th>
											<th>PRODUCT_ID</th>
											<th>ACTION</th>
										</tr>
									  <!--PHP TABLE START-->
									  <?php
										include 'dbconn.php';
										$prodCat = "Cable";

										$sql = "SELECT * FROM ADMINS ORDER BY ADMINS_ID ?";
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute(array($prodCat));

										$numrow = $dbrs->rowCount();
										
										foreach ($dbrs as $dbrow) {
													echo '<tr>';
													echo '<td>'. $row['ORDERS_ID'] . '</td>';
													echo '<td>'. $row['ORDERS_CreiditCard'] . '</td>';
													echo '<td>'. $row['ORDERS_ExpiryDate'] . '</td>';
													echo '<td>'. $row['ORDERS_SecurityNumber'] . '</td>';
													echo '<td>'. $row['ORDERS_NameOnCard'] . '</td>';
													echo '<td>'. $row['ORDERS_DATE'] . '</td>';
													echo '<td>'. $row['ACCOUNT_ID'] . '</td>';
													echo '<td>'. $row['PRODUCT_ID'] . '</td>';
													echo '<td width=250>';
													echo '<a class="btn" href="ORDERS/read.php?id='.$row['ARTICLE_ID'].'">Read</a>';
													echo ' ';
													echo '<a class="btn btn-success" href="ORDERS/update.php?id='.$row['ARTICLE_ID'].'">Update</a>';
													echo ' ';
													echo '<a class="btn btn-danger" href="ORDERS/delete.php?id='.$row['ARTICLE_ID'].'">Delete</a>';
													echo '</td>';
													echo '</tr>';
										}
										
										?>
									    
									  
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