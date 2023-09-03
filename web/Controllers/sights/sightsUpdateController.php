<?php 
    use sql\Connection;
    use web\Models\SightsModel;

    $originalSightName = $_POST['originalSightName'];

    $sightModel = new SightsModel(Connection::getInstance());
    $resultQuery = $sightModel->find($originalSightName);


    if($resultQuery) {

        $id = $resultQuery['pon_id'];
        $newNameSight = $_POST['nameSight'];
        $newStretSight = $_POST['stretSight'];
        $newNeighborhoodSight= $_POST['neighborhoodSight'];
        $newAccessibilitySight = $_POST['accessibilitySight'];
        $newClassificationSight = $_POST['classificationSight'];
        $newDrescripitionSight = $_POST['drescripitionSight'];
        $newCitySight = $_POST['citySight'];

        if($originalSightName != $newNameSight) {
            $data = $sightModel->updateName($newNameSight, $id, $originalSightName);
        }

        if($resultQuery['pon_rua'] != $newStretSight) {
            $data = $sightModel->updateStret($newStretSight, $id, $resultQuery['pon_nome']);
        }

        if($resultQuery['pon_bairro'] != $newNeighborhoodSight) {
            $data = $sightModel->updateNeighborhood($newNeighborhoodSight, $id, $resultQuery['pon_nome']);
        }

        
        if($resultQuery['pon_cidade'] != $newCitySight) {
            $data = $sightModel->updateCity($newCitySight, $id, $resultQuery['pon_nome']);
        }

        if($resultQuery['pon_acessibilidade'] != $newAccessibilitySight) {
            $data = $sightModel->updateAccessibility($newAccessibilitySight, $id, $resultQuery['pon_nome']);
        }

        if($resultQuery['pon_classificacao'] != $newClassificationSight) {
            $data = $sightModel->updateClassification($newClassificationSight, $id, $resultQuery['pon_nome']);
        }

        if($resultQuery['pon_descricao'] != $newDrescripitionSight) {
            $data = $sightModel->updateDrescripition($newDrescripitionSight, $id, $resultQuery['pon_nome']);
        }
        
        header('Location: /homeSeghtsSuper');
    } else {
        header('Location: /homeSeghtsSuper');
    }