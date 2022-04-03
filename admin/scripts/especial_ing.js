var tabla;
function init(){

  $("#btn_editar_m").click(function() {
    editar_especial();
  });

  $("#btn_actualizar_m").click(function(e) {
    actualizar_especial(e);
  });

  $("#btn_editar_e").click(function() {
    editar_empresa();
  });

  $("#btn_actualizar_e").click(function(e) {
    actualizar_empresa(e);
  });

  especial(true);
  empresa(true);
  mostrar_especial();
  mostrar_empresa();
}


function especial(a){
  $("#peritaje").prop('disabled', a);
  $("#arbitraje").prop('disabled', a);
  $('#btn_actualizar_m').prop("disabled", a);
  $('#certificacion_calidad').prop("disabled", a);
  $('#asuntos_municipales').prop("disabled", a);
}

function editar_especial(){
   especial(false);
   $('#btn_editar_m').prop("disabled", true);
}

function mostrar_especial() {
  $.post("../ajax/Cespecial_ing.php?op=mostrar", {
  }, function(data, status) {
    data = JSON.parse(data);
    $("#peritaje").val(data.peritaje);
    $("#arbitraje").val(data.arbitraje);
    $("#certificacion_calidad").val(data.certificacion_calidad);
    $("#asuntos_municipales").val(data.asuntos_municipales);
  })
}

function actualizar_especial(e) {  
  $("#cargando_cuerpo").html(''+
    '<center>'+
      '<i style="color: white;" class="fa fa-refresh fa-spin fa-5x fa-fw"></i>'+
    '</center>'
  );
  $("#cargando_modal").modal("show");
	e.preventDefault(); //No se activará la acción predeterminada del evento
	var formData = new FormData($("#formulario_especial")[0]);
	$.ajax({
		url: "../ajax/Cespecial_ing.php?op=actualizar",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,
		success: function (datos) {
      $("#cargando_modal").modal("hide");
      $("#cargando_cuerpo").html('');
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
  // mostrar_especial();
	especial(true);
  mostrar_especial();
  mostrar_especial();
  $('#btn_editar_m').prop("disabled", false);
}

/****/

function empresa(a){
  // mostrar_especial();
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
