function validaCliente(frm) {
/*
o parâmetro frm desta função significa: this.form,
pois a chamada da função - validaForm(this) foi
definida na tag form.
*/
    //Verifica se o campo nome_cliente foi preenchido e
    //contém no mínimo três caracteres.
    if(frm.nome_cliente.value == "" || frm.nome_cliente.value == null || frm.nome_cliente.value.lenght < 3) {
        //É mostrado um alerta, caso o campo esteja vazio.
        var msgErro = "Por favor, insira o seu Nome.";

        $("#resultCliente").html(msgErro).show().fadeOut( 5000 );
        $("#resultCliente").addClass("alert alert-danger");
        //Foi definido um focus no campo.
        frm.nome_cliente.focus();
        //o form não é enviado.
        return 0;
    }
    //o campo e-mail precisa de conter: "@", "." e pode estar vazio
    if (frm.email.value != ""){
      // se o campo for preenchido deve ser preenchido direito
      if(frm.email.value.indexOf("@") == -1 ||
        frm.email.value.indexOf(".") == -1 ||
        frm.email.value == "" ||
        frm.email.value == null) {
          var msgErro = "Por favor, insira um e-mail válido.";

          $("#resultCliente").addClass("alert alert-danger");
          $("#resultCliente").html(msgErro).show().fadeOut( 5000 );
          frm.email.focus();
          return 0;
      }
    }


}

//

function validaEndereco(frm) {

    //contém no mínimo três caracteres.
    if(frm.rua.value == "" || frm.rua.value == null || frm.rua.value.lenght < 3) {
        //É mostrado um alerta, caso o campo esteja vazio.
        var msgErro = "Por favor, você deve preencher o nome da Rua.";

        $("#resultendereco").addClass("alert alert-danger");
        $("#resultendereco").html(msgErro).show().fadeOut( 5000 );
        //Foi definido um focus no campo.
        frm.rua.focus();
        //o form não é enviado.
        return false;
    }

    if(frm.uf.value=="" || frm.uf.value == null){

      var msgErro = "Por favor, selecione o Estado do Cliente";

      $("#resultendereco").addClass("alert alert-danger");
      $("#resultendereco").html(msgErro).show().fadeOut( 5000 );

      frm.uf.focus();

      return false;
    }

    //
    // fim da validação de endereço de cliente
}

function validaRedeSocial(frm) {

    //contém no mínimo três caracteres.
    if(frm.selectRedeSocial.value == "" || frm.selectRedeSocial.value == null) {
        // alert("Por favor, você deve selecionar uma Rede Social.");
        //É mostrado um alerta, caso o campo esteja vazio.
        var msgErro = "Por favor, primeiro selecione uma Rede Social.";
        $("#resultsocial").removeClass("alert-success");
        $("#resultsocial").addClass("alert alert-danger");
        $("#resultsocial").html(msgErro).show().fadeOut( 5000 );
        frm.selectRedeSocial.focus();
        //
        //o form não é enviado.
        return 0;
    }

    if(frm.cliente_redesocial.value != ""){
      if(frm.cliente_redesocial.value.length < 3){
        $("#resultsocial").removeClass("alert-success");
        $("#resultsocial").addClass("alert alert-danger");
        var msg = "Por favor, o campo deve conter mais de 3 caracteres.";

        $("#resultsocial").html(msg).show().fadeOut( 5000 );
        frm.cliente_redesocial.focus();
        return 0;

      }

    }
    //
    if(frm.cliente_redesocial.value == ""){

        $("#resultsocial").addClass("alert alert-danger");
        var msg = "Por favor, o campo não pode estar vazio.";

        $("#resultsocial").html(msg).show().fadeOut( 5000 );
        frm.cliente_redesocial.focus();
        return 0;

    }
//
}

//
// validação de campo para aceitar somente numeros e

function somenteNum(num) {
    var er = /[^0-9]/;
    er.lastIndex = 0;
    var campo = num;
    if (er.test(campo.value)) {
      campo.value = "";
      alert("Por favor, digite somente números para preencher este campo.");
    }
}


// function somenteNum(num) {
//         var er = /[^0-9]/;
//         er.lastIndex = 0;
//         var campo = num;
//         if (er.test(campo.value)) {
//           campo.value = "";
//           alert("Por favor, digite somente números para preencher este campo.");
//         }
//     }
