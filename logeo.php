<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1>Inicio Sesion</h1>
    <form action="login.php" method="post" class="bg-secondary p-3">
        <label for="nombre" class="form-label" >Nombre de usuario</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
        <label for="clave" class="form-label">Contraseña</label>
        <input type="password" name="clave" id="clave" class="form-control">

        <input type="submit" value="Inicio Sesion" class="col-5">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>