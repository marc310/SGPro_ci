<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Redes Sociais Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('redes_sociais/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Redesocial</th>
						<th>Nome Redesocial</th>
						<th>Url Base Redesocial</th>
						<th>Tag Redesocial</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($redes_sociais as $r){ ?>
                    <tr>
						<td><?php echo $r['id_redesocial']; ?></td>
						<td><?php echo $r['nome_redesocial']; ?></td>
						<td><?php echo $r['url_base_redesocial']; ?></td>
						<td><?php echo $r['tag_redesocial']; ?></td>
						<td>
                            <a href="<?php echo site_url('redes_sociais/edit/'.$r['id_redesocial']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('redes_sociais/remove/'.$r['id_redesocial']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
