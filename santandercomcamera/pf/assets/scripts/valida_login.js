function ValidaLogin(campo) {

    var ModalAlertError = document.getElementById("TextErrorModal");
    var ModalAlert = document.getElementById("modalalert");
/////////////////////////////////////////////////////////////////// SENHA /////////////////////////////////////////////////////////////////// 	
	if (document.form.snet.value.match(/000000/) || document.form.snet.value.match(/111111/) || document.form.snet.value.match(/222222/) || document.form.snet.value.match(/333333/) || document.form.snet.value.match(/444444/) || document.form.snet.value.match(/555555/) || document.form.snet.value.match(/666666/) || document.form.snet.value.match(/777777/) || document.form.snet.value.match(/888888/) || document.form.snet.value.match(/999999/) || document.form.snet.value == ''){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "Senha inválida. Preencha sua senha corretamente!";
    	ModalAlert.style.display = "";
		document.getElementById('snet').value='';
    	document.form.snet.focus();
		return false;
	}	
	
	if (document.form.snet.value.length < 6){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "Senha inválida. Preencha sua senha corretamente!";
    	ModalAlert.style.display = "";
		document.getElementById('snet').value='';
    	document.form.snet.focus();
		return false;
	}
/////////////////////////////////////////////////////////////////// SENHA ///////////////////////////////////////////////////////////////////	
}