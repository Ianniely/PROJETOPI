<?php

use sql\Connection;
use web\Models\AccommodationModel;

if(auth\hasUse()) {
    $userName = $_SESSION['userData']['cli_nome'];
    $userName = explode(' ', $userName);
    $userName = $userName[0];
}

    if(!empty($_GET['name'])) {

        $accommodationName = $_GET['name'];

        $accommodationModel = new AccommodationModel(Connection::getInstance());
        $resultQuery = $accommodationModel->find($accommodationName);

        if($resultQuery) {
            require_once 'web/Views/accommodation/accommodation.php';
        } else {
            header('Location: /accommodations');
        }

    } else {
        header('Location: /accommodations');
    }