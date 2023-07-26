<?php 

    function connection() : SQLite3 {
        return new SQLite3('database.bd');
    }
    
    $connection = connection();

    $connection->exec("CREATE TABLE IF NOT EXISTS tb_usuario(
        usu_codigo INTEGER PRIMARY KEY,
        usu_nome TEXT,
        usu_cidade TEXT,
        usu_estado TEXT,
        usu_email TEXT,
        usu_senha TEXT)"
    );

    $connection->exec("CREATE TABLE IF NOT EXISTS tb_events(
        eve_codigo INTEGER PRIMARY KEY,
        eve_nome TEXT,
        eve_data DATE,
        eve_local TEXT,
        eve_descricao TEXT,
        eve_preco FLOAT,
  		eve_programacao TEXT)"
        );

    $connection->exec("CREATE TABLE IF NOT EXISTS tb_touristAttraction(
        tou_codigo INTEGER PRIMARY KEY,
        tou_nome TEXT,
        tou_openingHours HOURS,
        tou_local TEXT,
        tou_descricao TEXT,
        tou_preco FLOAT,
        tou_visitorRatings TEXT)"
    );

    $connection->exec("CREATE TABLE IF NOT EXISTS tb_travelItinerary(
        tra_codigo INTEGER PRIMARY KEY,
        tra_city TEXT,
        tra_date DATE,
        tra_activityPreferences TEXT)"
    );
?>