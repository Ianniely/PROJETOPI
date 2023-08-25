<?php 
    use sql\Connection;
use web\Models\CityModel;

if(auth\hasUse()) {
    $userName = $_SESSION['userData']['usu_nome'];
    $userName = explode(' ', $userName);
    $userName = $userName[0];

    $cityModel = new CityModel(Connection::getInstance());
    $cities = $cityModel->AllCities();

    require 'web/Views/citySuperUser.php';
} else {
    require 'web/Views/home.php';
}