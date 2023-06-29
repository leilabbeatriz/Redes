<?php 

$rotas= [
    '/' => "/pages/home.php",
    '/login' => "/pages/login.php",
    '/cadastro' => "/pages/cadastro.php",
    '/store' => "/controllers/auth/cadastro.php",
    '/storeLogin' => "/controllers/auth/login.php",
    '/logout' => "/controllers/auth/logout.php",
    '/error' => "/pages/error.php",
    '/planos' => "/pages/planos.php",
    '/membro' => "/pages/membro.php",
    '/storePlanos' => "/controllers/membros/membro.php"
];

function rotear($rota, $rotas){
    if (array_key_exists($rota, $rotas)) { //1° parametro é a chave, 2° o array da chave
        include __DIR__ . $rotas[$rota];
    }else{
        header('location: /error');
    }
}
?>