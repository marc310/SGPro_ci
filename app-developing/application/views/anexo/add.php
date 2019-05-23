<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Anexo Add</h3>
            </div>
            <?php echo form_open('anexo/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="anexo" class="control-label">Anexo</label>
						<div class="form-group">
							<input type="text" name="anexo" value="<?php echo $this->input->post('anexo'); ?>" class="form-control" id="anexo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="thumb" class="control-label">Thumb</label>
						<div class="form-group">
							<input type="text" name="thumb" value="<?php echo $this->input->post('thumb'); ?>" class="form-control" id="thumb" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="url" class="control-label">Url</label>
						<div class="form-group">
							<input type="text" name="url" value="<?php echo $this->input->post('url'); ?>" class="form-control" id="url" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="caminho_anexo" class="control-label">Caminho Anexo</label>
						<div class="form-group">
							<input type="text" name="caminho_anexo" value="<?php echo $this->input->post('caminho_anexo'); ?>" class="form-control" id="caminho_anexo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="producao_id" class="control-label">Producao Id</label>
						<div class="form-group">
							<input type="text" name="producao_id" value="<?php echo $this->input->post('producao_id'); ?>" class="form-control" id="producao_id" />
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