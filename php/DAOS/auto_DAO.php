<?php
    include(__DIR__ . "\../conexion_bd.php");
    //__DIR__ Entrega la direccion actual
    class AutoDAO{
        private $conexion;

        public function __construct(){
            $this->conexion = new ConexionBDAutosAmistosos();
        }


        public function agregarAuto($id,$precio,$modelo,$ff,$lf,$cilindros,$puertas,$peso,$capacidad,$color){
            try{
                $sql = "INSERT INTO autos VALUES($id,$precio,'$modelo','$ff','$lf',$cilindros,$puertas,$peso,$capacidad,'$color');";
                $res = mysqli_query($this->conexion->getConexion(), $sql);
            }catch (Exception $e){
                $res = null;
            }
                
            return $res;
            
        }

        public function mostrarAutolike($idlike){
			$sql = "SELECT * FROM autos WHERE id LIKE '$idlike%' " ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}


        public function mostrarAuto(){
			$sql = "SELECT * FROM autos" ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}

        public function mostrarAutoId($id){
			$sql = "SELECT * FROM autos WHERE id = $id;" ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}

        
        public function borrar($id){
            $sql = "DELETE FROM autos WHERE id=$id";
            $res = mysqli_query($this->conexion->getConexion(),$sql);
            return $res;
            
        }

        public function update($id,$precio,$modelo,$ff,$lf,$cilindros,$puertas,$peso,$capacidad,$color){
            $sql = "UPDATE autos SET precio = $precio, modelo = '$modelo', fecha_f = '$ff', lugar_f = '$lf', cilindros = $cilindros, puertas = $puertas, peso = $peso,capacidad = $capacidad, color = '$color' WHERE id = $id;";
            $res = mysqli_query($this->conexion->getConexion(),$sql);
            return $res;
        }
        


    }





?>