<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Acabamento Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('acabamento/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Acabamento</th>
						<th>Descricao Acabamento</th>
						<th>Preco Acabamento</th>
						<th>Nome Acabamento</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($acabamento as $a){ ?>
                    <tr>
						<td><?php echo $a['id_acabamento']; ?></td>
						<td><?php echo $a['descricao_acabamento']; ?></td>
						<td><?php echo $a['preco_acabamento']; ?></td>
						<td><?php echo $a['nome_acabamento']; ?></td>
						<td>
                            <a href="<?php echo site_url('acabamento/edit/'.$a['id_acabamento']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('acabamento/remove/'.$a['id_acabamento']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
