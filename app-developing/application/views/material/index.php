<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Material Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('material/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Material</th>
						<th>Nome Material</th>
						<th>Descricao Material</th>
						<th>Preco Material</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($material as $m){ ?>
                    <tr>
						<td><?php echo $m['id_material']; ?></td>
						<td><?php echo $m['nome_material']; ?></td>
						<td><?php echo $m['descricao_material']; ?></td>
						<td><?php echo $m['preco_material']; ?></td>
						<td>
                            <a href="<?php echo site_url('material/edit/'.$m['id_material']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('material/remove/'.$m['id_material']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
