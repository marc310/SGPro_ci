<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Editando Cliente  | ID: </h3>
              	<h3 id="idClienteShow" class="box-title"><?php echo $cliente['id_cliente'];?></h3>
            </div>

            <ul class="nav nav-tabs">
               <li class="active"><a href="#infoCliente" data-toggle="tab">Informações do Cliente</a></li>
               <li><a href="#redesSociais" data-toggle="tab">Redes Sociais</a></li>
               <li><a href="#enderecoCliente" data-toggle="tab">Endereço</a></li>
            </ul>

            <div class="tab-content">
               <div class="tab-pane active" id="infoCliente">
                 <div class="box-body">
                   <div class="row">
                 <div class="col-md-12">



      <form
      name="frmEditCliente"
      id="frmEditarCliente"
      method="post"
      action="<?php echo site_url('cliente/edit/'.$cliente['id_cliente']);?>"
      onsubmit="return validaForm(this);"
      >

			<div class="box-body">
				<div class="row clearfix">

					<div class="col-md-6">
						<label for="nome_cliente" class="control-label"><span class="text-danger">*</span>Nome Cliente</label>
						<div class="form-group">
							<input type="text" name="nome_cliente" value="<?php echo ($this->input->post('nome_cliente') ? $this->input->post('nome_cliente') : $cliente['nome_cliente']); ?>" class="form-control" id="nome_cliente" />
							<span class="text-danger"><?php echo form_error('nome_cliente');?></span>
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
							<input type="text"
              id="inputTipoPessoa"
              name="inputTipoPessoa"
              value="<?php echo ($this->input->post('tipo_pessoa') ? $this->input->post('tipo_pessoa') : $cliente['tipo_pessoa']); ?>"
              class="form-control hidden"/>
						</div>
					</div>
					<div class="col-md-6" id="divDocumentoCliente" hidden>
						<label for="documento" id="labelDocumentoCliente" class="control-label">Documento</label>
						<div class="form-group">
							<input type="text" id="documento" name="documento" value="<?php echo ($this->input->post('documento') ? $this->input->post('documento') : $cliente['documento']); ?>" class="form-control"/>
						</div>
					</div>

					<div class="col-md-6">
						<label for="telefone" class="control-label">Telefone</label>
						<div class="form-group">
							<input type="text" id="telefone" name="telefone" value="<?php echo ($this->input->post('telefone') ? $this->input->post('telefone') : $cliente['telefone']); ?>" class="form-control"/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="celular" class="control-label">Celular</label>
						<div class="form-group">
							<input type="text" name="celular" value="<?php echo ($this->input->post('celular') ? $this->input->post('celular') : $cliente['celular']); ?>" class="form-control" id="celular" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" id="email" name="email" onkeypress="formataEmailCliente()" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $cliente['email']); ?>" class="form-control"  />
						</div>
					</div>
					<div class="col-md-6">
						<label id="labelDataCliente" for="data_cadastro_cliente" class="control-label">Data Cadastro Cliente</label>
						<div class="form-group">
							<input type="text" name="data_cadastro_cliente" value="<?php echo ($this->input->post('data_cadastro_cliente') ? $this->input->post('data_cadastro_cliente') : $cliente['data_cadastro_cliente']); ?>" class="form-control hidden" id="data_cadastro_cliente" />
						</div>
					</div>
				</div>
			</div>
			       <div class="box-footer">

            	<button id="salvarEditarCliente" type="button" class="btn btn-success">
      					<i class="fa fa-check"></i> Salvar
      				</button>

              <button type="button" id="cancelaEdit"
              class="btn btn-outline-secondary"
              onclick="location.href='<?php echo site_url('cliente/index');?>'"
              >
                <i class="fa fa-times"></i> Fechar
              </button>
	        </div>
        </form>
        <div id="resultCliente" class="col-md-12"></div>

    </div>
  </div>
</div>
  </div>
  <!-- ######################################################################################### -->
  <!-- TAB 2 REDES SOCIAIS -->
  <div class="tab-pane" id="redesSociais">
    <div class="box-body">
      <div class="row">
    <div class="col-md-12">
      <!-- ######################################################################################### -->
      <!-- INNER -->
      <form
      name="frmAddRedeSocial"
      id="frmAddRedeSocial"
      method="post"
      action="<?php echo site_url('endereco_rede_social_cliente/add');?>"
      >
      <div class="box-body">
        <div class="row clearfix">
    <div class="col-md-6" hidden>
      <label for="cliente_id" class="control-label">Cliente</label>
      <div class="form-group">
        <select id="selectClienteIdRedeSocial" name="cliente_id" class="form-control">
          <option value="">select cliente</option>
          <?php
          foreach($all_clientes as $cliente)
          {
            $selected = ($cliente['id_cliente'] == $this->input->post('cliente_id')) ? ' selected="selected"' : "";

            echo '<option value="'.$cliente['id_cliente'].'" '.$selected.'>'.$cliente['nome_cliente'].'</option>';
          }
          ?>
        </select>
      </div>
    </div>
    <div class="col-md-4">
      <label for="redesocial_id" class="control-label">Redes Sociais</label>
      <div class="form-group">
        <select name="redesocial_id" class="form-control">
          <option value="">Selecione a Rede Social</option>
          <?php
          foreach($all_redes_sociais as $redes_sociais)
          {
            $selected = ($redes_sociais['id_redesocial'] == $this->input->post('redesocial_id')) ? ' selected="selected"' : "";

            echo '<option value="'.$redes_sociais['id_redesocial'].'" '.$selected.'>'.$redes_sociais['nome_redesocial'].'</option>';
          }
          ?>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <label for="cliente_redesocial" class="control-label">Cliente Redesocial</label>
      <div class="form-group">
        <input type="text" name="cliente_redesocial" value="<?php echo $this->input->post('cliente_redesocial'); ?>" class="form-control" id="cliente_redesocial" />
      </div>
    </div>
    <div class="col-md-2 pull-right" style="padding-top:25px;">
      <button id="btnAddRedeSocial" class="btn btn-success pull-right">
        <i class="fa fa-plus"></i> Adicionar
      </button>
    </div>
  </div>
</div>
      <!-- <div class="box-footer">
        <button id="btnAddRedeSocial" class="btn btn-success pull-right">
          <i class="fa fa-plus"></i> Adicionar Rede Social
        </button>
      </div> -->
    </form>
    <div id="resultsocial" class="col-md-12"></div>



      <div class="box-body" id="listaRedeSocial">
          <table class="table table-striped">
              <tr>
      <th hidden>Id Endereco Redesocial</th>
      <th>Redesocial Id</th>
      <th>Cliente Redesocial</th>
      <th>Actions</th>
              </tr>
              <?php foreach($endereco_rede_social_cliente as $e){ ?>
              <tr>
      <td hidden><?php echo $e['id_endereco_redesocial']; ?></td>
      <td><?php echo $e['nome_redesocial']; ?></td>
      <td><?php echo $e['cliente_redesocial']; ?></td>
      <td>
                      <a href="<?php echo site_url('endereco_rede_social_cliente/edit/'.$e['id_endereco_redesocial']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                      <a href="<?php echo site_url('endereco_rede_social_cliente/remove/'.$e['id_endereco_redesocial']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                  </td>
              </tr>
              <?php } ?>
          </table>

      </div>






      <!-- INNER -->
    </div>
  </div>
    </div>
  </div>
  <!-- FIM DA TAB 2 REDES SOCIAIS -->
  <!-- ######################################################################################### -->
  <!-- ######################################################################################### -->


 <!-- ######################################################################################### -->
 <!-- TAB 4 LISTA DE ENDEREÇO -->
 <div class="tab-pane" id="enderecoCliente">
   <div class="box-body" id="">
     <div class="row">
       <div class="col-md-12">
         <div class="box-header">

           <div class="box-tools">
             <div class="row" id="divBtnAddEndereco">
               <div style="padding-top:18px">
               <button
               href="<?php echo site_url('endereco/add'); ?>"
               id="btnAddEndereco"
               class="btn btn-info"
               onclick="mostraCamposEndereco()"
               ><i class="fa fa-plus"></i> Adicionar Endereço</button>
               </div>

             </div>
           </div>
             <!-- div hidden de cadastro de endereço -->
             <!-- ENDEREÇO ADD -->
             <div class="box-body" id="box-endereco-add" hidden>
               <div class="row">
                 <div class="row">
                     <div class="col-md-12">
                             <div class="box-header with-border">
                               	<h3 class="box-title">Cadastrar Novo Endereço</h3>
                             </div>

                             <form
                             name="frmAddEndereco"
                             id="frmAddEndereco"
                             method="post"
                             action="<?php echo site_url('endereco/add');?>"
                             > <!-- form open -->

                           	<div class="box-body">
                           		<div class="row clearfix">
                 					<div class="col-md-6">
                 						<label for="rua" class="control-label"><span class="text-danger">*</span>Rua</label>
                 						<div class="form-group">
                 							<input type="text" name="rua" value="<?php echo $this->input->post('rua'); ?>" class="form-control" id="rua" />
                 							<span class="text-danger"><?php echo form_error('rua');?></span>
                 						</div>
                 					</div>
                 					<div class="col-md-6">
                 						<label for="bairro" class="control-label"><span class="text-danger">*</span>Bairro</label>
                 						<div class="form-group">
                 							<input type="text" name="bairro" value="<?php echo $this->input->post('bairro'); ?>" class="form-control" id="bairro" />
                 							<span class="text-danger"><?php echo form_error('bairro');?></span>
                 						</div>
                 					</div>
                 					<div class="col-md-6">
                 						<label for="cidade" class="control-label"><span class="text-danger">*</span>Cidade</label>
                 						<div class="form-group">
                 							<input type="text" name="cidade" value="<?php echo $this->input->post('cidade'); ?>" class="form-control" id="cidade" />
                 							<span class="text-danger"><?php echo form_error('cidade');?></span>
                 						</div>
                 					</div>
                 					<div class="col-md-6">
                 						<label for="referencia" class="control-label">Referencia</label>
                 						<div class="form-group">
                 							<input type="text" name="referencia" value="<?php echo $this->input->post('referencia'); ?>" class="form-control" id="referencia" />
                 						</div>
                 					</div>
                 					<div class="col-md-6">
                 						<label for="numero" class="control-label">Numero</label>
                 						<div class="form-group">
                 							<input type="text" name="numero" value="<?php echo $this->input->post('numero'); ?>" class="form-control" id="numero" />
                 							<span class="text-danger"><?php echo form_error('numero');?></span>
                 						</div>
                 					</div>
                 					<div class="col-md-6">
                 						<label for="uf" class="control-label"><span class="text-danger">*</span>Uf</label>
                 						<div class="form-group">
                              <select name="uf" class="form-control" id="uf">
                                <option value="">Selecione o Estado</option>
                              <?php
                              require 'resources/php/array-uf_values.php';
                              foreach($uf_values as $value => $display_text)
                              {
                                $selected = ($value == $this->input->post('uf')) ? ' selected="selected"' : "";

                                echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                              }
                              ?>
                              </select>
                 							<span class="text-danger"><?php echo form_error('uf');?></span>
                 						</div>
                 					</div>
                 					<div class="col-md-6">
                 						<label for="cep" class="control-label">Cep</label>
                 						<div class="form-group">
                 							<input type="text" name="cep" value="<?php echo $this->input->post('cep'); ?>" class="form-control" id="cep" />
                 						</div>
                 					</div>
                 				</div>
                 			</div>
                           	<div class="box-footer">
                              <div class="pull-right">
                             	<button class="btn btn-success">
                             		<i class="fa fa-check"></i> Adicionar Endereço
                             	</button>

                              <button class="btn btn-danger" id="btnEsconderPainelEndereco" onclick="escondeCamposEndereco()">
                             		<i class="fa fa-arrow-up"></i> Esconder Painel
                             	</button>
                            </div>
                           	</div>
                          </form>
                          <div id="resultendereco" class="col-md-12"></div>

                     </div>
                 </div>

               </div>
             </div>
             <!-- FIM DO ENDEREÇO ADD -->
                   </div>
                   <div class="box-info" id="listaEnderecos">
                     <table class="table table-striped">
                         <tr>
                 <th hidden>Id Endereco</th>
                 <th>Rua</th>
                 <th>Bairro</th>
                 <th>Cidade</th>
                 <th>Numero</th>
                 <th>Uf</th>
                 <th>Cep</th>
                 <th> </th>
                   </tr>
                   <?php
                      foreach($enderecos as $e){
                      require 'resources/php/estados-case.php';
                     ?>
                   <tr>
                 <td hidden><?php echo $e['id_endereco']; ?></td>
                 <td><?php echo $e['rua']; ?></td>
                 <td><?php echo $e['bairro']; ?></td>
                 <td><?php echo $e['cidade']; ?></td>
                 <td><?php echo $e['numero']; ?></td>
                 <td><?php echo $uf; ?></td>
                 <td><?php echo $e['cep']; ?></td>
                 <td>
                 <a
                 href="<?php echo site_url('endereco/edit/'.$e['id_endereco']); ?>"
                 class="btn btn-info btn-xs"
                 data-toggle="modal"
                 data-target="#modalEditar"
                 >
                 <span class="fa fa-pencil"></span>
               </a>

                 <a
                 href="<?php echo site_url('endereco/remove/'.$e['id_endereco']); ?>"
                 class="btn btn-danger btn-xs"
                 onclick="return confirm('Tem certeza que deseja deletar este item?');">
                 <span class="fa fa-trash"></span>
                 </a>
                             </td>
                         </tr>
                         <?php } ?>
                     </table>
                     <div class="pull-right">
                         <?php echo $this->pagination->create_links(); ?>
                     </div>
                   </div>
                 </div>
               </div>

               </div>
               </div>
               <!-- FIM DA TAB 4 LISTA DE ENDEREÇO -->
 <!-- ######################################################################################### -->
</div>


		</div>
    </div>
</div>


<!-- ########################################################################################### -->
<!-- ###################################  MODAL EDITAR  ######################################## -->
<!-- ########################################################################################### -->

<!-- Modal -->
<div class="modal fade" id="modalEditar" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editando Endereço</h4>
      </div>
      <div class="modal-body">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>

<!-- ########################################################################################### -->
<!-- ########################################################################################### -->
<!-- ########################################################################################### -->

<script>

$(document).ready(function(){

  loadClienteDoc();
  documentoCliente();
  formataTelefone();
  formataCelular();
  // document.getElementById("btnEsconderPainelEndereco").addEventListener("click", escondeCamposEndereco);
  var inputDataCadastro = new Date().getTime(document.getElementById("data_cadastro_cliente").value);
  var date = new Date(inputDataCadastro);
  var dataFormatada = formatDate(date);
  document.getElementById("labelDataCliente").innerHTML = "Cadastrado desde: " + dataFormatada;
  document.getElementById("salvarEditarCliente").addEventListener("click", editaCliente);
  var idCliente = document.getElementById("idClienteShow").innerHTML;
  document.getElementById("selectClienteIdRedeSocial").value = idCliente;
});
// fim do construtor
//######################################################################################

$("#modalEditar").on('shown.bs.modal', function(){
    //alert('The modal is fully shown.');

  });

$("#modalAdicionar").on('shown.bs.modal', function(){
  //alert('The modal is fully shown.');

});
//######################################################################################
//######################################################################################
//######################################################################################

//######################################################################################
$(function(){
// SALVA CLIENTE COM AJAX
	// $("#frmEditarCliente").submit(function(){
	// 	dataString = $("#frmEditarCliente").serialize();
  //   var frm = document.getElementById("frmEditarCliente");
  //   //VALIDAÇÃO ANTES DE SALVAR ALTERAÇÕES
  //   //Verifica se o campo nome foi preenchido e
  //   //contém no mínimo três caracteres.
  //   validaCliente(frm);
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
  // cliente salvo
  //



  $("#frmAddRedeSocial").submit(function(){
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

    return false;  //stop the actual form post !important!

  });
  //######################################################################################
  // SALVA ENDEREÇO COM AJAX

  // validação de formulario de endereço
  // verifica se campos estao nulos se for diferente entao prossegue
  $("#frmAddEndereco").submit(function(){
		dataString = $("#frmAddEndereco").serialize();

		$.ajax({
			type: "POST",
			url: "<?php echo base_url('endereco/add');?>",
			data: dataString,
			target: "#listaEnderecos",
			success: function(data){
				// alert('Successful!');
				$("#resultendereco").html('Endereço Adicionado com Sucesso!').show().fadeOut( 3000 );
				$("#resultendereco").addClass("alert alert-success");
				$("#listaEnderecos").load("<?php echo current_url();?> #listaEnderecos");
			}
		});

		return false;  //stop the actual form post !important!

	});
// fim da function
});
//######################################################################################
//


//
//
</script>
