/*subir foto*/

$(".nuevaFoto").change(function(){

	var imagen = this.files[0];
	
	/*validar imagen jpg o png*/
	var datosImagen = new FileReader;
		datosImagen.readAsDataURL(imagen);

		$(datosImagen).on("load", function(event){
			var rutaImagen = event.target.result;
			$(".previsualizar").attr("src", rutaImagen);
        })

})