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

	</div>

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
</header>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7578.1217211166395!2d-70.3633411!3d18.2530314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ea54c6c666f6867%3A0xa2e843a58c948f16!2sColmado+El+Coloso!5e0!3m2!1ses!2sdo!4v1559432359031!5m2!1ses!2sdo" width="950" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center>
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