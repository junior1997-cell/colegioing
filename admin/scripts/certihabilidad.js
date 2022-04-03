var tabla;
var tabla1;
function innit() {
  $("#btn_add_carousel").click(function () {
    $("#add_carousel").modal("show");
  });

  $("#btn_close_carousel").click(function () {
    $("#add_carousel").modal("hide");
    limpiar();
  });

  $("#formulario_carousel").on("submit", function (e) {
    guardaryeditar(e);
  });

  $("#foto_i").click(function () {
    $("#foto").trigger("click");
  });

  $("#foto").change(function (e) {
    addImage(e, $("#foto").attr("id"));
  });

  listar();
}

// ....................::: LIMPIAR FORMULARIOS CERTIFICADO :::...................
function limpiar() {
  $("#idcertificadoH").val("");
  $("#titulo").val("");
  $("#descripcion").val("");

  $("#foto_i").attr("src", "recursos/img/img_defecto.png");
  $("#foto").val("");
  $("#foto_actual").val("");
}

// ........................... :::: GUARDAR Y EDITAR CERTIFICADO :::: ........................
function guardaryeditar(e) {
    e.preventDefault();
    var formData = new FormData($("#formulario_carousel")[0]);
    $.ajax({
        url: "../ajax/Ccertihabilidad.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
            tabla.ajax.reload();
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
            $("#add_carousel").modal("hide");
            limpiar();
        },
    });
}


// ........................ :::: PREVISUALIZAR LAS IMAGENES DEL CERTIFCADO ::: ............................
function addImage(e, id) {
    var file = e.target.files[0],
        imageType = /image.*/;
    var sizeByte = file.size;

    var sizekiloBytes = parseInt(sizeByte / 1024);
    var sizemegaBytes = sizeByte / 1000000;
    //alert("KILO"+sizekiloBytes+"MEGA"+sizemegaBytes)
    if (!file.type.match(imageType)) return;
    if (sizekiloBytes < 90000) {
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

// ...................... ::: LISTAR TABLA CERTIFICADOS ::: ........................
function listar() {
    tabla = $("#tbllistado_carousel")
        .dataTable({
            aProcessing: true,
            aServerSide: true,
            dom: "Bfrtip",
            language: {
                responsive: true,
                url: "recursos/js/idioma.json",
            },
            ajax: {
                url: "../ajax/Ccertihabilidad.php?op=listar",
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

// ............................... :::: MOSTAR UNA CERTIFICADO PARA EDITAR :::: .....................
function mostrar(idcertificadoH) {
    $.post(
        "../ajax/Ccertihabilidad.php?op=mostrar",
        {
            idcertificadoH: idcertificadoH,
        },
        function (data, status) {
            data = JSON.parse(data);

            $("#add_carousel").modal("show");
            $("#idcertificadoH").val(data.idcertifhabilidad);
            $("#titulo").val(data.titulo);
            $("#descripcion").val(data.descripcion);
            $("#foto_actual").val(data.foto);

            if (data.foto == "") {
                $("#foto_i").attr("src", "recursos/img/img_defecto.png");
            } else {
                $("#foto_i").attr("src", "../multimedia/certificadoH/" + data.foto);
            }
        }
    );
}

// ......................... ::: DESACTIVAR CERTIFICADO ::::: ....................
function desactivar(idcertificadoH) {
    swal(
        {
            title: "¿Deseas desactivar este registro? ",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si, desactivar",
            cancelButtonText: "No, cancelar",
            closeOnConfirm: false,
            closeOnCancel: false,
        },
        function (isConfirm) {
            if (isConfirm) {
                $.post(
                    "../ajax/Ccertihabilidad.php?op=desactivar",
                    {
                        idcertificadoH: idcertificadoH,
                    },
                    function (datos) {
                        if (datos == 1) {
                            swal({
                                title: "😃 Se desactivar con exitó 😀",
                                timer: 2000,
                                type: "success",
                            });
                            /*alertify.success('😃 Agregado con exitó 😀');*/
                        } else {
                            swal({
                                title: "😓 Error en desactivar 😔",
                                timer: 2000,
                                type: "error",
                            });
                        }
                        tabla.ajax.reload();
                        tabla.ajax.reload();
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

// ................ ::::: ACTIVAR CERTIFICADOS ::::. ...............
function activar(idcertificadoH) {
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
                    "../ajax/Ccertihabilidad.php?op=activar",
                    {
                        idcertificadoH: idcertificadoH,
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
                        tabla.ajax.reload();
                        tabla.ajax.reload();
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

innit();
