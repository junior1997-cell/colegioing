var tabla;
function innit() {

  $("#btn_add_carousel").click(function() {
      $("#add_carousel").modal("show");

  });

  $("#btn_close_carousel").click(function() {
      $("#add_carousel").modal("hide");
      limpiar();
  });

  $("#formulario_evento").on("submit", function (e) {
        guardaryeditar(e);
    });

  $("#foto_i").click(function() {
    $('#foto').trigger('click');
  });


  $("#foto").change(function(e) {
    addImage(e,$("#foto").attr("id"));
  });

  listar()
}

function limpiar(){
  $("#ideventos").val("");
  $("#titulo").val("");
  $("#descripcion").val("");
  $("#tipopublicacion").selectpicker('refresh');
  $("#foto_i").attr("src", "recursos/img/img_defecto.png");
  $("#foto").val("");
  $("#foto_actual").val("");

}

function guardaryeditar(e) {
  e.preventDefault();
  var formData = new FormData($("#formulario_evento")[0]);
  $.ajax({
    url: "../ajax/CEventos.php?op=guardaryeditar",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(datos) {

      tabla.ajax.reload();
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
      $("#add_carousel").modal("hide");
      limpiar();
    }
  });
}


/* PREVISUALIZAR LAS IMAGENES */
function addImage(e,id) {
  var file = e.target.files[0],
    imageType = /image.*/;
  var sizeByte = file.size;

  var sizekiloBytes = parseInt(sizeByte / 1024);
  var sizemegaBytes = (sizeByte / 1000000);
  //alert("KILO"+sizekiloBytes+"MEGA"+sizemegaBytes)
  if (!file.type.match(imageType))
    return;
  if (sizekiloBytes < 90000) {
    var reader = new FileReader();
    reader.onload = fileOnload;
    function fileOnload(e) {
      var result = e.target.result;
      $("#"+id+"_i").attr("src", result);
    }
    reader.readAsDataURL(file);
  } else {
    $("#"+id+"_i").attr("src", "recursos/img/img_error.png");
    $("#"+id).val("");
  }
}

/*lISTA DE NOTICIAS Y COMUNICADOS*/
function listar() {
	tabla = $("#tbllistado_carousel").dataTable({
		"aProcessing": true,
		"aServerSide": true,
		dom: 'Bfrtip',
    "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
    "ajax": {
			url: '../ajax/CEventos.php?op=listar',
			type: "get",
			dataType: "json",
			error: function (e) {
				console.log(e.responseText);
			}
		},
		"bDestroy": true,
		"iDisplayLength": 10, //Paginación
		"order": [[0, "asc"]] //Ordenar (columna,orden)
	}).DataTable();
}

/*MOSTAR UNA NOTICIA/COMENTARIO*/
function mostrar(ideventos) {
  $.post("../ajax/CEventos.php?op=mostrar", {
    ideventos: ideventos
  }, function(data, status) {
    data = JSON.parse(data);

    $("#add_carousel").modal("show");
    $("#ideventos").val(data.idevento);
    $("#titulo").val(data.titulo);
    $("#descripcion").val(data.descripcion);
    $("#foto_actual").val(data.foto);
    if (data.tipopublicacion == "") {
      $("#tipopublicacion_new").html('no definido');
    } else {
      $("#tipopublicacion").val(data.tipopublicacion);
      $("#tipopublicacion").selectpicker('refresh');
    }
    

    if (data.foto == "") {
      $("#foto_i").attr("src", "recursos/img/img_defecto.png");
    } else {
      $("#foto_i").attr("src", "../multimedia/eventos/" + data.foto);
    }


  })
}

function desactivar(ideventos) {
	swal({
			title: "¿Deseas desactivar este registro? ",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Si, desactivar",
			cancelButtonText: "No, cancelar",
			closeOnConfirm: false,
			closeOnCancel: false
		},
		function (isConfirm) {
			if (isConfirm) {
				$.post("../ajax/CEventos.php?op=desactivar", {
					ideventos: ideventos
				}, function (datos) {
          if (datos == 1) {
            swal({
              title: "😃 Se desactivar con exitó 😀",
              timer: 2000,
              type: "success"
            });
            /*alertify.success('😃 Agregado con exitó 😀');*/
          } else {
            swal({
              title: "😓 Error en desactivar 😔",
              timer: 2000,
              type: "error"
            });
          }
					tabla.ajax.reload();
				});
			} else {
        swal({
          title: "😇 Se cancelo la acción 😎",
          timer: 2000,
          type: "error"
        });
			}
		});
}

function activar(ideventos) {
	swal({
			title: "¿Deseas activar este registro? ",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#26a25b",
			confirmButtonText: "Si, activar",
			cancelButtonText: "No, cancelar",
			closeOnConfirm: false,
			closeOnCancel: false
		},
		function (isConfirm) {
			if (isConfirm) {
				$.post("../ajax/CEventos.php?op=activar", {
					ideventos: ideventos
				}, function (datos) {
          if (datos == 1) {
            swal({
              title: "😃 Se activo con exitó 😀",
              timer: 2000,
              type: "success"
            });
            /*alertify.success('😃 Agregado con exitó 😀');*/
          } else {
            swal({
              title: "😓 Error en activar 😔",
              timer: 2000,
              type: "error"
            });
          }
					tabla.ajax.reload();
				});
			} else {
        swal({
          title: "😇 Se cancelo la acción 😎",
          timer: 2000,
          type: "error"
        });
			}
		});
}

function eliminar(ideventos) {
	swal({
			title: "¿Deseas eliminar permanentemente este registro? ",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Si, eliminar",
			cancelButtonText: "No, cancelar",
			closeOnConfirm: false,
			closeOnCancel: false
		},
		function (isConfirm) {
			if (isConfirm) {
				$.post("../ajax/CEventos.php?op=eliminar", {
					ideventos: ideventos
				}, function (datos) {
          if (datos == 1) {
            swal({
              title: "😃 Se eliminar con exitó 😀",
              timer: 2000,
              type: "success"
            });
            /*alertify.success('😃 Agregado con exitó 😀');*/
          } else {
            swal({
              title: "😓 Error en eliminar 😔",
              timer: 2000,
              type: "error"
            });
          }
					tabla.ajax.reload();
				});
			} else {
        swal({
          title: "😇 Se cancelo la acción 😎",
          timer: 2000,
          type: "error"
        });
			}
		});
}

//funcion fecha

var todayDate = new Date();
var getTodayDate = todayDate.getDate();
var getTodayMonth = todayDate.getMonth() + 1;
var getTodayFullYear = todayDate.getFullYear();
var getCurrentDateTime = getTodayFullYear + '-' + getTodayMonth + '-' + getTodayDate;
//document.getElementsByTagName(getCurrentDateTime);
$("#fechaActual").val(getCurrentDateTime);

innit();
