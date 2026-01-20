<?php
class Presencial extends Asignatura {
    private $aula;
    function __construct($codigo,$nombre,$creditos, $aula){
        parent::__construct($codigo,$nombre,$creditos);
        $this -> setHoras(20);
    }
    function info(){
        $array=parent::info();
        $array[]=$this->aula;
        return $array;
    }
    function setHoras($num){
        $this -> horas = $this -> creditos * $num;
    }
    function getNombre(){
            return $this->nombre;
    }
    function getCreditos(){
            return $this->creditos;
    }
    function getCodigo(){
            return $this->codigo;
    }
    function getAula(){
            return $this->aula;
    }
    function getHoras(){
            return $this->horas;
    }
    function setCreditos($nuevoCredito){
        $this->creditos = $nuevoCredito;
        $this -> setHoras(20);
    }
    function setNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
    function setAula($nuevaAula){
        $this->aula = $nuevaAula;
    }
}

?>