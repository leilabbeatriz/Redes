<?php 
if (hasUser()) {
    $book = new Book(connection("localhost","root", "", "livros"));
    $books = $book->showAll($_SESSION['id']);
    include __DIR__ . '/../../pages/books/index.php';  
}else{
    header('location: /');
}

?>