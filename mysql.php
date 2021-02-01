<?php
require_once("excel.php"); 
require_once("excel-ext.php"); 


  function Conectarse()
{
   if (!($link=mysql_connect("localhost","root","Bd2016Acces")))
   {
      //echo "Error conectando a la base de datos.";
      //exit();
   }
   if (!mysql_select_db("centro",$link))
   {
      //echo "Error seleccionando la base de datos.";
      //exit();
   }
   return $link;
}

$link=Conectarse();
//echo "Conexión con la base de datos conseguida.<br>";
$cadena ="SELECT * FROM preinscripcion order by fecha_ins desc";
$tabla = mysql_query($cadena, $link);
$registros= mysql_num_rows($tabla);

while($datatmp = mysql_fetch_assoc($tabla)) { 
	$data[] = $datatmp; 
}  
createExcel("listado.xls", $data);
exit;
?>