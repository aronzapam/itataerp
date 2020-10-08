<?php

class ControladorUsuarios{

	/*ingreso usuarios*/

	static public function ctrIngresoUsuario(){

		if(isset($_POST["ingUsuario"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

				$tabla = "usuarios";

				$item = "usuario";
				$valor = $_POST["ingUsuario"];

				$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

				if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]){

					$_SESSION["iniciarSesion"] = "ok";

					echo '<script>

						window.location = "inicio";

					</script>';

				}else{

					echo '<br><div class="alert alert-danger">error al ingresar, intentalo denuevo</div>';

				}

			}	

		}

	}

	/*registro usuarios*/

 	static public function ctrCrearUsuario(){

 		if (isset($_POST["nuevoUsuario"])) {
 			
 			if (preg_match('/^[a-zA-Z0-9 ]+$/',$_POST["nuevoNombre"]) && 
 				preg_match('/^[a-zA-Z0-9 ]+$/',$_POST["nuevoUsuario"]) &&
 				preg_match('/^[a-zA-Z0-9 ]+$/',$_POST["nuevoPassword"])){

 				$tabla = "usuarios";

 				$datos = array("nombre" =>$_POST["nuevoNombre"],
 				"usuario" => $_POST["nuevoUsuario"],
 				"password" => $_POST["nuevoPassword"],
 				"perfil" => $_POST["nuevoPerfil"]);

 				$respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);

 			}else{
					echo '<br><div class="alert alert-danger">ingrese bien los datos plis</div>';

 			}
 				
 			
 		}

 	 }

}


	


