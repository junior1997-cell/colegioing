var tabla;

function init() {
    // formulario decanos
    $("#formulario_historia").on("submit", function (e) {
        guardaryeditarDecano(e);
    });

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
    
    listar_directiva(); 
}

// tabla decanos
function guardaryeditarDecano(e) {
    e.preventDefault();
    var formData = new FormData($("#formulario_historia")[0]);
    console.log(formData);
    $.ajax({
        url: "../ajax/CDirectiva.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
         if (datos == 1) {
                swal({
                    title: "Decano Registrado.",
                    type: "success",
                    text: "Exito.",
                    timer: 1500,
                    showConfirmButton: false
                });
            } else {
                swal({
                    title: "¡No se Pudo Registrar Decano!",
                    type: "error",
                    text: "Error.",
                    timer: 1500,
                    showConfirmButton: false
                });
            }
        tabla.ajax.reload();
        }
    });
        $("#agregar_usuario").modal("hide");
        limpiar();
}

function limpiar(){
  $("#decano_periodo").val("");
  $("#decano_nom_ape").val("");
  $("#decano_profesion").val("");
  $("#decano_cip").val("");
  $("#id_decano").val("");
}
// ================================ LISTAR CONSEJO DEPARTAMENTAL =============================
function listar_directiva() {
    tabla = $('#ListarDirectiva').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]],
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/CDirectiva.php?op=listarDecano',
                    type: "get",
                    dataType: "json",
                    error: function (e) {
                        console.log(e.responseText);
                    }
                },
        "bDestroy": true,
        responsive: true,
        "iDisplayLength": 10, //Paginación
        "order": [[0, "asc"]]
    }).DataTable();
}

// mostrar decano
function mostrarDecano(iddecano){
  $.post("../ajax/CDirectiva.php?op=mostrarDecano", {
    iddecano: iddecano
  }, function (data){
      data = JSON.parse(data);
      // console.log(data);
      $('#agregar_usuario').modal('show');
      $("#decano_periodo").val(data[0].decano_periodo);
      $("#decano_nom_ape").val(data[0].decano_nom_ape);
      $("#decano_profesion").val(data[0].decano_profesion);
      $("#decano_cip").val(data[0].decano_cip);
      $("#id_decano").val(data[0].id_decano);
  });
}

function contactanos(a) {
    $("#reseña_historia").prop('disabled', a);
    $('#himno').prop("disabled", a);
}

function editar_contactanos() {
    contactanos(false);
    $('#btn_editar_m').prop("disabled", true);
}

function mostrar_contactanos() {
    $.post("../ajax/CDirectiva.php?op=mostrar", {}, function(data, status) {
        data = JSON.parse(data);
        // console.log(data);
        // console
        $("#reseña_historia").val(data.reseña_historia);
        $("#himno").val(data.himno);
    })
}

function actualizar_contactanos(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    var formData = new FormData($("#formulario_contactanos")[0]);
    $.ajax({
        url: "../ajax/CDirectiva.php?op=actualizar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos) {
            if (datos == 1) {
                swal({
                    title: "😃😃 Exitó 😀😀",
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
function empresa(a) {
    $('#reseña_historia').prop("disabled", a);
    $('#himno').prop("disabled", a);
    $('#btn_actualizar_e').prop("disabled", a);
}

function editar_empresa() {
    empresa(false);
    $('#btn_editar_e').prop("disabled", true);
}

function mostrar_empresa() {
    $.post("../ajax/CDirectiva.php?op=mostrar", {}, function(data, status) {
        data = JSON.parse(data);
        // console.log(data);
        
        $('#reseña_historia').val(decodeHtml(data.reseña_historia));
        $('#himno').val(decodeHtml(data.himno));
    })
}

function actualizar_empresa(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    var formData = new FormData($("#formulario_empresa")[0]);
    $.ajax({
        url: "../ajax/CDirectiva.php?op=actualizar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos) {
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

// =============================================== DESACTIVAR DECANO ==================================================
function desactivar_decano(id_decano) {
    console.log(id_decano);
    swal({
        title: "¿Deseas DESACTIVAR este Decano?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, Desactivar",
        cancelButtonText: "No, Cancelar ",
        closeOnConfirm: false,
        closeOnCancel: false},
        function (isConfirm) {
            if (isConfirm) {
                $.post("../ajax/CDirectiva.php?op=desactivar_decano", {id_decano: id_decano}, function (e) {
                    if (e) {
                        swal({
                            title: "Se Desactivó con éxito.",
                            type: "success",
                            timer: 1500,
                            showConfirmButton: false
                        });
                        tabla.ajax.reload();
                    }
                });
            } else {
                swal({
                    title: "Se canceló la acción",
                    type: "error",
                    timer: 1500,
                    showConfirmButton: false
                });
                tabla.ajax.reload();
            }
        }
    );

}
// =============================================== ACTIVAR DECANO ==================================================
function activar_decano(id_decano) {
    console.log(id_decano);
    swal({
        title: "¿Deseas ACTIVAR este Decano?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#26a25b",
        confirmButtonText: "Si,activar",
        cancelButtonText: "No, cancelar",
        closeOnConfirm: false,
        closeOnCancel: false},
        function (isConfirm) {
            if (isConfirm) {
                $.post("../ajax/CDirectiva.php?op=activar_decano", {id_decano: id_decano}, function (e) {
                    swal({
                        title: "Se activó con éxito.",
                        type: "success",
                        timer: 1500,
                        showConfirmButton: false
                    });
                    tabla.ajax.reload();
                });

                }
                else {
                swal({
                    title: "Se canceló la acción",
                    type: "error",
                    timer: 1500,
                    showConfirmButton: false
                });
                tabla.ajax.reload();
            }
        }
    );
}
init();