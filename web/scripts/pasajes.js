function innit() {
  mostrar_empresa();
  mostrar_contactanos();
  mostrar_pasajes();

}

function mostrar_pasajes(){
  $.post("ajax/CVoletos.php?op=listar_web", {
  }, function(data, status) {
    data = JSON.parse(data);
    $.each(data, function(i, item) {
      if((data[i].tipo)=="1"){
          $("#pasajes_t_data").append(
            '<div class="col-lg-4 course_box"  style="margin-top: 20px !important;">'
            +'<center><img onclick="vervoleto('+(data[i].id)+')" draggable="false" class="img-thumbnail" src="multimedia/voletos/'+(data[i].foto)+'" style="height:100px;width:100%;cursor: pointer;"></center>'
          +'</div>');
      }

      if((data[i].tipo)=="2"){
          $("#pasajes_a_data").append(
            '<div class="col-lg-4 course_box"  style="margin-top: 20px !important;">'
            +'<center><img onclick="vervoleto('+(data[i].id)+')" draggable="false" class="img-thumbnail" src="multimedia/voletos/'+(data[i].foto)+'" style="height:100px;width:100%;cursor: pointer;"></center>'
          +'</div>');
      }
    })

  });
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

function mostrar_contactanos() {
  $.post("ajax/CContactanos.php?op=mostrar", {
  }, function(data, status) {
    data = JSON.parse(data);
    $("#direccion").html(data.direccion);
    $("#telefono-h").html(data.telefono);
    $("#telefono-f").html(data.telefono);
    $("#email").html(data.email);
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

innit();
