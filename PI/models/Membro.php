<?php
class Membro{

    protected $connection;

    public function __construct(SQLite3 $connection) {
        $this->connection = $connection;
    }

    function find (string $email) : Array | bool {  
        $query = 'SELECT email FROM members WHERE email=:email';

        $sttm = $this->connection->prepare($query);
        $sttm->bindValue(':email', $email);  
        $result = $sttm->execute();
        return $result->fetchArray(SQLITE3_ASSOC);
    }

    function save (string $name, string $email, int $peso, int $altura) : SQLite3Result | bool{

        $query = "INSERT INTO members ('name', 'imc', 'plan')" .
        "values(:name, :imc, :plan)";

        $imc = $this->imc($peso, $altura);
        $sttm = $this->connection->prepare($query);

        $sttm->bindValue(":name", $name);
        $sttm->bindValue(":imc", $imc);
        $sttm->bindValue(":plan", $plan);
        $result = $sttm->execute();
        return $result;
    }

    function imc($peso, $altura){
        $imc = $peso / ($peso * $altura);
        return $imc;
    }

}
?>