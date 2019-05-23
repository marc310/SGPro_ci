<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Dados Empresa Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('dados_empresa/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Emissor</th>
						<th>Endereco Id Emissor</th>
						<th>Nome Emissor</th>
						<th>Cnpj Emissor</th>
						<th>Website Emissor</th>
						<th>Email Emissor</th>
						<th>Telefone Emissor</th>
						<th>Url Logo</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($dados_empresa as $d){ ?>
                    <tr>
						<td><?php echo $d['id_emissor']; ?></td>
						<td><?php echo $d['endereco_id_emissor']; ?></td>
						<td><?php echo $d['nome_emissor']; ?></td>
						<td><?php echo $d['cnpj_emissor']; ?></td>
						<td><?php echo $d['website_emissor']; ?></td>
						<td><?php echo $d['email_emissor']; ?></td>
						<td><?php echo $d['telefone_emissor']; ?></td>
						<td><?php echo $d['url_logo']; ?></td>
						<td>
                            <a href="<?php echo site_url('dados_empresa/edit/'.$d['id_emissor']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('dados_empresa/remove/'.$d['id_emissor']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
