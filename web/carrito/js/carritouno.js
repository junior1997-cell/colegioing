   
/*
   var img = document.getElementById(image1);
console.log('fffff: ' image1);

    $('#image1').click(function() {
        var image1 = $(this).attr('src');
        alert (image1);
		console.log(image1);

    });

    $('#image2').click(function() {
        var src = $(this).attr('src');
        alert (src);
    });

    $('#image4').click(function() {
        var src = $(this).attr('src');
        alert (src);
    });

	function establecerVisibilidadImagen(id, visibilidad) {
	var img = document.getElementById(id);
	alert(id);
	img.style.visibility = (visibilidad ? 'visible' : 'hidden');
	}

	if (image1 !='') {
		//console.log(image1);

	}

*/
document.getElementById("vidadigital").src ='img/1.jpg';
	// El selector deseado
var brandImg = document.querySelectorAll("#imagenesP img");

for (var i = 0; i < brandImg.length; i++) {
    var ckEdiloop = brandImg[i];
    ckEdiloop.addEventListener("click", function(el){
        var thisSrc = this.src;
        var srcall = thisSrc.substring(48,57);

        //alert(srcall);
        document.getElementById("vidadigital").src =srcall;
        // CKEDITOR.instances['mi_textarea'].insertHtml(ckEdImg) // Añade img al editor
    });
}