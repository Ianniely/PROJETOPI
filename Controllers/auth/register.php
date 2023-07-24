<?php 

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Location: /register');
    } else {
        if (!empty($_POST['name']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['email']) &&!empty($_POST['password'])) {
        
            $nome = trim($_POST['name']);
            $cidade = trim($_POST['city']);
            $estado = trim($_POST['state']);
            $email = trim($_POST['email']);
            $senha = trim($_POST['password']);
        
            $model = new User(connection());    
            $data = $model->find($email);
        
            if ($data) {
                header('Location: /');
            } else {
                $model->save($nome, $cidade, $estado, $email, $senha);
                $_SESSION['name'] = $nome;        
                header('Location: /home');
            }
        
        } else {
            header('Location: /register');
        }
    }
?>