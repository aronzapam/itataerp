<?php

class ControladorUsuarios{

	/*ingreso usuarios*/

	static public function ctrIngresoUsuario(){

		if(isset($_POST["ingUsuario"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){
				$encriptar= crypt($_POST["ingPassword"],'$2a$07$usesomesillystringforsalt$');

				$tabla = "usuarios";



				$item = "usuario";
				$valor = $_POST["ingUsuario"];

				$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

				if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptar){

					$_SESSION["iniciarSesion"] = "ok";
					$_SESSION["id"] = $respuesta["id"];
					$_SESSION["nombre"] = $respuesta["nombre"];
					$_SESSION["usuario"] = $respuesta["usuario"];
					$_SESSION["foto"] = $respuesta["foto"];
					$_SESSION["perfil"] = $respuesta["perfil"];

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

 					/*validar imagen*/
 				$ruta = "";
			   if(isset($_FILES["nuevaFoto"]["tmp_name"])){
			   	list($ancho, $alto) =getimagesize($_FILES["nuevaFoto"]["tmp_name"]);

			   	$nuevoAncho = 500;
			   	$nuevoAlto = 500;

			   	/*crear directorio*/

			   	$directorio = "vistas/img/usuarios/".$_POST["nuevoUsuario"];

			   	mkdir($directorio, 0755);

			   	/*de acuerdo al tipo de imagen aplicamos funciones php*/

			   	if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

			   		$aleatorio = mt_rand(100,999);
			   		$ruta = "vista/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".jpg";
			   		$origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);
			   		$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

			   		imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
			   		imagejpeg($destino, $ruta);
			   	}

			   	if($_FILES["nuevaFoto"]["type"] == "image/png"){

			   		$aleatorio = mt_rand(100,999);
			   		$ruta = "vista/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".png";
			   		$origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);
			   		$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

			   		imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
			   		imagepng($destino, $ruta);
			   	}

			   }

 				$tabla = "usuarios";

 				$encriptar= crypt($_POST["nuevoPassword"],'$2a$07$usesomesillystringforsalt$');

 				$datos = array("nombre" =>$_POST["nuevoNombre"],
 								"usuario" => $_POST["nuevoUsuario"],
 								"password" => $encriptar,
 								"perfil" => $_POST["nuevoPerfil"],
 			    				"foto" => $ruta);

 				$respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);

 			}else{
					echo '<br><div class="alert alert-danger">ingrese bien los datos plis</div>';

 			}
 				
 			
 		}

 	 }

}
