<?php
	include('../php/conexion_bd.php');
	$con = new ConexionBDAutosAmistosos();
	$conexion = $con->getConexion();

	//var_dump($conexion);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$cadenaJSON = file_get_contents('php://input');
		if($cadenaJSON==false){
			echo "No hay cadena de peticion JSON";
		}else{
			$datos = json_decode($cadenaJSON, true);
			$id = $datos['id'];
			$precio = $datos['precio'];
            $modelo = $datos['modelo'];
            $fecha_f = $datos['fecha_f'];
            $lugar_f = $datos['lugar_f'];
            $cilindros = $datos['cilindros'];
            $puertas = $datos['puertas'];
            $peso = $datos['peso'];
            $capacidad = $datos['capacidad'];
            $color = $datos['color'];



			echo $id;
			echo $precio;
			//ALTA
			$sql = "INSERT INTO autos VALUES('$id', '$precio','$modelo','$fecha_f','$lugar_f','$cilindros','$puertas','$peso','$capacidad','$color');";
			$res = mysqli_query($conexion, $sql);
			$respuesta = array();
			if($res){
				$respuesta['insercion'] = 'Exito';
				$respuestaJSON = json_encode($respuesta);
			}else{
				$respuesta['insercion'] = 'Error';
				$respuestaJSON = json_encode($respuesta);
			}
			echo $respuestaJSON;
		}
	}
	
?>