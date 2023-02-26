<?php

 include("db.php"); 
 if(isset($_GET['data'])) {
    $data = $_GET['data'];
    $data = base64_decode($data);
    $data = unserialize($data);
    }

    $sql = "DELETE FROM usuarios WHERE idu = ".$data['idu'];

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