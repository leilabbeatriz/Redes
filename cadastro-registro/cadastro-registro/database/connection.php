<?php
// Conexão com o banco de dados
function connection(){
    // return new SQLite3('database.db');
    $pdo = new PDO('mysql:host=localhost:3307;dbname=banco', 'root', 'root');
    $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    return $pdo;
}
