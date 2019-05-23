<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Material Edit</h3>
            </div>
			<?php echo form_open('material/edit/'.$material['id_material']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nome_material" class="control-label">Nome Material</label>
						<div class="form-group">
							<input type="text" name="nome_material" value="<?php echo ($this->input->post('nome_material') ? $this->input->post('nome_material') : $material['nome_material']); ?>" class="form-control" id="nome_material" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descricao_material" class="control-label">Descricao Material</label>
						<div class="form-group">
							<input type="text" name="descricao_material" value="<?php echo ($this->input->post('descricao_material') ? $this->input->post('descricao_material') : $material['descricao_material']); ?>" class="form-control" id="descricao_material" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="preco_material" class="control-label">Preco Material</label>
						<div class="form-group">
							<input type="text" name="preco_material" value="<?php echo ($this->input->post('preco_material') ? $this->input->post('preco_material') : $material['preco_material']); ?>" class="form-control" id="preco_material" />
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