<?php echo form_open('enderecos_cliente/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="endereco_id_cliente" class="col-md-4 control-label">Cliente</label>
		<div class="col-md-8">
			<select id="endereco_id_cliente" name="endereco_id_cliente" class="form-control">
				<option value="">select cliente</option>
				<?php
				foreach($all_clientes as $cliente)
				{
					$selected = ($cliente['id_cliente'] == $this->input->post('endereco_id_cliente')) ? ' selected="selected"' : "";

					echo '<option value="'.$cliente['id_cliente'].'" '.$selected.'>'.$cliente['nome_cliente'].'</option>';
				}
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="cliente_id_endereco" class="col-md-4 control-label">Endereco</label>
		<div class="col-md-8">
			<select id="cliente_id_endereco" name="cliente_id_endereco" class="form-control">
				<option value="">select endereco</option>
				<?php
				foreach($all_enderecos as $endereco)
				{
					$selected = ($endereco['id_endereco'] == $this->input->post('cliente_id_endereco')) ? ' selected="selected"' : "";

					echo '<option value="'.$endereco['id_endereco'].'" '.$selected.'>'.$endereco['id_endereco'].'</option>';
				}
				?>
			</select>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
