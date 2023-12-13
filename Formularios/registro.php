<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="..\css\registro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
<form action="../controladores/controladoraRegistro.php" method="post">
    <label for="nombre_local">Nombre del local:</label>
    <input type="text" name="nombre_local" id="nombre_local">
    <br>
    <label for="nombre_propietario">Nombre del propietario:</label>
    <input type="text" name="nombre_propietario" id="nombre_propietario">
    <br>
    <input type="submit" value="Enviar">
</form>
<br>
<form action="index.php">
    <input type="submit" value="Volver atrás">
</form>
</body>
</html>
