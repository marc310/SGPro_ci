<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Servicos Os Add</h3>
            </div>
            <?php echo form_open('servicos_os/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="os_id" class="control-label">Os</label>
						<div class="form-group">
							<select name="os_id" class="form-control">
								<option value="">select os</option>
								<?php 
								foreach($all_os as $os)
								{
									$selected = ($os['id_os'] == $this->input->post('os_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$os['id_os'].'" '.$selected.'>'.$os['id_os'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="servicos_id" class="control-label"><span class="text-danger">*</span>Servico</label>
						<div class="form-group">
							<select name="servicos_id" class="form-control">
								<option value="">select servico</option>
								<?php 
								foreach($all_servicos as $servico)
								{
									$selected = ($servico['id_servicos'] == $this->input->post('servicos_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$servico['id_servicos'].'" '.$selected.'>'.$servico['nome_servico'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('servicos_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="sub_total_servico_os" class="control-label">Sub Total Servico Os</label>
						<div class="form-group">
							<input type="text" name="sub_total_servico_os" value="<?php echo $this->input->post('sub_total_servico_os'); ?>" class="form-control" id="sub_total_servico_os" />
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