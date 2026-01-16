<?php
class Online extends Asignatura{
    private $url;

    function __construct($codigo, $nombre, $creditos, $url){
        parent::__construct($codigo, $nombre, $creditos,);
        $this->url=$url;
        $this->sethoras();
    }

function setHoras(){
    $this -> horas = $this -> creditos * 10;
}


function info(){
    $array[]=parent::info();
    $array[] = [$this -> url];
    return $array;
}

}


?>