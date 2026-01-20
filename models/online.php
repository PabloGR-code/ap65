<?php
class Online extends Asignatura {
    private $url;
    function __construct($codigo,$nombre,$creditos, $url){
        parent::__construct($codigo,$nombre,$creditos);
        $this -> setHoras(10);
    }
    function info(){
        $array=parent::info();
        $array[]=$this->url;
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
    function getHoras(){
            return $this->horas;
    }
    function getUrl(){
            return $this->url;
    }
    function setCreditos($nuevoCredito){
        $this->creditos = $nuevoCredito;
        $this -> setHoras(20);
    }
    function setNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
    function setUrl($nuevoUrl){
        $this->url = $nuevoUrl;
    }
}