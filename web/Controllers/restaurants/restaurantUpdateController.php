<?php

use sql\Connection;
use web\Models\CityModel;
use web\Models\RestaurantModel;

$originalRestaurantName = $_POST['originalRestaurantName'];

$conn = Connection::getInstance();
$restaurantModel = new RestaurantModel($conn);
$cityModel = new CityModel($conn);
$resultQuery = $restaurantModel->find($originalRestaurantName);

if($resultQuery) {

    $newNameRestaurant = $_POST['newName'];
    $newNeighborhoodRestaurant = $_POST['newNeighborhood'];
    $newStreetRestaurant = $_POST['newStreet'];
    $newNumberRestaurant = $_POST['newStreetNumber'];
    $newOpeningHoursRestaurant = $_POST['newOpeningHours'];
    $newClosingHoursRestaurant = $_POST['newClosingHours'];
    $newAverageCostRestaurant = $_POST['newAverageCost'];
    $newClassificationRestaurant = $_POST['newClassification'];
    $newTypeCuisineRestaurant = $_POST['newTypeCuisine'];
    $newAccessibilityRestaurant = $_POST['newAccessibility'];
    $newDrescripitionRestaurant = $_POST['newDrescripition'];
    $newCityRestaurant = $_POST['newCity'];

        
    $resultCity = $cityModel->find($newCityRestaurant);
    $idRestaurant = $resultQuery['res_codigo'];


    if($resultQuery['res_nome'] != $newNameRestaurant) {
        $data =  $restaurantModel->updateName($newNameRestaurant, $idRestaurant, $originalRestaurantName);
    } 
    if($resultQuery['res_bairro'] != $newNeighborhoodRestaurant) {
        $data =  $restaurantModel->updateNeighborhood($newNeighborhoodRestaurant, $idRestaurant, $resultQuery['res_nome']);
    }
    if($resultQuery['res_rua'] != $newStreetRestaurant) {
        $data =  $restaurantModel->updateRoad($newStreetRestaurant, $idRestaurant, $resultQuery['res_nome']);
    }
    if($resultQuery['res_numero'] != $newNumberRestaurant) {
        $data =  $restaurantModel->updateNumber($newNumberRestaurant, $idRestaurant, $resultQuery['res_nome']);
    }
    if($resultQuery['res_horario_abertura'] != $newOpeningHoursRestaurant) {
        $data =  $restaurantModel->updateOpeningHours($newOpeningHoursRestaurant, $idRestaurant, $resultQuery['res_nome']);
    }
    if($resultQuery['res_horario_fechamento'] != $newClosingHoursRestaurant) {
        $data =  $restaurantModel->updateClosingHours($newClosingHoursRestaurant, $idRestaurant, $resultQuery['res_nome']);
    }
    if($resultQuery['res_valor_medio'] != $newAverageCostRestaurant) {
        $data =  $restaurantModel->updateAverageCost($newAverageCostRestaurant, $idRestaurant, $resultQuery['res_nome']);
    }
    if($resultQuery['res_classificacao'] != $newClassificationRestaurant) {
        $data =  $restaurantModel->updateClassification($newClassificationRestaurant, $idRestaurant, $resultQuery['res_nome']);
    }
    if($resultQuery['res_tipo_culinaria'] != $newTypeCuisineRestaurant) {
        $data =  $restaurantModel->updateCulinary($newTypeCuisineRestaurant, $idRestaurant, $resultQuery['res_nome']);
    }
    if($resultQuery['res_acessibilidade'] != $newAccessibilityRestaurant) {
        $data =  $restaurantModel->updateAccessibility($newAccessibilityRestaurant, $idRestaurant, $resultQuery['res_nome']);
    }
    if($resultQuery['res_descricao'] != $newDrescripitionRestaurant) {
        $data =  $restaurantModel->updateDrescripition($newDrescripitionRestaurant, $idRestaurant, $resultQuery['res_nome']);
    }
    if($resultQuery['res_cid_codigo'] != $resultCity['cid_codigo']) {
        $data =  $restaurantModel->updateCity($resultCity['cid_codigo'], $idRestaurant, $resultQuery['res_nome']);
    }
}
header('Location: /homeRestaurantSuper');

?>