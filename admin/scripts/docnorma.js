var tabla;

function init() {
    // formulario decanos
    $("#formulario_docnorma").on("submit", function (e) {
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
    
    listar_docnorma(); 
}

// tabla Directivas
function guardaryeditarDirectiva(e) {
    e.preventDefault();
    var formData = new FormData($("#formulario_docnorma")[0]);
    console.log(formData);
    $.ajax({
        url: "../ajax/CDocnorma.php?op=guardaryeditar",
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
     limpiarDocnorma();
}

function limpiarDocnorma(){
  $("#cip_directiva").val("");
  $("#cargo_directiva").val("");
  $("#miembro_directiva").val("");
  $("#correo_directiva").val("");
  $("#id_tipo_directiva").html("Seleccione");
  $("#id_tipo_directiva2").val("");
  $("#id_docnorma").val("");
}
// ================================ LISTAR CONSEJO DEPARTAMENTAL =============================
function listar_docnorma() {
    tabla = $('#ListarDocnorma').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]],
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/CDocnorma.php?op=listar_docnorma',
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
function mostrar_docnorma(id_docnorma){
  $.post("../ajax/CDocnorma.php?op=mostrar_docnorma", {
    id_docnorma: id_docnorma
  }, function (data){
      data = JSON.parse(data);
      console.log(data);
      $('#agregar_usuario').modal('show');
      $("#id_docnorma").val(data[0].id_docnorma);
      $("#doc2").val(data[0].doc_doc);
      $("#nombre_doc").val(data[0].nombre_doc);
      $("#nombre_tipo_doc").html(data[0].nombre_tipo_doc);
      $("#tipo_doc_actual").val(data[0].idtipodoc);
      $("#doc").val(data[0].nombre_doc);
  });
  PreviewImage();
}




function actualizar_empresa(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    var formData = new FormData($("#formulario_empresa")[0]);
    $.ajax({
        url: "../ajax/CDocnorma.php?op=actualizar",
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
function desactivar_docnorma(id_docnorma) {
    console.log(id_docnorma);
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
                $.post("../ajax/CDocnorma.php?op=desactivar_directiva", {id_docnorma: id_docnorma}, function (e) {
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
function activar_docnorma(id_docnorma) {
    console.log(id_docnorma);
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
                $.post("../ajax/CDocnorma.php?op=activar_directiva", {id_docnorma: id_docnorma}, function (e) {
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
$(".tablas").on("click", ".btnMostrarPlanClasePDF", function(){

  var pdf = $(this).attr("pdf");
  
  var a = $(this).attr("a");

  console.log("pdf", pdf);
   
  var pdf = document.getElementById('pdf');

    pdf.innerHTML = '<a href=""'+a+'"" target="blank"> Doc Tarjet Blank</a> <embed  src="'+a+'" width="100%" height="50%" ></embed>';
     


})
init();