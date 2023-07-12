<?php
// verificando se há usuário conectado
// usa função definida no arquivo auth.php

if (hasUser()) {
    header('Location: /');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: /users/create');
}


if (isset($_POST['name'], $_POST['user'], $_POST['age'], $_POST['email'], $_POST['password'])) {
    
    $name = $_POST['name'];
    $user = $_POST['user'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    //usa função find() presente no arquivo database.php
    $User = new User(connection());
   
    $data = $User->find($email);
  

    if ($data) {
        $_SESSION['user'] = $user;
        $_SESSION['id'] = $data['id'];
        header('Location: /');
    } else {

        //usa função save() presente no arquivo database.php        
        $save = $User->save($name, $user, $age, $email, $password);
        $data = $User->find($email);
        $_SESSION['user'] = $user; 
        $_SESSION['id'] = $data['id'];
        var_dump($_SESSION['id']);
        exit();     
        header('Location: /');
    }

}


?>


