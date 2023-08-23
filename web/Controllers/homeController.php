<?php 

    if(auth\hasUse()) {
        $userName = $_SESSION['userData']['usu_nome'];
        $userName = explode(' ', $userName);
        $userName = $userName[0];
    }

    if(isset($_SESSION['userData']['usu_tipo']) && $_SESSION['userData']['usu_tipo'] == 'super') {
        include 'web/Views/homeSuperUser.php';
    } else {
        require 'web/Views/home.php';
    }
