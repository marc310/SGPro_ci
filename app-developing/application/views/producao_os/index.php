<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Producao Os Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('producao_os/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Producao</th>
						<th>Material Id</th>
						<th>Os Id</th>
						<th>Unidade Medida Id</th>
						<th>Acabamento Id</th>
						<th>Descricao Producao</th>
						<th>Tipo Producao</th>
						<th>Medida Producao</th>
						<th>Quantidade Producao</th>
						<th>Status Producao</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($producao_os as $p){ ?>
                    <tr>
						<td><?php echo $p['id_producao']; ?></td>
						<td><?php echo $p['material_id']; ?></td>
						<td><?php echo $p['os_id']; ?></td>
						<td><?php echo $p['unidade_medida_id']; ?></td>
						<td><?php echo $p['acabamento_id']; ?></td>
						<td><?php echo $p['descricao_producao']; ?></td>
						<td><?php echo $p['tipo_producao']; ?></td>
						<td><?php echo $p['medida_producao']; ?></td>
						<td><?php echo $p['quantidade_producao']; ?></td>
						<td><?php echo $p['status_producao']; ?></td>
						<td>
                            <a href="<?php echo site_url('producao_os/edit/'.$p['id_producao']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('producao_os/remove/'.$p['id_producao']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
