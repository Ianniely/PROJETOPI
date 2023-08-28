<?php
    use sql\Connection;
    use web\Models\CityModel;

    if(!empty($_POST['name']) && !empty($_POST['population']) && !empty($_POST['weather']) && !empty($_POST['drescripition'])) {

        //All the data of the registration form were received, with content

        $name = $_POST['name'];
        $population = $_POST['population'];
        $weather = $_POST['weather'];
        $drescripition = $_POST['drescripition'];

        $city = new CityModel(Connection::getInstance());
    
        $data = $city->find($name);

        if($data) {

            //The city already exists in the database
            $result = false;
           header('Location: /homeSuper');

        } else{

            //The city doesn't exists in the database
            $city->save($name, $population, $weather, $drescripition);
            $result = true;
            header('Location: /homeSuper');
        }
    } else {
        $emptyData = true;
        header('Location: /homeSuper');
    }