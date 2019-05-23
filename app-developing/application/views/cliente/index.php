<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Clientes Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('cliente/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Cliente</th>
						<th>Endereco Id Cliente</th>
						<th>Nome Cliente</th>
						<th>Sexo</th>
						<th>Tipo Pessoa</th>
						<th>Documento</th>
						<th>Telefone</th>
						<th>Celular</th>
						<th>Email</th>
						<th>Data Cadastro Cliente</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($clientes as $c){ ?>
                    <tr>
						<td><?php echo $c['id_cliente']; ?></td>
						<td><?php echo $c['endereco_id_cliente']; ?></td>
						<td><?php echo $c['nome_cliente']; ?></td>
						<td><?php echo $c['sexo']; ?></td>
						<td><?php echo $c['tipo_pessoa']; ?></td>
						<td><?php echo $c['documento']; ?></td>
						<td><?php echo $c['telefone']; ?></td>
						<td><?php echo $c['celular']; ?></td>
						<td><?php echo $c['email']; ?></td>
						<td><?php echo $c['data_cadastro_cliente']; ?></td>
						<td>
                            <a href="<?php echo site_url('cliente/edit/'.$c['id_cliente']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('cliente/remove/'.$c['id_cliente']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
