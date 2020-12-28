var tabla;
function innit() {
  $("#fecha").val(getFecha());
  $("#a_ver_doc").hide();
  $("#btn_add_paquetes").click(function() {
      $("#add_paquetes").modal("show");
      $("#a_ver_doc").hide();
  });
  $("#btn_close_noticias").click(function() {
      $("#add_paquetes").modal("hide");
      limpiar();
  });

  $("#formulario_noticias").on("submit", function (e) {
        guardaryeditar_noticias(e);
    });

  $("#foto_p_i").click(function() {
    $('#foto_p').trigger('click');
  });
  $("#foto_s_i").click(function() {
    $('#foto_s').trigger('click');
  });
  $("#foto_s2_i").click(function() {
    $('#foto_s2').trigger('click');
  });
  $("#btn_importar_doc").click(function() {
    $('#documento').trigger('click');
  });
  $("#foto1").change(function(e) {
    addImage(e,$("#foto1").attr("id"));
  });
  $("#foto2").change(function(e) {
    addImage(e,$("#foto2").attr("id"))
  });
  $("#foto3").change(function(e) {
    addImage(e,$("#foto3").attr("id"));
  });
  $("#documento").change(function(e) {
    var fileName = e.target.files[0].name;
    $('#documento_actual').val(fileName)
  });
  listar()
}

function limpiar(){
  $("#idnoticias_comunicados").val("");
  $("#titulo").val("");
  $("#idtipo_nc").val("1");
  $("#fecha").val(getFecha());
  $("#cuerpo").val("");
  $("#foto_p_i").attr("src", "recursos/img/img_defecto.png");
  $("#foto_p").val("");
  $("#foto_p_actual").val("");
  $("#foto_s_i").attr("src", "recursos/img/img_defecto.png");
  $("#foto_s").val("");
  $("#foto_s_actual").val("");
  $("#foto_s2_i").attr("src", "recursos/img/img_defecto.png");
  $("#foto_s2").val("");
  $("#foto_s2_actual").val("");
  $("#documento").val("");
  $("#documento_actual").val("");
}

function guardaryeditar_noticias(e) {
  e.preventDefault();
  var formData = new FormData($("#formulario_noticias")[0]);
  $.ajax({
    url: "../ajax/noticias_comunicados.php?op=guardaryeditar",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(datos) {
      console.log(datos);
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
    },
    xhr: function () {
        var xhr = new window.XMLHttpRequest();
        xhr.upload.addEventListener("progress", function (evt) {
            if (evt.lengthComputable) {
                var percentComplete = (evt.loaded / evt.total)*100;
                console.log(percentComplete + '%');
                $("#barra_progress").css({"width": percentComplete+'%'});
                $("#barra_progress").text(percentComplete+"%");
                if (percentComplete === 100) {
                   setTimeout(l_m, 600);
                }
            }
        }, false);
        return xhr;
    }
  });
}

function l_m(){
  $("#add_paquetes").modal("hide")
  limpiar();
  $("#barra_progress").css({"width":'0%'});
  $("#barra_progress").text("0%");
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
  if (sizekiloBytes < 600) {
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
	tabla = $("#tbllistado_nc").dataTable({
		"aProcessing": true,
		"aServerSide": true,
		dom: 'Bfrtip',
    "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
    "ajax": {
			url: '../ajax/noticias_comunicados.php?op=listar',
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
function mostrar(idnoticias_comunicados) {
  $("#a_ver_doc").show();
  $.post("../ajax/noticias_comunicados.php?op=mostrar", {
    idnoticias_comunicados: idnoticias_comunicados
  }, function(data, status) {
    data = JSON.parse(data);
    console.log(data)
    $("#add_paquetes").modal("show");
    $("#idnoticias_comunicados").val(data.idnoticias_comunicados);
    $("#titulo").val(data.titulo);
    $("#idtipo_nc").val(data.idtipo_nc);
    $("#fecha").val(data.fecha);
    $("#cuerpo").val(data.cuerpo);
    $("#foto_p_actual").val(data.foto_p);
    $("#foto_s_actual").val(data.foto_s);
    $("#foto_s2_actual").val(data.foto_s2);
    if (data.foto_p == "") {
      $("#foto_p_i").attr("src", "recursos/img/img_defecto.png");
    } else {
      $("#foto_p_i").attr("src", "../multimedia/noticias_comunicados/" + data.foto_p);
    }
    if (data.foto_s == "") {
      $("#foto_s_i").attr("src", "recursos/img/img_defecto.png");
    } else {
      $("#foto_s_i").attr("src", "../multimedia/noticias_comunicados/" + data.foto_s);
    }
    if (data.foto_s2 == "") {
      $("#foto_s2_i").attr("src", "recursos/img/img_defecto.png");
    } else {
      $("#foto_s2_i").attr("src", "../multimedia/noticias_comunicados/" + data.foto_s2);
    }

    $("#documento_actual").val(data.documento);
    if (data.documento == "") {
      $("#a_ver_doc").hide();
    } else {
      $("#a_ver_doc").attr("href", "../multimedia/noticias_comunicados/" + data.documento);
    }

  })
}

function desactivar(idnoticias_comunicados) {
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
				$.post("../ajax/noticias_comunicados.php?op=desactivar", {
					idnoticias_comunicados: idnoticias_comunicados
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

function activar(idnoticias_comunicados) {
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
				$.post("../ajax/noticias_comunicados.php?op=activar", {
					idnoticias_comunicados: idnoticias_comunicados
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

function getFecha(){
  var fecha = new Date();
  var dia_mes = fecha.getDate();
  var mes = fecha.getMonth()+1;
  var year = fecha.getFullYear();
  if (mes < 10) {
    mes = "0"+mes;
  }
  if (dia_mes < 10) {
    dia_mes = "0"+dia_mes;
  }
  var fecha_completa = (year+"-"+mes+"-"+dia_mes);
  return fecha_completa;
}

innit();
