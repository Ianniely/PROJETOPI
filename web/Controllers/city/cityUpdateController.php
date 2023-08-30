<?php

use sql\Connection;
use web\Models\CityModel;

<<<<<<< HEAD
$newNameCity = $_POST['nameCity'];

$cityModel = new CityModel(Connection::getInstance());
$resultQuery = $cityModel->find($newNameCity);

if($resultQuery) {

=======
$originalCityName = $_POST['originalCityName'];

$cityModel = new CityModel(Connection::getInstance());
$resultQuery = $cityModel->find($originalCityName);

if($resultQuery) {

    $newNameCity = $_POST['nameCity'];
>>>>>>> d5949f0e2d034cc7078a1ad8f1b475b2e67f884e
    $newPopulationCity = $_POST['populationCity'];
    $newWeatherCity = $_POST['weatherCity'];
    $newDrescripitionCity = $_POST['drescripitionCity'];
    $idCity = $resultQuery['cid_id'];

    if($resultQuery['cid_nome'] != $newNameCity) {
        $resultQuery =  $cityModel->updateName($newNameCity, $idCity, $newNameCity);
    } 
    if($resultQuery['cid_populacao'] != $newPopulationCity) {
        $resultQuery = $cityModel->updatePopulation($newPopulationCity, $idCity, $resultQuery['cid_nome']);
    } 
    if($resultQuery['cid_clima'] != $newWeatherCity) {
        $resultQuery = $cityModel->updateWeather($newWeatherCity, $idCity, $resultQuery['cid_nome']);
    } 
    if($resultQuery['cid_descricao'] != $newDrescripitionCity) {
        $resultQuery = $cityModel->updateDescription($newDrescripitionCity, $idCity, $resultQuery['cid_nome']);
    }
   
    header('Location: /homeSuper');
}

header('Location: /homeSuper');