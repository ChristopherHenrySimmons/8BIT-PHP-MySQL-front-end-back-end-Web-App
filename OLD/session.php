<?php
//21600681
   include('config.php');
   session_start();
   //login_user?
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select ACCOUNT_Email from ACCOUNT where ACCOUNT_Email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['ACCOUNT_Email'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>