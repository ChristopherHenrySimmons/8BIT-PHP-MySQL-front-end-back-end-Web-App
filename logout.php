<?php
//21600681
   session_start();
   
   if(session_destroy()) {
      header("Location: login.php");
   }
?>
