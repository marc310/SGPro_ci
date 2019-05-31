<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Adicionar Cliente</h3>
            </div>


            <ul class="nav nav-tabs">
               <li class="active"><a href="#infoCliente" data-toggle="tab">Informações do Cliente</a></li>
               <li class="disabled disabledTab" ><a href="#redesSociais" data-toggle="tab">Redes Sociais</a></li>
               <li class="disabled"><a href="#enderecoCliente" data-toggle="tab">Adicionar Endereço</a></li>
               <li class="disabled"><a href="#listaEnderecosCliente" data-toggle="tab">Lista Endereços</a></li>
            </ul>

<!-- ######################################################################################### -->
<!-- ######################################################################################### -->
<!-- ######################################################################################### -->
<!-- ######################################################################################### -->
<!-- INICIAR TABS CLIENTE -->

<div class="tab-content">
 <div class="tab-pane active" id="infoCliente">
   <div class="col-md-12">

     <!-- INICIAR INFO CLIENTE -->

     <form
     name="frmAddCliente"
     id="frmAddCliente"
     method="post"
     action="<?php echo site_url('cliente/add');?>"
     > <!-- form open -->


    <div class="box-body">
      <div class="row clearfix">
  <!-- <div class="col-md-6" hidden>
    <label for="endereco_id_cliente" class="control-label">Endereco</label>
    <div class="form-group">
      <select name="endereco_id_cliente" class="form-control">
        <option value="">Selecione endereco</option>
        <?php
        foreach($all_enderecos as $endereco)
        {
          $selected = ($endereco['id_endereco'] == $this->input->post('endereco_id_cliente')) ? ' selected="selected"' : "";

          echo '<option value="'.$endereco['id_endereco'].'" '.$selected.'>'.$endereco['id_endereco'].'</option>';
        }
        ?>
      </select>
    </div>
  </div> -->
  <div class="col-md-6">
    <label for="nome_cliente" class="control-label"><span class="text-danger">*</span>Nome Cliente</label>
    <div class="form-group">
      <input type="text" id="nome_cliente" name="nome_cliente" value="<?php echo $this->input->post('nome_cliente'); ?>" class="form-control" id="nome_cliente" />
      <span class="text-danger"><?php echo form_error('nome_cliente');?></span>
    </div>
  </div>
  <!-- <div class="col-md-6">
    <label for="sexo" class="control-label">Sexo</label>
    <div class="form-group">
       <select name="sexo" class="form-control">
         <option value="">Selecione o Sexo</option>
       <?php
       $sexo_values = array(
         '1'=>'Masculino',
         '2'=>'Feminino',
       );

       foreach($sexo_values as $value => $display_text)
       {
         $selected = ($value == $this->input->post('sexo')) ? ' selected="selected"' : "";

         echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
       }
       ?>
       </select>
     </div>
  </div> -->

  <div class="col-md-6">
    <label for="telefone" class="control-label">Telefone</label>
    <div class="form-group">
      <input type="text" id="telefone" onchange="formataTelefone()" name="telefone" value="<?php echo $this->input->post('telefone'); ?>" class="form-control" id="telefone" />
    </div>
  </div>
  <div class="col-md-6">
    <label for="celular" class="control-label">Celular</label>
    <div class="form-group">
      <input type="text" id="celular" onchange="formataCelular()" name="celular" value="<?php echo $this->input->post('celular'); ?>" class="form-control" id="celular" />
    </div>
  </div>
  <div class="col-md-6">
    <label for="email" class="control-label">Email</label>
    <div class="form-group">
      <input id="email" onkeypress="formataEmailCliente()" type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control"/>
    </div>
  </div>
  <div class="col-md-6">
    <label for="tipo_pessoa" class="control-label">Tipo Pessoa</label>
    <div class="form-group">
       <select name="tipo_pessoa" class="form-control" id="selectTipoPessoa" onchange="documentoCliente()">
         <option value="">Selecione o Tipo de Pessoa para Cadastrar um Documento</option>
       <?php
       $tipo_pessoa_values = array(
         '1'=>'Física',
         '2'=>'Jurídica',
       );

       foreach($tipo_pessoa_values as $value => $display_text)
       {
         $selected = ($value == $this->input->post('tipo_pessoa')) ? ' selected="selected"' : "";

         echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
       }
       ?>
       </select>
    </div>
  </div>
  <div class="col-md-6" id="divDocumentoCliente" hidden>
    <label id="labelDocumentoCliente" for="documento" class="control-label">Documento</label>
    <div class="form-group">
      <input id="documento" type="text" name="documento" value="<?php echo $this->input->post('documento'); ?>" class="form-control"/>
    </div>
  </div>
  <div class="col-md-12">
    <label id="labelDataCadastro" for="data_cadastro_cliente" class="control-label">Data Cadastro Cliente:</label>
    <div class="form-group">
      <input id="dataCadastro" type="text" name="data_cadastro_cliente" value="<?php echo $this->input->post('data_cadastro_cliente'); ?>" class="form-control hidden" id="data_cadastro_cliente" />
    </div>
  </div>

</div>
</div>

    <div class="box-footer">

      <button id="btnSalvarCliente" class="btn btn-success" type="button">
        <i class="fa fa-check"></i> Salvar
      </button>

      <button type="button" data-dismiss="modal" class="btn btn-outline-secondary">
    		<i class="fa fa-check"></i> Fechar
    	</button>

    </div>
  </form>

  <div id="resultCliente" class="col-md-12"></div>
    <!-- FINALIZAR INFO CLIENTE -->
   </div>
 </div>

            </div>



      	</div>
    </div>
</div>



<script>

$(document).ready(function(){

  document.getElementById("btnSalvarCliente").addEventListener("click", salvaCliente);
  // document.getElementById("btnEsconderPainelEndereco").addEventListener("click", escondeCamposEndereco);
  // construtor iniciando
  // code...

});
// fim do construtor
//######################################################################################
//######################################################################################
//######################################################################################
//######################################################################################


//######################################################################################
// salvaCliente = function(){
//
//   var frm = document.getElementById("frmAddCliente");
//   if (1 == 1){
//     //your before submit logic
//     if(validaCliente(frm)==0){
//       // alert("se for falso cancela");
//       // $("#resultCliente").html('Cliente não pode ser adicionado!').show().fadeOut( 5000 );
//       // $("#resultCliente").addClass("alert alert-danger");
//       return false;
//     }
//     //
//   }
//   //
//   // alert("submited");
//   $("#resultCliente").removeClass("alert alert-danger");
//
//   $("#resultCliente").addClass("alert alert-success");
//   $("#resultCliente").html('Cliente Cadastrado com Sucesso!').show().fadeOut( 5000 );
//
//     // SALVA CLIENTE COM AJAX
//     $("#frmAddCliente").submit(function(){
//       dataString = $("#frmAddCliente").serialize();
//       var frm = document.getElementById("frmAddCliente");
//
//       $.ajax({
//         type: "POST",
//         url: "<?php echo base_url('cliente/add');?>",
//         data: dataString,
//         //target: "#listaClientes",
//         success: function(data){
//           // alert('Successful!');
//           $("#resultCliente").html('Cliente Alterado com Sucesso!').show().fadeOut( 5000 );
//           $("#resultCliente").addClass("alert alert-success");
//         }
//
//       });
//       //$("#listaClientes").load("<?php echo current_url();?> #listaClientes");
//
//
//       return false;  //stop the actual form post !important!
//
//     });
//
// }

// $(function(){
// // SALVA CLIENTE COM AJAX
// 	$("#frmAddCliente").submit(function(){
// 		dataString = $("#frmAddCliente").serialize();
//     var frm = document.getElementById("frmAddCliente");
//
//
//         // validação
//         if(validaCliente(frm)==0){
//
//           alert ("negado");
//           // $("#resultCliente").html('Cliente não pode ser adicionado!').show().fadeOut( 5000 );
//           // $("#resultCliente").addClass("alert alert-danger");
//           // return false;  //stop the actual form post !important!
//
//         }
//         else {
//           $.ajax({
//       			type: "POST",
//       			url: "<?php echo base_url('cliente/add');?>",
//       			data: dataString,
//       			//target: "#listaClientes",
//       			success: function(data){
//       				// alert('Successful!');
//           $("#resultCliente").html('Cliente Alterado com Sucesso!').show().fadeOut( 5000 );
//           $("#resultCliente").addClass("alert alert-success");
//         }
//
//       });
//         }
// 				//$("#listaClientes").load("<?php echo current_url();?> #listaClientes");
//
//         console.log(validaCliente(frm));
//
// 		return false;  //stop the actual form post !important!
//
//   });
//   });
  // cliente salvo
  //
//
</script>
