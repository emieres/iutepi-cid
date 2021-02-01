<?php
include("conexion.php");

	$ve=$_POST["ve"];
	$cedula=$_POST["cedula"];
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$sexo=$_POST["sexo"];
	$direccion=$_POST["direccion"];	
	$tel_movil=$_POST["tel_movil"];
	$correo=$_POST["correo"];
	$curso=$_POST["curso"];
	date_default_timezone_set('America/Caracas');
	$fecha_ins = date("y-m-d");
	$recomendado=$_POST["recomendado"];
//Ejecucion de la sentencia SQL
	$sql1="INSERT INTO preinscripcion (ve,cedula,nombre,apellido,sexo,direccion,tel_movil,correo,curso,fecha_ins,recomendado) VALUES ('$ve','$cedula','$nombre','$apellido','$sexo','$direccion','$tel_movil','$correo','$curso','$fecha_ins','$recomendado')";
mysql_query($sql1);

	echo '<script type="text/javascript">';
	echo 'alert("Registrado con Exito");';
	echo 'window.location="preins.php";';
	echo '</script>';	
?>