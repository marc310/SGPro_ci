<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Anexos Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('anexo/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Anexos</th>
						<th>Anexo</th>
						<th>Thumb</th>
						<th>Url</th>
						<th>Caminho Anexo</th>
						<th>Producao Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($anexos as $a){ ?>
                    <tr>
						<td><?php echo $a['id_anexos']; ?></td>
						<td><?php echo $a['anexo']; ?></td>
						<td><?php echo $a['thumb']; ?></td>
						<td><?php echo $a['url']; ?></td>
						<td><?php echo $a['caminho_anexo']; ?></td>
						<td><?php echo $a['producao_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('anexo/edit/'.$a['id_anexos']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('anexo/remove/'.$a['id_anexos']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
