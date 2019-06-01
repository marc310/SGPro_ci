<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Enderecos Cliente Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('enderecos_cliente/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Endereco Cliente</th>
						<th>Endereco Id Cliente</th>
						<th>Cliente Id Endereco</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($enderecos_cliente as $e){ ?>
                    <tr>
						<td><?php echo $e['id_endereco_cliente']; ?></td>
						<td><?php echo $e['endereco_id_cliente']; ?></td>
						<td><?php echo $e['cliente_id_endereco']; ?></td>
						<td>
                            <a href="<?php echo site_url('enderecos_cliente/edit/'.$e['id_endereco_cliente']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('enderecos_cliente/remove/'.$e['id_endereco_cliente']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
