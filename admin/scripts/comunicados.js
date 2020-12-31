var tabla;

function innit() {
  $("#btn_add_comunicados").click(function() {
    $("#add_comunicados").modal("show");

  });

  $("#btn_close_turisticos").click(function() {
    $("#add_comunicados").modal("hide");
    limpiar();
  });

  $("#formulario_comunicados").on("submit", function(e) {
    guardaryeditar(e);
  });

  $("#foto1_i").click(function() {
    $('#foto1').trigger('click');
  });

  $("#foto2_i").click(function() {
    $('#foto2').trigger('click');
  });

  $("#foto1").change(function(e) {
    addImage(e, $("#foto1").attr("id"));
  });

  $("#foto2").change(function(e) {
    addImage(e, $("#foto2").attr("id"))
  });
  //funcion fecha

var todayDate = new Date();
var getTodayDate = todayDate.getDate();
var getTodayMonth = todayDate.getMonth() + 1;
var getTodayFullYear = todayDate.getFullYear();
var getCurrentDateTime = getTodayDate + '/' + getTodayMonth + '/' + getTodayFullYear;

//document.getElementsByTagName(getCurrentDateTime);
$("#fechaActual").val(getCurrentDateTime);

  listar()
}

function limpiar() {
  $("#idcomunicado").val("");
  $("#titulo").val("");
  $("#descripcion").val("");

  $("#foto1_i").attr("src", "recursos/img/img_defecto.png");
  $("#foto1").val("");
  $("#foto1_actual").val("");
  $("#foto2_i").attr("src", "recursos/img/img_defecto.png");
  $("#foto2").val("");
  $("#foto2_actual").val("");

}

function guardaryeditar(e) {
  e.preventDefault();
  var formData = new FormData($("#formulario_comunicados")[0]);
  $.ajax({
    url: "../ajax/Ccomunicados.php?op=guardaryeditar",
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
    },
    xhr: function() {
      var xhr = new window.XMLHttpRequest();
      xhr.upload.addEventListener("progress", function(evt) {
        if (evt.lengthComputable) {
          var percentComplete = (evt.loaded / evt.total) * 100;
          /*console.log(percentComplete + '%');*/
          $("#barra_progress").css({
            "width": percentComplete + '%'
          });
          $("#barra_progress").text(percentComplete + "%");
          if (percentComplete === 100) {
            setTimeout(l_m, 600);
          }
        }
      }, false);
      return xhr;
    }
  });
}

function l_m() {
  $("#add_comunicados").modal("hide")
  limpiar();
  $("#barra_progress").css({
    "width": '0%'
  });
  $("#barra_progress").text("0%");
}

/* PREVISUALIZAR LAS IMAGENES */
function addImage(e, id) {
  var file = e.target.files[0],
    imageType = /image.*/;
  var sizeByte = file.size;

  var sizekiloBytes = parseInt(sizeByte / 1024);
  var sizemegaBytes = (sizeByte / 1000000);
  //alert("KILO"+sizekiloBytes+"MEGA"+sizemegaBytes)
  if (!file.type.match(imageType))
    return;
  if (sizekiloBytes < 6000) {
    var reader = new FileReader();
    reader.onload = fileOnload;

    function fileOnload(e) {
      var result = e.target.result;
      $("#" + id + "_i").attr("src", result);
    }
    reader.readAsDataURL(file);
  } else {
    $("#" + id + "_i").attr("src", "recursos/img/img_error.png");
    $("#" + id).val("");
  }
}

/*lISTA DE NOTICIAS Y COMUNICADOS*/
function listar() {
  tabla = $("#tbllistado_turisticos").dataTable({
    "aProcessing": true,
    "aServerSide": true,
    dom: 'Bfrtip',
    "language": {
      responsive: true,
      url: 'recursos/js/idioma.json'
    },
    "ajax": {
      url: '../ajax/Ccomunicados.php?op=listar',
      type: "get",
      dataType: "json",
      error: function(e) {
        console.log(e.responseText);
      }
    },
    "bDestroy": true,
    "iDisplayLength": 10, //Paginación
    "order": [
      [0, "asc"]
    ] //Ordenar (columna,orden)
  }).DataTable();
}

/*MOSTAR UNA NOTICIA/COMENTARIO*/
function mostrar(idcomunicado) {
  $.post("../ajax/Ccomunicados.php?op=mostrar", {
    idcomunicado: idcomunicado
  }, function(data, status) {
    data = JSON.parse(data);
    $("#add_comunicados").modal("show");
    $("#idcomunicado").val(data.idcomunicado);
    $("#titulo").val(data.titulo);

    $("#descripcion").val(decodeHtml(data.descripcion));

    //$("#fechaActual").val(data.fecha);

  })
}

function desactivar(idcomunicado) {
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
    function(isConfirm) {
      if (isConfirm) {
        $.post("../ajax/Ccomunicados.php?op=desactivar", {
          idcomunicado: idcomunicado
        }, function(datos) {
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

function activar(idcomunicado) {
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
    function(isConfirm) {
      if (isConfirm) {
        $.post("../ajax/Ccomunicados.php?op=activar", {
          idcomunicado: idcomunicado
        }, function(datos) {
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

function decodeHtml(str) {
  var map = {
    '&amp;': '&',
    '&lt;': '<',
    '&gt;': '>',
    '&quot;': '"',
    '&#039;': "'",
  };
  return str.replace(/&amp;|&lt;|&gt;|&quot;|&#039;/g, function(m) {
    return map[m];
  });
}


innit();
