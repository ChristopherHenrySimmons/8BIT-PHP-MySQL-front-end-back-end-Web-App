<?php  session_start();
if(empty($_SESSION['Email']))
{
 header("location:account.php");
}

?>

WELCOME :<?php echo $_SESSION['Email']; ?>

<a href="logout.php">Logout</a>