<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Servico Edit</h3>
            </div>
			<?php echo form_open('servico/edit/'.$servico['id_servicos']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nome_servico" class="control-label"><span class="text-danger">*</span>Nome Servico</label>
						<div class="form-group">
							<input type="text" name="nome_servico" value="<?php echo ($this->input->post('nome_servico') ? $this->input->post('nome_servico') : $servico['nome_servico']); ?>" class="form-control" id="nome_servico" />
							<span class="text-danger"><?php echo form_error('nome_servico');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="descricao_servico" class="control-label">Descricao Servico</label>
						<div class="form-group">
							<input type="text" name="descricao_servico" value="<?php echo ($this->input->post('descricao_servico') ? $this->input->post('descricao_servico') : $servico['descricao_servico']); ?>" class="form-control" id="descricao_servico" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="preco_servico" class="control-label">Preco Servico</label>
						<div class="form-group">
							<input type="text" name="preco_servico" value="<?php echo ($this->input->post('preco_servico') ? $this->input->post('preco_servico') : $servico['preco_servico']); ?>" class="form-control" id="preco_servico" />
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