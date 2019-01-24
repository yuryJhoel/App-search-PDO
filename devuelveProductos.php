<?php
    require('conexion.php');
    class DevuelveProductos extends Conexion {
        public function DevuelveProductos(){
            parent::__construct(); /// llamamos al contructor del padre
        }
        public function getProductos($nombre){

            $sql = "SELECT * FROM alumnos WHERE nombre='$nombre'";
            $sentencia = $this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            return $resultado;
            $this->conexion_db = null;
            // ------------------------MYSQLI---------------//
            // $resultado = $this->conexion_db->query("SELECT * FROM alumnos WHERE nombre = '$nombre'");
            // $alumnos = $resultado->fetch_all(MYSQLI_ASSOC);
            // return $alumnos;
        }
    }




?>