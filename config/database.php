<?php

    class Database{

        private $host = "localhost";
        private $db_name= "daw2";
        private $username= "root";
        private $password= "";
        public $conn;

        public function getConnection(){
            $conn = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);

            if(mysqli_connect_errno()){
                echo "Error en la conexión";
                exit();
            }
            return $conn;
        }//fin getConnection

    }//fin class


    

?>