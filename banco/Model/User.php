<?php

class User
{
    protected $conn; //conexão

    public function __construct(mysqli $conn) {
        $this->conn = $conn;
    }

    public function save(string $name, string $email, string $password) {
        
        //gera o hash
        $senha_hash = password_hash($password, PASSWORD_DEFAULT);

        // $query = "INSERT INTO users ('name', 'email', 'password') " .
        //     "values('{$name}','{$email}','{$senha_hash}')";
        $query = "INSERT INTO users (name, email, password) VALUES (?,?,?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param('sss', $name, $email, $senha_hash);

            
            $result = $stmt->execute();
            $result = $stmt->store_result();

        return $result;
    }

    public function find (string $email) {
        $query = "SELECT * FROM users where email= ?" ;
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $email);

        $result = $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row;
    }

    public function findId (string $email) {
        $query = "SELECT id FROM users where email= ?" ;
        
        $stmt = $this->conn->prepare($query);        

        //teste 1
        $stmt->bind_param('s', $email);

        
        $stmt->execute();
        $stmt->bind_result($id);
        
        $result = $stmt->fetch();

        return $id;
    }

}
