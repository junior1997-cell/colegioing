function innit() {
mostrar_paquetes();
}

function mostrar_paquetes(){
  $.post("ajax/CPaquetes.php?op=listar_web", {
  }, function(data, status) {
    data = JSON.parse(data);
    var contador = 0;
    $.each(data, function(i, item) {
      contador++;
        $("#paquetes_data").append('<div class="col-lg-4 course_box">'
            +'<div class="card">'
                +'<img class="card-img-top" src="multimedia/paquetes/'+data[i].foto1+'" style="height: 200px; ">'
                +'<div class="card-body text-center">'
                    +'<div class="card-title"><a href="#" onclick="ir_paquete('+data[i].idpaquetes+')">'+data[i].nombre+'</a></div>'
                    +'<div class="card-text">'+(data[i].intinerario).substr(0,80)+'...</div>'
                +'</div>'
                +'<div class="price_box d-flex flex-row align-items-center">'
                    +'<div class="course_author_name"><i class="fas fa-star"></i>'+data[i].dp+'</div>'
                    +'<div class="course_price d-flex flex-column align-items-center justify-content-center"><span style="font-size: 11px;">S/.'+data[i].precio+'</span></div>'
                +'</div>'
                +'<form id="form_ir_paquete'+data[i].idpaquetes+'" action="paquete.php" method="post"><input type="hidden" name="idpaquetes" value="'+data[i].idpaquetes+'"></form>'
            +'</div>'
        +'</div>');
    })

  });
}

function ir_paquete(id){
  $("#form_ir_paquete"+id).submit()
}

innit();
