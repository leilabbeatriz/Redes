<?php



// verificando se há usuário conectado
// usa função definida no arquivo auth.php
if (hasUser()) {
    header("Location: /");
}

if (isset($_POST['user'], $_POST['password'])) {
    //login

    $user = $_POST['user'];

    //usa função find() presente no arquivo database.php
    $result = find ("SELECT * FROM users where user='{$user}'");


    $data = $result->fetchArray();        

    if ($data) {
        $_SESSION['user'] = $data['user'];
        header('Location: /');
    } else {
        header('Location: /pages/cadastro');
    }
} else {
    header('Location: /pages/login');
}
?>
