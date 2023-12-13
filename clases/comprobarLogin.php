<?php

// Importar la clase registro
require_once "prerregistro.php";

// Obtener los datos del formulario
$id = $_POST["id"];
$passwd = $_POST["passwd"];

// Crear una nueva instancia de la clase registro
$registro = new Registro("PedroSanchez, Moncloa");

// Comprobar la ID y la contraseña
if ($registro->getID() == $id && $registro->getPasswd() == $passwd) {
  // Los datos son correctos
  header("Location: bienvenida.php");
} else {
  // Los datos son incorrectos
  header("Location: formularioLogin.php");
}

?>
