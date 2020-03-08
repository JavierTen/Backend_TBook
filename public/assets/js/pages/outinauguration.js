
$(document).ready(function() {

jQuery.validator.addMethod("emailExt", function(value, element, param) {
    return value.match(/^[a-zA-Z0-9_\.%\+\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,3}$/);
},'Porfavor ingrese email valido');


$("#addInscribeds").click(function() {
    //alert("ensots");
    console.log("hola");
    $("#formInscribed").submit();
});


$("#formInscribed").validate({

  submit: false,
  ignore: ":hidden:not(#note),.note-editable.panel-body",
  rules: {
      firstname: {
          required: false,
          minlength: 5,
          maxlength: 50,
      },
      lastname: {
          required: false,
          minlength: 6,
          maxlength: 50,
      },
      cellphone: {
          required: false,
          minlength: 10,
          maxlength: 10,
      },
      email: {
        required: false,
        email: true,
        emailExt: true,
      }
  },
  messages: {
      lastname: {
          required: "El contacto es obligatorio",
          minlength: "El contacto debe contener al menos 5 caracteres",
          maxlength: "El contacto debe contener no mas de 50 caracteres",
      },
      firstname: {
          required: "El contacto es obligatorio",
          minlength: "El contacto debe contener al menos 5 caracteres",
          maxlength: "El contacto debe contener no mas de 50 caracteres",
      },
      cellphone: {
          required: "El campo usuario es obligatorio",
          minlength: "El usuario debe contener al menos 10 caracteres",
          maxlength: "El usuario debe contener no mas de 10 caracteres",
          numer: "Solo se puede ingresar numeros"
      },
      email: {
          required: "Ingresar email",
          email: "Porfavor ingrese email valido",
      },
  },

  submitHandler: function(form) {
      
      console.log("entro");
      var firstname = $("#responsible").val();
      var lastname = $("#identification").val();
      var cellphone = $("#cellphone").val();
      var email = $("#email").val();

      $.ajax({
          url: "/inaugurations/inscribeds/storage",
          type: "POST",
          datatype: "json",
          data: {
              _token: $('meta[name=csrf-token]').attr('content'),
              firstname: firstname,
              lastname: lastname,
              cellphone: cellphone,
              email: email,

          },
          success: function(data) {
              //load();
              //total();
          },
          error: function(jqXHR, textStatus, errorThrown) {
              if (jqXHR.status == 500) {
                  alert('Internal error: ' + jqXHR.responseText);
              } else {
                  alert('Unexpected error.');
              }
          }
      });
  }
});


});



