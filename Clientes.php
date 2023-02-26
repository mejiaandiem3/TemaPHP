<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P.O.O PHP</title>
</head>
<body>
    <?php
    include'Scripts/cliente.php';
    $cliente1 = new cliente("Andrea Evelyn","Mejia","Rubio", 22);
    $cliente1->mostrarinformacion();



    ?>

</body>
</html>