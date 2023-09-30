<?php

use sql\Connection;
use web\Models\RestaurantModel;

if(auth\hasUse()) {
    $userName = $_SESSION['userData']['cli_nome'];
    $userName = explode(' ', $userName);
    $userName = $userName[0];
}

    if(!empty($_GET['name'])) {

        $restaurantName = $_GET['name'];

        $restaurantModel = new RestaurantModel(Connection::getInstance());
        $resultQuery = $restaurantModel->find($restaurantName);

        if($resultQuery) {
            require_once 'web/Views/restaurant/restaurant.php';
        } else {
            header('Location: /restaurants');
        }

    } else {
        header('Location: /restaurants');
    }