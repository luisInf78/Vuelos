<?php
    require './models/Pais.php';
    class PaisControllers{
        private $paisModels;

        public function __construct(){
            $this->paisModels = new Pais();
        }

        public function index(){

            $paises = $this->paisModels->getAll();
            include './views/listaPaises.php';
        }

    }



?>