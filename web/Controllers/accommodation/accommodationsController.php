<?php 

    if(auth\hasUse()) {
        $userName = $_SESSION['userData']['cli_nome'];
        $userName = explode(' ', $userName);
        $userName = $userName[0];
    }
    
    require 'web/Views/accommodation/accommodations.php';