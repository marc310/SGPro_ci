<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Servicos Os Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('servicos_os/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Servicos Os</th>
						<th>Os Id</th>
						<th>Servicos Id</th>
						<th>Sub Total Servico Os</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($servicos_os as $s){ ?>
                    <tr>
						<td><?php echo $s['id_servicos_os']; ?></td>
						<td><?php echo $s['os_id']; ?></td>
						<td><?php echo $s['servicos_id']; ?></td>
						<td><?php echo $s['sub_total_servico_os']; ?></td>
						<td>
                            <a href="<?php echo site_url('servicos_os/edit/'.$s['id_servicos_os']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('servicos_os/remove/'.$s['id_servicos_os']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
