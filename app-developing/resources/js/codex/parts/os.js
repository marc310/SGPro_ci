$(document).ready(function(){
escondeCamposOS();
dataInicio();
});
// ##############################
// fim do construtor
// ##############################

// ##############################
  $(function(){

});
// ##############################
// ##############################


//
//*************************************************************************************//
//

// ##############################
// ##############################
// FUNCTIONS

function escondeCamposOS(){
  //
}
//
// ##############################
// ##############################

function dataInicio(){
  var date = new Date();
  var dataTempo = date.getTime();
  var dataFormatada = formatDate(date);
  var dataCadastroLabel = "Data de Entrada: ";

  //alert("data do cadastro é: " + dataTempo + "<br>" + date);
  var inputDataInicio = document.getElementById("data_inicio");
  var dataInicio = document.getElementById("lblDataInicioOs");
  inputDataInicio.value = dataTempo;
  dataInicio.innerHTML = dataCadastroLabel + dataFormatada;

}
