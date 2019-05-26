<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Adicionar Cliente</h3>
            </div>


            <ul class="nav nav-tabs">
               <li class="active"><a href="#infoCliente" data-toggle="tab">Informações do Cliente</a></li>
               <li><a href="#enderecoCliente" data-toggle="tab">Endereço</a></li>
            </ul>

            <div class="tab-content">
               <div class="tab-pane active" id="infoCliente">
                 <div class="col-md-12">

                   <!-- INICIAR INFO CLIENTE -->
                   <?php echo form_open('cliente/add'); ?>
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
                    <input type="text" id="nome" onchange="formataNomeCliente()" name="nome_cliente" value="<?php echo $this->input->post('nome_cliente'); ?>" class="form-control" id="nome_cliente" />
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
                    <input type="text" id="celular" name="celular" value="<?php echo $this->input->post('celular'); ?>" class="form-control" id="celular" />
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="email" class="control-label">Email</label>
                  <div class="form-group">
                    <input id="email" onchange="formataEmailCliente()" type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
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
                    <input id="inputDocumentoCliente" type="text" name="documento" value="<?php echo $this->input->post('documento'); ?>" class="form-control" id="documento" />
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
                   <?php echo form_close(); ?>

                  <!-- FINALIZAR INFO CLIENTE -->
                 </div>
               </div>
               <div class="tab-pane" id="enderecoCliente">BBB</div>
            </div>



      	</div>
    </div>
</div>
