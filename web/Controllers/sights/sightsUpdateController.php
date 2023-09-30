<?php 
    use sql\Connection;
    use web\Models\SightsModel;

    $originalSightName = $_POST['originalSightName'];

    $sightModel = new SightsModel(Connection::getInstance());
    $resultQuery = $sightModel->find($originalSightName);


    if($resultQuery) {

        $id = $resultQuery['pot_codigo'];
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

        if($resultQuery['pot_rua'] != $newStretSight) {
            $data = $sightModel->updateStret($newStretSight, $id, $resultQuery['pot_nome']);
        }

        if($resultQuery['pot_bairro'] != $newNeighborhoodSight) {
            $data = $sightModel->updateNeighborhood($newNeighborhoodSight, $id, $resultQuery['pot_nome']);
        }

        
        if($resultQuery['pot_cid_codigo'] != $newCitySight) {
            $data = $sightModel->updateCity($newCitySight, $id, $resultQuery['pot_nome']);
        }

        if($resultQuery['pot_acessibilidade'] != $newAccessibilitySight) {
            $data = $sightModel->updateAccessibility($newAccessibilitySight, $id, $resultQuery['pot_nome']);
        }

        if($resultQuery['pot_classificacao'] != $newClassificationSight) {
            $data = $sightModel->updateClassification($newClassificationSight, $id, $resultQuery['pot_nome']);
        }

        if($resultQuery['pot_descricao'] != $newDrescripitionSight) {
            $data = $sightModel->updateDrescripition($newDrescripitionSight, $id, $resultQuery['pot_nome']);
        }
        
        header('Location: /homeSeghtsSuper');
    } else {
        header('Location: /homeSeghtsSuper');
    }