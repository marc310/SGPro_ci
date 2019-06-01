<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Enderecos Cliente Edit</h3>
            </div>
			<?php echo form_open('enderecos_cliente/edit/'.$enderecos_cliente['id_endereco_cliente']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="endereco_id_cliente" class="control-label">Endereco Id Cliente</label>
						<div class="form-group">
							<input type="text" name="endereco_id_cliente" value="<?php echo ($this->input->post('endereco_id_cliente') ? $this->input->post('endereco_id_cliente') : $enderecos_cliente['endereco_id_cliente']); ?>" class="form-control" id="endereco_id_cliente" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cliente_id_endereco" class="control-label">Cliente Id Endereco</label>
						<div class="form-group">
							<input type="text" name="cliente_id_endereco" value="<?php echo ($this->input->post('cliente_id_endereco') ? $this->input->post('cliente_id_endereco') : $enderecos_cliente['cliente_id_endereco']); ?>" class="form-control" id="cliente_id_endereco" />
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