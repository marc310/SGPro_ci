<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tipos Pagamento Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tipos_pagamento/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Tipo Pagamento</th>
						<th>Nome Tipo Pagamento</th>
						<th>Descricao Tipo Pagamento</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tipos_pagamento as $t){ ?>
                    <tr>
						<td><?php echo $t['id_tipo_pagamento']; ?></td>
						<td><?php echo $t['nome_tipo_pagamento']; ?></td>
						<td><?php echo $t['descricao_tipo_pagamento']; ?></td>
						<td>
                            <a href="<?php echo site_url('tipos_pagamento/edit/'.$t['id_tipo_pagamento']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tipos_pagamento/remove/'.$t['id_tipo_pagamento']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
