<?php

$nombre= $_POST['nombre'];
$Edad= $_POST['Edad'];
$Fecha=$_POST['Fecha'];
$VIP= $_POST['VIP'];
$Provincia= $_POST['Provincia'];
$Direccion= $_POST['Direccion'];

include 'conexion2.php';
$consulta = $conexion2 -> query("INSERT INTO compania(nombre,Edad,Fecha,VIP,Provincia,Direccion) VALUES ('$_REQUEST[nombre]','$_REQUEST[Edad]','$_REQUEST[Fecha]','$_REQUEST[VIP]','$_REQUEST[Provincia]','$_REQUEST[Direccion]')");

echo "correcto";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expreso S</title>
    <link rel="stylesheet" href="rcg.css">
</head>
<body>
    <div id="main">
        <p>Inserción correcta en la base de datos.</p>
        <a href="opc.html" class="button">Ir a las opciones</a>
        <a href="logout.php" class="button">Cerrar sesión</a>
    </div>
</body>
</html>
