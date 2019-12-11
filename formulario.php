<?php 

	$nombre=$_GET['Nombre'];
	$apellido=$_GET['Apellido'];
	$direccion=$_GET['Direccion'];
	$telefono=$_GET['Telefono'];
	$sexo=$_GET['Sexo'];
	$cedula=$_GET['Cedula'];
	$nacionalidad=$_GET['Nacionalidad'];
	$dudas=$_GET['especificaciones'];



	echo "<br>" . "<center>". "Informacion enviada desde el formulario : La bodeguita de 
	nena." . "</center>";

	echo "Informacion recibida del cliente : " . $nombre ."<br><br>"; 
	echo "El nombre es : " . $nombre . "<br>";
	echo "El apellido es : " . $apellido . "<br>";
	echo "La direccion es : " . $direccion . "<br>";
	echo "El telefono es : " . $telefono . "<br>";
	echo "El sexo es : " . $sexo . "<br>";
	echo "La cedula es : " . $cedula . "<br>";
	echo "La nacionalidad es :  " . $nacionalidad . "<br>";
	echo "Dudas o preguntas : " . $dudas . "<br>";

?>
 