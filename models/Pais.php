<?php
    require_once './config/database.php';
    class Pais{

        private $conn;
        private $table = 'Pais';

        public function __construct(){

            $database = new Database();
            $this->conn = $database->getConnection();

        }

        public function getAll(){
            $query = "SELECT * FROM " . $this->table;
            $listaPaises = mysqli_query($this->conn, $query);
            return $listaPaises;

        }




    }



?>