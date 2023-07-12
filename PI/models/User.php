<?php 

class User{
    protected $connection;

    public function __construct(SQLite3 $connection) {
        $this->connection = $connection;
    }

    function find (string $email) : Array | bool {  
        $query = 'SELECT * FROM users WHERE email=:email';

        $sttm = $this->connection->prepare($query);
        $sttm->bindValue(':email', $email);  
        $result = $sttm->execute();
        return $result->fetchArray(SQLITE3_ASSOC);
    }

    function save (string $name, string $user, int $age, string $email, string $password) : SQLite3Result | bool{
        $query = "INSERT INTO users ('name', 'user', 'age', 'email', 'password')" .
        "values(:name, :user, :age,:email,:password)";

        $sttm = $this->connection->prepare($query);

        $sttm->bindValue(":name", $name);
        $sttm->bindValue(":user", $user);
        $sttm->bindValue(":age", $age);
        $sttm->bindValue(":email", $email);
        $sttm->bindValue(":password", password_hash($password, PASSWORD_ARGON2I));
        $result = $sttm->execute();
        return $result;
    }
 }
?>