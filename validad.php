<?php
if($_POST["nombre"] == "") && ($_POST["apellido"] == "") && ($_POST["sexo"] == "") && ($_POST["direccion"] == "")&& ($_POST["tel_hab"] == "")&& ($_POST["tel_movil"] == "")&& ($_POST["tel_trab"] == "")&& ($_POST["correo"] == "")&& ($_POST["curso"] == "") &&($_POST["recomendado"] == "")

 {
  echo "<meta http-equiv='Refresh' content='12;url=index.php'>";
  echo "<p>Los campos Nombre, contraseña, ip, usuario, ID y TM son necesarios favor de introducirlos! Serás dirigido automáticamente en 10 segundos para verificar campos vacios. En caso contrario, puedes acceder haciendo click <a href='preins.php'>aquí</a></p>"; 
 }
 else
 {
 echo "Registro guardado. Seras redireccionado automaticamente en 5 segundos ¡GRACIAS!";
 echo "<meta http-equiv='Refresh' content='5;url=preins.php'>";
 }
?>