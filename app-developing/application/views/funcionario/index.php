<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Funcionarios Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('funcionario/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Funcionario</th>
						<th>Endereco Id Funcionario</th>
						<th>Nome Funcionario</th>
						<th>Doc Funcionario</th>
						<th>Email Funcionario</th>
						<th>Telefone Funcionario</th>
						<th>Celular Funcionario</th>
						<th>Data Cadastro Funcionario</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($funcionarios as $f){ ?>
                    <tr>
						<td><?php echo $f['id_funcionario']; ?></td>
						<td><?php echo $f['endereco_id_funcionario']; ?></td>
						<td><?php echo $f['nome_funcionario']; ?></td>
						<td><?php echo $f['doc_funcionario']; ?></td>
						<td><?php echo $f['email_funcionario']; ?></td>
						<td><?php echo $f['telefone_funcionario']; ?></td>
						<td><?php echo $f['celular_funcionario']; ?></td>
						<td><?php echo $f['data_cadastro_funcionario']; ?></td>
						<td>
                            <a href="<?php echo site_url('funcionario/edit/'.$f['id_funcionario']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('funcionario/remove/'.$f['id_funcionario']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
