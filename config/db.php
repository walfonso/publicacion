<?php

abstract class BaseDatos {
    protected $conexion;
    
    // Método abstracto para conectar a la base de datos
    abstract protected function conectar();
    
    // Constructor
    public function __construct() {
        $this->conectar();
    }
    
    // Método para ejecutar consultas SQL
    public function consultar($sql) {
        // Ejecuta la consulta y maneja errores aquí
        $resultado = $this->conexion->query($sql);
        if (!$resultado) {
            die("Error en la consulta: " . $this->conexion->error);
        }
        
        return $resultado;
    }
}
?>