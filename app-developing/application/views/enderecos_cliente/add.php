
	<div class="form-group">
		<label for="cliente_id" class="col-md-4 control-label"><span class="text-danger">*</span>Cliente</label>
		<div class="col-md-8">
			<select name="cliente_id" class="form-control">
				<option value="">select cliente</option>
				<?php
				foreach($all_clientes as $cliente)
				{
					$selected = ($cliente['id_cliente'] == $this->input->post('cliente_id')) ? ' selected="selected"' : "";

					echo '<option value="'.$cliente['id_cliente'].'" '.$selected.'>'.$cliente['nome_cliente'].'</option>';
				}
				?>
			</select>
			<span class="text-danger"><?php echo form_error('cliente_id');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="rua" class="col-md-4 control-label"><span class="text-danger">*</span>Rua</label>
		<div class="col-md-8">
			<input type="text" name="rua" value="<?php echo $this->input->post('rua'); ?>" class="form-control" id="rua" />
			<span class="text-danger"><?php echo form_error('rua');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="bairro" class="col-md-4 control-label">Bairro</label>
		<div class="col-md-8">
			<input type="text" name="bairro" value="<?php echo $this->input->post('bairro'); ?>" class="form-control" id="bairro" />
		</div>
	</div>
	<div class="form-group">
		<label for="cidade" class="col-md-4 control-label">Cidade</label>
		<div class="col-md-8">
			<input type="text" name="cidade" value="<?php echo $this->input->post('cidade'); ?>" class="form-control" id="cidade" />
		</div>
	</div>
	<div class="form-group">
		<label for="complemento" class="col-md-4 control-label">Complemento</label>
		<div class="col-md-8">
			<input type="text" name="complemento" value="<?php echo $this->input->post('complemento'); ?>" class="form-control" id="complemento" />
		</div>
	</div>
	<div class="form-group">
		<label for="numero" class="col-md-4 control-label">Numero</label>
		<div class="col-md-8">
			<input type="text" name="numero" value="<?php echo $this->input->post('numero'); ?>" class="form-control" id="numero" />
			<span class="text-danger"><?php echo form_error('numero');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="uf" class="col-md-4 control-label"><span class="text-danger">*</span>Uf</label>
		<div class="col-md-8">
			<select name="uf" class="form-control" id="uf">
          <option value="">Selecione o Estado</option>
        <?php
        require 'resources/php/array-uf_values.php';
        foreach($uf_values as $value => $display_text)
        {
          $selected = ($value == $this->input->post('uf')) ? ' selected="selected"' : "";
          echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
        }
        ?>
      </select>
			<span class="text-danger"><?php echo form_error('uf');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="cep" class="col-md-4 control-label">Cep</label>
		<div class="col-md-8">
			<input type="text" name="cep" value="<?php echo $this->input->post('cep'); ?>" class="form-control" id="cep" />
			<span class="text-danger"><?php echo form_error('cep');?></span>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
