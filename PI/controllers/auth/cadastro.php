<?php


// verificando se há usuário conectado
// usa função definida no arquivo auth.php

if (hasUser()) {
    header('Location: /');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: /cadastro');
}


if (isset($_POST['name'], $_POST['user'], $_POST['idade'], $_POST['email'], $_POST['password'])) {
    
    $name = $_POST['name'];
    $user = $_POST['user'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    //usa função find() presente no arquivo database.php
    $User = new User(connection());
   
    $data = $User->find($email);



    if ($data) {
        $_SESSION['user'] = $user;
        header('Location: /');
    } else {

        //usa função save() presente no arquivo database.php        
        $retorno = $User->save($name, $user, $idade, $email, $password);

        $_SESSION['user'] = $user;        
        header('Location: /');
    }

}


?>


