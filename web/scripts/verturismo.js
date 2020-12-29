function innit() {

}

function mostrar(idturisticos) {
  $.post("ajax/CTuristicos.php?op=mostrar", {
    idturisticos: idturisticos
  }, function(data, status) {
    data = JSON.parse(data);
    $("#foto1_header").css("background-image", "url(multimedia/turisticos/"+data.foto1+")");

    $("#titulo_turismo").text(data.titulo);

    $("#descripcion_turismo").html((data.descripcion).replace(/\n/ig, '<br>'));



    $("#foto2_carousel").attr("src","multimedia/turisticos/"+data.foto2);
    $("#foto3_carousel").attr("src","multimedia/turisticos/"+data.foto1);


  })
}

innit();
