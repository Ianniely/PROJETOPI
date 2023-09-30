<?php

    use sql\Connection;
    use web\Models\AccommodationModel;

    if(!empty($_POST['nameAccommodation'])) {

        $name = $_POST['nameAccommodation'];

        $accommodation = new AccommodationModel(Connection::getInstance());
        $data = $accommodation->find($name);

        if($data) {
            $idAccommodation = $data['hos_codigo'];
            $accommodation->delete($idAccommodation);
        } 
    }
    header('Location: /homeAccommodationSuper');

?>