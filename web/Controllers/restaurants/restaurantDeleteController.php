<?php

    use sql\Connection;
    use web\Models\RestaurantModel;

    if(!empty($_POST['nameRestaurant'])) {

        $name = $_POST['nameRestaurant'];
        $restaurant = new RestaurantModel(Connection::getInstance());
        $data = $restaurant->find($name);
        if($data) {
            $idRestaurant = $data['res_codigo'];
            $restaurant->delete($idRestaurant);
        } 
    }
    header('Location: /homeRestaurantSuper');

?>