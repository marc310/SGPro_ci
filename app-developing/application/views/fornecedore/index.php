<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Fornecedores Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fornecedor/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Fornecedor</th>
						<th>Endereco Id Fornecedor</th>
						<th>Nome Fornecedor</th>
						<th>Cnpj Fornecedor</th>
						<th>Website Fornecedor</th>
						<th>Email Fornecedor</th>
						<th>Telefone Fornecedor</th>
						<th>Url Logo Fornecedor</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fornecedores as $f){ ?>
                    <tr>
						<td><?php echo $f['id_fornecedor']; ?></td>
						<td><?php echo $f['endereco_id_fornecedor']; ?></td>
						<td><?php echo $f['nome_fornecedor']; ?></td>
						<td><?php echo $f['cnpj_fornecedor']; ?></td>
						<td><?php echo $f['website_fornecedor']; ?></td>
						<td><?php echo $f['email_fornecedor']; ?></td>
						<td><?php echo $f['telefone_fornecedor']; ?></td>
						<td><?php echo $f['url_logo_fornecedor']; ?></td>
						<td>
                            <a href="<?php echo site_url('fornecedor/edit/'.$f['id_fornecedor']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fornecedor/remove/'.$f['id_fornecedor']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
