<?php


// verificando se há usuário conectado
// usa função definida no arquivo auth.php



if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: /cadastro');
}

if (isset($_POST['plan'])){
    $plan = $_POST['plan'];

    $p = new Planos(connection());
    $p->choosePlan($plan);
    header('Location: /');
}
?>