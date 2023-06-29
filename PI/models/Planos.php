<?php 

class Planos{
    protected $connection;
    // protected string $nomePlano;
    // protected string $duracaoPlano;
    // protected float $valorPlano;

    public function __construct(SQLite3 $connection) {
        $this->connection = $connection;
    }

    function insert(){
        $query = "INSERT INTO plans (nomePlano, duracaoPlano, valorPlano) VALUES 
                     ('mensal', '1 mês', 70),
                     ('bimestral', '2 mês', 70),
                     ('trimestral', '3 mês', 70),
                     ('semenstral', '6 mês', 70),
                     ('anual', '1 ano', 70)";

        $sttm = $this->connection->prepare($query);
        $result = $sttm->execute();
        return $result;
    }
    // function choosePlan(string $plan){
    //     switch ($plan) {
    //         case 'simples':
    //             $this->nomePlano = $plan;
    //             $this->duracaoPlano = '1 mês';
    //             $this->valorPlano = 70;
    //             $query = "INSERT INTO plans ('nomePlano', 'duracaoPlano', 'valorPlano') " .
    //                 "values('{$this->nomePlano}','{$this->duracaoPlano}','{$this->valorPlano}')";

    //             $result = $this->connection->exec($query);
    //             break;
    //         case 'big 3':
    //             $this->nomePlano = $plan;
    //             $this->duracaoPlano = '3 meses';
    //             $this->valorPlano = 70;
    //             $query = "INSERT INTO plans ('nomePlano', 'duracaoPlano', 'valorPlano') " .
    //                 "values('{$this->nomePlano}','{$this->duracaoPlano}','{$this->valorPlano}')";

    //             $result = $this->connection->exec($query);
    //             break;
    //         case 'big 6':
    //             $this->nomePlano = $plan;
    //             $this->duracaoPlano = '6 meses';
    //             $this->valorPlano = 70;
    //             $query = "INSERT INTO plans ('nomePlano', 'duracaoPlano', 'valorPlano') " .
    //                 "values('{$this->nomePlano}','{$this->duracaoPlano}','{$this->valorPlano}')";

    //             $result = $this->connection->exec($query);
    //             break;
    //         case 'big all':
    //             $this->nomePlano = $plan;
    //             $this->duracaoPlano = '1 ano';
    //             $this->valorPlano = 70;
    //             $query = "INSERT INTO plans ('nomePlano', 'duracaoPlano', 'valorPlano') " .
    //                 "values('{$this->nomePlano}','{$this->duracaoPlano}','{$this->valorPlano}')";

    //             $result = $this->connection->exec($query);
    //             break;
    //         default:
    //             echo 'Opção Inválida';
    //             break;
    //     }
    // }

    function getAllRows(){
        $query = "SELECT * FROM plans";
        $sttm = $this->connection->prepare($query);
        $rows = $sttm->execute();

        return $rows->fetchArray(SQLITE3_ASSOC);
    }

}
?>