<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tipos Pagamento Add</h3>
            </div>
            <?php echo form_open('tipos_pagamento/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nome_tipo_pagamento" class="control-label">Nome Tipo Pagamento</label>
						<div class="form-group">
							<input type="text" name="nome_tipo_pagamento" value="<?php echo $this->input->post('nome_tipo_pagamento'); ?>" class="form-control" id="nome_tipo_pagamento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descricao_tipo_pagamento" class="control-label">Descricao Tipo Pagamento</label>
						<div class="form-group">
							<input type="text" name="descricao_tipo_pagamento" value="<?php echo $this->input->post('descricao_tipo_pagamento'); ?>" class="form-control" id="descricao_tipo_pagamento" />
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