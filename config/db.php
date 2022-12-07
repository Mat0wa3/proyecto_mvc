<?php
class Database {
    public static function connect() {
        $conexion = new mysqli("localhost", "root", "", "tienda_master");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>