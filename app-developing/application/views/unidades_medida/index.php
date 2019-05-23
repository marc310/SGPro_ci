<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Unidades Medida Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('unidades_medida/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Unidade Medida</th>
						<th>Simbolo Unidade</th>
						<th>Nome Unidade</th>
						<th>Grandeza</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($unidades_medida as $u){ ?>
                    <tr>
						<td><?php echo $u['id_unidade_medida']; ?></td>
						<td><?php echo $u['simbolo_unidade']; ?></td>
						<td><?php echo $u['nome_unidade']; ?></td>
						<td><?php echo $u['grandeza']; ?></td>
						<td>
                            <a href="<?php echo site_url('unidades_medida/edit/'.$u['id_unidade_medida']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('unidades_medida/remove/'.$u['id_unidade_medida']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
