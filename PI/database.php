<?php

function connection() : SQLite3 {
    return new SQLite3('database.db');
}

//recebe a declaração SQL e o banco de dados
function find ($query) {    
    $connection = connection();
    return $connection->query($query);
}

function save ($query) {
    $db = connection();
    return $db->exec($query);    
}

//obtém uma conexão com o banco de dados
$connection = connection();


$connection->exec(
    "CREATE TABLE IF NOT EXISTS plans(
        id INTEGER PRIMARY KEY,
        nomePlano TEXT,
        duracaoPlano TEXT,
        valorPlano FLOAT)"
);

//cria as tabelas de usuário
$connection->exec(
    "CREATE TABLE IF NOT EXISTS users(
        id INTEGER PRIMARY KEY,
        name TEXT,
        user TEXT,
        idade INT,
        email TEXT,
        password TEXT)"
);

$connection->exec(
    "CREATE TABLE IF NOT EXISTS members(
        id INTEGER PRIMARY KEY,
        name TEXT,
        email TEXT,
        imc FLOAT,
        plan INT,
        foreign key (plan) references plans(id))"
);


?>