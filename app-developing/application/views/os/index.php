<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ordens de Serviço Cadastradas</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('os/add'); ?>" class="btn btn-success btn-sm">Nova OS</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Os</th>
						<th>Cliente Id</th>
						<th>Tipo Os</th>
						<th>Data Inicio</th>
						<th>Data Final</th>
						<th>Status Os</th>
						<th>Total Os</th>
						<th>Os Faturada</th>
						<th>Descricao Os</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($os as $o){ ?>
                    <tr>
						<td><?php echo $o['id_os']; ?></td>
						<td><?php echo $o['cliente_id']; ?></td>
						<td><?php echo $o['tipo_os']; ?></td>
						<td><?php echo $o['data_inicio']; ?></td>
						<td><?php echo $o['data_final']; ?></td>
						<td><?php echo $o['status_os']; ?></td>
						<td><?php echo $o['total_os']; ?></td>
						<td><?php echo $o['os_faturada']; ?></td>
						<td><?php echo $o['descricao_os']; ?></td>
						<td>
                            <a href="<?php echo site_url('os/edit/'.$o['id_os']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('os/remove/'.$o['id_os']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
