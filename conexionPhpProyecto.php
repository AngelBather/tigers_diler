<?php

$server = "localhost";
$usuario = "root";
$contra = "";
$database = "Diller";


$Usuario = $_POST['usuario'];
$Pass = $_POST['contraseña'];



$conx = mysqli_connect($server,$usuario,$contra,$database) or die("No se pudo realizar la conexcion");
echo "Se realizo la conexion con exito <br><br>";

$insert = "insert into Usuarios(Usuario,Pass) 
values('$Usuario','$Pass')";

mysqli_query($conx,$insert) or die("No se pudo insertar ");
echo "Se inserto correctamente";

$url = "http://localhost/PracticasPHP/ProyectoJonathan/conexionPhpProyecto.php";
echo "<SCRIPT>windows.location='$url';</SCRIPT>";
  ?>