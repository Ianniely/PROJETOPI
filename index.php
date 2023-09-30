<?php 

    session_start();

    require 'autoload.php';
    
    require 'config/createCity.php';
    require 'config/createRestaurant.php';
    require 'config/createSight.php';
    require 'config/createAccommodation.php';
    require 'config/createSuperUser.php';

    require 'routes.php';
    require 'auth.php';

    use Router\Router;

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $method = $_SERVER['REQUEST_METHOD'];
    
    Router::route($uri, $method);
?>