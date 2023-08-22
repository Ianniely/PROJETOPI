<?php
    use sql\Connection;
    use web\Models\UserModel;

    if(!empty($_POST['name']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['phoneNumber']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        //All the data of the registration form were received, with content

        $name = $_POST['name'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $phoneNumber = $_POST['phoneNumber'];
        $type = 'comum';
        $email = $_POST['email'];
        $password = $_POST['password'];

        list($username, $domain) = explode('@', $email);

        if (filter_var($email, FILTER_VALIDATE_EMAIL) && checkdnsrr($domain, 'MX')) {
            $conn = Connection::getInstance();
            $userModel = new UserModel($conn);
    
            $data = $userModel->find($email);
            
            if($data) {
                header('Location: /login');
            } else {
                
                $ResultQueryExecution = $userModel->save($name, $city, $state, $phoneNumber, $type, $email, $password);
                
                //The data was saved executed successfully
                $_SESSION['loggedUser'] = true;
    
                $data = $userModel->find($email);
                $_SESSION['userData'] = $data;
    
                header('Location: /');
            }   
        } else {
            $incorrectRegister = true;

            require "web/Views/login.php";
        }
       
    } else {
        $emptyRegister = true;

        require "web/Views/login.php";
    }