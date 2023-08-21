<?php 

    use sql\Connection;
    use web\Models\UserModel;

    if(auth\hasUse()) {

        $user = new UserModel(Connection::getInstance());
        $id = $_SESSION['userData']['usu_id'];
        $email = $_SESSION['userData']['usu_email'];

        if(!empty($_POST['name'])) {

            $newUserName = $_POST['name'];
            $data = $user->update('usu_nome', $newUserName, $id, $email);

        }

        if(!empty($_POST['city'])) {

            $newUserCity = $_POST['city'];
            $data = $user->update('usu_cidade', $newUserCity, $id, $email);
            
        }

        if(!empty($_POST['state'])) {

            $newUserState = $_POST['state'];
            $data = $user->update('usu_estado', $newUserState, $id, $email);
            
        }

        if(!empty($_POST['phoneNumber'])) {

            $newUserPhoneNumber = $_POST['phoneNumber'];
            $data = $user->update('usu_telefone', $newUserPhoneNumber, $id, $email);
            
        }

        if(!empty($_POST['email'])) {

            $newUserEmail = $_POST['email'];
            $data = $user->update('usu_email', $newUserEmail, $id, $newUserEmail);
            
        }

        if(!empty($_POST['password']) && !empty($_POST['newPassword'])) {

            $userPassword = $_POST['password'];

            if(password_verify($userPassword, $_SESSION['userData']['usu_senha'])) {

                $newUserPassWord = password_hash($_POST['newPassword'], PASSWORD_ARGON2I);
                $data = $user->update('usu_senha', $newUserPassWord, $id, $email);
            
            }
           
        }   
        if($data != false) {
            $_SESSION['userData'] = $data;
        }
        
        header('Location: /controlPanel');
    } else {
        header('Location: /login');
    }
