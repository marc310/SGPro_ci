<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Unidades Medida Add</h3>
            </div>
            <?php echo form_open('unidades_medida/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="simbolo_unidade" class="control-label">Simbolo Unidade</label>
						<div class="form-group">
							<input type="text" name="simbolo_unidade" value="<?php echo $this->input->post('simbolo_unidade'); ?>" class="form-control" id="simbolo_unidade" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nome_unidade" class="control-label">Nome Unidade</label>
						<div class="form-group">
							<input type="text" name="nome_unidade" value="<?php echo $this->input->post('nome_unidade'); ?>" class="form-control" id="nome_unidade" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="grandeza" class="control-label">Grandeza</label>
						<div class="form-group">
							<input type="text" name="grandeza" value="<?php echo $this->input->post('grandeza'); ?>" class="form-control" id="grandeza" />
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