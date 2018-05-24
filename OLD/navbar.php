<?php

session_start();
//adminnavbar?
if(!empty($_SESSION['Email'])) {
    include('navBarLogin.php');
} elseif(empty($_SESSION['Email'])) {
    include('navBarLogout.php');
}
?>