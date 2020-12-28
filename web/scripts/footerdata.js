function innit() {
  mostrar_contactanos();
  mostrar_empresa();
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

innit();
