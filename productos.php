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
	<link rel="stylesheet" href="estilosp.css">
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

</header>

<!--<div class="slider">
	<ul>
		<li><img src="img final/1.png"></li>
		<li><img src="img final/2.png"></li>
		<li><img src="img final/3.png"></li>
		<li><img src="img final/4.png"></li>
	</ul>
</div>-->
<form action="PHPCapCompras.php" method="POST">
<div class="tablas">
	<table>
		<tr>
			<td><img src="img productos/1.jpg" alt=""> <input type="submit" name="Ferari" value="Ferrari 458 Italia 10.000.000$" onclick="alert('Comprado exitosamente')"> </td>
			
			<td><img src="img productos/2.jpg" alt=""> <input type="submit" name="Ferari" value="Mclaren 720S 8.000.000$" onclick="alert('Comprado exitosamente')"> </td>
			
			<td><img src="img productos/3.jpg" alt=""> <input type="submit" name="Ferari" value="Lamboghini Veneno 9.000.000$" onclick="alert('Comprado exitosamente')"> </td>
			
		</tr>
		<tr>
			<td><img src="img productos/4.jpg" alt=""> <input type="submit" name="Ferari" value="Maserati Gran Turismo 12.000.000$" onclick="alert('Comprado exitosamente')"> </td>
			
			<td><img src="img productos/5.jpg" alt=""> <input type="submit" name="Ferari" value="BMW ZL1 14.000.000$" onclick="alert('Comprado exitosamente')"> </td>
			
			<td><img src="img productos/6.jpg" alt=""> <input type="submit" name="Ferari" value="Audi R8 17.000.000$" onclick="alert('Comprado exitosamente')"> </td>
			
		</tr>
		<tr>
			<td><img src="img productos/7.jpg" alt=""> <input type="submit" name="Ferari" value="Bugatti Chiron 12.000.000$" onclick="alert('Comprado exitosamente')"> </td>
			
			<td><img src="img productos/8.jpg" alt=""> <input type="submit" name="Ferari" value="Lamboghini Sexto Elemento 18.500.000$" onclick="alert('Comprado exitosamente')"> </td>
			
			<td><img src="img productos/9.jpg" alt=""> <input type="submit" name="Ferari" value="Roll Royce Cullinan 19.500.000$ "> </td>
		</tr>


	</table>
	</form>
</div>

  
  <div class="input">
  <center>
	<p>Ingrese su nombre</p>
	 <input type="text" name="Nombre" placeholder="Ingrese su nombre" required>
	<p>Ingrese su Apellido</p>
	 <input type="text" name="Apellido" placeholder="Ingrese su apellido" required>
  </center>
  </div>

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