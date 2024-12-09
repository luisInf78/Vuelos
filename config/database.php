<?php
    declare(strict_types = 1);
    class Database{    
        public $conn;
        public function __construct(
            
            private string $dsn = "mysql:host=localhost;dbname=daw2",
            private string $db_name= "daw2",
            private string $username= "root",
            private string $password= ""){

            }

        public function getConnection(){

            try{
                $this->conn = new PDO($this->dsn,$this->username,$this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo 'Falló la conexión:' . $e->getMenssage();

            }

            return $this->conn;
        }//fin getConnection

    }//fin class


    

?>