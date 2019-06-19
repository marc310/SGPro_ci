
$(document).ready(function(){

  //
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
  //
  document.getElementById("cliente_redesocial").disabled=true;
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
  // ADICIONA ENDEREÇO DE REDE SOCIAL COM AJAX

  $(function(){

      $("#frmAddRedeSocial").submit(function(){
          var frm = document.getElementById("frmAddRedeSocial");
          //
          if (1 == 1){
            //your before submit logic
            // alert("se for falso cancela");
            if(validaRedeSocial(frm)==0){
              // $("#resultCliente").html('Cliente não pode ser adicionado!').show().fadeOut( 5000 );
              // $("#resultCliente").addClass("alert alert-danger");
              return false;
            }
            // fim do pre-loader
          }

        dataString = $("#frmAddRedeSocial").serialize();

        $.ajax({
          type: "POST",
          url: "<?php echo base_url('endereco_rede_social_cliente/add');?>",
          data: dataString,
          target: "#listaRedeSocial",
          success: function(data){
            // alert('Successful!');
            $("#resultsocial").html('Rede Social Adicionada com Sucesso!').show().fadeOut( 3000 );
            $("#resultsocial").addClass("alert alert-success");
            $("#listaRedeSocial").load("<?php echo current_url();?> #listaRedeSocial");
          }
        });

        setTimeout( function () {
          limpaCamposRedeSocial();
        }, 300);

        return false;  //stop the actual form post !important!
      });

    // });
    //######################################################################################
    // ADICIONA ENDEREÇO COM AJAX

    // validação de formulario de endereço
    // verifica se campos estao nulos se for diferente entao prossegue
    $("#btnAdicionaEndereco").click(function(){
      var frm = document.getElementById("frmAddEndereco");
      //
      if (1 == 1){
        //your before submit logic
          // alert("se for falso cancela");
        if(validaEndereco(frm)==0){
          // $("#resultCliente").html('Cliente não pode ser adicionado!').show().fadeOut( 5000 );
          // $("#resultCliente").addClass("alert alert-danger");
          return false;
        }
        // fim do pre-loader
      }
      $("#frmAddEndereco").submit(function(){
  		dataString = $("#frmAddEndereco").serialize();

          //tratamento de string pra pegar url atual e tratar modificando os dados
          // e passando os valores pra uma variavel
        // logica
        // pega a url atual
        // conta quantos splits vao ser dados
        // pega o valor do ultimo split e remove
        // da um replace no "cliente/edit" para "enderecos_cliente/add"
        // salva string em uma variavel e passa pra o parametro url 

        $.ajax({
                type: "POST",
                //
                // O PROBLEMA ESTÁ AQUI, O JAVASCRIPT NAO VAI CONSEGUIR CONCLUIR O ECHO BASE_URL
    			url: "<?php echo base_url('enderecos_cliente/add');?>",
    			data: dataString,
    			target: "#listaEnderecos",
    			success: function(data){
    				// alert('Successful!');
            $("#resultendereco").addClass("alert alert-success");
    				$("#resultendereco").html('Endereço Adicionado com Sucesso!').show().fadeOut( 3000 );
    				$("#listaEnderecos").load("<?php echo current_url();?> #listaEnderecos");
    			}
    		});

      // fim do pre-loader
      // aqui seque o cod..
      // alert("aqui segue" + endereco + " " + id);
      return false;  //stop the actual form post !important!
  	});
    setTimeout( function () {
        limpaCamposEndereco();
    }, 300);
    // fim da function
    });

  });
  //######################################################################################
  //
  // DELETA REDE SOCIAL COM AJAX
  //
  $(document).on('click', '.deleta', function (){

        var id_endereco_redesocial = $(this).attr('id');
        var el = this;
        var tr = $(this).closest('tr');
        // dataString = $("#frmAddRedeSocial").serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('cliente/removeRedesocial/');?>" + id_endereco_redesocial,
                data: {id_endereco_redesocial : id_endereco_redesocial},
                // target: "#listaRedeSocial",
                success: function (data) {
                  // alert("funcionou");
                	 // Remove row from HTML Table
                	 // $(el).closest('tr').css('background','tomato');
                	 $(el).closest('tr').fadeOut(2300,function(){
                	    $(this).remove();
                	 });

                  // if (data.result == true) {
                      $("#resultsocial").html('Rede Social Apagada com Sucesso!').show().fadeOut( 3000 );
                      $("#resultsocial").addClass("alert alert-success");
                      $("#listaRedeSocial").load("<?php //echo current_url();?>// #listaRedeSocial");
                  //
                  // }
                  // else {
                  //     alert('Ocorreu um erro ao tentar excluir serviço.');
                  // }
                }
            });
            return false;

      });

      //######################################################################################
      //
      // DELETA ENDEREÇO COM AJAX
      //
      $(document).on('click', '.deletaEndereco', function (){

            var id_endereco = $(this).attr('id');
            var el = this;
            var tr = $(this).closest('tr');
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('enderecos_cliente/remove/');?>" + id_endereco,
                    data: {id_endereco : id_endereco},
                    // target: "#listaEnderecos",
                    success: function (data) {
                    	 // Remove row from HTML Table
                    	 // $(el).closest('tr').css('background','tomato');
                    	 $(el).closest('tr').fadeOut(2300,function(){
                    	    $(this).remove();
                    	 });

                      // if (data.result == true) {
                          $("#resultendereco").html('Endereço Apagado com Sucesso!').show().fadeOut( 3000 );
                          $("#resultendereco").addClass("alert alert-success");
                          $("#listaEnderecos").load("<?php //echo current_url();?>// #listaEnderecos");
                      //
                      // }
                      // else {
                      //     alert('Ocorreu um erro ao tentar excluir serviço.');
                      // }
                    }
                });

                return false;

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
  }
  else {
    // alert("desabilita");
    nome_social.disabled=true;

  }
}
//######################################################################################
//######################################################################################
//######################################################################################
