<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="..\css\formularioLogin.css">
</head>

<body>
  <h1>
    Formulario de inicio de sesión
  </h1>

  <form action="controladoraLogin.php" method="post">
    <label for="id">ID:</label>
    <input type="text" name="id" id="id">
    <br>
    <label for="passwd">Contraseña:</label>
    <input type="password" name="passwd" id="passwd">
    <br>
    <input type="submit" value="Enviar">
    <button type="button" id="volverInicio" onclick="window.location.href='index.php';">Volver a Inicio</button>
  </form>
</body>
</html>
