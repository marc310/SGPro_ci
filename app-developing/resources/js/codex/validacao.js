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
/*
o parâmetro frm desta função significa: this.form,
pois a chamada da função - validaForm(this) foi
definida na tag form.
*/
    //Verifica se o campo nome_cliente foi preenchido e
    //contém no mínimo três caracteres.
    if(frm.nome_cliente.value == "" || frm.nome_cliente.value == null || frm.nome_cliente.value.lenght < 3) {
        //É mostrado um alerta, caso o campo esteja vazio.
        alert("Por favor, insira o seu nome_cliente.");
        //Foi definido um focus no campo.
        frm.nome_cliente.focus();
        //o form não é enviado.
        return false;
    }
    //o campo e-mail precisa de conter: "@", "." e pode estar vazio
    if (frm.email.value != ""){
      // se o campo for preenchido deve ser preenchido direito
      if(frm.email.value.indexOf("@") == -1 ||
        frm.email.value.indexOf(".") == -1 ||
        frm.email.value == "" ||
        frm.email.value == null) {
          alert("Por favor, insira um e-mail válido.");
          frm.email.focus();
          return 0;
      }
    }

}

function validaRedeSocial(frm) {
/*
o parâmetro frm desta função significa: this.form,
pois a chamada da função - validaForm(this) foi
definida na tag form.
*/
    //Verifica se o campo nome_cliente foi preenchido e
    //contém no mínimo três caracteres.
    if(frm.cliente_redesocial.value == "" || frm.cliente_redesocial.value == null || frm.cliente_redesocial.value.lenght < 3) {
        alert("Por favor, você deve selecionar uma Rede Social.");
        //É mostrado um alerta, caso o campo esteja vazio.
        var msgErro = "Por favor, insira o seu Nome.";

        $("#resultsocial").html(msgErro).show().fadeOut( 5000 );
        $("#resultsocial").addClass("alert alert-danger");
        //Foi definido um focus no campo.
        frm.cliente_redesocial.focus();
        //o form não é enviado.
        return 0;
    }


}
