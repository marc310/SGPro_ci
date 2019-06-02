<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Endereco Edit</h3>
            </div>

            <?php $this->load->view('enderecos_cliente/add'); ?>

			<?php echo form_open('endereco/edit/'.$endereco['id_endereco']); ?>
			<div class="box-body">
				<div class="row clearfix">

          <!-- IDENTIFICADORES DE ENDERECO -->
          <div class="col-md-12" id="identificadorEnderecos" hidden>

            <div class="col-md-6">
  						<label for="id_endereco" class="control-label"><span class="text-danger">*</span>ID ENDEREÇO</label>
  						<div class="form-group">
  							<input type="text" name="id_endereco" value="<?php echo ($this->input->post('id_endereco') ? $this->input->post('id_endereco') : $endereco['id_endereco']); ?>" class="form-control" id="id_endereco" />
  							<span class="text-danger"><?php echo form_error('id_endereco');?></span>
  						</div>
  					</div>

            <div class="col-md-6">
  						<label for="id_referencia" class="control-label"><span class="text-danger">*</span>ID CLIENTE</label>
  						<div class="form-group">
  							<input type="text" name="id_referencia" value="<?php echo ($this->input->post('id_referencia') ? $this->input->post('id_referencia') : $endereco['id_referencia']); ?>" class="form-control" id="id_referencia" />
  							<span class="text-danger"><?php echo form_error('id_referencia');?></span>
  						</div>
  					</div>

            <div class="col-md-6">
  						<label for="grupo" class="control-label"><span class="text-danger">*</span>ID GRUPO</label>
  						<div class="form-group">
  							<input type="text" name="grupo" value="<?php echo ($this->input->post('grupo') ? $this->input->post('grupo') : $endereco['grupo']); ?>" class="form-control" id="grupo" />
  							<span class="text-danger"><?php echo form_error('grupo');?></span>
  						</div>
  					</div>

          </div>
          <!-- IDENTIFICADORES DE ENDERECO -->


					<div class="col-md-6">
						<label for="rua" class="control-label"><span class="text-danger">*</span>Rua</label>
						<div class="form-group">
							<input type="text" name="rua" value="<?php echo ($this->input->post('rua') ? $this->input->post('rua') : $endereco['rua']); ?>" class="form-control" id="rua" />
							<span class="text-danger"><?php echo form_error('rua');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bairro" class="control-label"><span class="text-danger">*</span>Bairro</label>
						<div class="form-group">
							<input type="text" name="bairro" value="<?php echo ($this->input->post('bairro') ? $this->input->post('bairro') : $endereco['bairro']); ?>" class="form-control" id="bairro" />
							<span class="text-danger"><?php echo form_error('bairro');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cidade" class="control-label"><span class="text-danger">*</span>Cidade</label>
						<div class="form-group">
							<input type="text" name="cidade" value="<?php echo ($this->input->post('cidade') ? $this->input->post('cidade') : $endereco['cidade']); ?>" class="form-control" id="cidade" />
							<span class="text-danger"><?php echo form_error('cidade');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="complemento" class="control-label">complemento</label>
						<div class="form-group">
							<input type="text" name="complemento" value="<?php echo ($this->input->post('complemento') ? $this->input->post('complemento') : $endereco['complemento']); ?>" class="form-control" id="complemento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="numero" class="control-label">Numero</label>
						<div class="form-group">
							<input type="text" name="numero" value="<?php echo ($this->input->post('numero') ? $this->input->post('numero') : $endereco['numero']); ?>" class="form-control" id="numero" />
							<span class="text-danger"><?php echo form_error('numero');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="uf" class="control-label"><span class="text-danger">*</span>Uf</label>
						<div class="form-group">
							<input type="text" name="uf" value="<?php echo ($this->input->post('uf') ? $this->input->post('uf') : $endereco['uf']); ?>" class="form-control" id="uf" />
							<span class="text-danger"><?php echo form_error('uf');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cep" class="control-label">Cep</label>
						<div class="form-group">
							<input type="text" name="cep" value="<?php echo ($this->input->post('cep') ? $this->input->post('cep') : $endereco['cep']); ?>" class="form-control" id="cep" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

	        </div>
			<?php echo form_close(); ?>
		</div>
    </div>
</div>


<script>

$(document).ready(function(){

var idCliente = document.getElementById("endereco_id_cliente"); //select cliente
var idClienteRef = document.getElementById("id_referencia").value; //id do cliente referenciado
var idEndereco = document.getElementById("cliente_id_endereco"); //select endereco cliente
var idEnderecoRef = document.getElementById("id_endereco").value; //id do endereco referenciado

idEndereco.value = idEnderecoRef;
idCliente.value = idClienteRef;



});

</script>
