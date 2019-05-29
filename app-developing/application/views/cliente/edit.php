<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Editar Cliente</h3>
            </div>

            <ul class="nav nav-tabs">
               <li class="active"><a href="#infoCliente" data-toggle="tab">Informações do Cliente</a></li>
               <li><a href="#redesSociais" data-toggle="tab">Redes Sociais</a></li>
               <li><a href="#enderecoCliente" data-toggle="tab">Endereço</a></li>
            </ul>

            <div class="tab-content">
               <div class="tab-pane active" id="infoCliente">
                 <div class="col-md-12">



      <form name="frmEditCliente" id="frmEditarCliente" method="post" action="<?php echo site_url('cliente/edit/'.$cliente['id_cliente']);?>" onsubmit="return validaForm(this);">

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
							<input type="text" id="inputTipoPessoa" name="tipo_pessoa" value="<?php echo ($this->input->post('tipo_pessoa') ? $this->input->post('tipo_pessoa') : $cliente['tipo_pessoa']); ?>" class="form-control hidden"/>
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
            	<button type="submit" id="SalvarFormulario" class="btn btn-success">
      					<i class="fa fa-check"></i> Salvar
      				</button>

              <button type="button" id="cancelaEdit" data-dismiss="modal" class="btn btn-outline-secondary">
                <i class="fa fa-check"></i> Fechar
              </button>
	        </div>
        </form>

    </div>
  </div>
  <div class="tab-pane" id="redesSociais">Social Contacts</div>
  <div class="tab-pane" id="enderecoCliente">Endereços</div>
</div>


		</div>
    </div>
</div>
