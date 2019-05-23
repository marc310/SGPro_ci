<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pagamentos Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pagamento/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Lancamento</th>
						<th>Tipo Pagamento Lancamento</th>
						<th>Tipo Beneficiario</th>
						<th>Beneficiario Lancamento</th>
						<th>Descricao Lancamento</th>
						<th>Total Lancamento</th>
						<th>Data Lancamento</th>
						<th>Data Vencimento Lancamento</th>
						<th>Lancamento Faturado</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($pagamentos as $p){ ?>
                    <tr>
						<td><?php echo $p['id_lancamento']; ?></td>
						<td><?php echo $p['tipo_pagamento_lancamento']; ?></td>
						<td><?php echo $p['tipo_beneficiario']; ?></td>
						<td><?php echo $p['beneficiario_lancamento']; ?></td>
						<td><?php echo $p['descricao_lancamento']; ?></td>
						<td><?php echo $p['total_lancamento']; ?></td>
						<td><?php echo $p['data_lancamento']; ?></td>
						<td><?php echo $p['data_vencimento_lancamento']; ?></td>
						<td><?php echo $p['lancamento_faturado']; ?></td>
						<td>
                            <a href="<?php echo site_url('pagamento/edit/'.$p['id_lancamento']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('pagamento/remove/'.$p['id_lancamento']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
