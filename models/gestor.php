<?php
class Gestor {
    public function __construct() {
        if (!isset($_SESSION['asignaturas'])) {
            $_SESSION['asignaturas'] = [];
        }
    }

    public function agregar($asig) {
        $_SESSION['asignaturas'][] = $asig;
    }

    public function listar() {
        return $_SESSION['asignaturas'];
    }

    public function buscar($cod) {
        foreach ($_SESSION['asignaturas'] as $asig) {
            if ($asig->getCod() == $cod) return $asig;
        }
        return null;
    }

    public function actualizar($cod, $nombre, $creditos) {
        foreach ($_SESSION['asignaturas'] as $asig) {
            if ($asig->getCod() == $cod) {
                $asig->setNombre($nombre);
                $asig->setCreditos($creditos);
                return true;
            }
        }
        return false;
    }

    public function eliminar($cod) {
        foreach ($_SESSION['asignaturas'] as $i => $asig) {
            if ($asig->getCod() == $cod) {
                unset($_SESSION['asignaturas'][$i]);
                $_SESSION['asignaturas'] = array_values($_SESSION['asignaturas']);
                return true;
            }
        }
        return false;
    }
}
