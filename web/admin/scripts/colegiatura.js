  var tabla;
function init(){

  $("#btn_editar_m").click(function() {
    editar_contactanos();
  });

  $("#btn_actualizar_m").click(function(e) {
    actualizar_contactanos(e);
  });

  /*$("#btn_editar_e").click(function() {
    editar_empresa();
  });

  $("#btn_actualizar_e").click(function(e) {
    actualizar_empresa(e);
  });*/

  contactanos(true);
  //empresa(true);
  mostrar_contactanos();
  //mostrar_empresa();
}

function contactanos(a){
  $("#mordinario").prop('disabled', a);
  $("#mtemporal").prop('disabled', a);
  $('#btn_actualizar_m').prop("disabled", a);
  $('#mvitalico').prop("disabled", a);
  $('#sespecializacion').prop("disabled", a);
  $('#ctemporal').prop("disabled", a);
  $('#cdepartamental').prop("disabled", a);
}

function editar_contactanos(){
   contactanos(false);
   $('#btn_editar_m').prop("disabled", true);
}

function mostrar_contactanos() {
  $.post("../ajax/Ccolegiatura.php?op=mostrar", {
  }, function(data, status) {
    data = JSON.parse(data);
    $("#mordinario").val(data.mordinario);
    $("#mtemporal").val(data.mtemporal);
    $("#mvitalico").val(data.mvitalico);
    $("#sespecializacion").val(data.sespecializacion);
    $("#ctemporal").val(data.ctemporal);
    $("#cdepartamental").val(data.cdepartamental);
  })
}

function actualizar_contactanos(e) {
	e.preventDefault(); //No se activará la acción predeterminada del evento
	var formData = new FormData($("#formulario_contactanos")[0]);
	$.ajax({
		url: "../ajax/Ccolegiatura.php?op=actualizar",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,
		success: function (datos) {
      if (datos == 1) {
        swal({
          title: "😃 Exitó 😀",
          timer: 2000,
          type: "success"
        });
        /*alertify.success('😃 Agregado con exitó 😀');*/
      } else {
        swal({
          title: "😓 Error 😔",
          timer: 2000,
          type: "error"
        });
      }
		}
	});
  mostrar_contactanos();
	contactanos(true);
  $('#btn_editar_m').prop("disabled", false);
}


init();
