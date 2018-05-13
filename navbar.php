<?php

session_start();
//adminnavbar?
if(isset($_SESSION['login_user'])) {
    include('navBarLogin.php');
} else {
    include('navBarLogout.php');
}
?>