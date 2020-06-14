<?php

class Maquinaria{

    private $IdMaquina;
    private $Nombre;
    private $Capacidad;

    public function __construct(){}

    public function setIdMaquina($IdMaquina){
        $this->IdMaquina = $IdMaquina;
    }
    public function getIdMaquina(){
        return $this->IdMaquina;
    }

    public function setNombre($Nombre){
        $this->Nombre = $Nombre;
    }
    public function getNombre(){
        return $this->Nombre;
    }

    public function setCapacidad($Capacidad){
        $this->Capacidad = $Capacidad;
    }
    public function getCapacidad(){
        return $this->Capacidad;
    }
}
?>