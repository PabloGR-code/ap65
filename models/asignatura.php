<?php
abstract class Asignatura {

protected $codigo;
protected $nombre;
protected $creditos;
protected $horas;

function __construct($codigo, $nombre, $creditos){
    $this->codigo = $codigo;
    $this->nombre = $nombre;
    $this->creditos = $creditos;
   
}

abstract function setHoras();

function info(){
    $inf[] = [$this -> codigo,$this->nombre,$this->creditos,$this->horas];
    return $inf;
}

}


?>