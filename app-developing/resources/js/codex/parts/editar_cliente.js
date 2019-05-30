$(document).ready(function(){

    //alert('The modal is fully shown.');

    var inputDataCadastro = new Date().getTime(document.getElementById("data_cadastro_cliente").value);
    var date = new Date(inputDataCadastro);
    var dataFormatada = formatDate(date);
    document.getElementById("labelDataCliente").innerHTML = "Cadastrado desde: " + dataFormatada;
    //
    var inputDocCliente = document.getElementById("inputTipoPessoa").value;
    //
    if (inputDocCliente == "1")
    {
      //document.getElementById("inputTipoPessoa").value = "Pessoa Física";
      document.getElementById("selectTipoPessoa").value = inputDocCliente;
      document.getElementById("divDocumentoCliente").hidden=false;
    }
    else if(inputDocCliente == "2")
    {
      //document.getElementById("inputTipoPessoa").value = "Pessoa Jurídica";
      document.getElementById("selectTipoPessoa").value = inputDocCliente;
      document.getElementById("divDocumentoCliente").hidden=false;
    }
    else
    {
      //document.getElementById("inputTipoPessoa").value = "Documento não Cadastrado";
      document.getElementById("divDocumentoCliente").hidden=true;
    }
    documentoCliente();
    formataTelefone();
    formataCelular();
});

//######################################################################################

$("#modalEditar").on('shown.bs.modal', function(){
    //alert('The modal is fully shown.');

  });


//
//
