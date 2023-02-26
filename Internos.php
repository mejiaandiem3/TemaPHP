<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de PHP</title>
</head>
<body>
    <?php
        $nombre = "Andrea Mejia";
        echo $nombre."<br>";
        //strlen sirve para contar la longitud de una variable string
        echo "Mi nombre tiene ".strlen($nombre)." letras";

        //
        echo "<br>".substr($nombre,7,5);

        $nombres = array(
            "Antonio" => "Sistemas A",
            "Edgar" => "Sistemas I",
            "Francisco" => "Sistemas C",
            "Victor" => "Sistemas M"
        );

        echo "<hr> Usando echo";
        //echo $nombres;
        echo "<hr> Usando Print";
        print($nombres);
        echo "<hr> Usando Print_r <br>";
        print_r($nombres);
        echo "<hr> Usando var_dump <br>";
        var_dump($nombres);

    ?>
    <hr><h2>Carreras</h2>
    <ul>
        <?php
            foreach($nombres as $carreras){
                echo "<li>".$carreras."</li>";
            }
            ?>
    </ul>
    <hr><h2>Personas</h2>
    <?php
            foreach(array_keys($nombres) as $personas){
                echo "<li>".$personas."</li>";
            }
            ?> 

</body>
</html>