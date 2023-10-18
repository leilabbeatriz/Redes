<?php 

if (hasUser()) {
    header("Location: /dashboard");
}

if (  isset($_POST['email'], $_POST['password'])  ) {
    //login

    $email = $_POST['email'];  
    $pass = $_POST['password'];  

    $user = new User(connection("localhost","root", "", "livros"));
    
    //Ou os dados do usuário em um array,
    //ou o valor booleano FALSO
    $data = $user->find($email);   

    if ($data && password_verify($_POST['password'], $data['password'])) {
        $_SESSION['user'] = $data['name'];
        $user = new User(connection("localhost","root", "", "livros"));
        $_SESSION['id'] = $data['id'];
        header('Location: /dashboard');
    } else {
        header('Location: /users/login');
    }
}else {
    header('Location: /users/login');
}