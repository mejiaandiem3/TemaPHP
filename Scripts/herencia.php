<?php

class Producto{
    private $clave;
    private $descripcion;
    private $precio;

    public function __construct($clave, $descripcion, $precio){
        $this->clave = $clave;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        
    }

    public function mostrarinformacion(){
        echo "Clave: ".$this->clave;
        echo "<br>Descripcion: ".$this->descripcion;
        echo "<br>Precio: ".$this->precio;
        

    }

}

class playera extends producto{
    private $talla;
    private $marca;
    private $color;

    public function __construct($clave, $descripcion, $precio,$marca,$talla,$color){
        parent:: __construct($clave, $descripcion, $precio);
        $this->talla = $talla;
        $this->marca = $marca;
        $this->color = $color;

    }

    public function mostrardatos(){
        echo "Talla: ".$this->talla;
        echo "<br>Marca: ".$this->marca;
        echo "<br>Color: ".$this->color;


    }
}

$polo = new playera(2000,"Playera tipo polo",200,"CH","Oggi Jeans","Morado");

echo "<hr>";
$polo->mostrarinformacion();
echo "<hr>";
$polo->mostrardatos();



?>