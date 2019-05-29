<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Adicionar Cliente</h3>
            </div>


            <ul class="nav nav-tabs">
               <li class="active"><a href="#infoCliente" data-toggle="tab">Informações do Cliente</a></li>
               <li><a href="#redesSociais" data-toggle="tab">Redes Sociais</a></li>
               <li><a href="#enderecoCliente" data-toggle="tab">Adicionar Endereço</a></li>
               <li><a href="#listaEnderecosCliente" data-toggle="tab">Lista Endereços</a></li>
            </ul>

            <div class="tab-content">
               <div class="tab-pane active" id="infoCliente">
                 <div class="col-md-12">

                   <!-- INICIAR INFO CLIENTE -->

                   <form name="frmAddCliente" method="post" action="<?php echo site_url('cliente/add');?>" onsubmit="return validaForm(this);">

                  <div class="box-body">
                    <div class="row clearfix">
                <!-- <div class="col-md-6" hidden>
                  <label for="endereco_id_cliente" class="control-label">Endereco</label>
                  <div class="form-group">
                    <select name="endereco_id_cliente" class="form-control">
                      <option value="">Selecione endereco</option>
                      <?php
                      foreach($all_enderecos as $endereco)
                      {
                        $selected = ($endereco['id_endereco'] == $this->input->post('endereco_id_cliente')) ? ' selected="selected"' : "";

                        echo '<option value="'.$endereco['id_endereco'].'" '.$selected.'>'.$endereco['id_endereco'].'</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div> -->
                <div class="col-md-6">
                  <label for="nome_cliente" class="control-label"><span class="text-danger">*</span>Nome Cliente</label>
                  <div class="form-group">
                    <input type="text" id="nome" name="nome_cliente" value="<?php echo $this->input->post('nome_cliente'); ?>" class="form-control" id="nome_cliente" />
                    <span class="text-danger"><?php echo form_error('nome_cliente');?></span>
                  </div>
                </div>
                <!-- <div class="col-md-6">
                  <label for="sexo" class="control-label">Sexo</label>
                  <div class="form-group">
                     <select name="sexo" class="form-control">
                       <option value="">Selecione o Sexo</option>
                     <?php
                     $sexo_values = array(
                       '1'=>'Masculino',
                       '2'=>'Feminino',
                     );

                     foreach($sexo_values as $value => $display_text)
                     {
                       $selected = ($value == $this->input->post('sexo')) ? ' selected="selected"' : "";

                       echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                     }
                     ?>
                     </select>
                   </div>
                </div> -->

                <div class="col-md-6">
                  <label for="telefone" class="control-label">Telefone</label>
                  <div class="form-group">
                    <input type="text" id="telefone" onchange="formataTelefone()" name="telefone" value="<?php echo $this->input->post('telefone'); ?>" class="form-control" id="telefone" />
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="celular" class="control-label">Celular</label>
                  <div class="form-group">
                    <input type="text" id="celular" onchange="formataCelular()" name="celular" value="<?php echo $this->input->post('celular'); ?>" class="form-control" id="celular" />
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="email" class="control-label">Email</label>
                  <div class="form-group">
                    <input id="email" onkeypress="formataEmailCliente()" type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="tipo_pessoa" class="control-label">Tipo Pessoa</label>
                  <div class="form-group">
                     <select name="tipo_pessoa" class="form-control" id="selectTipoPessoa" onchange="documentoCliente()">
                       <option value="">Selecione o Tipo de Pessoa para Cadastrar um Documento</option>
                     <?php
                     $tipo_pessoa_values = array(
                       '1'=>'Física',
                       '2'=>'Jurídica',
                     );

                     foreach($tipo_pessoa_values as $value => $display_text)
                     {
                       $selected = ($value == $this->input->post('tipo_pessoa')) ? ' selected="selected"' : "";

                       echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                     }
                     ?>
                     </select>
                  </div>
                </div>
                <div class="col-md-6" id="divDocumentoCliente" hidden>
                  <label id="labelDocumentoCliente" for="documento" class="control-label">Documento</label>
                  <div class="form-group">
                    <input id="documento" type="text" name="documento" value="<?php echo $this->input->post('documento'); ?>" class="form-control"/>
                  </div>
                </div>
                <div class="col-md-12">
                  <label id="labelDataCadastro" for="data_cadastro_cliente" class="control-label">Data Cadastro Cliente:</label>
                  <div class="form-group">
                    <input id="dataCadastro" type="text" name="data_cadastro_cliente" value="<?php echo $this->input->post('data_cadastro_cliente'); ?>" class="form-control hidden" id="data_cadastro_cliente" />
                  </div>
                </div>

              </div>
            </div>
                  <div class="box-footer">

                    <button type="submit" class="btn btn-success">
                      <i class="fa fa-check"></i> Salvar
                    </button>

                    <button type="button" data-dismiss="modal" class="btn btn-outline-secondary">
                  		<i class="fa fa-check"></i> Fechar
                  	</button>

                  </div>
                </form>

                  <!-- FINALIZAR INFO CLIENTE -->
                 </div>
               </div>
 <!-- ######################################################################################### -->
               <!-- TAB 2 REDES SOCIAIS -->
               <div class="tab-pane" id="redesSociais">
                 <div class="col-md-12">


                 </div>
               </div>
               <!-- FIM DA TAB 2 REDES SOCIAIS -->
<!-- ######################################################################################### -->
               <!-- TAB 3 REDES SOCIAIS -->
               <div class="tab-pane" id="enderecoCliente">
                 <div class="tab-content">
                   <div class="col-md-12">

                             <?php echo form_open('endereco/add'); ?>
                           	<div class="box-body">
                           		<div class="row clearfix">
                 					<div class="col-md-6">
                 						<label for="rua" class="control-label"><span class="text-danger">*</span>Rua</label>
                 						<div class="form-group">
                 							<input type="text" name="rua" value="<?php echo $this->input->post('rua'); ?>" class="form-control" id="rua" />
                 							<span class="text-danger"><?php echo form_error('rua');?></span>
                 						</div>
                 					</div>
                 					<div class="col-md-6">
                 						<label for="bairro" class="control-label"><span class="text-danger">*</span>Bairro</label>
                 						<div class="form-group">
                 							<input type="text" name="bairro" value="<?php echo $this->input->post('bairro'); ?>" class="form-control" id="bairro" />
                 							<span class="text-danger"><?php echo form_error('bairro');?></span>
                 						</div>
                 					</div>
                 					<div class="col-md-6">
                 						<label for="cidade" class="control-label"><span class="text-danger">*</span>Cidade</label>
                 						<div class="form-group">
                 							<input type="text" name="cidade" value="<?php echo $this->input->post('cidade'); ?>" class="form-control" id="cidade" />
                 							<span class="text-danger"><?php echo form_error('cidade');?></span>
                 						</div>
                 					</div>
                 					<div class="col-md-6">
                 						<label for="referencia" class="control-label">Referencia</label>
                 						<div class="form-group">
                 							<input type="text" name="referencia" value="<?php echo $this->input->post('referencia'); ?>" class="form-control" id="referencia" />
                 						</div>
                 					</div>
                 					<div class="col-md-6">
                 						<label for="numero" class="control-label">Numero</label>
                 						<div class="form-group">
                 							<input type="text" name="numero" value="<?php echo $this->input->post('numero'); ?>" class="form-control" id="numero" />
                 							<span class="text-danger"><?php echo form_error('numero');?></span>
                 						</div>
                 					</div>
                 					<div class="col-md-6">
                 						<label for="uf" class="control-label"><span class="text-danger">*</span>Uf</label>
                 						<div class="form-group">

                              <select name="uf" id="uf" class="form-control">
                								<option value="">Selecione o Estado</option>
                								<?php
                								$uf_values = array(
                									'1'=>'AC',
                                  '2'=>'AL',
                                  '3'=>'AM',
                                  '4'=>'AP',
                                  '5'=>'BA',
                                  '6'=>'CE',
                                  '7'=>'DF',
                                  '8'=>'ES',
                                  '9'=>'GO',
                                  '10'=>'MA',
                                  '11'=>'MG',
                                  '12'=>'MS',
                                  '13'=>'MT',
                                  '14'=>'PA',
                                  '15'=>'PB',
                                  '16'=>'PE',
                                  '17'=>'PI',
                                  '18'=>'PR',
                                  '19'=>'RJ',
                                  '20'=>'RN',
                                  '21'=>'RO',
                                  '22'=>'RR',
                                  '23'=>'RS',
                                  '24'=>'SC',
                                  '25'=>'SE',
                                  '26'=>'SP',
                                  '27'=>'TO',
                								);

                								foreach($uf_values as $value => $display_text)
                								{
                									$selected = ($value == $this->input->post('uf')) ? ' selected="selected"' : "";

                									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                								}
                								?>
                							</select>

                 							<span class="text-danger"><?php echo form_error('uf');?></span>
                 						</div>
                 					</div>
                 					<div class="col-md-6">
                 						<label for="cep" class="control-label">Cep</label>
                 						<div class="form-group">
                 							<input type="text" name="cep" value="<?php echo $this->input->post('cep'); ?>" class="form-control" id="cep" />
                 						</div>
                 					</div>
                 				</div>
                 			</div>
                           	<div class="box-footer">
                             	<button type="submit" class="btn btn-success">
                             		<i class="fa fa-plus"></i> Adicionar
                             	</button>

                              <button type="button" data-dismiss="modal" class="btn btn-danger">
                            		<i class="fa fa-check"></i> Cancelar
                            	</button>
                           	</div>
                             <?php echo form_close(); ?>
                 </div>
               </div>
               </div>
               <!-- FIM DA TAB 3 REDES SOCIAIS -->
<!-- ######################################################################################### -->
<!-- ######################################################################################### -->
              <!-- TAB 2 REDES SOCIAIS -->
              <div class="tab-pane" id="listaEnderecosCliente">
              <div class="col-md-12">
                <div class="box-body">
                    <table class="table table-striped">
                        <tr>
                <th hidden>Id Endereco</th>
                <th>Rua</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Numero</th>
                <th>Uf</th>
                <th>Cep</th>
                <th> </th>
                        </tr>
                        <?php foreach($enderecos as $e){ ?>
                        <tr>
                <td><?php echo $e['id_endereco']; ?></td>
                <td><?php echo $e['rua']; ?></td>
                <td><?php echo $e['bairro']; ?></td>
                <td><?php echo $e['cidade']; ?></td>
                <td><?php echo $e['numero']; ?></td>
                <td><?php echo $e['uf']; ?></td>
                <td><?php echo $e['cep']; ?></td>
                <td>
                                <a href="<?php echo site_url('endereco/edit/'.$e['id_endereco']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> </a>
                                <a href="<?php echo site_url('endereco/remove/'.$e['id_endereco']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> </a>
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
              <!-- FIM DA TAB 2 REDES SOCIAIS -->
<!-- ######################################################################################### -->
            </div>



      	</div>
    </div>
</div>
