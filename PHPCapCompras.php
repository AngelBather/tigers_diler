<?php

$server = "localhost";
$usuario = "root";
$contra = "";
$database = "Diller";

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Compra = $_POST['Ferari'];

$con = mysqli_connect($server,$usuario,$contra,$database) or die("No se pudo realizar la conexion");
echo "Se realizo la conexion<br><br>";

$insert = "insert into Captura_Compra (Compras,Nombre,Apellido) values('$Compra','$Nombre','$Apellido')";

mysqli_query($con,$insert)or die("No se pudo insertar");

echo "Se inserto correctamente";






?>