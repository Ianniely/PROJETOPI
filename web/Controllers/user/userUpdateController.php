<?php 

    use sql\Connection;
    use web\Models\UserModel;

    if(auth\hasUse()) {

        $user = new UserModel(Connection::getInstance());
        $id = $_SESSION['userData']['cli_codigo'];
        $email = $_SESSION['userData']['cli_email'];

        if(!empty($_POST['name'])) {

            $newUserName = $_POST['name'];
            $data = $user->updateName($newUserName, $id, $email);

        }

        if(!empty($_POST['city'])) {

            $newUserCity = $_POST['city'];
            $data = $user->updateCity($newUserCity, $id, $email);
            
        }

        if(!empty($_POST['state'])) {

            $newUserState = $_POST['state'];
            $data = $user->updateState($newUserState, $id, $email);
            
        }

        if(!empty($_POST['phoneNumber'])) {

            $newUserPhoneNumber = $_POST['phoneNumber'];
            $data = $user->updatePhoneNumber($newUserPhoneNumber, $id, $email);
            
        }

        if(!empty($_POST['email'])) {

            $newUserEmail = $_POST['email'];
            $data = $user->updateEmail($newUserEmail, $id, $newUserEmail);
            
        }

        if(!empty($_POST['password']) && !empty($_POST['newPassword'])) {

            $userPassword = $_POST['password'];

            if(password_verify($userPassword, $_SESSION['userData']['cli_senha'])) {

                $newUserPassWord = password_hash($_POST['newPassword'], PASSWORD_ARGON2I);
                $data = $user->updatePassword($newUserPassWord, $id, $email);
            
            }
           
        }   
        if($data != false) {
            $_SESSION['userData'] = $data;
        }
        
        header('Location: /controlPanel');
    } else {
        header('Location: /login');
    }
