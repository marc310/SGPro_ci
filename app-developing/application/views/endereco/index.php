<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Enderecos Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('endereco/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th hidden>Id Endereco</th>
						<th>Rua</th>
						<th>Bairro</th>
						<th>Cidade</th>
						<th>Referencia</th>
						<th>Numero</th>
						<th>Uf</th>
						<th>Cep</th>
						<th></th>
                    </tr>
                    <?php foreach($enderecos as $e){ ?>
                    <tr>
						<td><?php echo $e['id_endereco']; ?></td>
						<td><?php echo $e['rua']; ?></td>
						<td><?php echo $e['bairro']; ?></td>
						<td><?php echo $e['cidade']; ?></td>
						<td><?php echo $e['referencia']; ?></td>
						<td><?php echo $e['numero']; ?></td>
						<td><?php echo $e['uf']; ?></td>
						<td><?php echo $e['cep']; ?></td>
						<td>
                            <a href="<?php echo site_url('endereco/edit/'.$e['id_endereco']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('endereco/remove/'.$e['id_endereco']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
