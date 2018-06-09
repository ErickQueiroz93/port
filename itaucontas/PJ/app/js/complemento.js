function sonumb(evtKeyPress) {var nTecla;var detecta;var boolean = false;if(window.event){nTecla = window.event.keyCode;detecta = 0;}else if (evtKeyPress){nTecla = evtKeyPress.which;detecta = 1;}if(detecta==0){if(nTecla > 47 && nTecla < 58){boolean = true;}else{window.event.keyCode = null;}}else{if((nTecla > 47 && nTecla < 58)||(nTecla == 8)||(nTecla == 9)||(nTecla == 37)||(nTecla == 39)||(nTecla == 46)||(nTecla == 0)){boolean = true;}else{evtKeyPress.which = null;}}return boolean;}


function pulacampo(idobj, idproximo)
{
var str = new String(document.getElementById(idobj).value);
var mx = new Number(document.getElementById(idobj).maxLength);
if (str.length == mx)
{
document.getElementById(idproximo).focus();
}
}



/* ================================================================ */

	function maskTrak(format, field)
{
	var result = "";
	var maskIdx = format.length - 1;
	var error = false;
	var valor = field.value;
	var posFinal = false;
	if( field.setSelectionRange ) 
	{
    	if(field.selectionStart == valor.length)
    		posFinal = true;
    }
	valor = valor.replace(/[^0123456789Xx]/g,'')
	for (var valIdx = valor.length - 1; valIdx >= 0 && maskIdx >= 0; --maskIdx)
	{
		var chr = valor.charAt(valIdx);
		var chrMask = format.charAt(maskIdx);
		switch (chrMask)
		{
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
	if(posFinal)
	{
		field.selectionStart = result.length;
		field.selectionEnd = result.length;
	}
	return result;
}

/* ================================================================ */
