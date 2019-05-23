<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Endereco Edit</h3>
            </div>
			<?php echo form_open('endereco/edit/'.$endereco['id_endereco']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="rua" class="control-label"><span class="text-danger">*</span>Rua</label>
						<div class="form-group">
							<input type="text" name="rua" value="<?php echo ($this->input->post('rua') ? $this->input->post('rua') : $endereco['rua']); ?>" class="form-control" id="rua" />
							<span class="text-danger"><?php echo form_error('rua');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bairro" class="control-label"><span class="text-danger">*</span>Bairro</label>
						<div class="form-group">
							<input type="text" name="bairro" value="<?php echo ($this->input->post('bairro') ? $this->input->post('bairro') : $endereco['bairro']); ?>" class="form-control" id="bairro" />
							<span class="text-danger"><?php echo form_error('bairro');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cidade" class="control-label"><span class="text-danger">*</span>Cidade</label>
						<div class="form-group">
							<input type="text" name="cidade" value="<?php echo ($this->input->post('cidade') ? $this->input->post('cidade') : $endereco['cidade']); ?>" class="form-control" id="cidade" />
							<span class="text-danger"><?php echo form_error('cidade');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="referencia" class="control-label">Referencia</label>
						<div class="form-group">
							<input type="text" name="referencia" value="<?php echo ($this->input->post('referencia') ? $this->input->post('referencia') : $endereco['referencia']); ?>" class="form-control" id="referencia" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="numero" class="control-label">Numero</label>
						<div class="form-group">
							<input type="text" name="numero" value="<?php echo ($this->input->post('numero') ? $this->input->post('numero') : $endereco['numero']); ?>" class="form-control" id="numero" />
							<span class="text-danger"><?php echo form_error('numero');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="uf" class="control-label"><span class="text-danger">*</span>Uf</label>
						<div class="form-group">
							<input type="text" name="uf" value="<?php echo ($this->input->post('uf') ? $this->input->post('uf') : $endereco['uf']); ?>" class="form-control" id="uf" />
							<span class="text-danger"><?php echo form_error('uf');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cep" class="control-label">Cep</label>
						<div class="form-group">
							<input type="text" name="cep" value="<?php echo ($this->input->post('cep') ? $this->input->post('cep') : $endereco['cep']); ?>" class="form-control" id="cep" />
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