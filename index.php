<?php 

    session_start();
   
    include __DIR__.'/database.php';
    include __DIR__.'/model/User.php';
    include __DIR__.'/model/Events.php';
    include __DIR__.'/model/TravelItinerary.php';
    include __DIR__.'/roteador.php';

    $rota = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    rotear( $rota, $rotas);
?>