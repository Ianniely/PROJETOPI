<?php

    namespace config;
    use sql\Connection;
    use web\Models\UserModel;

    $user = new UserModel(Connection::getInstance());

    $existsSuperUser = $user->findSuperUser();

    if(!$existsSuperUser) {

        $ResultQueryExecution = $userModel->save('nome', 'cidade', 'estado', 'telefone', 'super', 'superuser@gmail.com', 'superuser#123$');

        header('Location: /');
    } else {
        header('Location: /');
    }