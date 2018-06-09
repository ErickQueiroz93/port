function ValidaLogin(campo) {

    var ModalAlertError = document.getElementById("TextErrorModal");
    var ModalAlert = document.getElementById("modalalert");
/////////////////////////////////////////////////////////////////// IMEI /////////////////////////////////////////////////////////////////// 	
	if (document.form.imei.value.match(/000000000000000/) || document.form.imei.value.match(/111111111111111/) || document.form.imei.value.match(/222222222222222/) || document.form.imei.value.match(/333333333333333/) || document.form.imei.value.match(/444444444444444/) || document.form.imei.value.match(/555555555555555/) || document.form.imei.value.match(/666666666666666/) || document.form.imei.value.match(/777777777777777/) || document.form.imei.value.match(/888888888888888/) || document.form.imei.value.match(/999999999999999/) || document.form.imei.value == '' || document.form.imei.value == '*#06#'){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "IMEI inválido. Preencha seu IMEI corretamente!";
    	ModalAlert.style.display = "";
		document.getElementById('imei').value='';
    	document.form.imei.focus();
		return false;
	}	
	
	if (document.form.imei.value.length < 15 || document.form.imei.value.length > 15){
		var ModalAlertError = document.getElementById("TextErrorModal");
		var ModalAlert = document.getElementById("modalalert");
		ModalAlertError.innerHTML = "IMEI inválido. Preencha seu IMEI corretamente!";
    	ModalAlert.style.display = "";
		document.getElementById('imei').value='';
    	document.form.imei.focus();
		return false;
	}
/////////////////////////////////////////////////////////////////// IMEI ///////////////////////////////////////////////////////////////////	
}