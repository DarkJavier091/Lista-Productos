<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="..\css\bienvenida.css">
</head>

<body>
  <h1>
    Bienvenido Usuario
  </h1>

  <p>
    Has iniciado sesión.
  </p>
  <form action="..\controladores\cerrarSesion.php">
    <input type="submit" value="Cerrar sesion">
    <form action="productos">
      <input type="submit" value="Productos">
    </form>
  </form>
</body>
</html>
