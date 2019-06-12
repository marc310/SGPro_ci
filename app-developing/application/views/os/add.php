<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Adicionando Ordem de Serviço...</h3>
            </div>
            <?php echo form_open('os/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="cliente_id" class="control-label"><span class="text-danger">*</span>Cliente</label>
						<div class="form-group">
							<select name="cliente_id" class="form-control">
								<option value="">Selecione o Cliente</option>
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
					<div class="col-md-6">
						<label for="tipo_os" class="control-label">Tipo Ordem</label>
						<div class="form-group">

              <select name="tipo_os" class="form-control" id="tipo_os">
                <option value="">Selecione o Tipo que deseja Cadastrar</option>
              <?php
              $tipo_os_values = array(
                '1'=>'Orçamento',
                '2'=>'Serviço',
                '3'=>'Produção',
                '4'=>'Criação',
              );

              foreach($tipo_os_values as $value => $display_text)
              {
                $selected = ($value == $this->input->post('tipo_os')) ? ' selected="selected"' : "";

                echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
              }
              ?>
              </select>

            </div>
					</div>
					<div class="col-md-6" id="divDataInicio" style="display:none">
						<label for="data_inicio" id="lblDataInicioOs" class="control-label"><span class="text-danger">*</span>Data Inicio</label>
						<div class="form-group">
							<input type="text" name="data_inicio" value="<?php echo $this->input->post('data_inicio'); ?>" class="has-datetimepicker form-control" id="data_inicio" />
							<span class="text-danger"><?php echo form_error('data_inicio');?></span>
						</div>
					</div>
					<div class="col-md-6" id="divDataFinal" style="display:none">
						<label for="data_final" class="control-label">Data Final</label>
						<div class="form-group">
							<input type="text" name="data_final" value="<?php echo $this->input->post('data_final'); ?>" class="has-datetimepicker form-control" id="data_final" />
						</div>
					</div>
					<div class="col-md-6" id="divStatusOs" style="display:none">
						<label for="status_os" class="control-label">Status Os</label>
						<div class="form-group">

              <select name="status_os" class="form-control" id="status_os">
                <option value="">Selecione o Status do Material</option>
              <?php
              $status_os_values = array(
                '1'=>'Em Produção',
                '2'=>'Em Acabamento',
                '3'=>'Aguardando',
                '4'=>'Finalizado',
                '5'=>'Cancelado',
                '6'=>'Entregue',
              );

              foreach($status_os_values as $value => $display_text)
              {
                $selected = ($value == $this->input->post('status_os')) ? ' selected="selected"' : "";

                echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
              }
              ?>
              </select>

            </div>
					</div>
					<div class="col-md-6" id="divTotalOs" style="display:none">
						<label for="total_os" class="control-label">Total Os</label>
						<div class="form-group">
							<input type="text" name="total_os" value="<?php echo $this->input->post('total_os'); ?>" class="form-control" id="total_os" />
						</div>
					</div>
					<div class="col-md-6" id="divOsFaturada" style="display:none">
						<label for="os_faturada" class="control-label">Os Faturada</label>
						<div class="form-group">
							<input type="checkbox" name="os_faturada" value="<?php echo $this->input->post('os_faturada'); ?>" class="minimal" id="os_faturada" />
						</div>
					</div>
					<div class="col-md-6" id="divDescricaoOs" style="display:none">
						<label for="descricao_os" class="control-label">Descricao Os</label>
						<div class="form-group">
							<textarea name="descricao_os" class="form-control" id="descricao_os"><?php echo $this->input->post('descricao_os'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Salvar
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>

<script src="<?php echo site_url('resources/js/codex/parts/os.js');?>"></script>
