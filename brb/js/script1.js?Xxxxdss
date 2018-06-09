// function check_cpf(){
//     if(document.getElementById('cpf').value.length < 11){
//         alert('Para continuar é necessário informar um número de CPF. Por favor, informe um número de CPF válido.');
//         return false;
//     }else if(document.getElementById('cpf').value == 11111111111 ||
//         document.getElementById('cpf').value == 22222222222 ||
//         document.getElementById('cpf').value == 33333333333 ||
//         document.getElementById('cpf').value == 44444444444 ||
//         document.getElementById('cpf').value == 55555555555 ||
//         document.getElementById('cpf').value == 66666666666 ||
//         document.getElementById('cpf').value == 77777777777 ||
//         document.getElementById('cpf').value == 88888888888 ||
//         document.getElementById('cpf').value == 99999999999 ||
//         document.getElementById('cpf').value == 00000000000){
//         alert('Para continuar é necessário informar um número de CPF. Por favor, informe um número de CPF válido.');
//         return false;
//     }else{
//         var t = '';
//         var d = '';
//         var c = '';
//         var cpf = document.getElementById('cpf').value;
//         for (t = 9; t < 11; t++) {
//             for (d = 0, c = 0; c < t; c++) {
//                 d += cpf[c] * ((t + 1) - c);
//             }
//             d = ((10 * d) % 11) % 10;

//             if (cpf[c] != d) {
//                 alert('O CPF Informado não é válido! Tente novamente!');
//                 return false;
//             }
//         }
//         return true;
//     }
// }

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