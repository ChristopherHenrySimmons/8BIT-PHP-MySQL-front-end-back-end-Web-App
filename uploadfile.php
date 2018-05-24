<?php
session_start();

$err_status = 1;
$err_msg = "";
$target_dir = "uploads/";
$filename = basename($_FILES["FileToUpload"]["name"]);
$target_file = $target_dir . $filename;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

//Check if image file is a actual image or fake image
$check_type = getimagesize($_FILES["FileToUpload"]["tmp_name"]);
if($check_type == false) 
{ 
	$err_status = -1; 
	$err_msg = "Invalid file format. File is not an image."; 
}

//Check if file already exists
if (file_exists($target_file)) 
{ 
	$err_status = -1; 
	$err_msg = "File already exists."; 
}

//Check and limit file size
if ($_FILES["FileToUpload"]["size"] > 500000)
{
    $err_status = -1; 
	$err_msg = "File is too large. Choose smaller size file."; 
}

//Move file from temporary server folder into target folder
if ($err_status == 1) 
{
	if (!move_uploaded_file($_FILES["FileToUpload"]["tmp_name"], $target_file)) 
	{
		$err_status = -1;
		$err_msg = "Unknown error"; 
	}
}

//Display error message if error occurred else success
if ($err_status < 1)
{
    echo "Error encountered: " . $err_msg; 
}
else 
{
	$_SESSION['Email'] = $ACCOUNT_Email;
	$_SESSION['LoggedIn'] = true;

	header("location: account.php"); 
}
?>

