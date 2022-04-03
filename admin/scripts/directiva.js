var tabla;
var tabla_departamental;
var historial_tabla_departamental;
var tabla_agronomo;
var historial_tabla_agronomo;
var tabla_ambiental;
var historial_tabla_ambiental;
var tabla_industrial;
var historial_tabla_industrial;
var tabla_civil;
var historial_tabla_civil;


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
    
    listar_directiva_departamental();
    listar_directiva_agronomo()
    listar_directiva_ambiental();
    listar_directiva_industrial();
    listar_directiva_civiles();

    // histirial
    historial_directiva_departamental();
    historial_directiva_agronomo();
    historial_directiva_ambiental();
    historial_listar_directiva_industrial();
    historial_listar_directiva_civiles();
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
            tabla_departamental.ajax.reload();
            tabla_agronomo.ajax.reload();
            tabla_ambiental.ajax.reload();
            tabla_industrial.ajax.reload();
            tabla_civil.ajax.reload();
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
function listar_directiva_departamental() {
    tabla_departamental = $('#ListarDirectivaDepartamental').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]],
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/CDirectiva.php?op=ListarDirectivaDepartamental',
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

// ================================ LISTAR CONSEJO DEPARTAMENTAL =============================------------------
function historial_directiva_departamental() {
    historial_tabla_departamental = $('#historial_directiva_departmental').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]],
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/CDirectiva.php?op=Historial_DirectivaDepartamental',
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

// ================================ LISTAR DIRECTIVA AGRONOMO =============================
function listar_directiva_agronomo() {
    tabla_agronomo = $('#ListarDirectivaAgronomo').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]],
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/CDirectiva.php?op=listarDirectivaAgronomos',
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

// ================================ LISTAR DIRECTIVA AGRONOMO =============================-----------------
function historial_directiva_agronomo() {
    historial_tabla_agronomo = $('#historial_directiva_agronomo').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]],
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/CDirectiva.php?op=Historial_listarDirectivaAgronomos',
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

// ================================ LISTAR DIRECTIVA AMBIENTAL =============================
function listar_directiva_ambiental() {
    tabla_ambiental = $('#ListarDirectivaAmbiental').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]],
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/CDirectiva.php?op=listarDirectivaAmbiental',
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

// ================================ LISTAR DIRECTIVA AMBIENTAL =============================-------------
function historial_directiva_ambiental() {
    historial_tabla_ambiental = $('#historial_directiva_ambiental').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]],
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/CDirectiva.php?op=Historial_listarDirectivaAmbiental',
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

// ================================ LISTAR DIRECTIVA INDUSTRIAL =============================
function listar_directiva_industrial() {
    tabla_industrial = $('#ListarDirectivaIndustrial').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]],
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/CDirectiva.php?op=listarDirectivaIndustrial',
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

// ================================ LISTAR DIRECTIVA INDUSTRIAL =============================
function historial_listar_directiva_industrial() {
    historial_tabla_industrial = $('#historial_directiva_industrial').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]],
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/CDirectiva.php?op=Historial_listarDirectivaIndustrial',
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

// ================================ LISTAR DIRECTIVA CIVIL =============================
function listar_directiva_civiles() {
    tabla_civil = $('#listarDirectivaCivil').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]],
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/CDirectiva.php?op=listarDirectivaCivil',
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

// ================================ LISTAR DIRECTIVA CIVIL =============================
function historial_listar_directiva_civiles() {
    historial_tabla_civil = $('#historial_directiva_civil').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]],
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/CDirectiva.php?op=Historial_listarDirectivaCivil',
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
      console.log(data);
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
        title: "¿Deseas enviar a HISTORIAL este Miembro?",
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
                            title: "Se Envió con éxito.",
                            type: "success",
                            timer: 1500,
                            showConfirmButton: false
                        });
                        tabla_departamental.ajax.reload();
                        historial_tabla_departamental.ajax.reload();
                        tabla_agronomo.ajax.reload();
                        historial_tabla_agronomo.ajax.reload();
                        tabla_ambiental.ajax.reload();
                        historial_tabla_ambiental.ajax.reload();
                        tabla_industrial.ajax.reload();
                        historial_tabla_industrial.ajax.reload();
                        tabla_civil.ajax.reload();
                        historial_tabla_civil.ajax.reload();
                    }
                });
            } else {
                swal({
                    title: "Se canceló la acción",
                    type: "error",
                    timer: 1500,
                    showConfirmButton: false
                });
                tabla_departamental.ajax.reload();
                historial_tabla_departamental.ajax.reload();
                tabla_agronomo.ajax.reload();
                tabla_ambiental.ajax.reload();
                historial_tabla_ambiental.ajax.reload();
                tabla_industrial.ajax.reload();
                historial_tabla_industrial.ajax.reload();
                tabla_civil.ajax.reload();
                historial_tabla_civil.ajax.reload();

            }
        }
    );

}
// =============================================== ACTIVAR DECANO ==================================================
function activar_directiva(id_directiva) {
    console.log(id_directiva);
    swal({
        title: "¿Deseas RECUPERAR este Miembro?",
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
                        title: "Se Recupero con éxito.",
                        type: "success",
                        timer: 1500,
                        showConfirmButton: false
                    });
                    tabla_departamental.ajax.reload();
                    historial_tabla_departamental.ajax.reload();
                    tabla_agronomo.ajax.reload();
                    historial_tabla_agronomo.ajax.reload();
                    tabla_ambiental.ajax.reload();
                    historial_tabla_ambiental.ajax.reload();
                    tabla_industrial.ajax.reload();
                    historial_tabla_industrial.ajax.reload();
                    tabla_civil.ajax.reload();
                    historial_tabla_civil.ajax.reload();

                });

                }
                else {
                swal({
                    title: "Se canceló la acción",
                    type: "error",
                    timer: 1500,
                    showConfirmButton: false
                });
                tabla_departamental.ajax.reload();
                historial_tabla_departamental.ajax.reload();
                tabla_agronomo.ajax.reload();
                historial_tabla_agronomo.ajax.reload();
                tabla_ambiental.ajax.reload();
                historial_tabla_ambiental.ajax.reload();
                tabla_industrial.ajax.reload();
                historial_tabla_industrial.ajax.reload();
                tabla_civil.ajax.reload();
                historial_tabla_civil.ajax.reload();
                 
            }
        }
    );
}
 
init();