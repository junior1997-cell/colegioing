var tabla;

function init() {

  listar_usuario();

	$("#formulario_usuario").on("submit", function (e) {
        guardaryeditar(e);
    });
}

function guardaryeditar(e) {
    e.preventDefault();
    var formData = new FormData($("#formulario_usuario")[0]);

    $.ajax({
        url: "../ajax/CUsuario.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
		 if (datos == 1) {
                swal({
                    title: "Usuario Registrado.",
                    type: "success",
                    text: "Exito.",
                    timer: 1500,
                    showConfirmButton: false
                });
            } else {
                swal({
                    title: "¡No se Pudo Registrar!",
                    type: "error",
                    text: "Error.",
                    timer: 1500,
                    showConfirmButton: false
                });
            }
 		tabla.ajax.reload();
        }
    });
		$("#agregar_usuario").modal("hide");
		limpiar();
}
function listar_usuario() {
    tabla = $('#ListaUsuario').dataTable({
        "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "Todo"]],
        "language": {
            responsive: true,
            url: 'recursos/js/idioma.json'
        },
        "ajax":
                {
                    url: '../ajax/CUsuario.php?op=listar',
                    type: "get",
                    dataType: "json",
                    error: function (e) {
                        console.log(e.responseText);
                    }
                },
        "bDestroy": true,
		responsive: true,
        "iDisplayLength": 5, //Paginación
        "order": [[0, "asc"]]
    }).DataTable();
}
function mostrar(idusuario){
  $.post("../ajax/CUsuario.php?op=mostrar", {
    idusuario: idusuario
  }, function (data){
      data = JSON.parse(data);
      console.log(data);
      $('#agregar_usuario').modal('show');
      $("#usuario").val(data[0].usuario);
      $("#clave").val(data[0].clave);
      $("#idusuario").val(data[0].idusuario);
  });
}
function limpiar(){
  $("#usuario").val("");
  $("#clave").val("");
  $("#idusuario").val("");
}


function desactivar(idusuario) {
    swal({
        title: "¿Deseas desactivar este usuario?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, Desactivar",
        cancelButtonText: "No, Cancelar ",
        closeOnConfirm: false,
        closeOnCancel: false},
            function (isConfirm) {
                if (isConfirm) {
                    $.post("../ajax/CUsuario.php?op=desactivar", {idusuario: idusuario}, function (e) {
                        if (e) {
                            swal({
                                title: "Se Desactivó con éxito.",
                                type: "success",
                                timer: 1500,
                                showConfirmButton: false
                            });
							tabla.ajax.reload();
                        }
                    });
                } else {
                    swal({
                        title: "Se canceló la acción",
                        type: "error",
                        timer: 1500,
                        showConfirmButton: false
                    });
					tabla.ajax.reload();
                }
            });

}
function activar(idusuario) {
    swal({
        title: "¿Deseas activar este usuario?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#26a25b",
        confirmButtonText: "Si,activar",
        cancelButtonText: "No, cancelar",
        closeOnConfirm: false,
        closeOnCancel: false},
            function (isConfirm) {
                if (isConfirm) {
                    $.post("../ajax/CUsuario.php?op=activar", {idusuario: idusuario}, function (e) {
                        swal({
                            title: "Se activó con éxito.",
                            type: "success",
                            timer: 1500,
                            showConfirmButton: false
                        });
						tabla.ajax.reload();
                    });

                	}
					else {
                    swal({
                        title: "Se canceló la acción",
                        type: "error",
                        timer: 1500,
                        showConfirmButton: false
                    });
					tabla.ajax.reload();
                }
            });
}




init();
