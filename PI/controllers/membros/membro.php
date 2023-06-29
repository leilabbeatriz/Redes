<?php


// verificando se há usuário conectado
// usa função definida no arquivo auth.php



if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: /membro');
}

if (isset($_POST['name'], $_POST['user'], $_POST['idade'], $_POST['email'], $_POST['peso'], $_POST['altura'], $_POST['plan'])) {
    
    $name = $_POST['name'];
    $user = $_POST['user'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $idPlan = $_POST['plan'];


    //usa função find() presente no arquivo database.php
    $Membro = new Membrp(connection());
   
    $data = $Membro->find($email);



    if ($data) {
        header('Location: /');
    } else {

        //usa função save() presente no arquivo database.php        
        $retorno = $User->save($name, $user, $idade, $email, $password);     
        header('Location: /');
    }

}


?>



?>