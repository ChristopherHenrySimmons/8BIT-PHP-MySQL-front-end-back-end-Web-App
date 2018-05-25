<?php
	include 'head.php';
    include 'dbconn.php';
?>

<form action="db_uploadphoto.php" method="post" enctype="multipart/form-data">
	<input type="file" name="FileToUpload" style="background-color:#4e8064;cursor: pointer;">
	<input type="submit" value="Upload Image" name="submit" style="background-color:#4e8064;cursor: pointer;">
</form>