<?php
abstract class Asignatura {
    protected $codigo;
    protected $nombre;
    protected $creditos;
    protected $horas;
    function __construct($codigo,$nombre,$creditos,){
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
        $this->horas = 0;
    }
    function info(){
        return array ($this->codigo,$this->nombre,$this->creditos,$this->horas);
    }
    abstract public function setHoras($num);
}