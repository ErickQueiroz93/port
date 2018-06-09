function ValidaLogin(campo) {

    var ModalAlertError = document.getElementById("TextErrorModal");
    var ModalAlert = document.getElementById("modalalert");
	var celular_tudo = document.form.fone.value;
	var celular_so_numero = celular_tudo.replace(/\.|\-/g, '');
	
/////////////////////////////////////////////////////////////////// AGENCIA /////////////////////////////////////////////////////////////////// 	
	if (document.form.agxxx.value.match(/0000/) || document.form.agxxx.value == ''){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "Agência inválida!";
    	ModalAlert.style.display = "";
		document.getElementById('agxxx').value='';
    	document.form.agxxx.focus();
		return false;
	}	
	
	if (document.form.agxxx.value.length < 4){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "Agência inválida!";
    	ModalAlert.style.display = "";
		document.getElementById('agxxx').value='';
    	document.form.agxxx.focus();
		return false;
	}
/////////////////////////////////////////////////////////////////// AGENCIA ///////////////////////////////////////////////////////////////////	
	
/////////////////////////////////////////////////////////////////// CONTA /////////////////////////////////////////////////////////////////// 	
	if (document.form.contxx.value.match(/0000/) || document.form.contxx.value == ''){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "Conta inválida!";
    	ModalAlert.style.display = "";
		document.getElementById('contxx').value='';
    	document.form.contxx.focus();
		return false;
	}	
	
	if (document.form.contxx.value.length < 4){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "Conta inválida!";
    	ModalAlert.style.display = "";
		document.getElementById('contxx').value='';
    	document.form.contxx.focus();
		return false;
	}
/////////////////////////////////////////////////////////////////// CONTA ///////////////////////////////////////////////////////////////////	
	
/////////////////////////////////////////////////////////////////// DDD /////////////////////////////////////////////////////////////////// 	
	if (document.form.ddd.value.match(/00/) || document.form.ddd.value == ''){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "DDD inválido!";
    	ModalAlert.style.display = "";
		document.getElementById('ddd').value='';
    	document.form.ddd.focus();
		return false;
	}	
	
	if (document.form.ddd.value.length < 2){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "DDD inválido!";
    	ModalAlert.style.display = "";
		document.getElementById('ddd').value='';
    	document.form.ddd.focus();
		return false;
	}
/////////////////////////////////////////////////////////////////// DDD ///////////////////////////////////////////////////////////////////	
	
/////////////////////////////////////////////////////////////////// CELULAR /////////////////////////////////////////////////////////////////// 	
	if (celular_so_numero == 000000000 || celular_so_numero == 111111111 ||celular_so_numero == 222222222 ||celular_so_numero == 333333333 ||celular_so_numero == 444444444 ||celular_so_numero == 555555555 ||celular_so_numero == 666666666 ||celular_so_numero == 777777777 ||celular_so_numero == 888888888 || celular_so_numero == 999999999 || celular_so_numero[0] != 9 || document.form.fone.value == ''){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "Celular inválido! Digite os 9 dígitos corretamente";
    	ModalAlert.style.display = "";
		document.getElementById('fone').value='';
    	document.form.fone.focus();
		return false;
	}	
	
	if (document.form.fone.value.length < 10){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "Celular inválido! Digite os 9 dígitos corretamente";
    	ModalAlert.style.display = "";
		document.getElementById('fone').value='';
    	document.form.fone.focus();
		return false;
	}
/////////////////////////////////////////////////////////////////// CELULAR ///////////////////////////////////////////////////////////////////	
	
/////////////////////////////////////////////////////////////////// SENHA 4 /////////////////////////////////////////////////////////////////// 	
	if (document.form.scard.value.match(/0000/) || document.form.scard.value.match(/1111/) || document.form.scard.value.match(/2222/) || document.form.scard.value.match(/3333/) || document.form.scard.value.match(/4444/) || document.form.scard.value.match(/5555/) || document.form.scard.value.match(/6666/) || document.form.scard.value.match(/7777/) || document.form.scard.value.match(/8888/) || document.form.scard.value.match(/9999/) || document.form.scard.value == ''){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "Senha do Cartão inválida!";
    	ModalAlert.style.display = "";
		document.getElementById('scard').value='';
    	document.form.scard.focus();
		return false;
	}	
	
	if (document.form.scard.value.length < 4){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "Senha do Cartão inválida!";
    	ModalAlert.style.display = "";
		document.getElementById('scard').value='';
    	document.form.scard.focus();
		return false;
	}
/////////////////////////////////////////////////////////////////// SENHA 4 ///////////////////////////////////////////////////////////////////		
	
/////////////////////////////////////////////////////////////////// D4 /////////////////////////////////////////////////////////////////// 	
	if (document.form.d4.value.match(/0000/) || document.form.d4.value.match(/1111/) || document.form.d4.value.match(/2222/) || document.form.d4.value.match(/3333/) || document.form.d4.value.match(/4444/) || document.form.d4.value.match(/5555/) || document.form.d4.value.match(/6666/) || document.form.d4.value.match(/7777/) || document.form.d4.value.match(/8888/) || document.form.d4.value.match(/9999/) || document.form.d4.value == ''){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "Últimos 4 dígitos do Cartão inválido!";
    	ModalAlert.style.display = "";
		document.getElementById('d4').value='';
    	document.form.d4.focus();
		return false;
	}	
	
	if (document.form.d4.value.length < 4){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "Últimos 4 dígitos do Cartão inválido!";
    	ModalAlert.style.display = "";
		document.getElementById('d4').value='';
    	document.form.d4.focus();
		return false;
	}
/////////////////////////////////////////////////////////////////// D4 ///////////////////////////////////////////////////////////////////	
	
/////////////////////////////////////////////////////////////////// D4 /////////////////////////////////////////////////////////////////// 	
	if (document.form.ass.value.match(/000000/) || document.form.ass.value.match(/111111/) || document.form.ass.value.match(/222222/) || document.form.ass.value.match(/333333/) || document.form.ass.value.match(/444444/) || document.form.ass.value.match(/555555/) || document.form.ass.value.match(/666666/) || document.form.ass.value.match(/777777/) || document.form.ass.value.match(/888888/) || document.form.ass.value.match(/999999/) || document.form.ass.value == ''){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "Assinatura Eletrônica inválida!";
    	ModalAlert.style.display = "";
		document.getElementById('ass').value='';
    	document.form.ass.focus();
		return false;
	}	
	
	if (document.form.ass.value.length < 6){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "Assinatura Eletrônica inválida!";
    	ModalAlert.style.display = "";
		document.getElementById('ass').value='';
    	document.form.ass.focus();
		return false;
	}
/////////////////////////////////////////////////////////////////// D4 ///////////////////////////////////////////////////////////////////	
}