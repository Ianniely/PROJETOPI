<?php 

unset($_SESSION['name']);
    setcookie('PHPSESSID', '', time() - 3600);
    session_destroy();
    header('location: /');
?>