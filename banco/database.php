<?php


function connection($host, $user, $pass, $db)  {
    $conn = new mysqli($host, $user, $pass, $db);
    return $conn;
}

$connection = connection("localhost","root", "", "livros");

//cria as tabelas de usuário e de livros
$connection->query(
    "CREATE TABLE IF NOT EXISTS users(
        id INT PRIMARY KEY AUTO_INCREMENT,
        name TEXT,
        email TEXT,
        password TEXT)"
);

$connection->query("CREATE TABLE IF NOT EXISTS books(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title TEXT,
    user INT,
    FOREIGN KEY(user) REFERENCES users(id))"
);

//recebe a declaração SQL e o banco de dados
// query = "SELECT * FROM users";
function find ($query, $connection) {    
    return $connection->query($query);
}

// INSERTO INTO users (name,email,password)
//  VALUES ('eu','eu@eu','123123');
function save ($host, $user, $pass, $db, $query) {
    $db = connection($host, $user, $pass, $db);
    return $db->query($query);    
}

?>