<?php

class ControladorCategorias {


	static public function ctrCrearCategoria(){

		if(isset($_POST["nuevaCategoria"])){


			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCategoria"])){

				$tabla = "categorias";

				$datos = $_POST["nuevaCategoria"];

				$respuesta = ModeloCategorias::mdlIngresarCategoria($tabla, $datos);

				if($respuesta == "ok" ){

					echo '<script>

					swal({

						type: "success",
						title: "¡la categoria ha sido guardada!",
						showConfirmButton: true,
						confirmButtonText: "cerrar",
						closeOnConfirm: false

						}).then((result) => {

						   if(result.value){
						
							window.location = "categorias";

						}

					});
				

					</script>';

				}


			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡la categoria no puede ir vacia!",
						showConfirmButton: true,
						confirmButtonText: "cerrar",
						closeOnConfirm: false

						}).then((result) => {

						   if(result.value){
						
							window.location = "categorias";

						}

					});
				

					</script>';

			}

		}

	}

}

