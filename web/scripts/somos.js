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

  })
}

function mostrar_empresa() {
  $.post("ajax/CEmpresa.php?op=mostrar", {
  }, function(data, status) {
    data = JSON.parse(data);
    console.log(data);
    $("#nombre").html(data.nombre);
    $("#lema").html(data.lema);
    $('#descripcion_data').html("<br>"+(data.descripcion).replace(/\n/ig, '<br>')+"<br>");
    $('#descripcion').html(data.descripcion.substr(0,287)+"...");
    $('#mision').html("<br>"+(data.mision).replace(/\n/ig, '<br>')+"<br>");
    $('#vision').html("<br>"+(data.vision).replace(/\n/ig, '<br>')+"<br>");
    $('#valores').html("<br>"+(data.valores).replace(/\n/ig, '<br>')+"<br>");
    $('#politica').html("<br>"+(data.politica).replace(/\n/ig, '<br>')+"<br>");
    $('#servicios').html("<br>"+(data.servicios).replace(/\n/ig, '<br>')+"<br>");
  })
}

innit();
