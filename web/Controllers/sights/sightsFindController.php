<?php

use sql\Connection;
use web\Models\SightsModel;

if(auth\hasUse()) {
    $userName = $_SESSION['userData']['cli_nome'];
    $userName = explode(' ', $userName);
    $userName = $userName[0];
}

    if(!empty($_GET['name'])) {

        $sightName = $_GET['name'];

        $sightModel = new SightsModel(Connection::getInstance());
        $resultQuery = $sightModel->find($sightName);

        if($resultQuery) {
            require_once 'web/Views/sight/sight.php';
        } else {
            header('Location: /sights');
        }

    } else {
        header('Location: /sights');
    }