<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Cliente Edit</h3>
            </div>
			<?php echo form_open('cliente/edit/'.$cliente['id_cliente']); ?>
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
							<input type="text" id="inputTipoPessoa" name="tipo_pessoa" value="<?php echo ($this->input->post('tipo_pessoa') ? $this->input->post('tipo_pessoa') : $cliente['tipo_pessoa']); ?>" class="form-control" id="tipo_pessoa" />
						</div>
					</div>
					<div class="col-md-6" id="divDocumentoCliente">
						<label for="documento" class="control-label">Documento</label>
						<div class="form-group">
							<input type="text" name="documento" value="<?php echo ($this->input->post('documento') ? $this->input->post('documento') : $cliente['documento']); ?>" class="form-control" id="documento" />
						</div>
					</div>

					<div class="col-md-6">
						<label for="telefone" class="control-label">Telefone</label>
						<div class="form-group">
							<input type="text" name="telefone" value="<?php echo ($this->input->post('telefone') ? $this->input->post('telefone') : $cliente['telefone']); ?>" class="form-control" id="telefone" />
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
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $cliente['email']); ?>" class="form-control" id="email" />
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
            	<button type="submit" class="btn btn-success">
      					<i class="fa fa-check"></i> Salvar
      				</button>

              <button type="button" id="cancelaEdit" data-dismiss="modal" class="btn btn-outline-secondary">
                <i class="fa fa-check"></i> Fechar
              </button>
	        </div>
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
