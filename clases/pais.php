<?php
    declare(strict_types=1);
    class Pais{

        public function __construct(
            private int $idpais = 0,
            private string $nombre = ""
        ){}

        public function getIdPais(){
            return $this->idpais;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setIdPais(int $idpais){
            $this->idpais = $idpais;
        }

        public function setNombre(string $nombre){
            $this->nombre = $nombre;
        }


    }//fin class

?>