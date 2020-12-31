var tabla;

function init() {
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
}

function contactanos(a) {
    $("#reseña_historia").prop('disabled', a);
    $("#decano_periodo_gestion").prop('disabled', a);
    $('#himno').prop("disabled", a);
}

function editar_contactanos() {
    contactanos(false);
    $('#btn_editar_m').prop("disabled", true);
}

function mostrar_contactanos() {
    $.post("../ajax/CHistoria.php?op=mostrar", {}, function(data, status) {
        data = JSON.parse(data);
        console.log(data);
        // console
        $("#reseña_historia").val(data.reseña_historia);
        $("#decano_periodo_gestion").val(data.decano_periodo_gestion);
        $("#himno").val(data.himno);
    })
}

function actualizar_contactanos(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    var formData = new FormData($("#formulario_contactanos")[0]);
    $.ajax({
        url: "../ajax/CHistoria.php?op=actualizar",
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
    mostrar_contactanos();
    contactanos(true);
    $('#btn_editar_m').prop("disabled", false);
}
/****/
function empresa(a) {
    $('#reseña_historia').prop("disabled", a);
    $('#decano_periodo_gestion').prop("disabled", a);
    $('#himno').prop("disabled", a);
    $('#btn_actualizar_e').prop("disabled", a);
}

function editar_empresa() {
    empresa(false);
    $('#btn_editar_e').prop("disabled", true);
}

function mostrar_empresa() {
    $.post("../ajax/CHistoria.php?op=mostrar", {}, function(data, status) {
        data = JSON.parse(data);
        console.log(data);
        
        $('#reseña_historia').val(decodeHtml(data.reseña_historia));
        $('#decano_periodo_gestion').val(decodeHtml(data.decano_periodo_gestion));
        $('#himno').val(decodeHtml(data.himno));
    })
}

function actualizar_empresa(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    var formData = new FormData($("#formulario_empresa")[0]);
    $.ajax({
        url: "../ajax/CHistoria.php?op=actualizar",
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
init();