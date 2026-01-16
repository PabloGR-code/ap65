<?php
class Controlador {

    private $gestor;

    public function __construct() {
        $this->gestor = new GestorElementos();
    }

    public function index() {
        $productos = $this->gestor->Devolver();
        include "views/listar.php";
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $creditos = $_POST['creditos'];
            $aula = $_POST['aula'];
            $url = $_POST['url'];
            if($url != "Null"){
            $nuevo = new Presencial($codigo,$nombre,$creditos, $aula);
            }
            else{
                $nuevo = new Online($codigo,$nombre,$creditos, $url);
            }
            $this->gestor->crear($nuevo);

            header("Location: index.php");
            exit;
        }

        include "views/crear.php";
    }

    public function editar() {
        $id = $_GET['id'] ?? null;
        $producto = $this->gestor->buscar($id);

        if (!$producto) {
            echo "Producto no encontrado";
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->gestor->editar($_POST['codigo'], $_POST['nombre'], $_POST['creditos'],$_POST['aula']);
            header("Location: index.php");
            exit;
        }

        include "views/editar.php";
    }

    public function eliminar() {
        $id = $_GET['id'] ?? null;
        $this->gestor->eliminar($id);
        header("Location: index.php");
        exit;
    }
    public function limpiarSesion() {
    if (isset($_SESSION['ASIGNATURAS'])) {
        $_SESSION['ASIGNATURAS'] = []; // Vaciar todas las asignaturas
    }
    header("Location: index.php");
    exit;
    }
}