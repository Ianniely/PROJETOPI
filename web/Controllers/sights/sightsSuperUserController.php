<?php 
use sql\Connection;
use web\Models\SightsModel;

if(auth\hasUse()) {
    $userName = $_SESSION['userData']['cli_nome'];
    $userName = explode(' ', $userName);
    $userName = $userName[0];

    $conn = Connection::getInstance();
    $SightsModel = new SightsModel($conn);
    $sights = $SightsModel->AllSights();
    
    require 'web/Views/sight/sightsSuperUser.php';
} else {
    require 'web/Views/home.php';
}