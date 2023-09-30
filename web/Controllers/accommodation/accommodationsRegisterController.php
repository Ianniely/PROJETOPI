<?php

    use sql\Connection;
    use web\Models\AccommodationModel;
    use web\Models\CityModel;

    if(!empty($_POST['name']) && !empty($_POST['city']) && !empty($_POST['neighborhood']) && !empty($_POST['street']) && !empty($_POST['streetNumber']) && !empty($_POST['accessibility']) && !empty($_POST['classification']) && !empty($_POST['cost']) && !empty($_POST['phoneNumber']) && !empty($_POST['email']) && !empty($_POST['drescripition'])) {

        $accommodationName = $_POST['name'];
        $accommodationNeighborhood = $_POST['neighborhood'];
        $accommodationRoad = $_POST['street'];
        $accommodationNumber = $_POST['streetNumber'];
        $accommodationValor = $_POST['cost'];
        $accommodationEmail = $_POST['email'];
        $accommodationTelefone = $_POST['phoneNumber'];
        $accommodationClassification = $_POST['classification'];
        $accommodationAcessibilidade = $_POST['accessibility'];
        $accommodationDescricao = $_POST['drescripition'];
        $accommodationCity = $_POST['city'];

        $conn = Connection::getInstance();
        $accommodation = new AccommodationModel($conn);

        $CityModel = new CityModel($conn);

        $dataCity = $CityModel->find($accommodationCity);
        $data = $accommodation->find($accommodationName);

        if($data) {
            $result = false;
            header('Location: /homeAccommodationSuper');
        } else{
            if($dataCity != false) {
                $id = $dataCity['cid_codigo']; 
                $accommodation->save($accommodationName, $accommodationNeighborhood, $accommodationRoad, $accommodationNumber, $accommodationValor, $accommodationEmail, $accommodationTelefone, $accommodationClassification, $accommodationAcessibilidade,  $accommodationDescricao,  $id);
                $result = true;  
            }   
            header('Location: /homeAccommodationSuper');
        }
    } else {
        $emptyData = true;
        header('Location: /homeAccommodationSuper');
    }

?>