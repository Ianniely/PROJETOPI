<?php
    use sql\Connection;
    use web\Models\CityModel;

    if(!empty($_POST['nameCity'])) {

        $name = $_POST['nameCity'];

        $city = new CityModel(Connection::getInstance());

        $data = $city->find($name);

        if($data) {
            $idCity = $data['cid_codigo'];
            $city->delete($idCity);

            header('Location: /homeSuper');
        } 

    }
    header('Location: /homeSuper');