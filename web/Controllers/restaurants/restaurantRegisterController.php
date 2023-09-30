<?php

    use sql\Connection;
    use web\Models\RestaurantModel;
    use web\Models\CityModel;

    if(!empty($_POST['name']) && !empty($_POST['city']) && !empty($_POST['neighborhood']) && !empty($_POST['street']) && !empty($_POST['streetNumber']) && !empty($_POST['accessibility']) && !empty($_POST['classification']) && !empty($_POST['openingHours']) && !empty($_POST['closingHours']) && !empty($_POST['averageCost']) && !empty($_POST['typeCuisine']) && !empty($_POST['drescripition'])) {

        $name = $_POST['name'];
        $city = $_POST['city'];
        $neighborhood = $_POST['neighborhood'];
        $street = $_POST['street'];
        $streetNumber = $_POST['streetNumber'];
        $accessibility = $_POST['accessibility'];
        $classification = $_POST['classification'];
        $openingHours = $_POST['openingHours'];
        $closingHours = $_POST['closingHours'];
        $averageCost = $_POST['averageCost'];
        $typeCuisine = $_POST['typeCuisine'];
        $drescripition = $_POST['drescripition'];

        $conn = Connection::getInstance();
        $restaurant = new RestaurantModel($conn);
        $CityModel = new CityModel($conn);
        $dataCity = $CityModel->find($city);
        $data = $restaurant->find($name);

        if($data) {
            $result = false;
            header('Location: /homeRestaurantSuper');
        } else{
            if($dataCity != false) {
                $id = $dataCity['cid_codigo']; 
                $restaurant->save($name, $neighborhood, $street, $streetNumber, $openingHours, $closingHours, $averageCost, $classification, $typeCuisine, $accessibility, $drescripition, $id);
                $result = true;  
            }   
            header('Location: /homeRestaurantSuper');
        }
    } else {
        $emptyData = true;
        header('Location: /homeRestaurantSuper');
    }

?>