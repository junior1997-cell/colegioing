var tabla;

function init() {
    // formulario benefico
    $("#formulario_documentos").on("submit", function (e) {
      Guardar_Editar_DOC_Beneficio(e);
    });

    $("#btn_editar_m").click(function() {
        editar_contactanos();
    });
    $("#btn_actualizar_e").click(function(e) {
        actualizar_beneficio(e);
    });

    input_beneficio(true);
    //empresa(true);
    mostrar_serv_soc();
   // mostrar_empresa();
    
    listar_documnt();
    $('#btn_actualizar_e').prop("disabled", true);
}

// tabla documentos
function Guardar_Editar_DOC_Beneficio(e) {
    $("#cargando_cuerpo").html(''+
        '<center>'+
          '<i style="color: white;" class="fa fa-refresh fa-spin fa-5x fa-fw"></i>'+
        '</center>'
      );
    $("#cargando_modal").modal("show");
    e.preventDefault();
    var formData = new FormData($("#formulario_documentos")[0]);
    $.ajax({
        url: "../ajax/Cbeneficio_cole.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
            $("#cargando_modal").modal("hide");
            $("#cargando_cuerpo").html('');
            if (datos == 1) {
                swal({
                    title: "Documento Registrado.",
                    type: "success",
                    text: "Exito.",
                    timer: 1500,
                    showConfirmButton: false
                });
            } else {
                swal({
                    title: "😓 ¡No se Pudo Registrar Documento! 😓",
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
  $("#idbeneficio ").val("");
  $("#nombre_doc").val("");
  $("#documento_actual").val("");
  $("#documento").val("");
  $("#ver_pdf").html('');
  $("iframe").remove();
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
    $("#ver_pdf").html('<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>');
    $('#agregar_documento').modal('show');
    $.post("../ajax/Cbeneficio_cole.php?op=mostrardoc", {
        idbeneficio: idbeneficio }, 
        function (data, status){
            data = JSON.parse(data);
            // console.log(data);
          
          $("#idbeneficio").val(data.idbeneficio);
          $("#nombre_doc").val(data.nombre_doc);
          $("#documento_actual").val(data.documento);
          $("#ver_pdf").html('<iframe src="'+data.documento+'" frameborder="0" scrolling="no" width="100%" height="210"></iframe>');

        }
    );
}
/**-----------------------------------------------------------
 * ----------------------------------------------
 */
function input_beneficio(a) {
    $("#servicios_sociales").prop('disabled', a);
    $('#iss_cip').prop("disabled", a);
    $("#derechobenef").prop('disabled', a);
    $('#actualidad').prop("disabled", a);
    $('#important').prop("disabled", a);
}

function editar_contactanos() {
    input_beneficio(false);
    $('#btn_editar_m').prop("disabled", true);
    $('#btn_actualizar_e').prop("disabled", false);
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

function actualizar_beneficio(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    var formData = new FormData($("#formulario_beneficio")[0]);
    // console.log('formulario: '+formData);
    $.ajax({
        url: "../ajax/Cbeneficio_cole.php?op=actualizarserv",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos) {
            console.log(datos);
            if (datos == 1) {
                swal({
                    title: "😃😃 Exitó 😀😀",
                    timer: 2000,
                    type: "success"
                });
                /*alertify.success('😃 Agregado con exitó 😀');*/
            } else {
                swal({
                    title: "😓 Error al Actualizar 😔",
                    timer: 2000,
                    type: "error"
                });
            }
        }
    });
    mostrar_serv_soc();
    input_beneficio(true);
    $('#btn_editar_m').prop("disabled", false);
    $('#btn_actualizar_e').prop("disabled", true);
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

$(".tablas").on("click", ".btnMostrarPlanClasePDF", function(){

  var pdf = $(this).attr("pdf");
  var nombrePdf = $(this).attr("c");
  var a = $(this).attr("a");

  console.log("pdf", pdf);
console.log("pdf:", a);
   
  var pdf = document.getElementById('pdf');
    var dow= document.getElementById('dow');

    pdf.innerHTML = '<a href=""'+a+'"" target="blank"> Doc Tarjet Blank</a> <br/> <embed  src="'+a+'" width="100%" height="50%" ></embed>';
    dow.innerHTML = '<a href="'+a+'" download="'+nombrePdf+'" target="_blank" style="color: #fdfdfd !important;"><i class="fa fa-download "> </i> PDF</a>' ; 


})

init();