<?php
abstract class Asignatura {
    protected $cod;
    protected $nombre;
    protected $creditos;
    protected $horas;

    public function __construct($cod, $nombre, $creditos) {
        $this->cod = $cod;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

    public function getCod(){
        return $this->cod;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setCreditos($creditos){
        $this->creditos = $creditos;
        $this->horas=$this->creditos*10;

    }

    public function info() {
        return array($this->cod, $this->nombre, $this->creditos, $this->horas);
    }

    abstract public function setHoras($num);

}