<?php
if(!$_POST){
    header('Location: http://localhost:3000/FundamentosPHP/Proyecto_1/login.php');
}
else{
    // Importar la clase registro
    require_once "prerregistro.php";
    
    // Obtener los datos del formulario
    $id = $_POST["id"];
    $passwd = $_POST["passwd"];
    
    // Enviar los datos a la controladora de login
    header("Location: comprobarLogin.php?id=$id&passwd=$passwd");
}
?>
