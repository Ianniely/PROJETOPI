<?php 

if(auth\hasUse()) {
    $userName = $_SESSION['userData']['usu_nome'];
    $userName = explode(' ', $userName);
    $userName = $userName[0];

    require 'web/Views/citySuperUser.php';
} else {
    require 'web/Views/home.php';
}