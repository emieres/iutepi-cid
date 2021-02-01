<?php  
	
	//Definimos las variables
	$host="localhost";
	$user="root";
	$pass="Bd2016Acces";
	$dbname="centro";
	 
	//Abrimos la conexión
	$conexion=mysql_connect($host,$user,$pass);

	//Seleccionamos la base de datos con la que trabajar
	mysql_select_db($dbname,$conexion);

?>