<?php
require_once 'autoloader.php'; // carga todas las clases
session_start();               // iniciar sesión antes de usar $_SESSION

$controller = new Controlador();

$accion = $_GET['accion'] ?? 'index';
$id = $_GET['id'] ?? null;

if ($accion == 'crear') {
    $controller->crear();
} 
elseif ($accion == 'editar') {
    if ($id) {
        $controller->editar();
    } else {
        echo "No se indicó ID para editar";
    }
} 
elseif ($accion == 'eliminar') {
    if ($id) {
        $controller->eliminar();
    } else {
        echo "No se indicó ID para eliminar";
    }
} 
else { // index u otra acción no reconocida
    $controller->index();
}
if ($accion == 'limpiar') {
    $controller->limpiarSesion();
}
var_dump($_SESSION['ASIGNATURAS']);