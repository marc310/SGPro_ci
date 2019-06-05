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

//
//*************************************************************************************//
//
function formataCep(){
  var element = document.getElementById('cep');
  //aceita somente numero
  var er = /[^0-9-]/;
  er.lastIndex = 0;

  var phoneMask = IMask(element, {
  mask: '00000-000',
  // lazy: false,  // make placeholder always visible
  placeholderChar: '0'     // defaults to '_'
});
}
//
//*************************************************************************************//
//
function formataTelefone(){
  var element = document.getElementById('telefone');
  var phoneMask = IMask(element, {
  mask: '+{55}(00)0000-0000',
  // lazy: false,  // make placeholder always visible
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
  // lazy: false,  // make placeholder always visible
  placeholderChar: '_'     // defaults to '_'
});
}
//
//*************************************************************************************//
//
function formataCPF(){
  var element = document.getElementById('documento');
  var phoneMask = IMask(element, {
  mask: '000.000.000-00',
  lazy: false,  // make placeholder always visible
  placeholderChar: '_'     // defaults to '_'
});
}
//
//*************************************************************************************//
//
function formataCNPJ(){
  var element = document.getElementById('documento');
  var cnpjMask = IMask(element, {
  mask: '00.000.000/0000-00',
  lazy: false,  // make placeholder always visible
  placeholderChar: '_'     // defaults to '_'
});
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
// validação de formulario ao salvar
// document.getElementById("add-cliente").addEventListener('submit', validaForm(this));

//
//*************************************************************************************//
//
