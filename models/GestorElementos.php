<?php
class GestorElementos
{
    function __construct()
    {
        if (!isset($_SESSION['ASIGNATURAS'])) {
            $_SESSION['ASIGNATURAS'] = [];
        }
    }

    function Crear($nuevaAsignatura)
    {
        $_SESSION['ASIGNATURAS'][] = $nuevaAsignatura;
    }

    function Devolver()
    {
        return $_SESSION['ASIGNATURAS'];
    }

    function BuscarCodigo($codigo)
    {
        foreach ($_SESSION['ASIGNATURAS'] as $key) {
            if ($key->getCodigo() == $codigo) {
                return $key;
            }
        }
        return null;
    }

    function setCodigo($nombre, $nuevoCodigo)
    {
        foreach ($_SESSION['ASIGNATURAS'] as $key) {
            if ($key->getNombre() == $nombre) {
                $key->setCodigo($nuevoCodigo);
                return $key;
            }
        }
        return null;
    }

    function setCreditos($codigo, $nuevoCredito)
    {
        foreach ($_SESSION['ASIGNATURAS'] as $key) {
            if ($key->getCodigo() == $codigo) {
                $key->setCreditos($nuevoCredito);
                return $key;
            }
        }
        return null;
    }

    function setNombre($codigo, $nuevoNombre)
    {
        foreach ($_SESSION['ASIGNATURAS'] as $key) {
            if ($key->getCodigo() == $codigo) {
                $key->setNombre($nuevoNombre);
                return $key;
            }
        }
        return null;
    }

    function Eliminar($id)
    {
        foreach ($_SESSION['ASIGNATURAS'] as $index => $key) {
            if ($key->getCodigo() == $id) {
                unset($_SESSION['ASIGNATURAS'][$index]);
                $_SESSION['ASIGNATURAS'] = array_values($_SESSION['ASIGNATURAS']);
                return true;
            }
        }
        return false;
    }
    function buscar($codigo){
        foreach ($_SESSION['ASIGNATURAS'] as $key) {
            if ($key->getCodigo() == $codigo) {
                return $key;
            }
        }
        return null;
    }
    function editar($codigo, $nuevoNombre,$creditos,$aula)
    {
        foreach ($_SESSION['ASIGNATURAS'] as $key) {
            if ($key->getCodigo() == $codigo) {
                $key->setNombre($codigo);
                $key->setNombre($nuevoNombre);
                $key->setNombre($creditos);
                $key->setNombre($aula);
                return $key;
            }
        }
        return null;
    }
}