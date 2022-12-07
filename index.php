<?php
require_once 'autoload.php';
require_once 'vista/layout/header.php';
require_once 'vista/layout/sidebar.php';

if (!empty($_GET['controlador'])) {
    $nombre_controlador = $_GET['controlador'] . 'controlador';
} else {
    echo "La página que buscas no existe";
    exit();
}

if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();

    if (!empty($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        echo "La página que buscas no existe";
    }
} else {
    echo "La página que buscas no existe";
}
require_once 'vista/layout/footer.php';
?>