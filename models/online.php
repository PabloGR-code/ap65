<?php
class Online extends Asignatura{
    private $url;

    public function __construct($cod, $nombre, $creditos, $url){
        parent::__construct($cod, $nombre, $creditos);
        $this->url=$url;
        $this->setHoras(10);
    }

    public function info(){
        $array=parent::info();
        $array[]=$this->url;
        return $array;
    }

    public function setHoras($num){
        $this->horas=$this->creditos*$num;
    }
    public function setCreditos($creditos){
        parent::setCreditos($creditos);
        $this->setHoras(10);
    }
}