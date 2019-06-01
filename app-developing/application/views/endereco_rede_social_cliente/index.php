<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Endereco Rede Social Cliente Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('endereco_rede_social_cliente/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Endereco Redesocial</th>
						<th>Cliente Id</th>
						<th>Redesocial Id</th>
						<th>Cliente Redesocial</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($endereco_rede_social_cliente as $e){ ?>
                    <tr>
						<td><?php echo $e['id_endereco_redesocial']; ?></td>
						<td><?php echo $e['cliente_id']; ?></td>
						<td><?php echo $e['redesocial_id']; ?></td>
						<td><?php echo $e['cliente_redesocial']; ?></td>
						<td>
                            <a href="<?php echo site_url('endereco_rede_social_cliente/edit/'.$e['id_endereco_redesocial']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('endereco_rede_social_cliente/remove/'.$e['id_endereco_redesocial']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
