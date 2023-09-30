<?php

use sql\Connection;
use web\Models\CityModel;

if(auth\hasUse()) {
    $userName = $_SESSION['userData']['cli_nome'];
    $userName = explode(' ', $userName);
    $userName = $userName[0];
}

    if(!empty($_GET['name'])) {

        $cityName = $_GET['name'];

        $cityModel = new CityModel(Connection::getInstance());
        $resultQuery = $cityModel->find($cityName);

        if($resultQuery) {
            require_once 'web/Views/city/city.php';
        } else {
            header('Location: /citys');
        }

    } else {
        header('Location: /citys');
    }