<?php 
	session_start();
	
	// if(!isset($_SESSION['id'],$_SESSION['user_role_id']))
	// {
	// 	header('location:login.php?lmsg=true');
	// 	exit;
	// }		
	
	require_once('database/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Super Mercado</title>
	<link rel="stylesheet" href="estililosu2.css">
</head>

<body>
	
<br>
<header>
    <nav>
        <ul>
        <li><a href="index.php">Inicio</a></li>
				<li><a href="productos.php">Productos</a></li>
				<li><a href="ubicacion.php">Ubicacion</a></li>
				<li><a href="AcercaDe.php">Creadores</a></li>
          <?php 
          if(isset($_SESSION['id'],$_SESSION['user_role_id']))
          {
            echo	'<li><a href="#">Perfil</a></li>';
            echo	'<li><a href="login.php?logout=true">Logout</a></li>';
            echo 	"<li><strong>".getUserAccessRoleByID($_SESSION['user_role_id']);"</strong></li>";

          }else {
            echo '<li><a href="login.php">Login</a></li>';
          }
          ?>
          
        </ul>
      </nav>
<br>
			<br>
	
<center>

<div class="contenedor">
<form action="formulario.php" method="GET">
<div class="header">
<h1 class="titulo">Bodegita de <span>NENA</span></h1>
</div>

<label for="nombre" class="label" >Nombres:</label>
<input type="text" name="Nombre" class="input" placeholder="Ingrese su Nombre">

<label for="apellido" class="label" >Apellidos:</label>
<input type="text" name="Apellido" class="input" placeholder="Ingrese sus Apellidos">

<label for="direccion" class="label" >Direccion:</label>
<input type="text" name="Direccion" class="input" placeholder="Ingrese su direccion">


<label for="telefono" class="label" >Telefono:</label>
<input type="text" name="Telefono" class="input" placeholder="Ingrese su numero de telefono">

<label for="sexo" class="label">Sexo:</label>
<div class="radios1">

<input type="radio" for ="Hombre" name="Sexo">
<label for="hombre" class="labels">Hombre</label><br><br>

<input type="radio" for ="Mujer" name="Sexo">
<label for="mujer" class="labels">Mujer</label>

</div>

<label for="Cedula" class="label" >Cedula:</label>
<input type="text" name="Cedula" class="input" placeholder="Ingrese su cedula">

<label for="pais" class="label" >Seleccione su nacionalidad:</label>

<div class="caja">
 Seleccione su nacionalidad <br> <select name="Nacionalidad">

         <option></option>
    <option>Dominicano</option>
    <option>Venezolano</option>
    <option>Haitiano</option>
    <option>Puerto riqueño</option>
    <option>Italiano</option>
    <option>Mexicano</option>
    <option>Colombiano</option>
    <option>Asiatico</option>
    <option>Norte Americano</option>
    <option>Otro...</option>
  </select>  <br><br> 

</div>

<label for="especificacines" class="label" >Dudas o preguntas</label>
<textarea name="especificaciones" class="textarea" placeholder="Especifique en este cuadro su duda o pregunta que tenga"></textarea>

<input type="submit" class="submit" value="Enviar formulario">

<input type="reset" class="reset" value="Restaurar formulario">

</form>
  
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
 </center>
 
</header>

<footer>
	The Taiger's Programers 
</footer>
<style>
	 
	 header nav ul li a {
		font-family: consolas;
		margin: 0 !important;
		padding: 10px 30px;
		display: block;
		color: #fff;
		text-decoration: none;
	}
	header nav ul li {
   	 	float: none !important;
	}
	header nav ul {
		list-style: none;
		display: flex;
		justify-content: center;
		align-items: center;
	}
</style>
</body>
</html>