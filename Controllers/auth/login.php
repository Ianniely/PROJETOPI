<?php 

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Location: /');
    } else {
        if(!empty($_POST['email'] && !empty($_POST['password']))) {

            $email = trim($_POST['email']);
            $senha = trim($_POST['password']);
            
            
            $model = new User(connection());
            $data = $model->find($email);
        
            if ($data && password_verify($senha, $data['usu_senha'])) {
                $nome = $data['usu_nome'];
                $_SESSION['name'] = $nome;
                header('Location: /home');
            } else {
                header('Location: /');
            }
        } else {
            header('Location: /');
        }
    }
    
?>