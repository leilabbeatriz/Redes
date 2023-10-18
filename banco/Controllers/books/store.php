<?php



if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: /pages/books/create');
}

// chegar se é register 
if (isset($_POST['title'])) {
    
    $title = $_POST['title'];
    $user = $_SESSION['id'];


    $book = new Book(connection("localhost","root", "", "livros"));

    $data = $book->find($title);   

    if ($data) {
        header('Location: /dashboard');
    } else {
        $retorno = $book->save ($title, $user);
        
        header('Location: /dashboard');
    }

}
?>