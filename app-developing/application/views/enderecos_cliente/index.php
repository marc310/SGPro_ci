<div class="pull-right">
	<a href="<?php echo site_url('enderecos_cliente/add'); ?>" class="btn btn-success">Add</a>
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Id Endereco</th>
		<th>Cliente Id</th>
		<th>Rua</th>
		<th>Bairro</th>
		<th>Cidade</th>
		<th>Complemento</th>
		<th>Numero</th>
		<th>Uf</th>
		<th>Cep</th>
		<th>Actions</th>
    </tr>
	<?php foreach($enderecos_cliente as $e){
				require 'resources/php/estados-case.php';
		?>
    <tr>
		<td><?php echo $e['id_endereco']; ?></td>
		<td><?php echo $e['cliente_id']; ?></td>
		<td><?php echo $e['rua']; ?></td>
		<td><?php echo $e['bairro']; ?></td>
		<td><?php echo $e['cidade']; ?></td>
		<td><?php echo $e['complemento']; ?></td>
		<td><?php echo $e['numero']; ?></td>
		<td><?php echo $uf; ?></td>
		<td><?php echo $e['cep']; ?></td>
		<td>
            <a href="<?php echo site_url('enderecos_cliente/edit/'.$e['id_endereco']); ?>" class="btn btn-info btn-xs">Edit</a>
            <a href="<?php echo site_url('enderecos_cliente/remove/'.$e['id_endereco']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>
</div>
