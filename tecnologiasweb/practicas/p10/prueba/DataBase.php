<?php
    namespace MyDatabase;

    abstract class DataBase {
        protected \mysqli $conexion;

        public function __construct(string $dbName) {
            $this->conexion = new \mysqli(
                'localhost',
                'root',
                '151627',
                $dbName
            );

            if ($this->conexion->connect_error) {
                die('¡Error de conexión a la base de datos!');
            }
        }
    }
?>