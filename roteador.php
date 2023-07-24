<?php
$rotas = [
    '/' => "/src/pages/home.html",
    '/register' => "/pages/users/register.html",
    '/auth/register' => "/Controllers/auth/register.php",
    '/login' => "/Controllers/auth/login.php",
    '/home' => "/pages/home.php",
    '/anuciarEvento' => "/pages/eventos/create.php",
    '/cadastreEvent' => "/Controllers/anuciar.php",
    '/montarRoteiro' => "/pages/roteiro/create.php",
    '/roteiro' => "/Controllers/roteiro/store.php",
    '/logout' => "/Controllers/auth/logout.php",
    '/page' => '/pages/page.html',
];

function rotear($rota, $rotas)
{
    if (array_key_exists($rota, $rotas)) {
        include __DIR__.$rotas[$rota];
    } else {
        echo "I'm sorry, but this pages not exist";
    }
}
?>