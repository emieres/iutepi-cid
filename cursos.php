<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/png">
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<title>..:: CURSOS IUTEPI::..</title>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('img/b_preinscribete2_roll.gif')">
<div id="contenido">
  
  	<h2>CURSOS</h2> 
    <div class="estilos2">
    	<?php
 
			$directorio = 'cursos';
			$archivos = scandir($directorio);
		
		foreach ($archivos as $archivo) {
                  $archivo = strtoupper($archivo);
                  $letra = substr("$archivo", 0,-4);
		  if (strpos($archivo, ".PDF") !== false) {
			echo "<li><img src='img/vin.gif' border='0'><a href='cursos/$archivo' target='_blank'><img src='img/pdf-logo.jpg' border='0' width='20' height='20'>&nbsp;&nbsp;$letra</a><li>";
		  }
		  if (strpos($archivo, ".XLS") !== false) {
			echo "<li><img src='img/vin.gif' border='0'><a href='cursos/$archivo' target='_blank'><img src='img/pdf-logo.jpg' border='0' width='20' height='20'>&nbsp;&nbsp;$letra</a><li>";
		  }
		  if (strpos($archivo, ".DOC") !== false) {
			echo "<li><img src='img/vin.gif' border='0'><a href='cursos/$archivo' target='_blank'><img src='img/pdf-logo.jpg' border='0' width='20' height='20'>&nbsp;&nbsp;$letra</a><li>";
		  }
		}
	?>
    </div>
    <div class="pre"><a href="http://dnsiutepi.no-ip.net:8099/cid/preins.php?ref=http://www.itepi.edu" onmouseover="MM_swapImage('Image1','','img/b_preinscribete2_roll.gif',1)" onmouseout="MM_swapImgRestore()"><img src="img/b_preinscribete1.gif" name="Image1" width="197" height="53" border="0" id="Image1" /></a></div>
    <br>
</div><!--contenido-->
</body>
</html>