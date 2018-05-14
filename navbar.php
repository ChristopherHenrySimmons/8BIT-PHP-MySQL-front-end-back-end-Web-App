<?php

session_start();
//adminnavbar?
if(isset($_SESSION['Email'])) {
    include('navBarLogin.php');
} else {
    include('navBarLogout.php');
}
?>