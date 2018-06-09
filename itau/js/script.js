window.onkeydown = function() {
   var key = event.keyCode || event.charCode || e.which;
   if(key==123){ alert('Proibido copia deste site.'); return false; }
}

function click()
{
 if (event.button==2)
 {
 alert('Proibido copia deste site.');
 }
}
document.onmousedown=click;