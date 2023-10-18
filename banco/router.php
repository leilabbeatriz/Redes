<?php

$rotas = [
    '/' => '/pages/home.html',
    '/dashboard' => '/pages/dashboard.php',

    '/users/create' => '/pages/users/register.html',
    '/users/login' => '/pages/users/login.html',

    '/login' => '/Controllers/auth/login.php',     
    '/users/store' => '/Controllers/auth/register.php',
    '/logout' => '/Controllers/auth/logout.php',
    

    '/books/create' => '/Controllers/books/create.php',
    '/books/store' => '/Controllers/books/store.php',
    '/books/index' => '/Controllers/books/index.php',
    
];

function rotear ($uri, $rotas) {   

    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        header("Location: /");
    }

}