<?php

    class ProductosModel{

        private $db;

        private $productos;

        public function __construct()
        {
            require_once("modelo/conexion.php");

            $this->db = Conectar::conexion();

            $this->productos = array();
        }

        public function getProductos(){

            $consulta = $this->db->query("SELECT * FROM PRODUCTOS");

            while($registro = $consulta->fetch(PDO::FETCH_ASSOC)){

                //Almacenamos cada registro que devuelva la consulta dentro del arreglo productos
                $this->productos[] = $registro;
            }

            return $this->productos;

        }
    }


?>