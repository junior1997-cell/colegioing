function innit() {
    mostrar_cant_alquiler();
    mostrar_cant_consejo();
    mostrar_cant_doc_norma();
    mostrar_cant_convenios();
    mostrar_directiva_inicio();
}

// mostrar alquiler
function mostrar_cant_alquiler() {
    
    var idalquiler = 0;
    $.post("../ajax/Calquiler.php?op=count_alquiler", {
        idalquiler: idalquiler
      }, function (data, status) {
        data = JSON.parse(data);   
        // console.log(data);
        
        $("#count_alquiler").html(data.idalquiler);
         
    })
}
// mostrar miembros del consejo
function mostrar_cant_consejo() {
    // $("#ver_pdf").html('<center> <i class="fa fa-refresh fa-spin fa-5x fa-fw"></i> </center>');
    var id_directiva = 0;
    $.post("../ajax/CDirectiva.php?op=count_miembros", {
        id_directiva: id_directiva
      }, function (data, status) {
        data = JSON.parse(data);   
        // console.log(data);
        
        $("#count_miembros").html(data.id_directiva);
    })
}

// mostrar miembros del consejo
function mostrar_cant_doc_norma() {
    // $("#ver_pdf").html('<center> <i class="fa fa-refresh fa-spin fa-5x fa-fw"></i> </center>');
    var id_docnorma = 0;
    $.post("../ajax/CDocnorma.php?op=count_doc_normativos", {
        id_docnorma: id_docnorma
      }, function (data, status) {
        data = JSON.parse(data);   
        // console.log(data);
        
        $("#count_doc_normativos").html(data.id_docnorma);
    })
}

// mostrar miembros del consejo
function mostrar_cant_convenios() {
    // $("#ver_pdf").html('<center> <i class="fa fa-refresh fa-spin fa-5x fa-fw"></i> </center>');
    var idconvenios = 0;
    $.post("../ajax/Cconvenios.php?op=count_convenios", {
        idconvenios: idconvenios
      }, function (data, status) {
        data = JSON.parse(data);   
        console.log(data);
        
        $("#count_convenios").html(data.idconvenio);
    })
}

// mostrar miembros del consejo
function mostrar_directiva_inicio() { 
    $("#ver_info_alq").html('<div class="row aling-center justify-content-center my-5"> <center> <i class="fas fa-spinner fa-spin fa-6x" aria-hidden="true"></i> </center> </div>');
    $.post("../ajax/CDirectiva.php?op=mostrar_directiva_inicio", {}, function(data, status) {
        data = JSON.parse(data);
        $("#ver_info_alq").html('');
       
        $.each(data, function (index, value) {
            console.log(value);
             
            var tr = ''+               
                '<li>'+
                    '<img src="recursos/img/user.png" alt="User Image" height="100" width="100" />'+
                    '<a class="users-list-name" href="#">'+value.miembro_directiva+'</a>'+
                    '<span class="users-list-date">'+value.cargo_directiva+'</span>'+
                    '<span class="users-list-date">CIP: '+value.cip_directiva+'</span>'+
                '</li>';
            
            $("#directiva_actual").append(tr);
        });

    })
}
innit();