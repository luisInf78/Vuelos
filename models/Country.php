<?php
    require_once './config/database.php';
    include_once './clases/pais.php';
    class Country{

        private $conn;
        private $table = 'Pais';

        public function __construct(){

            $database = new Database();
            $this->conn = $database->getConnection();

        }

        public function getAll(){
           
            try{
                $listadopaises = array();
                $query = "SELECT * FROM " . $this->table;
                $stm = $this->conn->prepare($query);
                $stm->execute();

                foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r){

                    $pais = new Pais();
                    $pais->setIdPais($r->idPais);
                    $pais->setNombre($r->nombre);
                    $listadopaises[] = $pais;

                }
                
            }catch(Exception $e){
                exit($e->getMessage());
            }

            return $listadopaises;

        }//fin getAll()

        public function getAllid(int $idpais){
            try{
                $listadopaises = array();
                $query = "SELECT * FROM " . $this->table . " WHERE idPais = " . $idpais;
                $stm = $this->conn->prepare($query);
                $stm->execute();

                foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r){

                    $pais = new Pais();
                    $pais->setIdPais($r->idPais);
                    $pais->setNombre($r->nombre);
                    $listadopaises[] = $pais;

                }
                
            }catch(Exception $e){
                exit($e->getMessage());
            }

            return $listadopaises;
        }  

        public function create(int $idpais, string $nombre){
            
            $sql = 'INSERT INTO $tabla VALUES(:idpais,:nombre)';
            $stm = $this->conn->prepare($sql);
            $stm->bindParam(':idpais',$idpais);
            $stm->bindParam(':nombre',$nombre);
            $result = $stm->execute();
            echo $result;
        }


    }//fin clase Country



?>