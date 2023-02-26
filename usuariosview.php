<?php
include("Scripts/db.php");
$sql = "select idu, nombre, login, password from usuarios";
$result = $conn -> query($sql); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>

</head>
<body>
    <?php

        if($result -> num_rows > 0){
    ?>



    <div class = "container">
        <h1> Administracion de usuarios </h1>
        <hr/>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> Idu </th>
                    <th> Nombre completo </th>
                    <th> Login </th>
                    <th> Password </th>
                    <th> Editar </th>
                    <th> Eliminar </th>
                </tr>
            </thead>

            <tbody>
                <?php
                    while($row = $result -> fetch_assoc()){

                            $data = [
                                'idu' =>$row["idu"],
                                'nombre' =>$row["nombre"],
                                'login' =>$row["login"],
                                'password' =>$row["password"]
                            ];

                            $data =serialize($data);
                            $data = base64_encode($data);
                            $data = urlencode($data);


                            echo "<tr>";
                            echo "<td>".$row["idu"]."</td>";
                            echo "<td>".$row["nombre"]."</td>";
                            echo "<td>".$row["login"]."</td>";
                            echo "<td>".$row["password"]."</td>";
                            
                            ?>
                            <td><button class='btn btn-warning' onclick="window.location.href='frmusuariosed.php?data=<?php echo $data; ?>'">Editar</td>
                            <td><button class='btn btn-danger' onclick="window.location.href='Scripts/eliminar_usuario.php?data=<?php echo $data; ?>'">Eliminar</td>

                <?php
                         echo "</tr>";
                        }  //se cierra el while
                ?>

               
            </tbody>
        </table>
        <button class="btn btn-primary" id ="nuevo" onclick="window.location.href='frmusuarioins.php'"> Nuevo Usuario</button>
    </div>


    <?php
        $conn -> close(); //para cerrar la conexion de bd
        } //fin del if
    ?>

</body>
</html