<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="..\css\controladoraRegistros.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de registro</title>
</head>
<body>
    <?php
    require_once "../clases/prerregistro.php";

    try {
        // Obtener los datos del formulario
        $nombre_local = $_POST["nombre_local"];
        $nombre_propietario = $_POST["nombre_propietario"];

        // Crear una nueva instancia de la clase registro
        $registro = new Registro($nombre_local, $nombre_propietario);


        // Llamar a los métodos de la clase registro
        $id = $registro->getObtenerID();
        $passwd = $registro->getObtenerPasswd();
        echo $registro;
    } 
    catch (Exception $error) {
        $error->getMessage();
        header('Location: http://localhost:3000/FundamentosPHP/Proyecto_1/Parte%201/registro.php');
    }

    ?>
    <form action="../Formularios/index.php">
        <input type="submit" value="Volver a Inicio">
    </form>
</body>
</html>