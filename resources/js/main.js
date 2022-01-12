function validateForm(){
	let price = $("#price").val();
	let weight = $("#weight").val();
	let stock = $("#stock").val();
	
	if(price == 0){
		Swal.fire({
            type: 'warning',
            text: 'El valor del precio debe ser mayor a 0'
        })
		return false;
	}

	if(weight == 0){
		Swal.fire({
            type: 'warning',
            text: 'El valor del peso debe ser mayor a 0'
        })
		return false;

	}

	if(stock == 0){
		Swal.fire({
            type: 'warning',
            text: 'El valor del stock debe ser mayor a 0'
        })
		return false;

	}
}

function validateForm2(){
	let product = $("#product").val();
	
	if(product == "0"){
		Swal.fire({
            type: 'warning',
            text: 'Todos los campos son obligatorios'
        })
		return false;
	}

	
}

function soloTexto(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "  qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMñÑáàäâªÁÀÂÄéèëêÉÈÊËÊíìïîÍÌÏÎóòöôÓÒÖÔÓúùüûÚÙÛÜçÇ";
    especiales = "8-37-39-46";
    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}

function soloNumero(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = "1234567890";
	especiales = "8-37-39-46";
	tecla_especial = false
	for(var i in especiales){
		 if(key == especiales[i]){
			 tecla_especial = true;
			 break;
		 }
	 }
	 if(letras.indexOf(tecla)==-1 && !tecla_especial){
		 return false;
	 }
 }

 function soloAlfanumerico(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " Ã¡Ã©ÃÃ³ÃºabcdefghijklmnÃ±opqrstuvwxyz._-+1234567890@";
	especiales = "8-37-39-46";
	tecla_especial = false
	for(var i in especiales){
		 if(key == especiales[i]){
			 tecla_especial = true;
			 break;
		 }
	 }
	 if(letras.indexOf(tecla)==-1 && !tecla_especial){
		 return false;
	 }
 }

 function validar_vacio(control) {
    var valor = $("#" + control).val();
    if (valor == "" || /^\s+$/.test(valor)) {
        // mensajeBrilla(nombre+" no puede estar vac\xedo.");
        $("#" + control).focus();
        $("#" + control).addClass("errorinput");
        return false;
    }
    $("#" + control).removeClass("errorinput");
    return true;
}

