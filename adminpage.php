<?php
session_start();

include 'head.php';

include "navBar.php";
<<<<<<< HEAD
	
if (isset($_SESSION['LoggedInA']))
{
	if($_SESSION['LoggedInA'] == false)
	{
		header ('location: adminlogin.php');
	}
}
else
{
	header ('location: adminlogin.php');
}

?>
	
=======
	
if (isset($_SESSION['LoggedIn']))
{
	if($_SESSION['LoggedIn'] == false)
	{
		header ('location: adminlogin.php');
	}
}
else
{
	header ('location: adminlogin.php');
}

?>
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985

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
<<<<<<< HEAD
                    				<a  class="btn_regist"  href="ADMIN/create.php" class="btn_regist">Create</a>
=======
                    				<button href="ADMIN/create.php" class="btn btn-success">Create</button>
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
                				</p>
									<table style="color:#111;" style="color:#111;" id="ADMIN_TABLE">
										<tr>
											<th>ADMIN_ID</th>
											<th>EMAIL</th>
											<th>PASSWORD</th>
											<th>ACTION</th>
										</tr>
									  <!--PHP TABLE START-->
									  <!--ERROR Doesn't read? or execute?-->
									  <?php
<<<<<<< HEAD
									  
										$dbConn = new PDO("mysql:host=localhost;dbname=8BITDB", "root", "root");
										
										
										$sql = "SELECT * FROM ADMIN ORDER BY ADMIN_ID";
=======
										$dbConn = new PDO("mysql:host=localhost;dbname=8BITDB", "root", "root");
										$prodCat = "Cable";
										
										$sql = "SELECT * FROM ADMIN ORDER BY ADMIN_ID ?";
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute();

										$numrow = $dbrs->rowCount(); 
										echo "<div style='color:#111;'> $numrow row(s) retrieved</div>" . "\n<br>";
										
										
										
										foreach ($dbrs as $dbrow) {
													echo '<tr>';
													echo '<td>'. $dbrow['ADMIN_ID'] . '</td>';
													echo '<td>'. $dbrow['ADMIN_Email'] . '</td>';
													echo '<td>'. $dbrow['ADMIN_Password'] . '</td>';
													echo '<td width=250>';
<<<<<<< HEAD
													echo '<a  class="btn_regist"  href="ADMIN/read.php?id='.$dbrow['ADMIN_ID'].'">Read</a>';
													echo ' ';
													echo '<a  class="btn_regist"  href="ADMIN/update.php?id='.$dbrow['ADMIN_ID'].'">Update</a>';
													echo ' ';
													echo '<a  class="btn_regist"  href="ADMIN/delete.php?id='.$dbrow['ADMIN_ID'].'">Delete</a>';
=======
													echo '<button class="btn" href="ADMIN/read.php?id='.$dbrow['ADMIN_ID'].'">Read</button>';
													echo ' ';
													echo '<button class="btn btn-success" href="ADMIN/update.php?id='.$dbrow['ADMIN_ID'].'">Update</button>';
													echo ' ';
													echo '<button class="btn btn-danger" href="ADMIN/delete.php?id='.$dbrow['ADMIN_ID'].'">Delete</button>';
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
													echo '</td>';
													echo '</tr>';
										}
										
										?>
									    
									  
									  </tr>
									</table>
								</dd>					
					</div>
					<!--SCREENSHOT MANAGEMENT-->
					<form id="screenshotManagement" name="" method="POST" action=".php" >
<<<<<<< HEAD
					<a  class="anchor" id="screenshotmanagement"></a>
=======
					<a class="anchor" id="screenshotmanagement"></a>
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
					<h3 id="coupon" class="tit_group"><span class="img_black ico_coupon"></span>SCREENSHOT MANAGEMENT</h3>
					<div class="group_detail group_coupon">
						
						<ul class="list_item">
							<div class="none_data">
									<span class="img_black"></span>
							<dl class="list_regist">
							
							<dd>
								<p>
                    				<a  class="btn_regist"  href="IMAGES/create.php" class="btn_regist">Create</a>
								</p>
								
								
								<div class="row">
								  <div class="">
									<?php
										include 'dbconn.php';
										$sql = "SELECT * FROM IMAGES ORDER BY IMAGES_ID";
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute();

<<<<<<< HEAD
										$numrow = $dbrs->rowCount();  
										echo "<div style='color:#111;'> $numrow row(s) retrieved</div>" . "\n<br>";
										foreach ($dbrs as $dbrow){
											
											echo '<tr>';
													echo '<td>'. $dbrow['IMAGES_ID'] . '</td>';
													echo '<td>'. $dbrow['IMAGES_Caption'] . '</td>';
													echo '<td>'. $dbrow['IMAGES_Img'] . '</td>';
													echo '<td width=250>';
													echo '<a  class="btn_regist" href="IMAGES/read.php?id='.$dbrow['ACCOUNT_ID'].'">Read</a>';
													echo ' ';
													echo '<a  class="btn_regist" href="IMAGES/update.php?id='.$dbrow['ACCOUNT_ID'].'">Update</a>';
													echo ' ';
													echo '<a  class="btn_regist" href="IMAGES/delete.php?id='.$dbrow['ACCOUNT_ID'].'">Delete</a>';
													echo '</td>';
													echo '</tr>';
=======
								<div class="row">
								  <div class="">
									<?php
										include 'dbconn.php';
										$prodCat = "Cable";

										$sql = "SELECT * FROM ADMIN ORDER BY ADMIN_ID ?";
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute(array($prodCat));

										$numrow = $dbrs->rowCount(); 
										echo "<div style='color:#111;'> $numrow row(s) retrieved</div>" . "\n<br>";
										foreach ($dbrs as $dbrow){
											
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
											
											
										}
										
										?>
										
								  </div>
								</div>
					</dd>

<!--END IMAGE-->
							
							</dt>
							
							</dl>
							</div>
							
													</ul>
													
													
											</div>
											</form>
					<!--END SCREENSHOT MANAGEMENT-->
					<!--ACCOUNTS-->
					<br>
					<form id="accountManagement" name="accountManagement" method="POST" action="accountManagement.php">
					
					<h3 id="coupon" class="tit_group"><span class="img_black ico_coupon"></span>ACCOUNT MANAGEMENT</h3>
					
					<div class="group_detail group_coupon">
						
						
						<ul class="">
							<div class="">
									<span class="img_black"></span>
							<dl class="list_regist">
								
								<dd>
								
								<p>
<<<<<<< HEAD
                    				<a  href="ACCOUNT/create.php" class="btn_regist">Create</a>
=======
                    				<button href="ACCOUNT/create.php" class="btn btn-success">Create</button>
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
                				</p>
									<table style="color:#111;" id="ACCOUNT_TABLE">
										<tr>
											<th>ACCOUNT_ID</th>
											<th>EMAIL</th>
											<th>PASSWORD</th>
											<th>ACTION</th>
										</tr>
									  <!--PHP TABLE START-->
									  <?php
										$dbConn = new PDO("mysql:host=localhost;dbname=8BITDB", "root", "root");
<<<<<<< HEAD
										$sql = "SELECT * FROM ACCOUNT ORDER BY ACCOUNT_ID";
=======
										$prodCat = "Cable";

										$sql = "SELECT * FROM ADMIN ORDER BY ADMIN_ID ?";
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute();

										$numrow = $dbrs->rowCount(); 
										echo "<div style='color:#111;'> $numrow row(s) retrieved</div>" . "\n<br>";
										
										foreach ($dbrs as $dbrow) {
													echo '<tr>';
													echo '<td>'. $dbrow['ACCOUNT_ID'] . '</td>';
													echo '<td>'. $dbrow['ACCOUNT_Email'] . '</td>';
													echo '<td>'. $dbrow['ACCOUNT_Password'] . '</td>';
													echo '<td width=250>';
<<<<<<< HEAD
													echo '<a  class="btn_regist" href="ACCOUNT/read.php?id='.$dbrow['ACCOUNT_ID'].'">Read</a>';
													echo ' ';
													echo '<a  class="btn_regist" href="ACCOUNT/update.php?id='.$dbrow['ACCOUNT_ID'].'">Update</a>';
													echo ' ';
													echo '<a  class="btn_regist" href="ACCOUNT/delete.php?id='.$dbrow['ACCOUNT_ID'].'">Delete</a>';
=======
													echo '<button class="btn" href="ACCOUNT/read.php?id='.$dbrow['ACCOUNT_ID'].'">Read</button>';
													echo ' ';
													echo '<button class="btn btn-success" href="ACCOUNT/update.php?id='.$dbrow['ACCOUNT_ID'].'">Update</button>';
													echo ' ';
													echo '<button class="btn btn-danger" href="ACCOUNT/delete.php?id='.$dbrow['ACCOUNT_ID'].'">Delete</button>';
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
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
					<!--ACCOUNTS END-->
					

					<!--NEWS-->
					<br>
					<form id="newsManagement" name="newsManagement" method="POST" action="newsManagement.php" >
<<<<<<< HEAD
					<a  class="anchor" id="newsManagement"></a>
=======
					<a class="anchor" id="newsManagement"></a>
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
					<h3 id="coupon" class="tit_group"><span class="img_black ico_coupon"></span>NEWS</h3>
					<div class="group_detail group_coupon">
							<dl class="list_regist">
								<dd>
								
								<p>
<<<<<<< HEAD
                    				<a  href="NEWS/create.php" class="btn_regist">Create</a>
                				</p>
									<table style="color:#111;" id="NEWS_TABLE">
=======
                    				<button href="NEWS/create.php" class="btn btn-success">Create</button>
                				</p>
									<table style="color:#111;" id="ADMIN_TABLE">
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
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
										$dbConn = new PDO("mysql:host=localhost;dbname=8BITDB", "root", "root");
<<<<<<< HEAD
										$sql = "SELECT * FROM NEWS ORDER BY ARTICLE_ID";
=======
										$prodCat = "Cable";

										$sql = "SELECT * FROM ADMIN ORDER BY ADMIN_ID ?";
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute();

<<<<<<< HEAD
										$numrow = $dbrs->rowCount();  
=======
										$numrow = $dbrs->rowCount(); 
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
										echo "<div style='color:#111;'> $numrow row(s) retrieved</div>" . "\n<br>";
										
										foreach ($dbrs as $dbrow) {
													echo '<tr>';
													echo '<td>'. $dbrow['ARTICLE_ID'] . '</td>';
													echo '<td>'. $dbrow['ARTICLE_Title'] . '</td>';
													echo '<td>'. $dbrow['ARTICLE_Category'] . '</td>';
													echo '<td>'. $dbrow['ARTICLE_Date'] . '</td>';
													echo '<td>'. $dbrow['ARTICLE_Message'] . '</td>';
													echo '<td width=250>';
<<<<<<< HEAD
													echo '<a  class="btn_regist" href="NEWS/read.php?id='.$dbrow['ARTICLE_ID'].'">Read</a>';
													echo ' ';
													echo '<a  class="btn_regist" href="NEWS/update.php?id='.$dbrow['ARTICLE_ID'].'">Update</a>';
													echo ' ';
													echo '<a  class="btn_regist" href="NEWS/delete.php?id='.$dbrow['ARTICLE_ID'].'">Delete</a>';
=======
													echo '<button class="btn" href="NEWS/read.php?id='.$dbrow['ARTICLE_ID'].'">Read</button>';
													echo ' ';
													echo '<button class="btn btn-success" href="NEWS/update.php?id='.$dbrow['ARTICLE_ID'].'">Update</button>';
													echo ' ';
													echo '<button class="btn btn-danger" href="NEWS/delete.php?id='.$dbrow['ARTICLE_ID'].'">Delete</button>';
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
													echo '</td>';
													echo '</tr>';
										}
										
										?>
									    
									  
									  </tr>
									</table>
								</dd>
<<<<<<< HEAD
							</dl>
=======
						
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
						</div>
					</form>
					<!--END NEWS-->
					<!--PRODUCT-->
					<br>
					<form id="productManagement" name="productManagement" method="POST" action="productManagement.php" >
<<<<<<< HEAD
					<a  class="anchor" id="productManagement"></a>
=======
					<a class="anchor" id="productManagement"></a>
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
					<h3 id="coupon" class="tit_group"><span class="img_black ico_coupon"></span>PRODUCT</h3>
					<div class="group_detail group_coupon">
						
						
															
<<<<<<< HEAD
								<dl class="list_regist">
=======
									
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
									
									<dd>
								
								<p>
<<<<<<< HEAD
                    				<a  href="PRODUCT/create.php" class="btn_regist">Create</a>
                				</p>
									<table style="color:#111;" id="PRODUCT_TABLE">
=======
                    				<button href="PRODUCT/create.php" class="btn btn-success">Create</button>
                				</p>
									<table style="color:#111;" id="ADMIN_TABLE">
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
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
<<<<<<< HEAD
										$sql = "SELECT * FROM PRODUCT ORDER BY PRODUCT_ID";
=======
										$prodCat = "Cable";

										$sql = "SELECT * FROM ADMIN ORDER BY ADMIN_ID ?";
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute();

										$numrow = $dbrs->rowCount(); 
										echo "<div style='color:#111;'> $numrow row(s) retrieved</div>" . "\n<br>";
										
										foreach ($dbrs as $dbrow) {
													echo '<tr>';
													echo '<td>'. $dbrow['PRODUCT_ID'] . '</td>';
													echo '<td>'. $dbrow['PRODUCT_Type'] . '</td>';
													echo '<td>'. $dbrow['PRODUCT_Title'] . '</td>';
													echo '<td>'. $dbrow['PRODUCT_Price'] . '</td>';
													echo '<td>'. $dbrow['PRODUCT_Version'] . '</td>';
													echo '<td width=250>';
<<<<<<< HEAD
													echo '<a  class="btn_regist" href="PRODUCT/read.php?id='.$dbrow['ARTICLE_ID'].'">Read</a>';
													echo ' ';
													echo '<a  class="btn_regist" href="PRODUCT/update.php?id='.$dbrow['ARTICLE_ID'].'">Update</a>';
													echo ' ';
													echo '<a  class="btn_regist" href="PRODUCT/delete.php?id='.$dbrow['ARTICLE_ID'].'">Delete</a>';
=======
													echo '<button class="btn" href="PRODUCT/read.php?id='.$dbrow['ARTICLE_ID'].'">Read</button>';
													echo ' ';
													echo '<button class="btn btn-success" href="PRODUCT/update.php?id='.$dbrow['ARTICLE_ID'].'">Update</button>';
													echo ' ';
													echo '<button class="btn btn-danger" href="PRODUCT/delete.php?id='.$dbrow['ARTICLE_ID'].'">Delete</button>';
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
													echo '</td>';
													echo '</tr>';
										}
										
										?>
									    
									  
									  </tr>
									</table>
								</dd>
<<<<<<< HEAD
							</dl>
=======
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985

							
								
													
													
													
											</div>
											</form>
					<!--END PRODUCT-->
					<!--ORDERS-->
					<br>
					<form id="orders" name="orders" method="POST" action="orders.php" >
<<<<<<< HEAD
					<a  class="anchor" id="orders"></a>
=======
					<a class="anchor" id="orders"></a>
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
					<h3 class="tit_group"><span class="img_black ico_history"></span>ORDERS</h3>
					<div class="group_detail group_history">
						
						
<<<<<<< HEAD
						<dl class="list_regist">
=======
						
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
							
								<dd>
								
								<p>
<<<<<<< HEAD
                    				<a  href="ORDERS/create.php" class="btn_regist">Create</a>
                				</p>
									<table style="color:#111;" id="ORDERS_TABLE">
										<tr>
											<th>ORDERS_ID</th>
											<th>CreiditCard</th>
											<th>Expiry</th>
											<th>SecNum</th>
											<th>Name</th>
=======
                    				<button href="ORDERS/create.php" class="btn btn-success">Create</button>
                				</p>
									<table style="color:#111;" id="ADMIN_TABLE">
										<tr>
											<th>ORDERS_ID</th>
											<th>CreiditCard</th>
											<th>ExpiryDate</th>
											<th>SecurityNumber</th>
											<th>NameOnCard</th>
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
											<th>DATE</th>
											<th>ACCOUNT_ID</th>
											<th>PRODUCT_ID</th>
											<th>ACTION</th>
										</tr>
									  <!--PHP TABLE START-->
									  <?php
										$dbConn = new PDO("mysql:host=localhost;dbname=8BITDB", "root", "root");
<<<<<<< HEAD
										$sql = "SELECT * FROM ORDERS ORDER BY ORDERS_ID";
=======
										$prodCat = "Cable";

										$sql = "SELECT * FROM ADMIN ORDER BY ADMIN_ID ?";
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
										$dbrs = $dbConn->prepare($sql);
										$dbrs->execute();

<<<<<<< HEAD
										$numrow = $dbrs->rowCount(); 
										echo "<div style='color:#111;'> $numrow row(s) retrieved</div>" . "\n<br>";
										
=======

										echo "<div style='color:#111;'> $numrow row(s) retrieved</div>" . "\n<br>";
										$numrow = $dbrs->rowCount(); 
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
										
										foreach ($dbrs as $dbrow) {
													echo '<tr>';
													echo '<td>'. $dbrow['ORDERS_ID'] . '</td>';
													echo '<td>'. $dbrow['ORDERS_CreiditCard'] . '</td>';
													echo '<td>'. $dbrow['ORDERS_ExpiryDate'] . '</td>';
													echo '<td>'. $dbrow['ORDERS_SecurityNumber'] . '</td>';
													echo '<td>'. $dbrow['ORDERS_NameOnCard'] . '</td>';
													echo '<td>'. $dbrow['ORDERS_DATE'] . '</td>';
													echo '<td>'. $dbrow['ACCOUNT_ID'] . '</td>';
													echo '<td>'. $dbrow['PRODUCT_ID'] . '</td>';
													echo '<td width=250>';
<<<<<<< HEAD
													echo '<a  class="btn_regist" href="ORDERS/read.php?id='.$dbrow['ARTICLE_ID'].'">Read</a>';
													echo ' ';
													echo '<a  class="btn_regist" href="ORDERS/update.php?id='.$dbrow['ARTICLE_ID'].'">Update</a>';
													echo ' ';
													echo '<a  class="btn_regist" href="ORDERS/delete.php?id='.$dbrow['ARTICLE_ID'].'">Delete</a>';
=======
													echo '<button class="btn" href="ORDERS/read.php?id='.$dbrow['ARTICLE_ID'].'">Read</button>';
													echo ' ';
													echo '<button class="btn btn-success" href="ORDERS/update.php?id='.$dbrow['ARTICLE_ID'].'">Update</button>';
													echo ' ';
													echo '<button class="btn btn-danger" href="ORDERS/delete.php?id='.$dbrow['ARTICLE_ID'].'">Delete</button>';
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
													echo '</td>';
													echo '</tr>';
										}
										
										?>
									    
									  
									  </tr>
									</table>
								</dd>
<<<<<<< HEAD
							</dl>
=======
							
>>>>>>> 7613087543677ec9a0fb7a4ccd345bf025cbc985
													
						
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