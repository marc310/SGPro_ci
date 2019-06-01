<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Endereco Rede Social Cliente Edit</h3>
            </div>
			<?php echo form_open('endereco_rede_social_cliente/edit/'.$endereco_rede_social_cliente['id_endereco_redesocial']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="cliente_id" class="control-label">Cliente</label>
						<div class="form-group">
							<select name="cliente_id" class="form-control">
								<option value="">select cliente</option>
								<?php 
								foreach($all_clientes as $cliente)
								{
									$selected = ($cliente['id_cliente'] == $endereco_rede_social_cliente['cliente_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$cliente['id_cliente'].'" '.$selected.'>'.$cliente['nome_cliente'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="redesocial_id" class="control-label">Redes Sociais</label>
						<div class="form-group">
							<select name="redesocial_id" class="form-control">
								<option value="">select redes_sociais</option>
								<?php 
								foreach($all_redes_sociais as $redes_sociais)
								{
									$selected = ($redes_sociais['id_redesocial'] == $endereco_rede_social_cliente['redesocial_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$redes_sociais['id_redesocial'].'" '.$selected.'>'.$redes_sociais['nome_redesocial'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cliente_redesocial" class="control-label">Cliente Redesocial</label>
						<div class="form-group">
							<input type="text" name="cliente_redesocial" value="<?php echo ($this->input->post('cliente_redesocial') ? $this->input->post('cliente_redesocial') : $endereco_rede_social_cliente['cliente_redesocial']); ?>" class="form-control" id="cliente_redesocial" />
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