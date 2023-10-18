<?php
class User{
    protected $conn;

    public function __construct(PDO $connection)
    {
        $this->conn=$connection;
    }

    public function save($sql){
        $this->conn->exec($sql);
    }

    public function delete($sql){
        $this->conn->exec($sql);
    }
    
    public function find($sql){
        $find=$this->conn->query($sql);
        return $find->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function all(){
        return $users=$this->conn->query("SELECT * FROM user");
    }

    //módulo específico para registrar no sistema
    public function register($lastname,$firstname,$email,$password){
            $this->conn->exec("INSERT INTO users (firstname,lastname,email,password) VALUES ('".$firstname."','".$lastname."','".$email."','".password_hash($password,PASSWORD_DEFAULT)."')");;
    }

}