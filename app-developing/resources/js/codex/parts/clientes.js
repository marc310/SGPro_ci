//
//

function formataEmailCliente(){
  var emailCliente = document.getElementById("email");
  emailCliente.value = emailCliente.value.toLowerCase();
}

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
function preencheElementosCliente(){
  // PREENCHE VALOR DO SELECT DE CLIENTE DE REDE SOCIAL
  var idCliente = document.getElementById("idClienteShow").innerHTML;
  document.getElementById("selectClienteIdRedeSocial").value = idCliente;
  // PREENCHE VALOR DO SELECT DE ENDEREÇO
  var selectClienteEndereco = document.getElementById("endereco_id_cliente").value = idCliente;


}
// VERIFICA TIPO DE PESSOA AO CADASTRAR, FISICA OU JURIDICA PARA FORMATAÇÃO DO DOCUMENTO
// se o tipo estiver nulo ou vazio entao esconde o label e input documento
// se o tipo for pessoa fisica entao altera o label "documento" para "CPF: "
// se o tipo for pessoa juridica entao altera o label "documento" para "CNPJ: "
function documentoCliente()
{
  var tipoPessoa = document.getElementById("selectTipoPessoa").value;

  if (tipoPessoa == ""){
    document.getElementById("documento").value = "";
    document.getElementById("divDocumentoCliente").hidden=true;
    //alert("Você deve selecionar o tipo de pessoa para Cadastrar o Documento.");
  }
  if (tipoPessoa == "1"){
    //alert(1 Pessoa Física);
    document.getElementById("divDocumentoCliente").hidden=false;
    document.getElementById("labelDocumentoCliente").innerHTML = "CPF:";
    formataCPF();
  }
  if (tipoPessoa == "2"){
    //alert(2 Pessoa Jurídica);
    document.getElementById("divDocumentoCliente").hidden=false;
    document.getElementById("labelDocumentoCliente").innerHTML = "CNPJ:";
    formataCNPJ();
  }

}


// function mostraCamposEndereco() {
//   //document.getElementById("demo").innerHTML = Date();
//   //
//   var box;
//   var btnAddEndereco;
//   //
//   box = document.getElementById("box-endereco-add");
//   btnAddEndereco = document.getElementById("divBtnAddEndereco");
//
//
//   if (box.hidden == true){
//   box.hidden = false;
//   btnAddEndereco.hidden = true;
//   // btnAddEndereco.innerHTML = '<i class="fa fa-arrow-up"></i> Esconder Painel';
//   // btnAddEndereco.classList.add("btn-danger");
//   // btnAddEndereco.classList.remove("btn-info");
//   }
//   else {
//     box.hidden = true;
//     btnAddEndereco.hidden = false;
//   }
// }
//
//*************************************************************************************//
//
// function escondeCamposEndereco() {
//   box = document.getElementById("box-endereco-add");
//   btnAddEndereco = document.getElementById("divBtnAddEndereco");
//
//     box.hidden = true;
//     btnAddEndereco.hidden = false;
//     //btnEsconde.hidden=false;
//     // btnAddEndereco.innerHTML = '<i class="fa fa-plus"></i> Cadastrar Novo Endereço';
//     // btnAddEndereco.classList.add("btn-info");
//     // btnAddEndereco.classList.remove("btn-danger");
// }

//
// Salvar Cliente
//
salvaCliente = function(){

  var frm = document.getElementById("frmAddCliente");

  if (1 == 1){
    //your before submit logic
    if(validaCliente(frm)==0){
      // alert("se for falso cancela");
      // $("#resultCliente").html('Cliente não pode ser adicionado!').show().fadeOut( 5000 );
      // $("#resultCliente").addClass("alert alert-danger");
      return false;
    }
    // fim do pre-loader
  }
  // alertas de confirmação
  $("#resultCliente").addClass("alert alert-success");
  $("#resultCliente").html('Cliente Cadastrado com Sucesso!').show().fadeOut( 5000 );

  document.forms['frmAddCliente'].submit();

}

//
// editar clientes

editaCliente = function(){

  var frm = document.getElementById("frmEditarCliente");

  if (1 == 1){
    //your before submit logic
    if(validaCliente(frm)==0){
      // alert("se for falso cancela");
      // $("#resultCliente").html('Cliente não pode ser adicionado!').show().fadeOut( 5000 );
      // $("#resultCliente").addClass("alert alert-danger");
      return false;
    }
    //
  }
  // alert("submited");
  document.forms['frmEditarCliente'].submit();

  // $("#frmEditarCliente").submit(function(){
	// 	dataString = $("#frmEditarCliente").serialize();
  //
	// 	$.ajax({
	// 		type: "POST",
	// 		url: "<?php echo base_url('cliente/edit/'.$cliente['id_cliente']);?>",
	// 		data: dataString,
	// 		//target: "#listaClientes",
	// 		success: function(data){
	// 			// alert('Successful!');
	// 			$("#resultCliente").html('Cliente Alterado com Sucesso!').show().fadeOut( 5000 );
	// 			$("#resultCliente").addClass("alert alert-success");
	// 			//$("#listaClientes").load("<?php echo current_url();?> #listaClientes");
  //
	// 		}
  //
	// 	});
  //
	// 	return false;  //stop the actual form post !important!
  //
	// });
  // document.forms['frmEditarCliente'].submit();
}

//
//
loadClienteDoc = function(){
  //alert('The modal is fully shown.');

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
}
//
