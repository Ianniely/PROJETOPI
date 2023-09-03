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
            
            $id = $dataCity['cid_id'];
            $ResultQueryExecution = $SightsModel->save($name, $drescripition, $classification, $accessibility, $neighborhood, $stret, $city, $id);

            header('Location: /homeSeghtsSuper');
        }
    } else {
        header('Location: /homeSeghtsSuper');
    }
/**
        //All the data of the registration form were received, with content

        $nome = $_POST['nome'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $descricao = $_POST['descriicao'];
        $classificacao = $_POST['classificacao'];
        $acessibilidade = $_POST['acessibilidade'];

        list($pontonome, $domain) = explode('', $nome);

        if (filter_var($nome, FILTER_VALIDATE_NAME) && checkdnsrr($domain, 'MX')) {
            $conn = Connection::getInstance();
            $PontoTuristicoModel = new PontoTuristicoModel($conn);
    
            $data = $PontoTuristicoModel->find($nome);
            
            if($data) {
                header('Location: /PontoTuristico');
            } else {
                
                $ResultQueryExecution = $PontoTuristicoModel->save($nome, $bairro, $rua, $descricao, $classificacao, $acessibilidade);
                
                //The data was saved executed successfully
                $_SESSION['loggedPonto'] = true;
    
                $data = $PontoTuristicoModel->find($nome);
                $_SESSION['PontoData'] = $data;
    
                header('Location: /');
            }
        } else {
            $incorrectRegister = true;

            require "web/Views/Ponto.php";
        }
       
    } else {
        $emptyRegister = true;

        require "web/Views/Ponto.php";
    }
    */