<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Producao Os Edit</h3>
            </div>
			<?php echo form_open('producao_os/edit/'.$producao_os['id_producao']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="material_id" class="control-label"><span class="text-danger">*</span>Material</label>
						<div class="form-group">
							<select name="material_id" class="form-control">
								<option value="">select material</option>
								<?php 
								foreach($all_material as $material)
								{
									$selected = ($material['id_material'] == $producao_os['material_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$material['id_material'].'" '.$selected.'>'.$material['nome_material'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('material_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="os_id" class="control-label"><span class="text-danger">*</span>Os</label>
						<div class="form-group">
							<select name="os_id" class="form-control">
								<option value="">select os</option>
								<?php 
								foreach($all_os as $os)
								{
									$selected = ($os['id_os'] == $producao_os['os_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$os['id_os'].'" '.$selected.'>'.$os['id_os'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('os_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="unidade_medida_id" class="control-label"><span class="text-danger">*</span>Unidades Medida</label>
						<div class="form-group">
							<select name="unidade_medida_id" class="form-control">
								<option value="">select unidades_medida</option>
								<?php 
								foreach($all_unidades_medida as $unidades_medida)
								{
									$selected = ($unidades_medida['id_unidade_medida'] == $producao_os['unidade_medida_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$unidades_medida['id_unidade_medida'].'" '.$selected.'>'.$unidades_medida['simbolo_unidade'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('unidade_medida_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="acabamento_id" class="control-label"><span class="text-danger">*</span>Acabamento</label>
						<div class="form-group">
							<select name="acabamento_id" class="form-control">
								<option value="">select acabamento</option>
								<?php 
								foreach($all_acabamento as $acabamento)
								{
									$selected = ($acabamento['id_acabamento'] == $producao_os['acabamento_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$acabamento['id_acabamento'].'" '.$selected.'>'.$acabamento['nome_acabamento'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('acabamento_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="descricao_producao" class="control-label">Descricao Producao</label>
						<div class="form-group">
							<input type="text" name="descricao_producao" value="<?php echo ($this->input->post('descricao_producao') ? $this->input->post('descricao_producao') : $producao_os['descricao_producao']); ?>" class="form-control" id="descricao_producao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_producao" class="control-label">Tipo Producao</label>
						<div class="form-group">
							<input type="text" name="tipo_producao" value="<?php echo ($this->input->post('tipo_producao') ? $this->input->post('tipo_producao') : $producao_os['tipo_producao']); ?>" class="form-control" id="tipo_producao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="medida_producao" class="control-label">Medida Producao</label>
						<div class="form-group">
							<input type="text" name="medida_producao" value="<?php echo ($this->input->post('medida_producao') ? $this->input->post('medida_producao') : $producao_os['medida_producao']); ?>" class="form-control" id="medida_producao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="quantidade_producao" class="control-label"><span class="text-danger">*</span>Quantidade Producao</label>
						<div class="form-group">
							<input type="text" name="quantidade_producao" value="<?php echo ($this->input->post('quantidade_producao') ? $this->input->post('quantidade_producao') : $producao_os['quantidade_producao']); ?>" class="form-control" id="quantidade_producao" />
							<span class="text-danger"><?php echo form_error('quantidade_producao');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status_producao" class="control-label">Status Producao</label>
						<div class="form-group">
							<input type="text" name="status_producao" value="<?php echo ($this->input->post('status_producao') ? $this->input->post('status_producao') : $producao_os['status_producao']); ?>" class="form-control" id="status_producao" />
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