<?php
        //Super Clase Coche
        class Coche{
            
            //Propiedades o Atributos de la clase Coche
            protected $ruedas;

            //Sin no colocamos ningun modificador de acceso es como si pusieramos 
            //el modificador public
            var $color;

            protected $motor;

            //Cuando no creamos un constructor en una clase se da a entender que
            //se toma el constructor por defecto
            /*function __construct()
            {
                
            }*/

            //Metodo Constructor

            /*  EN LAS ULTIMAS VERSIONES DE PHP YA NO SE USA LA MISMA PALABRA QUE LA CLASE,
            SE UTILIZA LA PALABRA RESERVADA __construct() */
            function __construct(){
                
                //Con la palabra reservada this hacemos referencia a la clase en la
                //que nos encontramos (Coche)
                $this->ruedas = 4;

                $this->color = "";

                $this->motor = 1600;
            }

            //Funcion getter para acceder a la propiedad ruedas (POR CONVENCION
            //SE PONE LA PALABRA GET y la propiedad a la que accede)
            function getRuedas(){

                return $this->ruedas;
            }

            function getMotor(){

                return $this->motor;
            }

            //Comportamientos o Funcionalidades
            function arrancar(){

                echo "Estoy arrancando <br>";
            }

            function girar(){

                echo "Estoy girando <br>";
            }

            function frenar(){

                echo "Estoy frenando <br>";
            }

            function setColor($color_coche, $nombre_coche){

                $this->color = $color_coche;

                echo "El color del " . $nombre_coche . " es: " . $this->color . "<br>";
            }
        }

        //--------------------------------------------------------//

        //Con la palabra reservada extends heredamos todos los atributos y metodos de la 
        //clase Coche
        class Camion extends Coche{
            
            function __construct(){
                
                //Con la palabra reservada this hacemos referencia a la clase en la
                //que nos encontramos (Coche)
                $this->ruedas = 8;

                $this->color = "gris";

                $this->motor = 2600;
            }

            function establece_color($color_camion, $nombre_camion){

                $this->color = $color_camion;

                echo "El color del " . $nombre_camion . " es: " . $this->color . "<br>";

            }

            function arrancar(){
                
                //Con la intruccion parent llamamos al metodo de la clase Padre (Coche) y
                //se ejecutara todo su codigo
                parent::arrancar();

                echo "Camion arrancado";
            }
  
        }

    ?>