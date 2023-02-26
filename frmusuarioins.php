<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Usuarios</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>

</head>
<body>
    <div class="container">
        <h2>Nuevo Usuario</h2>
        <hr>
        <form method = "post" action = "scripts/registrar_usuario.php">
            <div class="form-group">
                <label for="nombre"> Nombre completo: </label>
                <input type"text" class= "form-control" name="nombre"
                placeholder="Escibe tu nombre completo">
            </div>

            <div class="form-group">
                <label for="login"> Login: </label>
                <input type"text" class= "form-control" name="login"
                placeholder="Escribe el login">
            </div>

            <div class="form-group">
                <label for="password"> Password: </label>
                <input type"text" class= "form-control" name="password"
                placeholder="Escibe tu password">
            </div>
            <input type="submit" name="registrar" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
