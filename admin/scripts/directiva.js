var tabla;

function init() {
    // formulario decanos
    $("#formulario_directiva").on("submit", function (e) {
        guardaryeditarDirectiva(e);
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
    
    listar_directiva(); 
}

// tabla Directivas
function guardaryeditarDirectiva(e) {
    e.preventDefault();
    var formData = new FormData($("#formulario_directiva")[0]);
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
                    title: "Miembro Directivo Registrado.",
                    type: "success",
                    text: "Exito.",
                    timer: 1500,
                    showConfirmButton: false
                });
                 
            } else {
                swal({
                    title: "¡No se Pudo Registrar Miembro!",
                    type: "error",
                    text: "Error.",
                    timer: 1500,
                    showConfirmButton: false
                });
                 
            }
            console.log(datos);
            tabla.ajax.reload();
        }
    });
        $("#agregar_usuario").modal("hide");
     limpiarDirectiva();
}

function limpiarDirectiva(){
  $("#cip_directiva").val("");
  $("#cargo_directiva").val("");
  $("#miembro_directiva").val("");
  $("#correo_directiva").val("");
  $("#id_tipo_directiva").html("Seleccione");
  $("#id_tipo_directiva2").val("");
  $("#id_directiva").val("");
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
                    url: '../ajax/CDirectiva.php?op=listarDirectiva',
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
function mostrarDirectiva(iddirectiva){
  $.post("../ajax/CDirectiva.php?op=mostrarDirectiva", {
    iddirectiva: iddirectiva
  }, function (data){
      data = JSON.parse(data);
      // console.log(data);
      $('#agregar_usuario').modal('show');
      $("#id_directiva").val(data[0].id_directiva);
      $("#cip_directiva").val(data[0].cip_directiva);
      $("#cargo_directiva").val(data[0].cargo_directiva);
      $("#miembro_directiva").val(data[0].miembro_directiva);
      $("#correo_directiva").val(data[0].correo_directiva);
      $("#id_tipo_directiva").html(data[0].id_tipo_directiva);
      $("#id_tipo_directiva2").val(data[0].id_tipo_directiva2);
  });
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

// =============================================== DESACTIVAR DIRECTIVA ==================================================
function desactivar_directiva(id_directiva) {
    console.log(id_directiva);
    swal({
        title: "¿Deseas DESACTIVAR este Miembro?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, Desactivar",
        cancelButtonText: "No, Cancelar ",
        closeOnConfirm: false,
        closeOnCancel: false},
        function (isConfirm) {
            if (isConfirm) {
                $.post("../ajax/CDirectiva.php?op=desactivar_directiva", {id_directiva: id_directiva}, function (e) {
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
function activar_directiva(id_directiva) {
    console.log(id_directiva);
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
                $.post("../ajax/CDirectiva.php?op=activar_directiva", {id_directiva: id_directiva}, function (e) {
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