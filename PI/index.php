<?php
session_start();

include __DIR__ . '/database.php';
include __DIR__ . '/auth.php';
include __DIR__ . '/router.php';
include __DIR__ . '/models/User.php';
include __DIR__ . '/models/Planos.php';
include __DIR__ . '/models/Membro.php';

$connection = connection();

//FUNÇÃO PARA PEGAR URL
$rota = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

rotear($rota, $rotas); //rotas exite pq a pagina rota foi incluida

?>