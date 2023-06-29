<?php

if (isset($_SESSION['user'])) {
    session_destroy();
    setcookie('PHPSESSID','',time() - 3600);
    header('location: /');
}else{
    header('location: /');
}

?>