<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Redes Sociais Add</h3>
            </div>
            <?php echo form_open('redes_sociais/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nome_redesocial" class="control-label">Nome Redesocial</label>
						<div class="form-group">
							<input type="text" name="nome_redesocial" value="<?php echo $this->input->post('nome_redesocial'); ?>" class="form-control" id="nome_redesocial" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="url_base_redesocial" class="control-label">Url Base Redesocial</label>
						<div class="form-group">
							<input type="text" name="url_base_redesocial" value="<?php echo $this->input->post('url_base_redesocial'); ?>" class="form-control" id="url_base_redesocial" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tag_redesocial" class="control-label">Tag Redesocial</label>
						<div class="form-group">
							<input type="text" name="tag_redesocial" value="<?php echo $this->input->post('tag_redesocial'); ?>" class="form-control" id="tag_redesocial" />
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