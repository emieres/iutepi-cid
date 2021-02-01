function valida(){

      var ve = document.getElementById("ve").selectedIndex;
  		var cedula=document.getElementById("cedula").value;
  		var nombre=document.getElementById("nombre").value;
  		var apellido=document.getElementById("apellido").value;      
      var direccion = document.getElementById("direccion").value;      
  		var email   = document.form.correo.value; 
      var correo=document.getElementById("correo").value;
      var correo2=document.getElementById("correo2").value;     
      var verif   = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,3}$/;
      var curso = document.getElementById("curso").selectedIndex;      
			
		if( ve == null || ve == 0 ) {
			alert("Seleccione si es Venezolano o Extranjero");
			return false;
		}
			
  		if (cedula=="") {

  			alert("Ingrese su Cedula");
  			document.getElementById("cedula").focus();
			return false;

  		}

  		if (nombre=="") {

  			alert("Ingresa tus Nombres");
  			document.getElementById("nombre").focus();
  			return false;

  		}
		
		if (apellido=="") {

  			alert("Ingresa tus Apellidos");
  			document.getElementById("apellido").focus();
  			return false;

  		}

      if(!$("input[name=sexo]:checked").val()) {
        alert('Indique el sexo');
        return false;
      }


    if (direccion=="") {

        alert("Ingresa tu Direccion");
        document.getElementById("direccion").focus();
        return false;

      }

      if (correo=="") {

        alert("Ingresa tu correo");
        document.getElementById("correo").focus();
        return false;
      }

  
    if (verif.exec(email) == null){

        alert("Correo no valido");
        document.getElementById("correo").focus();
        return false;
    }

    if (correo2=="") {

        alert("Repita tu correo");
        document.getElementById("correo2").focus();
        return false;
    }

    if(document.form.correo.value!=document.form.correo2.value){
       alert("Las cuentas de correo no coinciden, verifique de nuevo");
      return false;
    }

    if( curso == "") {
      alert("Escoja la Carrera/Diplomado/Curso a cursar");
      document.getElementById("curso").focus();
      return false;
    }
    form.submit();
}

function salir(){

        if (window.confirm("Desea Salir?")) { 
         window.location("preins.php");
      }
      
}

function validarnumeros(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function validarletras(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso y espacio, siempre la permite
    if (tecla==8){      
        return true;
    }
    if (tecla==32){      
        return true;
    } 
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[a-zA-Z]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}