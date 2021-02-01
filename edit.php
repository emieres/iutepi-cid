<HTML>
<HEAD>
<TITLE>Modificar</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></HEAD>
<BODY>
<?
date_default_timezone_set('America/Caracas');
$fecha_mod = ltrim(date("y-m-d"));
$valor = $_POST['cedula'];
//Conexion con la base
mysql_connect("localhost","root","tricojonico");
//ejecucion de la sentencia sql
$sSQL= "Update preinscripcion Set curso='$curso',fecha_ins='$fecha_mod' Where cedula='".$cedula."'";
mysql_db_query(centro,$sSQL);
?>
<table width="100%" height="45" border="0" cellpadding="0" cellspacing="0" background="_frame/footer.png">
  <tr>
    <td> <p><img src="img/wave3header.jpg" width="1800" height="86"></p>    </td>
  </tr>
</table>
<br><br><br><br>
<div align="center"><img src="img/Check%20List.GIF" width="112" height="100"></div>
<br><br><br><br>
<div align="center"><br><br><a href="preins.php" style="color:#990000; font-family:Arial; font-size:12px; font-weight:bold">Regresar</a><br><br><br><br></div>
<br><br><br><br><br><br>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td background="img/footer.png"><p>&nbsp;</p>
      <p>&nbsp;</p></td>
  </tr>
</table>

</BODY>
</HTML>