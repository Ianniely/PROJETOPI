<?php 
    if(empty($_SESSION['name']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
        header('location: /');
    } else {

        if(!empty($_POST['city']) && !empty($_POST['date']) && !empty($_POST['activityPreferences'])) {

            $city = trim($_POST['city']);
            $date = trim($_POST['date']);
            $activityPreferences = trim($_POST['activityPreferences']);

            $model = new TravelItinerary(connection());
            $model->save($city, $date, $activityPreferences); 

            header('Location: /montarRoteiro');

        } else {
            header('Location: /montarRoteiro');
        }
    }
?>