var tabla;

function init() {
    // formulario decanos
    $("#formulario_documentos").on("submit", function (e) {
      guardaryeditarDoc(e);
    });

    $("#btn_editar_m").click(function() {
        editar_contactanos();
    });
    $("#btn_actualizar_e").click(function(e) {
        actualizar_contactanos(e);
    });

    contactanos(true);
    //empresa(true);
    mostrar_serv_soc();
   // mostrar_empresa();
    
    listar_documnt();
}

/**
 * ============================================
 * Documento
 *=============================================
 */

// tabla documentos
function guardaryeditarDoc(e) {
    e.preventDefault();
    var formData = new FormData($("#formulario_documentos")[0]);
        $.ajax({
        url: "../ajax/Cbeneficio_cole.php?op=guardaryeditar",
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
        $("#agregar_documento").modal("hide");
        limpiar();
}

function limpiar(){
  $("#titulo").val("");
  $("#documento").val("");
  $("#documento_actual").val("");
  $("#idbeneficio").val("");
}
// Listar documento
function listar_documnt() {
    tabla = $('#ListarDecano').dataTable({
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/Cbeneficio_cole.php?op=listarDocumnt',
                    type: "get",
                    dataType: "json",
                    error: function (e) {
                        console.log(e.responseText);
                    }
                },
        "bDestroy": true,
        responsive: true,
        "order": [[0, "asc"]]
    }).DataTable();
}

// mostrar documento
function mostrarDoc(idbeneficio){
  $.post("../ajax/Cbeneficio_cole.php?op=mostrardoc", {
    idbeneficio: idbeneficio
  }, function (data, status){
      data = JSON.parse(data);
      $('#agregar_documento').modal('show');
      $("#idbeneficio").val(data.idbeneficio);
      $("#titulo").val(data.titulo);
      $("#documento_actual").val(data.documento);

  });
}
/**-----------------------------------------------------------
 * ----------------------------------------------
 */
function contactanos(a) {
    $("#servicios_sociales").prop('disabled', a);
    $('#iss_cip').prop("disabled", a);
    $("#derechobenef").prop('disabled', a);
    $('#actualidad').prop("disabled", a);
    $('#important').prop("disabled", a);
}

function editar_contactanos() {
    contactanos(false);
    $('#btn_editar_m').prop("disabled", true);
}

function mostrar_serv_soc() {
    $.post("../ajax/Cbeneficio_cole.php?op=serv_sociales", {}, function(data, status) {
        data = JSON.parse(data);
        //console.log(data);
        // console
        $("#servicios_sociales").val(data.servicios_sociales);
        $("#iss_cip").val(data.integran_iss_cip);
        $("#derechobenef").val(data.derechos_iss_cip);
        $("#actualidad").val(data.serv_act);
        $("#important").val(data.importantes);
    })
}

function actualizar_contactanos(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    var formData = new FormData($("#formulario_contactanos")[0]);
    $.ajax({
        url: "../ajax/Cbeneficio_cole.php?op=actualizarserv",
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
    mostrar_serv_soc();
    contactanos(true);
    $('#btn_editar_m').prop("disabled", false);
}
/**Editar**/

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

init();