<?php

    namespace config;
    use sql\Connection;
    use web\Models\UserModel;

    // Variable created there in the file 'createCity.php' and attached to it a database connection object;
    $con; 

    $user = new UserModel($con);

    $existsSuperUser = $user->findSuperUser();

    if(!$existsSuperUser) {
        $ResultQueryExecution = $user->save('nome', 'cidade', 'estado', 'telefone', 'super', 'superuser@gmail.com', 'superuser#123$');
    }