<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Funcionario Add</h3>
            </div>
            <?php echo form_open('funcionario/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="endereco_id_funcionario" class="control-label">Endereco</label>
						<div class="form-group">
							<select name="endereco_id_funcionario" class="form-control">
								<option value="">select endereco</option>
								<?php 
								foreach($all_enderecos as $endereco)
								{
									$selected = ($endereco['id_endereco'] == $this->input->post('endereco_id_funcionario')) ? ' selected="selected"' : "";

									echo '<option value="'.$endereco['id_endereco'].'" '.$selected.'>'.$endereco['id_endereco'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nome_funcionario" class="control-label">Nome Funcionario</label>
						<div class="form-group">
							<input type="text" name="nome_funcionario" value="<?php echo $this->input->post('nome_funcionario'); ?>" class="form-control" id="nome_funcionario" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="doc_funcionario" class="control-label">Doc Funcionario</label>
						<div class="form-group">
							<input type="text" name="doc_funcionario" value="<?php echo $this->input->post('doc_funcionario'); ?>" class="form-control" id="doc_funcionario" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email_funcionario" class="control-label">Email Funcionario</label>
						<div class="form-group">
							<input type="text" name="email_funcionario" value="<?php echo $this->input->post('email_funcionario'); ?>" class="form-control" id="email_funcionario" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telefone_funcionario" class="control-label">Telefone Funcionario</label>
						<div class="form-group">
							<input type="text" name="telefone_funcionario" value="<?php echo $this->input->post('telefone_funcionario'); ?>" class="form-control" id="telefone_funcionario" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="celular_funcionario" class="control-label">Celular Funcionario</label>
						<div class="form-group">
							<input type="text" name="celular_funcionario" value="<?php echo $this->input->post('celular_funcionario'); ?>" class="form-control" id="celular_funcionario" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="data_cadastro_funcionario" class="control-label">Data Cadastro Funcionario</label>
						<div class="form-group">
							<input type="text" name="data_cadastro_funcionario" value="<?php echo $this->input->post('data_cadastro_funcionario'); ?>" class="form-control" id="data_cadastro_funcionario" />
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