<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Dados Empresa Edit</h3>
            </div>
			<?php echo form_open('dados_empresa/edit/'.$dados_empresa['id_emissor']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="endereco_id_emissor" class="control-label">Endereco</label>
						<div class="form-group">
							<select name="endereco_id_emissor" class="form-control">
								<option value="">select endereco</option>
								<?php 
								foreach($all_enderecos as $endereco)
								{
									$selected = ($endereco['id_endereco'] == $dados_empresa['endereco_id_emissor']) ? ' selected="selected"' : "";

									echo '<option value="'.$endereco['id_endereco'].'" '.$selected.'>'.$endereco['id_endereco'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nome_emissor" class="control-label">Nome Emissor</label>
						<div class="form-group">
							<input type="text" name="nome_emissor" value="<?php echo ($this->input->post('nome_emissor') ? $this->input->post('nome_emissor') : $dados_empresa['nome_emissor']); ?>" class="form-control" id="nome_emissor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cnpj_emissor" class="control-label">Cnpj Emissor</label>
						<div class="form-group">
							<input type="text" name="cnpj_emissor" value="<?php echo ($this->input->post('cnpj_emissor') ? $this->input->post('cnpj_emissor') : $dados_empresa['cnpj_emissor']); ?>" class="form-control" id="cnpj_emissor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="website_emissor" class="control-label">Website Emissor</label>
						<div class="form-group">
							<input type="text" name="website_emissor" value="<?php echo ($this->input->post('website_emissor') ? $this->input->post('website_emissor') : $dados_empresa['website_emissor']); ?>" class="form-control" id="website_emissor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email_emissor" class="control-label">Email Emissor</label>
						<div class="form-group">
							<input type="text" name="email_emissor" value="<?php echo ($this->input->post('email_emissor') ? $this->input->post('email_emissor') : $dados_empresa['email_emissor']); ?>" class="form-control" id="email_emissor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telefone_emissor" class="control-label">Telefone Emissor</label>
						<div class="form-group">
							<input type="text" name="telefone_emissor" value="<?php echo ($this->input->post('telefone_emissor') ? $this->input->post('telefone_emissor') : $dados_empresa['telefone_emissor']); ?>" class="form-control" id="telefone_emissor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="url_logo" class="control-label">Url Logo</label>
						<div class="form-group">
							<input type="text" name="url_logo" value="<?php echo ($this->input->post('url_logo') ? $this->input->post('url_logo') : $dados_empresa['url_logo']); ?>" class="form-control" id="url_logo" />
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