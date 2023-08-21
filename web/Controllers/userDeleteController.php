<?php
    use sql\Connection;
    use web\Models\UserModel;

    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        //Email and password received, with content
       
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new UserModel(Connection::getInstance());
        $data = $user->find($email); 

        if ($data && password_verify($password, $data["usu_senha"])) {
            $user->delete($data["usu_id"]);
            auth\logout();
            header('location: /');
        } else {
            header('location: /controlPanel');
        }
    } else {

        //Null email and password, no content

        header('Location: /controlPanel');
    }