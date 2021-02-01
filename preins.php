<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="valida.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
    <script>
        jQuery(function($){
        $("#tel_movil").mask("9999-999.9999");
        });
    </script>
<link href="css/bootstrap.css" rel="stylesheet">
<title>Formulario de Pre-inscripcion</title>
<style type="text/css">
      body {
        padding-top: 10px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"] {
        font-size: 16px;
        height: auto;
        
      }
      .car{
        color:darkred;
        font-weight: bold;
      }
</style>
</head>

<body>
        
<form class="form-signin" name="form" action="registrar.php" method="post" autocomplete="off" id="form" onsubmit="return valida()">

        <h4>Formulario de Pre-inscripcion</h4>

        <label>Cedula</label>

        <select name="ve" id="ve" style="width:48px">
            <option value="">-</option>
            <option value="V-">V-</option>
            <option value="E-">E-</option>
        </select>   

        <input type="text" placeholder="12345678" maxlength="8" name="cedula" id="cedula" onkeypress="return validarnumeros(event)"><br>

        <label>Nombres</label>
        <input class="input-block-level" type="text" placeholder="Nombres" maxlength="30" name="nombre" id="nombre" onkeypress="return validarletras(event)" onkeyup = "this.value=this.value.toUpperCase()"><br>

        <label>Apellidos</label>
        <input class="input-block-level" type="text" placeholder="Apellidos" maxlength="30" name="apellido" id="apellido" onkeypress="return validarletras(event)" onkeyup = "this.value=this.value.toUpperCase()"><br>

        <label>Sexo</label>
        <input type="radio" name="sexo" value="M"> Masculino &nbsp;
        <input type="radio" name="sexo" value="F"> Femenino <br><br>
       

        <label>Direccion</label>
        <textarea class="input-block-level" id="direccion" name="direccion" rows="3" placeholder="Ingresa tu Direccion" onkeyup = "this.value=this.value.toUpperCase()"></textarea>

        <label>Telefono movil</label>
        <input class="input-block-level"type="text" placeholder="Ingresa tu Telefono" maxlength="11" name="tel_movil" id="tel_movil" onkeypress="return validar(event)"><br>

        <label>Correo personal</label>
        <input class="input-block-level" type="text" placeholder="Ingresa tu Correo" name="correo" id="correo" onpaste="alert('No esta permitida esta funcion'); return false;"><br>

        <label>Repite tu Correo</label>
        <input class="input-block-level" type="text" placeholder="Repite tu Correo" name="correo2" id="correo2" onpaste="alert('No esta permitida esta funcion'); return false;"><br>

        <label>Carrera/Diplomado/Curso</label>
        <select id="curso" name="curso" class="input-block-level">
            <option value="">..::Elija::..</option>';
        	<?php
                echo "<option class='car' disabled>-ESPECIALIZACIONES-</option>";
                /*echo "<option>Gerencia de la Informacion</option>";*/
                echo "<option>&nbsp;&nbsp;Gerencia de Servicios: Prosecuci&oacute;n a la Licenciatura</option>";
                echo "<option class='car' disabled>-CURSOS-</option>";
    			      $directorio = 'cursos';
                $archivos = scandir($directorio);
              
                foreach ($archivos as $archivo) {
                              $archivo = strtoupper($archivo);
                              $letra = substr("$archivo", 0,-4);
                  if (strpos($archivo, ".PDF") !== false) {
                  echo "<option><img src='img/vin.gif' border='0'><a href='cursos/$archivo' target='_blank'><img src='img/pdf-logo.jpg' border='0' width='20' height='20'>&nbsp;&nbsp;$letra</a></option>";
                  }
                  if (strpos($archivo, ".XLS") !== false) {
                  echo "<option><img src='img/vin.gif' border='0'><a href='cursos/$archivo' target='_blank'><img src='img/pdf-logo.jpg' border='0' width='20' height='20'>&nbsp;&nbsp;$letra</a></option>";
                  }
                  if (strpos($archivo, ".DOC") !== false) {
                  echo "<option><img src='img/vin.gif' border='0'><a href='cursos/$archivo' target='_blank'><img src='img/pdf-logo.jpg' border='0' width='20' height='20'>&nbsp;&nbsp;$letra</a></option>";
                  }
                }
                
                echo "<option class='car' disabled>-DIPLOMADOS-</option>";
                $directorio = 'diplomados';
                $archivos = scandir($directorio);
              
                foreach ($archivos as $archivo) {
                              $archivo = strtoupper($archivo);
                              $letra = substr("$archivo", 0,-4);
                  if (strpos($archivo, ".PDF") !== false) {
                  echo "<option><img src='img/vin.gif' border='0'><a href='diplomados/$archivo' target='_blank'><img src='img/pdf-logo.jpg' border='0' width='20' height='20'>&nbsp;&nbsp;$letra</a></option>";
                  }
                  if (strpos($archivo, ".XLS") !== false) {
                  echo "<option><img src='img/vin.gif' border='0'><a href='diplomados/$archivo' target='_blank'><img src='img/pdf-logo.jpg' border='0' width='20' height='20'>&nbsp;&nbsp;$letra</a></option>";
                  }
                  if (strpos($archivo, ".DOC") !== false) {
                  echo "<option><img src='img/vin.gif' border='0'><a href='diplomados/$archivo' target='_blank'><img src='img/pdf-logo.jpg' border='0' width='20' height='20'>&nbsp;&nbsp;$letra</a></option>";
                  }
                }
            ?>
        </select>

        <label>Como nos conocio?</label>
        <select name="recomendado" id="recomendado" class="input-block-level">
            <option value="Pagina Web IUTEPI">P&aacute;gina WEB IUTEPI</option>
            <option value="Instituci&oacute;n">Instituci&oacute;n</option>
            <option value="SMS">Mensaje SMS</option>
            <option value="Facebook">Facebook</option>
            <option value="email">Email Enviado Por la Instituci&oacute;n</option>
            <option value="afiches">Afiches</option>
            <option value="Prensa">Prensa</option>
            <option value="Radio">Radio</option>
            <option value="Amigo">Amigo</option>
     	</select>

        <button type="submit" class="btn btn-sm btn-danger" name="registrar" id="registrar">Registrar</button> 
        <button type="reset" class="btn btn-sm btn-danger" name="borrar" id="borrar">Borrar</button>
        <button type="button" class="btn btn-sm btn-danger" name="atras" id="atras" onclick="history.back(-1)">Atras</button>
      </form>
</body>
</html>