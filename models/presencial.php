<?php

class presencial extends Asignatura{
    private $aula;

    function __construct($codigo, $nombre, $creditos, $aula){
        parent::__construct($codigo, $nombre, $creditos, $aula);
        $this->aula=$aula;
        $this->setHoras();
    }

    function setHoras(){
    $this -> horas = $this -> creditos * 20;
}

    function info(){
    $array[] = parent::info();
    $array[] = [$this -> aula];
    return $array;
}
}

?>