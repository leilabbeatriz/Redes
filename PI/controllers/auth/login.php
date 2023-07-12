<?php

if (hasUser()) {
    header("Location: /");
}

if (isset($_POST['email'], $_POST['password'])) {
    //login

    $email = $_POST['email'];
    $password = $_POST['password'];

    //o código de busca de usuário está
    //encapsulado na classe User (modelo)
    $User = new User(connection());    
    $data = $User->find($email);


    if ($data && password_verify($password, $data['password'])) {
        $_SESSION['user'] = $data['user'];
        header('Location: /');
    } else {
        header('Location: /users/login');
    }
} else {
    header('Location: /users/login');
}
?>
