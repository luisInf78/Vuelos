<?php
    require './models/Country.php';
    class PaisControllers{
        private $paisModels;

        public function __construct(){
            $this->paisModels = new Country();
        }

        public function index(){

            $paises = $this->paisModels->getAllid(1);
            include './views/listaPaises.php';
        }

        public function create(){
            include './views/altaPaises.php';
            echo $this->paisModels->create($_GET['idpais'],$_GET['nombre']);
        }

    }



?>