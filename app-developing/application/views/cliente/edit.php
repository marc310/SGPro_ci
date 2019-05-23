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
						<label for="endereco_id_cliente" class="control-label">Endereco</label>
						<div class="form-group">
							<select name="endereco_id_cliente" class="form-control">
								<option value="">select endereco</option>
								<?php 
								foreach($all_enderecos as $endereco)
								{
									$selected = ($endereco['id_endereco'] == $cliente['endereco_id_cliente']) ? ' selected="selected"' : "";

									echo '<option value="'.$endereco['id_endereco'].'" '.$selected.'>'.$endereco['id_endereco'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nome_cliente" class="control-label"><span class="text-danger">*</span>Nome Cliente</label>
						<div class="form-group">
							<input type="text" name="nome_cliente" value="<?php echo ($this->input->post('nome_cliente') ? $this->input->post('nome_cliente') : $cliente['nome_cliente']); ?>" class="form-control" id="nome_cliente" />
							<span class="text-danger"><?php echo form_error('nome_cliente');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="sexo" class="control-label">Sexo</label>
						<div class="form-group">
							<input type="text" name="sexo" value="<?php echo ($this->input->post('sexo') ? $this->input->post('sexo') : $cliente['sexo']); ?>" class="form-control" id="sexo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_pessoa" class="control-label">Tipo Pessoa</label>
						<div class="form-group">
							<input type="text" name="tipo_pessoa" value="<?php echo ($this->input->post('tipo_pessoa') ? $this->input->post('tipo_pessoa') : $cliente['tipo_pessoa']); ?>" class="form-control" id="tipo_pessoa" />
						</div>
					</div>
					<div class="col-md-6">
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
						<label for="data_cadastro_cliente" class="control-label">Data Cadastro Cliente</label>
						<div class="form-group">
							<input type="text" name="data_cadastro_cliente" value="<?php echo ($this->input->post('data_cadastro_cliente') ? $this->input->post('data_cadastro_cliente') : $cliente['data_cadastro_cliente']); ?>" class="form-control" id="data_cadastro_cliente" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>