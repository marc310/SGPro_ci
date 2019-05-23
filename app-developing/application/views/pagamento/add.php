<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pagamento Add</h3>
            </div>
            <?php echo form_open('pagamento/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="tipo_pagamento_lancamento" class="control-label">Tipos Pagamento</label>
						<div class="form-group">
							<select name="tipo_pagamento_lancamento" class="form-control">
								<option value="">select tipos_pagamento</option>
								<?php 
								foreach($all_tipos_pagamento as $tipos_pagamento)
								{
									$selected = ($tipos_pagamento['id_tipo_pagamento'] == $this->input->post('tipo_pagamento_lancamento')) ? ' selected="selected"' : "";

									echo '<option value="'.$tipos_pagamento['id_tipo_pagamento'].'" '.$selected.'>'.$tipos_pagamento['nome_tipo_pagamento'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_beneficiario" class="control-label">Tipo Beneficiario</label>
						<div class="form-group">
							<input type="text" name="tipo_beneficiario" value="<?php echo $this->input->post('tipo_beneficiario'); ?>" class="form-control" id="tipo_beneficiario" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="beneficiario_lancamento" class="control-label">Beneficiario Lancamento</label>
						<div class="form-group">
							<input type="text" name="beneficiario_lancamento" value="<?php echo $this->input->post('beneficiario_lancamento'); ?>" class="form-control" id="beneficiario_lancamento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descricao_lancamento" class="control-label">Descricao Lancamento</label>
						<div class="form-group">
							<input type="text" name="descricao_lancamento" value="<?php echo $this->input->post('descricao_lancamento'); ?>" class="form-control" id="descricao_lancamento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="total_lancamento" class="control-label">Total Lancamento</label>
						<div class="form-group">
							<input type="text" name="total_lancamento" value="<?php echo $this->input->post('total_lancamento'); ?>" class="form-control" id="total_lancamento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="data_lancamento" class="control-label">Data Lancamento</label>
						<div class="form-group">
							<input type="text" name="data_lancamento" value="<?php echo $this->input->post('data_lancamento'); ?>" class="form-control" id="data_lancamento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="data_vencimento_lancamento" class="control-label">Data Vencimento Lancamento</label>
						<div class="form-group">
							<input type="text" name="data_vencimento_lancamento" value="<?php echo $this->input->post('data_vencimento_lancamento'); ?>" class="form-control" id="data_vencimento_lancamento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lancamento_faturado" class="control-label">Lancamento Faturado</label>
						<div class="form-group">
							<input type="text" name="lancamento_faturado" value="<?php echo $this->input->post('lancamento_faturado'); ?>" class="form-control" id="lancamento_faturado" />
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