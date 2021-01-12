var tabla;
function innit() {

  $("#btn_add_carousel").click(function() {
      $("#add_carousel").modal("show");

  });

  $("#btn_close_carousel").click(function() {
      $("#add_carousel").modal("hide");
      limpiar();
  });

  $("#formulario_carousel").on("submit", function (e) {
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
  $("#idcarousel").val("");
  $("#titulo").val("");

  $("#foto_i").attr("src", "recursos/img/img_defecto.png");
  $("#foto").val("");
  $("#foto_actual").val("");

}

function guardaryeditar(e) {
  e.preventDefault();
  var formData = new FormData($("#formulario_carousel")[0]);
  $.ajax({
    url: "../ajax/CCarousel.php?op=guardaryeditar",
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
			url: '../ajax/CCarousel.php?op=listar',
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
function mostrar(idcarousel) {
  $.post("../ajax/CCarousel.php?op=mostrar", {
    idcarousel: idcarousel
  }, function(data, status) {
    data = JSON.parse(data);

    $("#add_carousel").modal("show");
    $("#idcarousel").val(data.idcarousel);
    $("#titulo").val(data.titulo);

    $("#foto_actual").val(data.foto);

    if (data.foto == "") {
      $("#foto_i").attr("src", "recursos/img/img_defecto.png");
    } else {
      $("#foto_i").attr("src", "../multimedia/carousel/" + data.foto);
    }


  })
}

function desactivar(idcarousel) {
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
				$.post("../ajax/CCarousel.php?op=desactivar", {
					idcarousel: idcarousel
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

function activar(idcarousel) {
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
				$.post("../ajax/CCarousel.php?op=activar", {
					idcarousel: idcarousel
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

function eliminar(idcarousel) {
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
				$.post("../ajax/CCarousel.php?op=eliminar", {
					idcarousel: idcarousel
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


innit();
