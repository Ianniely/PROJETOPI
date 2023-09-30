<?php

use sql\Connection;
use web\Models\CityModel;
use web\Models\AccommodationModel;

$originalAccommodationName = $_POST['originalaccommodationName'];

$conn = Connection::getInstance();
$accommodationModel = new AccommodationModel($conn);
$cityModel = new CityModel($conn);
$resultQuery = $accommodationModel->find($originalAccommodationName);

if($resultQuery) {

    $newNameAccommodation = $_POST['newName'];
    $newNeighborhoodAccommodation = $_POST['newNeighborhood'];
    $newStreetAccommodation = $_POST['newStreet'];
    $newNumberAccommodation = $_POST['newStreetNumber'];
    $newphoneNumberAccommodation = $_POST['NewphoneNumber'];
    $newEmailAccommodation = $_POST['Newemail'];
    $newCostAccommodation = $_POST['Newcost'];
    $newClassificationAccommodation = $_POST['newClassification'];
    $newAccessibilityAccommodation = $_POST['newAccessibility'];
    $newDrescripitionAccommodation = $_POST['newDrescripition'];
    $newCityAccommodation = $_POST['newCity'];

        
    $resultCity = $cityModel->find($newCityAccommodation);
    $idAccommodation = $resultQuery['hos_codigo'];


    if($resultQuery['hos_nome'] != $newNameAccommodation) {
        $data =  $accommodationModel->updateName($newNameAccommodation, $idAccommodation, $originalAccommodationName);
    } 

    if($resultQuery['hos_bairro'] != $newNeighborhoodAccommodation) {
        $data =  $accommodationModel->updateNeighborhood($newNeighborhoodAccommodation, $idAccommodation, $resultQuery['hos_nome']);
    }

    if($resultQuery['hos_rua'] != $newStreetAccommodation) {
        $data =  $accommodationModel->updateRoad($newStreetAccommodation, $idAccommodation, $resultQuery['hos_nome']);
    }

    if($resultQuery['hos_numero'] != $newNumberAccommodation) {
        $data =  $accommodationModel->updateNumber($newNumberAccommodation, $idAccommodation, $resultQuery['hos_nome']);
    }

    if($resultQuery['hos_telefone'] != $newphoneNumberAccommodation) {
        $data =  $accommodationModel->updatePhoneNumber($newphoneNumberAccommodation, $idAccommodation, $resultQuery['hos_nome']);
    }

    if($resultQuery['hos_valor'] != $newCostAccommodation) {
        $data =  $accommodationModel->updateCost($newCostAccommodation, $idAccommodation, $resultQuery['hos_nome']);
    }
    if($resultQuery['hos_email'] != $newEmailAccommodation) {
        $data =  $accommodationModel->updateEmail($newEmailAccommodation, $idAccommodation, $resultQuery['hos_nome']);
    }
    if($resultQuery['hos_classificacao'] != $newClassificationAccommodation) {
        $data =  $accommodationModel->updateClassification($newClassificationAccommodation, $idAccommodation, $resultQuery['hos_nome']);
    }
    if($resultQuery['hos_acessibilidade'] != $newAccessibilityAccommodation) {
        $data =  $accommodationModel->updateAccessibility($newAccessibilityAccommodation, $idAccommodation, $resultQuery['hos_nome']);
    }
    if($resultQuery['hos_descricao'] != $newDrescripitionAccommodation) {
        $data =  $accommodationModel->updateDrescripition($newDrescripitionAccommodation, $idAccommodation, $resultQuery['hos_nome']);
    }
    if($resultQuery['hos_cid_codigo'] != $resultCity['cid_codigo']) {
        $data =  $accommodationModel->updateCity($resultCity['cid_codigo'], $idAccommodation, $resultQuery['hos_nome']);
    }
}
header('Location: /homeAccommodationSuper');

?>