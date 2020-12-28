function innit() {

}

function mostrar(idpaquetes) {
  $.post("ajax/CPaquetes.php?op=mostrar", {
    idpaquetes: idpaquetes
  }, function(data, status) {
    data = JSON.parse(data);
    $("#foto1_header").css("background-image", "url(multimedia/paquetes/"+data.foto1+")");

    $("#nombre_paquete").text(data.nombre);
    $("#dp").text(data.dp);
    $("#precio").text(data.precio);

    $("#intinerario").html((data.intinerario).replace(/\n/ig, '<br>'));
    $("#incluye").html((data.incluye).replace(/\n/ig, '<br>'));
    $("#noincluye").html((data.noincluye).replace(/\n/ig, '<br>'));
    $("#aclaraciones").html((data.aclaraciones).replace(/\n/ig, '<br>'));
    $("#informacion_general").html((data.informacion_general).replace(/\n/ig, '<br>'));


    $("#foto2_carousel").attr("src","multimedia/paquetes/"+data.foto2);
    $("#foto3_carousel").attr("src","multimedia/paquetes/"+data.foto3);


  })
}

innit();
