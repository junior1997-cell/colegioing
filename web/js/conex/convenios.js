  
// WEB CONVENIOS
function convenios_web(idconvenio) {
  console.log(idconvenio);
  $("#convenio_modal_mostrar").html(
    "" +
    '<div class="card col-ms-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="padding: 0px;">' +
    '<div class="card-body">' +
    '<div class="row">' +
    '<div class="col-ms-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">' +
    "</div>" +
    '<div class="col-ms-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">' +
    "<center>" +
    '<i class="fas fa-cog fa-spin fa-6x" aria-hidden="true"></i>' +
    "</center>" +
    "</div>" +
    '<div class="col-ms-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">' +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div>" +
    ""
  );
  $.post(
    "../../ajax/Cconvenios.php?op=mostrar",
    {
      idconvenios: idconvenio,
    },
    function (data, status) {
        data = JSON.parse(data);
        console.log(data);
        $("#convenio_modal_mostrar").html(
          "" +
          '<center>'+
              '<p id="titulo">Convenio con: '+ data.nombre+'</p>'+
          '</center>'+
          '<img id="imagen" src="../../multimedia/convenios/'+data.foto+'" alt="" style="max-width: 100%; padding: 5px; height: 100px; display: block; margin-left: auto; margin-right: auto;" />'+
          '<br />'+
          '<p id="descripcion" style="text-align: justify;">'+
               data.descripcion +
          '</p>'+
          '<br />'+
          '<p id="fecha">Actualizado al '+data.fecha+'</p>'+
          ""
        );
        
         
    }
  );

}

