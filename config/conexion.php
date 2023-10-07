<?php

require_once('./config/db.php');

class Conexion extends BaseDatos {
    protected function conectar() {
        $servidor = "localhost";
        $usuario = "root";
        $contrasena = "514523";
        $base_datos = "urquizadb";
        
        $this->conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);
        
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }

    }
    

    // Puedes agregar otros métodos específicos de esta clase si es necesario
}

?>