<?php
require_once "autoload.php";
$gestor = new Gestor();
$progPresen=new Presencial("progP", "Programación Presencial", 10, "A.2.7");
$progOnline=new Online("progO", "Programación Online", 10, "teams.com");
var_dump($progPresen);
var_dump($progOnline);

$gestor->agregar($progPresen);
$gestor->agregar($progOnline);
var_dump($_SESSION['asignaturas']);

$gestor->actualizar("progP", "* Programación Presencial *", 1);
var_dump($_SESSION['asignaturas']);

$encontrado=$gestor->buscar("progO");
var_dump($encontrado);

$gestor->eliminar("progO");
var_dump($_SESSION['asignaturas']);
echo "******************";