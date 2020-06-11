<?php

class Servicio {

    private $IdServicio;
    private $NombreObra;
    private $DirectorObra;
    private $Constructora;
    private $Mes;
    private $Maquina;
    private $Operario1;
    private $Operario2;

    public function __construct(){
    }

        public function setIdServicio($IdServicio){
            $this->IdServicio = $IdServicio;
        }
        public function getIdServicio(){
            return $this->IdServicio;
        }

        public function setNombreObra($NombreObra){
            $this->NombreObra = $NombreObra;
        }
        public function getNombreObra(){
            return $this->NombreObra;
        }

        public function setDirectorObra($DirectorObra){
            $this->DirectorObra = $DirectorObra;
        }
        public function getDirectorObra(){
            return $this->DirectorObra;
        }

        public function setConstructora($Constructora){
            $this->Constructora = $Constructora;
        }
        public function getConstructora(){
            return $this->Constructora;
        }

        public function setMes($Mes){
            $this->Mes = $Mes;
        }
        public function getMes(){
            return $this->Mes;
        }

        public function setMaquina($Maquina){
            $this->Maquina = $Maquina;
        }
        public function getMaquina(){
            return $this->Maquina;
        }

        public function setOperario1($Operario1){
            $this->Operario1 = $Operario1;
        }
        public function getOperario1(){
            return $this->Operario1;
        }

        public function setOperario2($Operario2){
            $this->Operario2 = $Operario2;
        }
        public function getOperario2(){
            return $this->Operario2;
        }
    }

?>