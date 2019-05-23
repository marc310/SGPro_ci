<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fornecedor Add</h3>
            </div>
            <?php echo form_open('fornecedor/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="endereco_id_fornecedor" class="control-label">Endereco</label>
						<div class="form-group">
							<select name="endereco_id_fornecedor" class="form-control">
								<option value="">select endereco</option>
								<?php 
								foreach($all_enderecos as $endereco)
								{
									$selected = ($endereco['id_endereco'] == $this->input->post('endereco_id_fornecedor')) ? ' selected="selected"' : "";

									echo '<option value="'.$endereco['id_endereco'].'" '.$selected.'>'.$endereco['id_endereco'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nome_fornecedor" class="control-label">Nome Fornecedor</label>
						<div class="form-group">
							<input type="text" name="nome_fornecedor" value="<?php echo $this->input->post('nome_fornecedor'); ?>" class="form-control" id="nome_fornecedor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cnpj_fornecedor" class="control-label">Cnpj Fornecedor</label>
						<div class="form-group">
							<input type="text" name="cnpj_fornecedor" value="<?php echo $this->input->post('cnpj_fornecedor'); ?>" class="form-control" id="cnpj_fornecedor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="website_fornecedor" class="control-label">Website Fornecedor</label>
						<div class="form-group">
							<input type="text" name="website_fornecedor" value="<?php echo $this->input->post('website_fornecedor'); ?>" class="form-control" id="website_fornecedor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email_fornecedor" class="control-label">Email Fornecedor</label>
						<div class="form-group">
							<input type="text" name="email_fornecedor" value="<?php echo $this->input->post('email_fornecedor'); ?>" class="form-control" id="email_fornecedor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telefone_fornecedor" class="control-label">Telefone Fornecedor</label>
						<div class="form-group">
							<input type="text" name="telefone_fornecedor" value="<?php echo $this->input->post('telefone_fornecedor'); ?>" class="form-control" id="telefone_fornecedor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="url_logo_fornecedor" class="control-label">Url Logo Fornecedor</label>
						<div class="form-group">
							<input type="text" name="url_logo_fornecedor" value="<?php echo $this->input->post('url_logo_fornecedor'); ?>" class="form-control" id="url_logo_fornecedor" />
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