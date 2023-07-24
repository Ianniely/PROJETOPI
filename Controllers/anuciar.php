<?php 
    if(empty($_SESSION['name']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
        header('location: /');
    } else {

        if(!empty($_POST['name']) && !empty($_POST['date']) && !empty($_POST['price']) && !empty($_POST['description']) &&!empty($_POST['local'])) {

            $nome = trim($_POST['name']);
            $date = trim($_POST['date']);
            $price = trim($_POST['price']);
            $description = trim($_POST['description']);
            $local = trim($_POST['local']);

            $model = new Events(connection());
            $model->save($nome, $date, $local, $description, $price, ""); 

            header('Location: /anuciar');

        } else {
            header('Location: /anuciar');
        }
    }
?>