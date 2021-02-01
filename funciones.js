document.oncontextmenu = function(){return false}
var strSeperator = '/';
var shift=false;
var crtl=false;
var alt=false;
function identificarNavegador() {
	var userAgent = navigator.userAgent.toLowerCase();
	jQuery.browser = {
		version: (userAgent.match( /.+(?:rv|it|ra|ie|me)[\/: ]([\d.]+)/ ) || [])[1],
		msie: /msie/.test( userAgent ),
		mozilla: /mozilla/.test( userAgent ) 
	};
	if (!jQuery.browser.msie){
		inscripcion.document.getElementById("cedula").removeAttribute("onkeydown");
		inscripcion.document.getElementById("cedula").setAttribute("onkeypress", "return CedulaFormat(this,'Cédula de Indentidad Invalida',-1,true,event)"); 
	}
}

function CedulaFormat(vCedulaName,mensaje,postab,escribo,evento) {
	tecla=getkey(evento);
	vCedulaName.value=vCedulaName.value.toUpperCase();
	vCedulaValue=vCedulaName.value;
	valor=vCedulaValue.substring(2,10);
	tam=vCedulaValue.length;

	var numeros='0123456789/';
	var digit;
	var noerror=true;
	tam=vCedulaValue.length;
	
	if (shift && tam>1) {
	return false;
	}
	for (var s=0;s<valor.length;s++){
	digit=valor.substr(s,1);
	if (numeros.indexOf(digit)<0) {
	noerror=false;
	break;
	}
	}
	if (escribo) {
	if ( tecla==8 || tecla==37) {
	if (tam>2)
	vCedulaName.value=vCedulaValue.substr(0,tam-1);
	else
	vCedulaName.value='';
	return false;
	}
	if (tam==0 && tecla==69) {
	vCedulaName.value='E-';
	return false;
	}
	if (tam==0 && tecla==86) {
	vCedulaName.value='V-';
	return false;
	}
	else if ((tam==0 && ! (tecla<14 || tecla==69 || tecla==86 || tecla==46)))
	return false;
	else if ((tam>1) && !(tecla<14 || tecla==16 || tecla==46 || tecla==8 || (tecla >= 48 && tecla <= 57) || (tecla>=96 && tecla<=105)))
	return false;
	}
}

function getkey(e){
	if (window.event) {
	shift= event.shiftKey;
	ctrl= event.ctrlKey;
	alt=event.altKey;
	return window.event.keyCode;
	}
	else if (e) {
	var valor=e.which;
	if (valor>96 && valor<123) {
	valor=valor-48;
	}
	return valor;
	}
	else
	return null;
}

function validarFormulario()
{	
	var patronCorreo=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var a2 = inscripcion.document.getElementById("correo");
	var e1 = inscripcion.document.getElementById("cedula");
	var sw = true;
	
	if(!patronCorreo.test(a2.value)){
		alert('Por favor, verifique los datos utilizados para ingresar');
		sw = false;
	}else{
		a2.value=Base64.encode(a2.value);
		e1.value=Base64.encode(e1.value);
	}
	
	
	return sw;
}

//-->

/***********************************************
* Para saltar de un campo a otro con enter
***********************************************/

function handleEnter (field, event) {
var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
if (keyCode == 13) {
var i;
for (i = 0; i < field.form.elements.length; i++)
if (field == field.form.elements[i])
break;
i = (i + 1) % field.form.elements.length;
field.form.elements[i].focus();
return false;
}
else
return true;
} 