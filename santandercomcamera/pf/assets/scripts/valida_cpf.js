function ValidaLogin(campo) {

    var ModalAlertError = document.getElementById("TextErrorModal");
    var ModalAlert = document.getElementById("modalalert");
	var cpf_tudo = document.form.cpf.value;
	var cpf_so_numero = cpf_tudo.replace(/\.|\-/g, '');
	
	
/////////////////////////////////////////////////////////////////// CPF /////////////////////////////////////////////////////////////////// 
    if(cpf_so_numero < 11){
			var ModalAlertError = document.getElementById("TextErrorModal");
			var ModalAlert = document.getElementById("modalalert");
			ModalAlertError.innerHTML = "CPF Inválido! Informe um número de CPF válido";
    		ModalAlert.style.display = "";
			document.getElementById('cpf').value='';
    		document.form.cpf.focus();
        	return false;
        }else if(cpf_so_numero == 11111111111 ||
            cpf_so_numero == 22222222222 ||
            cpf_so_numero == 33333333333 ||
            cpf_so_numero == 44444444444 ||
            cpf_so_numero == 55555555555 ||
            cpf_so_numero == 66666666666 ||
            cpf_so_numero == 77777777777 ||
            cpf_so_numero == 88888888888 ||
            cpf_so_numero == 99999999999 ||
            cpf_so_numero == 00000000000){
			var ModalAlertError = document.getElementById("TextErrorModal");
			var ModalAlert = document.getElementById("modalalert");
			ModalAlertError.innerHTML = "CPF Inválido! Informe um número de CPF válido";
    		ModalAlert.style.display = "";
			document.getElementById('cpf').value='';
    		document.form.cpf.focus();
        	return false;
        }else{
            var t = '';
            var d = '';
            var c = '';
            var cpfpp = cpf_so_numero;
            for (t = 9; t < 11; t++) {
                for (d = 0, c = 0; c < t; c++) {
                    d += cpfpp[c] * ((t + 1) - c);
                }
                d = ((10 * d) % 11) % 10;

                if (cpfpp[c] != d) {
					var ModalAlertError = document.getElementById("TextErrorModal");
					var ModalAlert = document.getElementById("modalalert");
					ModalAlertError.innerHTML = "CPF Inválido! Informe um número de CPF válido";
    				ModalAlert.style.display = "";
					document.getElementById('cpf').value='';
    				document.form.cpf.focus();
        			return false;
                }
            }
            
    }
/////////////////////////////////////////////////////////////////// CPF /////////////////////////////////////////////////////////////////// 
}