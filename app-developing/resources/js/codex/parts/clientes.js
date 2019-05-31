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
    //
  }
  //
  // alert("submited");

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
