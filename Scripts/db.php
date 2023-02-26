<?php
    $conn = mysqli_connect("localhost","root","","db_empresa");

    //para checar la conexion
    if(mysqli_connect_error())
    {
            die("Conexion de la base de datos fallida!".mysqli_connect_error());

    }

?>