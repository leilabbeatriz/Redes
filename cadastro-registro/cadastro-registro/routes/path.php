<?php

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/':
        Http::isGet($method);
        Direction::render('/welcome');
        break;

    case '/dash':
        Http::isGet($method);
        Auth::authenticate();
        Direction::render('/content/dash');
        break;

    case '/users/user':
        Http::isGet($method);
        Auth::authenticate();
        userController::profile();
        break;
        
    // ------------------------------- 

    // Autenticação

    case '/login':
        Http::isGet($method); 
        authController::login();
        break;
    case '/logar':
        Http::isPost($method);
        authController::logar();
        break;

    case '/register':
        Http::isGet($method);
        authController::register();
        break;
    case '/registrar':
        Http::isPost($method);
        authController::registrar();
        break;

    // ------------------------------- 

    // Errors

    case '/errors/unauthorized':
        Http::isGet($method);
        errorController::unauthorized();
        break;

    case '/errors/badrequest':
        Http::isGet($method);
        errorController::badrequest();
        break;

    case '/errors/undefined':
        Http::isGet($method);
        errorController::undefined();
        break;

    case '/errors/notauthenticate':
        Http::isGet($method);
        errorController::notauthenticate();
        break;

    // ------------------------------- 

    case '/logout':
        Http::isGet($method);
        authController::logout();
        break;

    default:
        Direction::render('/errors/undefined');
        break;
}
