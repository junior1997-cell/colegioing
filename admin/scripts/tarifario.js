var tabla;

function init() {
    // formulario decanos
    $("#formulario_tarifario").on("submit", function (e) {
        guardaryeditarDoc(e);
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
    
    listar_tarifario(); 
}

// tabla Directivas
function guardaryeditarDoc(e) {
    e.preventDefault();
    var formData = new FormData($("#formulario_tarifario")[0]);
    // console.log(formData);
    $.ajax({
        url: "../ajax/CTarifario.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
            if (datos == 1) {
                swal({
                    title: "DOCUMENTO Registrado !!",
                    type: "success",
                    text: "Exito.",
                    timer: 1500,
                    showConfirmButton: false
                });
                 
            } else {
                swal({
                    title: "¡No se Pudo Registrar DOCUMENTO!",
                    type: "error",
                    text: "Error.",
                    timer: 1500,
                    showConfirmButton: false
                });
                 
            }
            // console.log(datos);
            tabla.ajax.reload();
	    limpiarTarifario();
        }
    });
        $("#agregar_tarifario").modal("hide");
     limpiarTarifario();
}

function limpiarTarifario(){
  $("#id_tarifario").val("");
  $("#nombre_doc").val("");
  $("#miembro_directiva").val("");
  $("#correo_directiva").val("");
  $("#nombre_tipo_doc").html("Seleccione");
  $("#tipo_doc_actual").val("");
  $("#docActual").val("");
  $(".docpdf").val("");
  $("#viewer").val("");
}
// ================================ LISTAR CONSEJO DEPARTAMENTAL =============================
function listar_tarifario() {
    tabla = $('#ListarDocnorma').dataTable({
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "Todo"]],
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/CTarifario.php?op=listar_tarifario',
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
    console.log(tabla);
}

// mostrar decano
function mostrar_doc_tarifario(id_tarifario){
  $.post("../ajax/CTarifario.php?op=mostrar_tarifario", {
    id_tarifario: id_tarifario
  }, function (data){
      data = JSON.parse(data);
      console.log(data);
      $('#agregar_tarifario').modal('show');

      $("#id_tarifario").val(data[0].id_tarifario);
      $("#docActual").val(data[0].doc_tarifario);
      $("#nombre_doc").val(data[0].nombre_tarifario);
      // $("#doc").val(data[0].nombre_tarifario);
      $(".docpdf").val(data[0].doc_tarifario);

  });
 
}




function actualizar_empresa(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    var formData = new FormData($("#formulario_empresa")[0]);
    $.ajax({
        url: "../ajax/CTarifario.php?op=actualizar",
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
    limpiarTarifario();
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
function desactivar_docnorma(id_tarifario) {
    console.log(id_tarifario);
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
                $.post("../ajax/CTarifario.php?op=desactivar_docnorma", {id_tarifario: id_tarifario}, function (e) {
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

    limpiarTarifario();

}
// =============================================== ACTIVAR DECANO ==================================================
function activar_docnorma(id_tarifario) {
    console.log(id_tarifario);
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
                $.post("../ajax/CTarifario.php?op=activar_docnorma", {id_tarifario: id_tarifario}, function (e) {
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
    limpiarTarifario();
}

$(".tablas").on("click", ".btnMostrarPDF", function(){

  	var pdf = $(this).attr("pdf");
  	var nombrePdf = $(this).attr("c");
  	var a = $(this).attr("a");

  	console.log("pdf", pdf);
	console.log("pdf:", a);

	var pdf = document.getElementById('pdf');
	var dow= document.getElementById('dow');

    pdf.innerHTML = '<a href=""'+a+'"" target="blank"> Doc Tarjet Blank</a> <br/> <embed  src="'+a+'" width="100%" height="50%" ></embed>';
    dow.innerHTML = '<a href="'+a+'" download="'+nombrePdf+'" style="color: #fdfdfd !important;"><i class="fa fa-download "> </i> PDF</a>' ; 

})

init();