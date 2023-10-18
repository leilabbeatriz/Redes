<?php 

session_start();

include __DIR__ . '/database.php';
include __DIR__ . '/Model/User.php';
include __DIR__ . '/Model/Book.php';
include __DIR__ . '/auth.php';
include __DIR__ . '/router.php';

// $connection = connection();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

rotear($uri, $rotas);