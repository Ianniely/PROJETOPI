<?php

    use sql\Connection;
    use web\Models\SightsModel;

    if(!empty($_POST['nameSight']) )
    {  
        $name = $_POST['nameSight'];
        
        $Sights = new SightsModel(Connection::getInstance());
        $data = $Sights->find($name); 

        if ($data) {
            $Sights->delete($data["pon_id"]);
        }

        header('Location: /homeSeghtsSuper');
    } else {

        header('Location: /homeSeghtsSuper');
    }