<?php
class Book{

    protected $conn; //conexão

    public function __construct(mysqli $conn) {
        $this->conn = $conn;
    }

    public function save(string $title, int $user) {

        $query = "INSERT INTO books (title, user) VALUES (?,?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param('si', $title, $user);

            
            $result = $stmt->execute();
            $result = $stmt->store_result();

        return $result;
    }

    public function find (string $title) {
        $query = "SELECT * FROM books where title= ?" ;
        
        //prepara a consulta e gera um objeto SQLITE3Statetent
        // $stmt =  $this->conn->stmt_init();
        $stmt = $this->conn->prepare($query);        

        //teste 1
        $stmt->bind_param('s', $title);

        $stmt->execute();
        
        // $stmt->bind_result($email);

        return $stmt->fetch();
    }

    public function showAll(int $user){
        $query = "SELECT title FROM books where user= ?";
        $stmt = $this->conn->prepare($query);        

        $stmt->bind_param('i', $user);
        
        $stmt->execute();
        $result = $stmt->get_result();

        
        $bookList = array();
        while($row = $result->fetch_assoc()){
            array_push($bookList, [
                'title' => $row['title']
            ]);
        }
        return $bookList;

    }
}
?>