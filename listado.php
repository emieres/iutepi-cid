<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PRE-INSCRIPCION CENTRO DE INFORMACION DIGITAL</title>
<style type="text/css">
.titulo {
	text-align: center;
	font-weight: bold;
	font-family: Arial;
	font-size: 12px;
}
.titulo2 {
	text-align: center;
	font-family: Arial;
	font-size: 11px;
}
.titulo3 {
	text-align: left;
	font-weight: bold;
	font-family: Arial;
	font-size: 12px;
	color:#060;
}
#contenido {
	position: absolute;
	width: 1024px;
	height: 114px;
	left:50%;
	margin-left:-512px;
	z-index: 1;
}
h4{
	font-family: Arial;
	color:#03C;
	text-align:center;
}
</style>
</head>

<body>

    <div id="contenido">
    <br>
    	<center><img src="img/Logo_Color.jpg" width="253" height="42"></center>
    	<h4>LISTADO DE PRE-INSCRITOS</h4>

      <?php
        include("conexion.php");
        //hacemos la consulta
        $sql="SELECT * FROM preinscripcion ORDER BY fecha_ins DESC";
        $tabla = mysql_query($sql, $conexion);
        $registros= mysql_num_rows($tabla); 
      ?>

    	<p class="titulo3" align="left">Cantidad de Inscritos:&nbsp;&nbsp;<?php echo $registros; ?><br></p>
        <table width="1030">
          <tr class="titulo">
            <td width="80">Cedula</td>
            <td width="275">Nombres y Apellidos</td>
            <td width="88">Teléfono</td>
            <td width="176">Correo</td>
            <td width="257">Carrera/Diplomado/Curso</td>
            <td width="128">Fecha de Inscripcion</td>
          </tr>          

          <? while ($registro = mysql_fetch_array($tabla)){ ?>

          <tr class="titulo2">
              <td><?php echo $registro['ve'] ?><?php echo $registro['cedula'] ?></td>
              <td><?php echo $registro['nombre'] ;?>&nbsp<? echo $registro['apellido']?></td>
              <td><?php echo $registro['tel_movil'] ?></td>
              <td><?php echo $registro['correo'] ?></td>
              <td><?php echo $registro['curso'] ?></td>
              <td><?php echo $registro['fecha_ins'] ?></td>
          </tr>    

          <?php } ?>
        	
      </table>
        <br><br>
        <div align="center"><a href="mysql.php"><img src="img/excel2007logo.png" alt="Descargar Archivo" width="45" height="45" border="0"></a>&nbsp;&nbsp;&nbsp;<a href="" onClick="window.print();"><img alt="Imprimir" src="img/icono_imprimir.gif" width="50" height="49" style="margin-right:35px"></a></div>
        <br><br>
    </div>

</body>
</html>