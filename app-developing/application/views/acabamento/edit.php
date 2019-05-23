<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Acabamento Edit</h3>
            </div>
			<?php echo form_open('acabamento/edit/'.$acabamento['id_acabamento']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="descricao_acabamento" class="control-label">Descricao Acabamento</label>
						<div class="form-group">
							<input type="text" name="descricao_acabamento" value="<?php echo ($this->input->post('descricao_acabamento') ? $this->input->post('descricao_acabamento') : $acabamento['descricao_acabamento']); ?>" class="form-control" id="descricao_acabamento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="preco_acabamento" class="control-label">Preco Acabamento</label>
						<div class="form-group">
							<input type="text" name="preco_acabamento" value="<?php echo ($this->input->post('preco_acabamento') ? $this->input->post('preco_acabamento') : $acabamento['preco_acabamento']); ?>" class="form-control" id="preco_acabamento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nome_acabamento" class="control-label">Nome Acabamento</label>
						<div class="form-group">
							<input type="text" name="nome_acabamento" value="<?php echo ($this->input->post('nome_acabamento') ? $this->input->post('nome_acabamento') : $acabamento['nome_acabamento']); ?>" class="form-control" id="nome_acabamento" />
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