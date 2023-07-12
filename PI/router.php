<?php 

$rotas= [
    '/' => "/pages/home.php",

    '/users/create' => "/pages/users/cadastro.php",
    '/users/store' => "/controllers/auth/cadastro.php",
    '/users/login' => "/pages/users/login.php",

    '/login' => "/controllers/auth/login.php",
    '/logout' => "/controllers/auth/logout.php",

    '/error' => "/pages/error.php",

    '/planos/create' => "/controllers/planos/create.php",
    '/planos/store' => "/controllers/planos/store.php",
    '/planos/index' => "/pages/planos/index.php",
];

function rotear($rota, $rotas){
    if (array_key_exists($rota, $rotas)) { //1° parametro é a chave, 2° o array da chave
        include __DIR__ . $rotas[$rota];
    }else{
        header('location: /error');
    }
}
?>