<?php

    require("Conexion.php");

    class DevuelveProductos extends Conexion{

        public function __construct()
        {   
            //Utilizamos la instruccion parent para llamar al constructor de la clase Padre
            //Clase Conexion (Por lo que se realiza toda la conexion con la bbdd)
            parent::__construct();
        }

        public function getProductos($dato){

            //Al estar heredando de la clase Conexion podemos utilizar la variable $conexion_db
            //Y a su vez utilizamos la funcion query ya que al ser un objeto de tipo mysqli
            //podemos llamar a este metodo
            /*$resultados = $this->conexion_db->query("SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN ='" . $dato . "'");

            $productos = $resultados->fetch_all(MYSQLI_ASSOC);

            return $productos;*/

            $sql = "SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN = '" . $dato . "'";

            $sentencia = $this->conexion_db->prepare($sql);

            $sentencia->execute(array());

            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

            $sentencia->closeCursor();

            return $resultado;


            $this->conexion_db = null;
        }
    
    }



?>