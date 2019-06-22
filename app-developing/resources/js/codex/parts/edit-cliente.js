
$(document).ready(function(){

  //
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
  //
  document.getElementById("cliente_redesocial").disabled=true;
  $("#cliente_redesocial").parent().parent().hide();
  $("#selectRedeSocial").parent().parent().animate({width:"80%"});


  // document.getElementById("btnAddRedeSocial").disabled=true;
  //
  loadClienteDoc();
  documentoCliente();
  formataTelefone();
  formataCelular();
  formataCep();

  // document.getElementById("btnEsconderPainelEndereco").addEventListener("click", escondeCamposEndereco);
  var inputDataCadastro = document.getElementById("data_cadastro_cliente").value;
  var date = new Date();
  date.setTime(inputDataCadastro);
  var dataFormatada = formatDate(date);
  document.getElementById("labelDataCliente").innerHTML = "Cadastrado desde: " + dataFormatada;
  document.getElementById("salvarEditarCliente").addEventListener("click", editaCliente);
  // PREENCHE VALOR DO SELECT DE CLIENTE DE REDE SOCIAL
  var idCliente = document.getElementById("idClienteShow").innerHTML;
  document.getElementById("selectClienteIdRedeSocial").value = idCliente;
  // PREENCHE VALOR DO SELECT DE ENDEREÇO
  var selectClienteEndereco = document.getElementById("cliente_id_endereco").value = idCliente;

  $("#btnAddEndereco").click(function(){
    $("#box-endereco-add").slideToggle("slow");
    $("#divBtnAddEndereco").hide(300);
    $("#tituloEndereco").hide(200);
    $("#boxBtnEnderecos").fadeIn(2000);
  });

  $("#btnEsconderPainelEndereco").click(function(){
    $("#box-endereco-add").slideToggle("slow");
    $("#divBtnAddEndereco").show(500);
    $("#tituloEndereco").show(700);
    $("#boxBtnEnderecos").hide(300);
  });


//######################################################################################
//######################################################################################
  });
// fim do construtor
//######################################################################################

// $(document).on('click', '.mEditRedeSocial', function (){
//
// });

$("#modalEditar").on('shown.bs.modal', function(){
    //alert('The modal is fully shown.');

});

//######################################################################################
//######################################################################################
function habilitaCadastroRedeSocial(){
  var social = document.getElementById("selectRedeSocial");
  var nome_social = document.getElementById("cliente_redesocial");
  if(social.value >= 1){
    // alert("habilitado");
    nome_social.disabled=false;
    mostraCampoRedeSocial();
  }
  else {
    // alert("desabilita");
    nome_social.disabled=true;
    escondeCampoRedeSocial();
  }
}
//######################################################################################
//
function mostraCampoRedeSocial(){
  $("#cliente_redesocial").parent().parent().show(500);
  $("#selectRedeSocial").parent().parent().animate({width:"30%"}, 200);
}
//
function escondeCampoRedeSocial(){
  $("#cliente_redesocial").parent().parent().hide(200);
  $("#selectRedeSocial").parent().parent().animate({width:"80%"}, 400);
}

//######################################################################################
//######################################################################################
