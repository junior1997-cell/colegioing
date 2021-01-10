var tabla;
function init(){

  $("#btn_editar_m").click(function() {
    editar_contactanos();
  });

  $("#btn_actualizar_m").click(function(e) {
    actualizar_contactanos(e);
  });

  $("#btn_editar_e").click(function() {
    editar_empresa();
  });

  $("#btn_actualizar_e").click(function(e) {
    actualizar_empresa(e);
  });

  contactanos(true);
  empresa(true);
  mostrar_contactanos();
  mostrar_empresa();
}


function contactanos(a){
  $("#peritaje").prop('disabled', a);
  $("#arbitraje").prop('disabled', a);
  $('#btn_actualizar_m').prop("disabled", a);
  $('#certificacion_calidad').prop("disabled", a);
  $('#asuntos_municipales').prop("disabled", a);
}

function editar_contactanos(){
   contactanos(false);
   $('#btn_editar_m').prop("disabled", true);
}

function mostrar_contactanos() {
  $.post("../ajax/Cespecial_ing.php?op=mostrar", {
  }, function(data, status) {
    data = JSON.parse(data);
    $("#peritaje").val(data.peritaje);
    $("#arbitraje").val(data.arbitraje);
    $("#certificacion_calidad").val(data.certificacion_calidad);
    $("#asuntos_municipales").val(data.asuntos_municipales);
  })
}

function actualizar_contactanos(e) {
	e.preventDefault(); //No se activará la acción predeterminada del evento
	var formData = new FormData($("#formulario_contactanos")[0]);
	$.ajax({
		url: "../ajax/Cespecial_ing.php?op=actualizar",
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

/****/

function empresa(a){
  $("#nombre").prop('disabled', a);
  $("#lema").prop('disabled', a);
  $('#descripcion').prop("disabled", a);
  $('#mision').prop("disabled", a);
  $('#vision').prop("disabled", a);
  $('#valores').prop("disabled", a);
  $('#politica').prop("disabled", a);
  $('#servicios').prop("disabled", a);
  $('#btn_actualizar_e').prop("disabled", a);
}

function editar_empresa(){
   empresa(false);
   $('#btn_editar_e').prop("disabled", true);
}

function mostrar_empresa() {
  $.post("../ajax/CEmpresa.php?op=mostrar", {
  }, function(data, status) {
    data = JSON.parse(data);
    console.log(data);
    $("#nombre").val(decodeHtml(data.nombre));
    $("#lema").val(decodeHtml(data.lema));
    $('#descripcion').val(decodeHtml(data.descripcion));
    $('#mision').val(decodeHtml(data.mision));
    $('#vision').val(decodeHtml(data.vision));
    $('#valores').val(decodeHtml(data.valores));
    $('#politica').val(decodeHtml(data.politica));
    $('#servicios').val(decodeHtml(data.servicios));
  })
}

function actualizar_empresa(e) {
	e.preventDefault(); //No se activará la acción predeterminada del evento
	var formData = new FormData($("#formulario_empresa")[0]);
	$.ajax({
		url: "../ajax/CEmpresa.php?op=actualizar",
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
  mostrar_empresa();
	empresa(true);
  $('#btn_editar_e').prop("disabled", false);
}

function decodeHtml(str){
    var map =
    {
        '&amp;': '&',
        '&lt;': '<',
        '&gt;': '>',
        '&quot;': '"',
        '&#039;': "'",
    };
    return str.replace(/&amp;|&lt;|&gt;|&quot;|&#039;/g, function(m) {return map[m];});
}


init();
