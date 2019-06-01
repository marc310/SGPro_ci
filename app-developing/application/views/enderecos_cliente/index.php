<div class="pull-right">
	<a href="<?php echo site_url('enderecos_cliente/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
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
            <a href="<?php echo site_url('enderecos_cliente/edit/'.$e['id_endereco_cliente']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('enderecos_cliente/remove/'.$e['id_endereco_cliente']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
