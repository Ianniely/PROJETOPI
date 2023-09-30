<?php

    use sql\Connection;
    use web\Models\SightsModel;
    use web\Models\CityModel;

    if(!empty($_POST['name']) && !empty($_POST['stret']) && !empty($_POST['neighborhood']) && !empty($_POST['city']) && !empty($_POST['accessibility']) && !empty($_POST['classification']) && !empty($_POST['drescripition'])) {

        $name = $_POST['name'];
        $stret = $_POST['stret'];
        $neighborhood = $_POST['neighborhood'];
        $city = $_POST['city'];
        $accessibility = $_POST['accessibility'];
        $classification = $_POST['classification'];
        $drescripition = $_POST['drescripition'];

        $conn = Connection::getInstance();
        $SightsModel = new SightsModel($conn);
        $CityModel = new CityModel($conn);
        $dataCity = $CityModel->find($city);
        $dataSights = $SightsModel->find($name);
        
        if($dataSights && !$dataCity) {
            header('Location: /homeSeghtsSuper');
        } else {
            
            $id = $dataCity['cid_codigo'];
            $ResultQueryExecution = $SightsModel->save($name, $drescripition, $classification, $accessibility, $neighborhood, $stret, $id);

            header('Location: /homeSeghtsSuper');
        }
    } else {
        header('Location: /homeSeghtsSuper');
    }