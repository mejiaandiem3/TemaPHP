<?php

    include("db.php");
    $nombre = $login = $password;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = test_input($_POST["nombre"]);
        $login = test_input($_POST["login"]);
        $password = test_input($_POST["password"]);
    
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $sql = "INSERT INTO usuarios (nombre, login, password) VALUES  ('$nombre', '$login', '$password')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        $conn -> close();

        header("Location:../usuariosview.php");
    }
    else{
        echo $conn-> error ;
        $conn -> close();

    }

?>