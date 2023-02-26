<?php

    echo "<h1>Pagina Principal</h1>";
    echo "Saludos de Andie";
    echo "<hr>";



    //variables
    $numero = 1;

    while($numero <= 10)
    {
        $multiplicacion = $numero * 2;
        echo "2 x $numero = ".$multiplicacion. "<br>";
        $numero++;

    }
    //echo sirve para imprimir
    echo "<hr>";
    echo "<h4>Tabla del 3 </h4>";

    $y = 1;


    do {
        $multiplicacion = $y * 3;
        echo "2 x $y = ".$multiplicacion. "<br>";
        $y++;
    }
    while ($y <= 10);


?>