<?php 
use sql\Connection;
use web\Models\CityModel;
use web\Models\AccommodationModel;

if(auth\hasUse()) {
    $userName = $_SESSION['userData']['cli_nome'];
    $userName = explode(' ', $userName);
    $userName = $userName[0];

    $conn = Connection::getInstance();
    $AccommodationModel = new AccommodationModel($conn);
    $accommodations = $AccommodationModel->AllAccommodations();
    $CityModel = new CityModel($conn);

    $i = 0;

    foreach($accommodations as $accommodationCity) {
       
        $result = $CityModel->findId($accommodationCity['hos_cid_codigo']);
        if($result) {
            $accommodations[$i]['hos_cid_codigo'] = $result[0];
        }

        $i += 1;        
    }
    
    require 'web/Views/accommodation/accommodationSuperUser.php';
} else {
    require 'web/Views/home.php';
}