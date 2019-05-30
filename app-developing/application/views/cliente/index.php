

<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Clientes Cadastrados</h3>
        <div class="box-tools">
          <a href="<?php echo site_url('cliente/add'); ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalAdd" id="modalAdicionar" >Adicionar</a>
        </div>
      </div>
      <div class="box-body" id="listaClientes">
        <table class="table table-striped">
          <tr>
            <th>ID Cliente</th>
            <th>Nome Cliente</th>
            <th>Pessoa</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Email</th>
            <th></th>
          </tr>
          <?php
          foreach($clientes as $c){
            if($c['tipo_pessoa']=="1")
            {
              $tipo = "Física";
            }
            else if($c['tipo_pessoa']=="2")
            {
              $tipo = "Jurídica";
            }
            else {
              $tipo = "Não Definido";
            }
            ?>
            <tr>
              <td><?php echo $c['id_cliente']; ?></td>
              <td><?php echo $c['nome_cliente']; ?></td>
              <td><?php echo $tipo; ?></td>
              <td><?php echo $c['telefone']; ?></td>
              <td><?php echo $c['celular']; ?></td>
              <td><?php echo $c['email']; ?></td>
              <td>
              <a
                href="<?php echo site_url('cliente/edit/'.$c['id_cliente']); ?>"
                class="btn btn-info btn-xs">
                <span class="fa fa-pencil"></span>
              </a>

              <a
                href="<?php echo site_url('cliente/remove/'.$c['id_cliente']); ?>"
                class="btn btn-danger btn-xs"
                onclick="return confirm('Tem certeza que deseja deletar este item?');">
                <span class="fa fa-trash"></span>
              </a>
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




<!-- <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">


</div>
</div>
</div> -->



<!-- ########################################################################################### -->
<!-- ################################## MODAL ADICIONAR ######################################## -->
<!-- ########################################################################################### -->

<!-- Trigger the modal with a button -->
<!-- Modal -->
<div class="modal fade" id="modalAdd" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- ########################################################################################### -->
<!-- ###################################  MODAL EDITAR  ######################################## -->
<!-- ########################################################################################### -->

<!-- Modal -->
<div class="modal fade" id="modalEditar" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editando Cliente</h4>
      </div>
      <div class="modal-body">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- ########################################################################################### -->
<!-- ########################################################################################### -->
<!-- ########################################################################################### -->

<script>
$(document).ready(function(){

  $("#modalAdd").on('shown.bs.modal', function(){
    //alert('The modal is fully shown.');
    dataCadastro();
    formataTelefone();
    formataCelular();
  });
//   $("#modalEditar").on('shown.bs.modal', function(){
//     //alert('The modal is fully shown.');
//     formataTelefone();
//     formataCelular();
//     var inputDataCadastro = new Date().getTime(document.getElementById("data_cadastro_cliente").value);
//     var date = new Date(inputDataCadastro);
//     var dataFormatada = formatDate(date);
//     document.getElementById("labelDataCliente").innerHTML = "Cadastrado desde: " + dataFormatada;
//     //
//     var inputDocCliente = document.getElementById("inputTipoPessoa").value;
//     //
//     if (inputDocCliente == "1")
//     {
//       //document.getElementById("inputTipoPessoa").value = "Pessoa Física";
//       document.getElementById("selectTipoPessoa").value = inputDocCliente;
//       document.getElementById("divDocumentoCliente").hidden=false;
//     }
//     else if(inputDocCliente == "2")
//     {
//       //document.getElementById("inputTipoPessoa").value = "Pessoa Jurídica";
//       document.getElementById("selectTipoPessoa").value = inputDocCliente;
//       document.getElementById("divDocumentoCliente").hidden=false;
//     }
//     else
//     {
//       //document.getElementById("inputTipoPessoa").value = "Documento não Cadastrado";
//       document.getElementById("divDocumentoCliente").hidden=true;
//     }
//   });
// });
 //  $('#modalEditar').on('hidden.bs.modal', function () {
 //   location.reload();
 // });
 $('#modalAdd').on('hidden.bs.modal', function () {
  location.reload();
});
});

</script>
