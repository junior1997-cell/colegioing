var tabla2;

function init() {

  $("#formulario_costo").on("submit", function (e) {
    guardaryEditarCosto(e);
  });   

}
function limpiar_costo() {
  $("#idmontos").val("");
  $("#id_certificadoH").val("");
  $("#cost_por_obra").val("");
  $("#monto").val("");
}
// MOSTRAR PARA EDITAR COSTO
function agregar_edit_cost(idmontos) {
    console.log(idmontos);
     $("#idCertifhabilidad").val(idmontos);
    $(document).ready(function () {
        $("#add_edit_costo_modal").modal("show");
    });
}

// ............................... :::: MOSTAR UNA CERTIFICADO PARA EDITAR :::: .....................
function mostrar_edit_costo(idmontos) {
    $("#add_edit_costo_modal").modal("show");
    $.post(
        "../ajax/Ccertihabilidad.php?op=mostrar_edit_costo",
        {
            idmontos:idmontos,
        },
        function (data, status) {
            data = JSON.parse(data);

            
            $("#idmontos").val(data.idmontos);
            $("#idCertifhabilidad").val(data.idCertifhabilidad);
            $("#cost_por_obra").val(data.cost_por_obra);
            $("#monto").val(data.monto);
            
        }
    );
}

// ............................ ::: CERRAR MODAL COSTOS :::: ..............................
function cerrar_form_costo() {
    $(document).ready(function () {
        $("#add_edit_costo_modal").modal("hide");
        limpiar_costo();
    });
    limpiar_costo();
}

// ............................ ::: TABLA DE VER COSTOS :::: ..............................
function listar_costo(idmontos) {
    $(document).ready(function () {
        $("#ver_costo").modal("show");
    });

    console.log("id para ver costo: " + idmontos);

    tabla2 = $("#tbllistado_costos")
        .dataTable({
            aProcessing: true,
            aServerSide: true,
            dom: "Bfrtip",
            language: {
                responsive: true,
                url: "recursos/js/idioma.json",
            },
            ajax: {
                url: "../ajax/Ccertihabilidad.php?op=listarcosto&id=" + idmontos,
                type: "get",
                dataType: "json",
                error: function (e) {
                    console.log(e.responseText);
                },
            },
            bDestroy: true,
            iDisplayLength: 10, //Paginación
            order: [[0, "asc"]], //Ordenar (columna,orden)
        })
        .DataTable();
}

function limpiar_costo() {
    $("#idmontos").val("");
    $("#idCertifhabilidad").val("");
    $("#cost_por_obra").val("");
    $("#monto").val("");

    
}

function desactivar_costo(idmontos) {
    swal(
        {
            title: "¿Deseas Desactivar este registro? ",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si, eliminar",
            cancelButtonText: "No, cancelar",
            closeOnConfirm: false,
            closeOnCancel: false,
        },
        function (isConfirm) {
            if (isConfirm) {
                $.post(
                    "../ajax/Ccertihabilidad.php?op=desactivar_costo",
                    {
                        idmontos: idmontos,
                    },
                    function (datos) {
                        if (datos == 1) {
                            swal({
                                title: "😃 Se Desactivó con exitó 😀",
                                timer: 2000,
                                type: "success",
                            });
                            /*alertify.success('😃 Agregado con exitó 😀');*/
                        } else {
                            swal({
                                title: "😓 Error en Desactivó 😔",
                                timer: 2000,
                                type: "error",
                            });
                        }
                        tabla2.ajax.reload();
                    }
                );
            } else {
                swal({
                    title: "😇 Se cancelo la acción 😎",
                    timer: 2000,
                    type: "error",
                });
            }
        }
    );
}

function activar_costo(idmontos) {
    swal(
        {
            title: "¿Deseas activar este registro? ",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#26a25b",
            confirmButtonText: "Si, activar",
            cancelButtonText: "No, cancelar",
            closeOnConfirm: false,
            closeOnCancel: false,
        },
        function (isConfirm) {
            if (isConfirm) {
                $.post(
                    "../ajax/Ccertihabilidad.php?op=activar_costo",
                    {
                        idmontos: idmontos,
                    },
                    function (datos) {
                        if (datos == 1) {
                            swal({
                                title: "😃 Se activo con exitó 😀",
                                timer: 2000,
                                type: "success",
                            });
                            /*alertify.success('😃 Agregado con exitó 😀');*/
                        } else {
                            swal({
                                title: "😓 Error en activar 😔",
                                timer: 2000,
                                type: "error",
                            });
                        }
                        tabla2.ajax.reload();
                    }
                );
            } else {
                swal({
                    title: "😇 Se cancelo la acción 😎",
                    timer: 2000,
                    type: "error",
                });
            }
        }
    );
}

// ........................... :::: GUARDAR Y EDITAR MONTO :::: ........................
function guardaryEditarCosto(e) {
    e.preventDefault();
    var formData = new FormData($("#formulario_costo")[0]);
    $.ajax({
        url: "../ajax/Ccertihabilidad.php?op=guardaryEditarMonto",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
            tabla2.ajax.reload();
            if (datos == 1) {
                swal({
                    title: "😃 Exitó 😀",
                    timer: 2000,
                    type: "success",
                });
                /*alertify.success('😃 Agregado con exitó 😀');*/
            } else {
                swal({
                    title: "😓 Error 😔",
                    timer: 2000,
                    type: "error",
                });
            }
            $("#add_edit_costo_modal").modal("hide");
            limpiar_costo();
        },
    });
}

init();