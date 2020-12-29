function innit() {
  mostrar_paquetes();
  mostrar_pasajes();
  mostrar_contactanos();
  mostrar_empresa();
}


function mostrar_paquetes(){
  $.post("ajax/CPaquetes.php?op=listar_web", {
  }, function(data, status) {
    data = JSON.parse(data);
    var contador = 0;
    $.each(data, function(i, item) {
      contador++;
      if(contador<=3){
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
      }
    })

  });
}

function mostrar_pasajes(){
  $.post("ajax/CVoletos.php?op=listar_web", {
  }, function(data, status) {
    data = JSON.parse(data);
    var contador_t = 0;
    var contador_a = 0;
    $.each(data, function(i, item) {
      if((data[i].tipo)=="1"){
        contador_t++;
        if(contador_t<=3){
          $("#pasajes_t_data").append(
            '<div class="col-lg-4 course_box"  style="margin-top: 20px !important;">'
            +'<center><img onclick="vervoleto('+(data[i].id)+')" draggable="false" class="img-thumbnail" src="multimedia/voletos/'+(data[i].foto)+'" style="height:100px;width:100%;cursor: pointer;"></center>'
          +'</div>');
        }
      }

      if((data[i].tipo)=="2"){
        contador_a++;
        if(contador_a<=3){
          $("#pasajes_a_data").append(
            '<div class="col-lg-4 course_box"  style="margin-top: 20px !important;">'
            +'<center><img onclick="vervoleto('+(data[i].id)+')" draggable="false" class="img-thumbnail" src="multimedia/voletos/'+(data[i].foto)+'" style="height:100px;width:100%;cursor: pointer;"></center>'
          +'</div>');
        }
      }
    })

  });
}

function ir_paquete(id){
  $("#form_ir_paquete"+id).submit()
}

function mostrar_contactanos() {
  $.post("ajax/CContactanos.php?op=mostrar", {
  }, function(data, status) {
    data = JSON.parse(data);
    $("#direccion").html(data.direccion);
    $("#telefono-h").html(data.telefono);
    $("#telefono-f").html(data.telefono);
    $("#email").html(data.email);
    var datosCordenadas = data.coordenadas;
    var arrayCordenadas = datosCordenadas.split(",");
    cargar_mapa(arrayCordenadas[0],arrayCordenadas[1]);
  })
}

function mostrar_empresa() {
  $.post("ajax/CEmpresa.php?op=mostrar", {
  }, function(data, status) {
    data = JSON.parse(data);
    $("#nombre").html(data.nombre);
    $("#lema").html(data.lema);
    $('#descripcion').html(data.descripcion.substr(0,287)+"...");
    $('#mision').html(data.mision);
    $('#vision').html(data.vision);
  })
}

function vervoleto(id) {
  $.post("ajax/CVoletos.php?op=mostrar", {
    idpasajes: id
  }, function(data, status) {
    data = JSON.parse(data);
    $("#vervoleto").modal("show");
    $("#nombre_voleto").text(data.nombre);
    $("#tipo_voleto").text(data.tipo);
    $("#descripcion_voleto").text(data.descripcion);

    if (data.foto == "") {
      $("#foto_voleto").attr("src", "multimedia/voletos/noimg.png");
    } else {
      $("#foto_voleto").attr("src", "multimedia/voletos/" + data.foto);
    }
  })
}

innit();
