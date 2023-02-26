<?php
    include("db.php");
    $idu = $nombre = $login = $password;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idu = test_input($_POST["idu"]);
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

    $sql = "UPDATE usuarios SET nombre = '$nombre', login = '$login', password = '$password' WHERE idu = '$idu'";
    $result = mysqli_query($conn, $sql);

    if($result) {
        $conn -> close();

        header("Location:../usuariosview.php");
    }
    else{
        echo $conn-> error;
        $conn -> close();

    }

?>