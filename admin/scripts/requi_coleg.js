var tabla;

function init() {
    $("#btn_editar_e").click(function() {
        editar_requisito();
    });
    $("#btn_actualizar_e").click(function(e) {
        actualizar_requisito(e);
    });

    requisito(true);
    mostrar_requisito();
     
    $('#').summernote({
        placeholder: 'Escriba su descripción aquí.',
        tabsize: 1,
        height: 80,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['para', ['ul', 'ol']],
            ['insert', ['link']],
            ['view', ['fullscreen', 'help']]
        ],
    }); 

    $("#nombre_requisito").summernote({
        height: 100,
        toolbar: false,
        placeholder: 'type with apple, orange, watermelon and lemon',
        hint: {
          words: ['apple', 'orange', 'watermelon', 'lemon'],
          match: /\b(\w{1,})$/,
          search: function (keyword, callback) {
            callback($.grep(this.words, function (item) {
              return item.indexOf(keyword) === 0;
            }));
          }
        }
      });  
}

function mostrar_requisito() {
    $.post("../ajax/Crequisito_coleg.php?op=mostrar", {}, function(data, status) {
        data = JSON.parse(data);
        // console.log(data);
        var fecha_bd = new Date(data.fecha_requisito);
        var options = {weekday: "long", year: "numeric", month: "long", day: "numeric"};
        
       var fecha_mostra = fecha_bd.toLocaleDateString("es-ES", options);
        
        $("#fecha").html(' <small> (actualizado el: '+fecha_mostra+' )</small>');        
        $("#nombre_requisito").summernote('code', data.nombre_requisito);
    })
}

function requisito(a) {
    if (a) {
        $("#nombre_requisito").summernote('disable');         
    } else {
        $("#nombre_requisito").summernote('enable');
    }     
    $('#btn_actualizar_e').prop("disabled", a);
}

function editar_requisito() {
    requisito(false);
    $('#btn_editar_e').prop("disabled", true);
} 

function actualizar_requisito(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    var formData = new FormData($("#formulario_requisitos")[0]);
    $.ajax({
        url: "../ajax/Crequisito_coleg.php?op=actualizar",
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
    mostrar_requisito();
    requisito(true);
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