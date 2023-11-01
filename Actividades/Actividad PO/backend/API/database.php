<?php

abstract class DataBase {
    protected $conexion;

    public function __construct($database="marketzone") {
        $this->conexion = @mysqli_connect(
            'localhost',
            'root',
            'Edg401193',
            $database
        );
    
        if(!$this->conexion) {
            die('¡Base de datos NO conextada!');
        }
    }
}
?>