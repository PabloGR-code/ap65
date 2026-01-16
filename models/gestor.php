<?php
class Presencial extends Asignatura{
    private $aula;

    public function __construct($cod, $nombre, $creditos, $aula){
        parent::__construct($cod, $nombre, $creditos);
        $this->aula=$aula;
        $this->setHoras(20);
    }

    public function info(){
        $array=parent::info();
        $array[]=$this->aula;
        return $array;
    }

    public function setHoras($num){
        $this->horas=$this->creditos*$num;
    }
    public function setCreditos($creditos){
        parent::setCreditos($creditos);
        $this->setHoras(20);
    }
}