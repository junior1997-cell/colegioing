$(document).ready(function() {
  var usuario_obj = $("input[name='user_login']");
  var clave_obj = $("input[name='clave_login']");
  var usuario_div = $("#usuario");
  var clave_div = $("#clave");
  var alerta_obj = $("#alert_obj");

  $("#form_login").on('submit', function(e) {
    e.preventDefault();
    var user_login = usuario_obj.val();
    var clave_login = clave_obj.val();
    $("#alert_obj").addClass('shake-constant');
    $("#alert_obj").addClass('shake-horizontal');
    if (user_login.length == 0 && clave_login.length == 0) {
      usuario_div.addClass("has-error");
      clave_div.addClass("has-error");
      alerta_obj.html(alerta_conten("de llenar todos los campos."));
      setTimeout(quitar_vibrar,300)
    } else if (user_login.length == 0) {
      usuario_div.addClass("has-error")
      alerta_obj.html(alerta_conten("de llenar el campo Usuario."));
      setTimeout(quitar_vibrar,300)
    } else if (clave_login.length == 0) {
      clave_div.addClass("has-error")
      alerta_obj.html(alerta_conten("de llenar el campo Contraseña.")),
      // alertify.error('😓 Asegurate! de llenar el campo Contraseña.');
      setTimeout(quitar_vibrar,300)
    } else {
      $.post("../ajax/CUsuario.php?op=verificar_login", {
          "user_login": user_login,
          "clave_login": clave_login
        },
        function(data) {
          if (data != "null") {
            // SI INGRESA
            alerta_obj.html("<div class='alert alert-block alert-success fade in'><center><strong>😃 ¡En buena hora!</strong> 😃  </center></div>");
            quitar_vibrar();
            $(location).attr("href", "paquetes.php");
          } else {
            alerta_obj.html(alerta_conten("de que tus credenciales sean válidas."));
            // alertify.error('😓 Asegurate! de que tus credenciales sean válidas.');
            setTimeout(quitar_vibrar,300)
          }
        });
    };

  });

  $("input").keyup(function() {
    var name_atribute = this.getAttribute("name");
    var input_value = $("input[name='" + name_atribute + "']");
    var div_cont = $("div[id='" + name_atribute + "']");
    if (input_value.val().length > 0) {
      div_cont.removeClass("has-error");
    } else {
      div_cont.addClass("has-error");
    }
  });

  var alerta_conten = function(alerta_mensaje) {
    return "<div class='alert alert-block alert-danger fade in'><center><strong> 😓 Asegurate!</strong> " + alerta_mensaje + " </center></div>"
  }

  function quitar_vibrar(){
      $("#alert_obj").removeClass('shake-constant');
      $("#alert_obj").removeClass('shake-horizontal');
  }

})
