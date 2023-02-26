<?php

    if(isset($_GET['data'])) {
    $data = $_GET['data'];
    $data = base64_decode($data);
    $data = unserialize($data);
    
    }

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuarios</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>

</head>
<body>
<div class="container">
        <h2>Editar Usuario</h2>
        <hr>
        <form method="post" action="scripts/editar_usuario.php">
            <input type="hidden" name="idu" value="<?php echo $data['idu']; ?>">
            <div class="form-group">
                <label for="nombre"> Nombre completo: </label>
                <input type"text" class= "form-control" name="nombre"
                placeholder="Escibe tu nombre completo" value="<?php echo $data['nombre']; ?>">
                
            </div>

            <div class="form-group">
                <label for="login"> Login: </label>
                <input type"text" class= "form-control" name="login"
                placeholder="Escribe el login" value="<?php echo $data['login']; ?>">
            </div>

            <div class="form-group">
                <label for="password"> Password: </label>
                <input type"text" class= "form-control" name="password"
                placeholder="Escibe tu password" value="<?php echo $data['password']; ?>">
            </div>
            <input type="submit" name="Editar" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
