function innit() {
mostrar_paquetes();
}

function mostrar_paquetes(){
  $.post("ajax/CTuristicos.php?op=listar_web", {
  }, function(data, status) {
    data = JSON.parse(data);
    var contador = 0;
    $.each(data, function(i, item) {
      contador++;
        $("#turismo_data").append('<div class="col-lg-4 course_box">'
            +'<div class="card">'
                +'<img class="card-img-top" src="multimedia/turisticos/'+data[i].foto1+'" style="height: 200px; ">'
                +'<div class="card-body text-center">'
                    +'<div class="card-title"><a href="#" onclick="ir_turismo('+data[i].idturisticos+')">'+decodeHtml(data[i].titulo)+'</a></div>'
                    +'<div class="card-text">'+(data[i].descripcion).substr(0,90)+'...</div>'
                +'</div><br>'

                +'<form id="form_ir_turismo'+data[i].idturisticos+'" action="verturismo.php" method="post"><input type="hidden" name="idturisticos" value="'+data[i].idturisticos+'"></form>'
            +'</div>'
        +'</div>');
    })

  });
}

function ir_turismo(id){
  $("#form_ir_turismo"+id).submit()
}

function decodeHtml(str){
    var map =
    {
        '&amp;': '&',
        '&lt;': '<',
        '&gt;': '>',
        '&quot;': '"',
        '&#039;': "'",
    };
    return str.replace(/&amp;|&lt;|&gt;|&quot;|&#039;/g, function(m) {return map[m];});
}

innit();
