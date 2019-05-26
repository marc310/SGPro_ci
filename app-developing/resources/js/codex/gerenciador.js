/************************************************************************************
//
//  Desenvolvido por
//  Marcelo Motta
//  marcelomotta@outlook.com.br
//  http://www.marcelomotta.com
///
*************************************************************************************
*
*                    C O D E X    E X T R A    C O M P O N E N T S
*
*************************************************************************************/
///
// ao selecionar verifica
// se o tipo estiver nulo ou vazio entao esconde o label e input documento
// se o tipo for pessoa fisica entao altera o label "documento" para "CPF: "
// se o tipo for pessoa juridica entao altera o label "documento" para "CNPJ: "
function documentoCliente()
{
  var tipoPessoa = document.getElementById("selectTipoPessoa").value;

  if (tipoPessoa == ""){
    document.getElementById("divDocumentoCliente").hidden=true;
    alert("Você deve selecionar o tipo de pessoa para Cadastrar o Documento.");
  }
  if (tipoPessoa == "1"){
    //alert(1 Pessoa Física);
    document.getElementById("divDocumentoCliente").hidden=false;
    document.getElementById("labelDocumentoCliente").innerHTML = "CPF:";

  }
  if (tipoPessoa == "2"){
    //alert(2 Pessoa Jurídica);
    document.getElementById("divDocumentoCliente").hidden=false;
    document.getElementById("labelDocumentoCliente").innerHTML = "CNPJ:";
  }

}
//
//*************************************************************************************//
//
function formataTelefone(){
  var element = document.getElementById('telefone');
  var phoneMask = IMask(element, {
  mask: '+{55}(00)0000-0000',
  lazy: false,  // make placeholder always visible
  placeholderChar: '_'     // defaults to '_'
});
}
//
//*************************************************************************************//
//
function formataCelular(){
  var element = document.getElementById('celular');
  var phoneMask = IMask(element, {
  mask: '+{55}(00){9} 0000-0000',
  lazy: false,  // make placeholder always visible
  placeholderChar: '_'     // defaults to '_'
});
}
//
//*************************************************************************************//
//
function formataEmailCliente(){
  var emailCliente = document.getElementById("email");
  emailCliente.value = emailCliente.value.toLowerCase();
}
//
//*************************************************************************************//
//


//
//*************************************************************************************//
//
function formatDate(date) {

  var monthNames = [
    "Janeiro", "Fevereiro", "Março",
    "Abril", "Maio", "Junho", "Julho",
    "Agosto", "Setembro", "Outubro",
    "Novembro", "Dezembro"
  ];

  var day = date.getDate();
  var monthIndex = date.getMonth();
  var year = date.getFullYear();

  var dataFormatada = day + ' de ' + monthNames[monthIndex] + ' de ' + year;

  return dataFormatada;
}
//console.log(formatDate(new Date()));  // show current date-time in console

//
//*************************************************************************************//
//
function dataCadastro(){
  var date = new Date();
  var dataTempo = date.getTime();
  var dataFormatada = formatDate(date);
  var dataCadastroLabel = "Data Cadastro: ";
  //alert("data do cadastro é: " + dataTempo + "<br>" + date);
  var inputDataCadastro = document.getElementById("dataCadastro");
  var labelDataCadastro = document.getElementById("labelDataCadastro");
  inputDataCadastro.value = dataTempo;
  labelDataCadastro.innerHTML = dataCadastroLabel + dataFormatada;
}
//
//*************************************************************************************//
//

//
//*************************************************************************************//
//
