<?php 

class Planos{
    protected $connection;
    protected string $nomePlano;
    protected string $duracaoPlano;
    protected float $valorPlano;

    public function __construct(SQLite3 $connection) {
        $this->connection = $connection;
    }

    public function allPlans () {


        $result = $this->connection->query('SELECT * FROM plans');

        $plan_list = array();
        while ($plan = $result->fetchArray()) {
            array_push($plan_list, [
                'name' => $plan['nomePlano'],
            ]);
        }
        return $plan_list;
    }

    function save (){

        $query = "INSERT INTO plans ('nomePlano', 'duracaoPlano', 'valorPlano') " .
        "values('simples','1 mês','70'), ('trimestral','3 meses','90'), ('semestral','6 meses','120')";

        $sttm = $this->connection->prepare($query);

        $result = $sttm->execute();
        return $result;
    }


}


?>