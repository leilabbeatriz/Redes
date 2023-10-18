<?php
if (hasUser()) {
    include __DIR__ . '../../../pages/books/create.php';
    // header('location: /pages/books/create');
}else{
    header('location: /');
}
?>