<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Editando Cadastro de <?php echo $cliente['nome_cliente'];?> | ID: </h3>
              	<h3 id="idClienteShow" class="box-title"><?php echo $cliente['id_cliente'];?></h3>
            </div>

            <ul class="nav nav-tabs">
               <li class="active"><a href="#infoCliente" data-toggle="tab">Informações do Cliente</a></li>
               <li><a href="#redesSociais" data-toggle="tab">Redes Sociais</a></li>
               <li><a href="#enderecoCliente" data-toggle="tab">Endereço</a></li>
            </ul>

            <div class="tab-content">
               <div class="tab-pane fade in active" id="infoCliente">
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
  <div class="tab-pane fade" id="redesSociais">
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
        <select id="selectRedeSocial" name="redesocial_id" class="form-control" onchange="habilitaCadastroRedeSocial()">
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
        <input id="cliente_redesocial" type="text" name="cliente_redesocial" value="<?php echo $this->input->post('cliente_redesocial'); ?>" class="form-control" id="cliente_redesocial"/>
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



      <div class="box-body" id="listaRedeSocial">
          <table class="table table-striped">
              <tr>
      <th hidden>Id Endereco Redesocial</th>
      <th>Rede Social</th>
      <th>Url</th>
      <th>Perfil do Cliente</th>
      <th></th>
              </tr>
              <?php foreach($endereco_rede_social_cliente as $e){ ?>
              <tr>
      <td hidden><?php echo $e['id_endereco_redesocial']; ?></td>
      <td><?php echo $e['nome_redesocial']; ?></td>
      <td><?php echo "http://" . $e['url_base_redesocial'] . "/" . $e['cliente_redesocial'] ?>
      <td><?php echo $e['tag_redesocial'] . " " . $e['cliente_redesocial']; ?></td>
      <td>


        <a
        href="<?php echo site_url('cliente/editaRedesocial/'.$e['id_endereco_redesocial']); ?>"
        class="btn btn-info btn-xs mEditRedeSocial"
        data-toggle="modal"
        data-target="#modalEditar"
        >
        <span class="fa fa-pencil"></span>
        </a>

        <a
         href"#"
         class="btn btn-danger btn-xs deleta"
         id="<?php echo $e['id_endereco_redesocial']; ?>"
         >
         <span class="fa fa-trash"></span>
        </a>

      </td>
  </tr>
              <?php } ?>
          </table>

      </div>
      <div id="resultsocial" class="col-md-12"></div>

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
 <div class="tab-pane fade" id="enderecoCliente">
   <div class="box-body" id="">
     <div class="row">
       <div class="col-md-12">
         <div class="box-header" style="padding-bottom:20px">
           <h3 id="tituloEndereco">Lista de Endereços de <?php echo $cliente['nome_cliente'] ?> </h3>
           <div class="box-tools">
             <div class="row" id="divBtnAddEndereco" style="padding-top:20px;">
               <div>
               <button
               href="#"
               id="btnAddEndereco"
               type="button"
               class="btn btn-info"
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



                                   <!-- FORM 2 -->
                             <form
                             name="frmAddEndereco"
                             id="frmAddEndereco"
                             method="post"
                             action="<?php echo site_url('enderecos_cliente/add');?>"
                             > <!-- form open -->

                             	<div class="box-body">
                             		<div class="row clearfix">


                                  	<div class="form-group" hidden>
                                  		<label for="cliente_id" class="col-md-4 control-label"><span class="text-danger">*</span>Cliente</label>
                                  		<div class="col-md-8">
                                  			<select id="cliente_id_endereco" name="cliente_id" class="form-control">
                                  				<option value="">select cliente</option>
                                  				<?php
                                  				foreach($all_clientes as $cliente)
                                  				{
                                  					$selected = ($cliente['id_cliente'] == $this->input->post('cliente_id')) ? ' selected="selected"' : "";

                                  					echo '<option value="'.$cliente['id_cliente'].'" '.$selected.'>'.$cliente['nome_cliente'].'</option>';
                                  				}
                                  				?>
                                  			</select>
                                  			<span class="text-danger"><?php echo form_error('cliente_id');?></span>
                                  		</div>
                                  	</div>
                                  	<div class="form-group">
                                  		<label for="rua" class="col-md-4 control-label"><span class="text-danger">*</span>Rua</label>
                                  		<div class="col-md-8">
                                  			<input type="text" name="rua" value="<?php echo $this->input->post('rua'); ?>" class="form-control" id="rua" />
                                  			<span class="text-danger"><?php echo form_error('rua');?></span>
                                  		</div>
                                  	</div>
                                    <div class="form-group">
                                  		<label for="numero" class="col-md-4 control-label">Numero</label>
                                  		<div class="col-md-8">
                                  			<input type="text" maxlength="10" name="numero" value="<?php echo $this->input->post('numero'); ?>" class="form-control" id="numero" onkeyup="somenteNum(this)" />
                                  			<span class="text-danger"><?php echo form_error('numero');?></span>
                                  		</div>
                                  	</div>
                                  	<div class="form-group">
                                  		<label for="bairro" class="col-md-4 control-label">Bairro</label>
                                  		<div class="col-md-8">
                                  			<input type="text" name="bairro" value="<?php echo $this->input->post('bairro'); ?>" class="form-control" id="bairro" />
                                  		</div>
                                  	</div>
                                  	<div class="form-group">
                                  		<label for="cidade" class="col-md-4 control-label">Cidade</label>
                                  		<div class="col-md-8">
                                  			<input type="text" name="cidade" value="<?php echo $this->input->post('cidade'); ?>" class="form-control" id="cidade" />
                                  		</div>
                                  	</div>
                                    <div class="form-group">
                                  		<label for="uf" class="col-md-4 control-label"><span class="text-danger">*</span>Uf</label>
                                  		<div class="col-md-8">
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
                                  	<div class="form-group">
                                  		<label for="complemento" class="col-md-4 control-label">Complemento</label>
                                  		<div class="col-md-8">
                                  			<input type="text" name="complemento" value="<?php echo $this->input->post('complemento'); ?>" class="form-control" id="complemento" />
                                  		</div>
                                  	</div>


                                  	<div class="form-group">
                                  		<label for="cep" class="col-md-4 control-label">Cep</label>
                                  		<div class="col-md-8">

                                        <input type="text" name="cep" id="cep"
                                        value="<?php echo $this->input->post('cep'); ?>"
                                        class="form-control"
                                        onchange="formataCep()"
                                        maxlength="9"
                                        />

                                  			<span class="text-danger"><?php echo form_error('cep');?></span>
                                  		</div>
                                  	</div>

                         				</div>
                         			</div>
                           	<div class="box-footer" id="boxBtnEnderecos">
                              <div class="pull-right">
                             	<button class="btn btn-success" id="btnAdicionaEndereco">
                             		<i class="fa fa-check"></i> Adicionar Endereço
                             	</button>

                              <button type="button" class="btn btn-danger" id="btnEsconderPainelEndereco" >
                             		<i class="fa fa-arrow-up"></i> Esconder
                             	</button>
                            </div>
                           	</div>
                          </form>

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
                      foreach($enderecos_cliente as $e){
                      require 'resources/php/estados-case.php';
                     ?>
                   <tr>
                 <td id="id_endereco" hidden><?php echo $e['id_endereco']; ?></td>
                 <td><?php echo $e['rua']; ?></td>
                 <td><?php echo $e['bairro']; ?></td>
                 <td><?php echo $e['cidade']; ?></td>
                 <td><?php echo $e['numero']; ?></td>
                 <td><?php echo $uf; ?></td>
                 <td><?php echo $e['cep']; ?></td>
                 <td>
                 <a
                 href="<?php echo site_url('cliente/editarEndereco/'.$e['id_endereco']); ?>"
                 class="btn btn-info btn-xs"
                 data-toggle="modal"
                 data-target="#modalEditar"
                 >
                 <span class="fa fa-pencil"></span>
               </a>

                 <a
                 id="<?php echo $e['id_endereco']; ?>"
                 href="<?php echo site_url('cliente/removerEndereco/'.$e['id_endereco']); ?>"
                 class="btn btn-danger btn-xs deletaEndereco"
                 onclick="return confirm('Tem certeza que deseja deletar este item?');"
                 >
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
               <div id="resultendereco" class="col-md-12"></div>

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
<script src="<?php echo site_url('resources/js/codex/parts/clientes.js');?>"></script>
<script src="<?php echo site_url('resources/js/codex/parts/edit-cliente.js');?>"></script>
<!-- ########################################################################################### -->
<script type="text/javascript">

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
          // TODO..
          url: "<?php echo base_url('endereco_rede_social_cliente/add');?>",
          data: dataString,
          target: "#listaRedeSocial",
          success: function(data){
            // alert('Successful!');
            $("#resultsocial").html('Rede Social Adicionada com Sucesso!').show().fadeOut( 3000 );
            $("#resultsocial").removeClass("alert alert-danger");
            $("#resultsocial").addClass("alert alert-success");
            $("#listaRedeSocial").load("<?php echo current_url();?> #listaRedeSocial");
          }
        });

        setTimeout( function () {
          limpaCamposRedeSocial();
          escondeCampoRedeSocial();
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

        $.ajax({
          type: "POST",
          // TODO..
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
      return false;  //stop the actual form post !important!
  	});
    setTimeout( function () {
        limpaCamposEndereco();
        $("#box-endereco-add").slideToggle("slow");
        $("#divBtnAddEndereco").show(500);
        $("#tituloEndereco").show(700);
        $("#boxBtnEnderecos").hide(300);
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
                // TODO..
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
                      $("#resultsocial").removeClass("alert alert-danger");
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
                  // TODO..
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

</script>
