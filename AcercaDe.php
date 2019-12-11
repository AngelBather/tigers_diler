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
	<title>Acerca De</title>
	<link rel="stylesheet" type="text/css" href="AcercaDe.css">
</head>
<body>

	<br>


 <div class="menu">
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
   </div>

<div class="cuerpo">
	<fieldset><legend>Creadores</legend>

	<ul>
		<li>
			<p>Luis Angel Pinales</p>
			<img src="img creadores/1.jpeg" width=220" height="250">
		</li>
		<li>
			<p>Angel Emilio Bather</p>
			<img src="img creadores/2.jpeg" width="220" height="250">
		</li>
		<li>
			<p>Frankling Marlin Santos</p>
		    <img src="1.png" width="220" height="250">
		</li>
		<li>
			<p>Oscar Beltre</p>
		    <img src="1.png" width="220" height="250">
		</li>
		<li>
			<p>Jefrey Castillo</p>
		    <img src="1.png" width="220" height="250">
		</li>
	</ul>
	</fieldset>

</div>

	<footer>
		<p> The Taiger's Programers </p>
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
























