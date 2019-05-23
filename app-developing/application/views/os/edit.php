<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Os Edit</h3>
            </div>
			<?php echo form_open('os/edit/'.$os['id_os']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="cliente_id" class="control-label"><span class="text-danger">*</span>Cliente</label>
						<div class="form-group">
							<select name="cliente_id" class="form-control">
								<option value="">select cliente</option>
								<?php 
								foreach($all_clientes as $cliente)
								{
									$selected = ($cliente['id_cliente'] == $os['cliente_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$cliente['id_cliente'].'" '.$selected.'>'.$cliente['nome_cliente'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('cliente_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_os" class="control-label">Tipo Os</label>
						<div class="form-group">
							<input type="text" name="tipo_os" value="<?php echo ($this->input->post('tipo_os') ? $this->input->post('tipo_os') : $os['tipo_os']); ?>" class="form-control" id="tipo_os" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="data_inicio" class="control-label"><span class="text-danger">*</span>Data Inicio</label>
						<div class="form-group">
							<input type="text" name="data_inicio" value="<?php echo ($this->input->post('data_inicio') ? $this->input->post('data_inicio') : $os['data_inicio']); ?>" class="form-control" id="data_inicio" />
							<span class="text-danger"><?php echo form_error('data_inicio');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="data_final" class="control-label">Data Final</label>
						<div class="form-group">
							<input type="text" name="data_final" value="<?php echo ($this->input->post('data_final') ? $this->input->post('data_final') : $os['data_final']); ?>" class="form-control" id="data_final" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status_os" class="control-label">Status Os</label>
						<div class="form-group">
							<input type="text" name="status_os" value="<?php echo ($this->input->post('status_os') ? $this->input->post('status_os') : $os['status_os']); ?>" class="form-control" id="status_os" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="total_os" class="control-label">Total Os</label>
						<div class="form-group">
							<input type="text" name="total_os" value="<?php echo ($this->input->post('total_os') ? $this->input->post('total_os') : $os['total_os']); ?>" class="form-control" id="total_os" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="os_faturada" class="control-label">Os Faturada</label>
						<div class="form-group">
							<input type="text" name="os_faturada" value="<?php echo ($this->input->post('os_faturada') ? $this->input->post('os_faturada') : $os['os_faturada']); ?>" class="form-control" id="os_faturada" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descricao_os" class="control-label">Descricao Os</label>
						<div class="form-group">
							<textarea name="descricao_os" class="form-control" id="descricao_os"><?php echo ($this->input->post('descricao_os') ? $this->input->post('descricao_os') : $os['descricao_os']); ?></textarea>
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