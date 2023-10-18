<?php

// frameworks: django, boostrap, laravel, spring, remix

if (hasUser()) {
    header('Location: /dashboard');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: /users/create');
}

// chegar se é register 
if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //criar um objetdo do tipo User (modelo User)
    $user = new User(connection("localhost","root", "", "livros"));
    
    
    //Ou os dados do usuário em um array,
    //ou o valor booleano FALSO
    $data = $user->find($email);   

    if ($data) {
        $_SESSION['user'] = $data['name'];
        $_SESSION['id'] = $data['id'];
        var_dump($_SESSION['id']);
        exit;
        header('Location: /dashboard');
    } else {

        $retorno = $user->save ($name, $email, $password);
        // save("INSERT INTO users ('name', 'email', 'password') values('{$name}','{$email}','{$password}')");
        $data = $user->find($email);
        $_SESSION['user'] = $name;
        $_SESSION['id'] = $data['id'];

        
        header('Location: /dashboard');
    }

}
