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
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

	<header>
			<br>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="productos.php">Productos</a></li>
				<li><a href="ubicacion.php">Ubicacion</a></li>
				<li><a href="AcercaDe.php">Creadores</a></li>
				<?php 
				if(isset($_SESSION['id'],$_SESSION['user_role_id']))
				{
					echo	'<li><a href="/">Perfil</a></li>';
					echo	'<li><a href="login.php?logout=true">Logout</a></li>';
					echo 	"<li><strong>".getUserAccessRoleByID($_SESSION['user_role_id']);"</strong></li>";
				}else {
					echo '<li><a href="login.php">Login</a></li>';
				}
				?>
				
			</ul>
		</nav>
	</header>
	<section class="main">
		<section class="articles">
		<article>
			
			<h2>Biografia de la fundadora</h2> 
			<br>

			<p>Felicia Pinales nacio 20 de noviembre del 1973 en bani provincia peravia sus padres fueron federico santana y venisia de regla "&nacute;o&nacute;a" los cuales le inculcaron desde temprana edad los valores del respeto, el trabajo, la responsabilidad y sobre  todo el amor familiar, comenzo sus estudios en matanza a los 6 a&nacute;os dejo sus estudios en octavo pero eso no le impidio tener la destreza para ingeniarse la manera de sustentar a sus hijos, cuyos hijos son: Jennifer Pinales,  Luis Angel pinales y  Anfer Pinales  y desarrollo su capacidad tanto laboral como empresarial y todo esto con un solo proposito, que sus hijos sean unos grandes licenciados y puedan llegar muy lejos.</p> 
		</article>
		<article>
			<h2>Historia del negocio</h2> 
			<br>

			<p>El negocio se inauguro el 2 diciembre del 2008 su esposo lo dejo como manera de sustento  para poder sustentar a sus hijos en lo que el se desarrollaba en los estados unidos claramente el buscaba un futuro mejor y ese fuel motivo de su viaje y ahora los dos colaboran el sustento de sus hijos en dicho negocio los empleados o colaboradores son: la madre de pinales y pinales debido a que es un negocio familiar, no consta de empleados formales si no que es administrado por ella y su ayudante, que  es su hijo llamado luis Angel Pinales pero esto no es un obstaculo mas bien es una oportunidad de inculcarle las mismas visiones que se les fueron inculcadas cuando peque&nacute;a.
			</p> 
		</article>
	</section>

	<aside>
		<div class="slider">
	<ul>
		<li><img src="Especial camionetas.fw.png"></li>
		<li><img src="Oferta de super coches.fw.png"></li>
	</ul>
</div>
	</aside>

	</section>

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