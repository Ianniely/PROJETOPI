<?php 
use sql\Connection;
use web\Models\CityModel;
use web\Models\RestaurantModel;

if(auth\hasUse()) {
    $userName = $_SESSION['userData']['cli_nome'];
    $userName = explode(' ', $userName);
    $userName = $userName[0];

    $conn = Connection::getInstance();
    $RestaurantModel = new RestaurantModel($conn);
    $restaurants = $RestaurantModel->AllRestaurants();
    $CityModel = new CityModel($conn);

    $i = 0;

    foreach($restaurants as $restauranteCity) {

        $result = $CityModel->findId($restauranteCity['res_cid_codigo']);
        $restaurants[$i]['res_cid_codigo'] = $result[0];

        $i += 1;        
    }
    
    require 'web/Views/restaurant/restaurantsSuperUser.php';
} else {
    require 'web/Views/home.php';
}