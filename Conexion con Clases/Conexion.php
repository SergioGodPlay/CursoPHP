<?php

    require("config.php");

    class Conexion{

        //Al declararla como protegida todas la clases que hereden de esta podran utilizarla
        protected $conexion_db;

        
        public function __construct()
        {   
            //Conexion utilizando PDO
            try{

                $this->conexion_db = new PDO("mysql:host=localhost; dbname=pruebas","root","");

                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $this->conexion_db>exec("SET CHARACTER SET utf8");

                return $this->conexion_db;

            
            }catch(Exception $e){

                echo "Se ha producido un error: " - $e->getMessage() . " en la linea " . $e->getLine();
            }

            //Conexion utilizando MYSQLI
            /*$this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NAME);

            if($this->conexion_db->connect_errno){

                echo "Fallo al Conectar con la base de datos: " . $this->conexion_db->connect_error;

                return;
            }

            $this->conexion_db->set_charset(DB_CHARSET);*/
        }
    }

    //$miconexion = new Conexion();


?>