<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Servicos Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('servico/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Servicos</th>
						<th>Nome Servico</th>
						<th>Descricao Servico</th>
						<th>Preco Servico</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($servicos as $s){ ?>
                    <tr>
						<td><?php echo $s['id_servicos']; ?></td>
						<td><?php echo $s['nome_servico']; ?></td>
						<td><?php echo $s['descricao_servico']; ?></td>
						<td><?php echo $s['preco_servico']; ?></td>
						<td>
                            <a href="<?php echo site_url('servico/edit/'.$s['id_servicos']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('servico/remove/'.$s['id_servicos']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
