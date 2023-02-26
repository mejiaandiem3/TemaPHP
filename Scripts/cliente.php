<?php

    class cliente{
        //Atributos de la clase o propiedades

        private $nombre;
        private $apematerno;
        private $apepaterno;
        private $edad;

        //metodo constructor

        public function __construct($nombre, $apepaterno, $apematerno, $edad){
            //pase de parametros por valor
            $this-> nombre = $nombre;
            $this-> apepaterno = $apepaterno;
            $this-> apematerno = $apematerno;
            $this-> edad = $edad;
        }

        public function mostrarinformacion(){
            echo "<br>";
            echo "Cliente: " .$this->nombre." ".$this->apepaterno." ".$this->apematerno."<br>";
            echo "Edad: ".$this->edad;
            
        }

        

    }

?>