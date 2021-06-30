<?php

    class PersonasModel{

        private $db;

        private $personas;

        public function __construct()
        {
            require_once("modelo/conexion.php");

            $this->db = Conectar::conexion();

            $this->personas = array();
        }

        public function getPersonas(){

            require("paginacion.php");

            $consulta = $this->db->query("SELECT * FROM DATOS_USUARIOS LIMIT $empezar_desde, $tamagno_paginas");

            while($registro = $consulta->fetch(PDO::FETCH_ASSOC)){

                //Almacenamos cada registro que devuelva la consulta dentro del arreglo productos
                $this->personas[] = $registro;
            }

            return $this->personas;

        }
    }


?>