<?php
    include(__DIR__ . "\../conexion_bd.php");
    //__DIR__ Entrega la direccion actual
    class VentaDAO{
        private $conexion;

        public function __construct(){
            $this->conexion = new ConexionBDAutosAmistosos();
        }


        public function agregarVenta($id,$idC,$idA){
            try{
                $sql = "INSERT INTO ventas VALUES($id,$idC,$idA);";
                $res = mysqli_query($this->conexion->getConexion(), $sql);
            }catch (Exception $e){
                $res = null;
            }
                
            return $res;
            
        }

        public function mostrarVentalike($idlike){
			$sql = "SELECT * FROM ventas WHERE id LIKE '$idlike%' " ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}


        public function mostrarVentas(){
			$sql = "SELECT * FROM ventas" ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}

        public function mostrarVentaId($id){
			$sql = "SELECT * FROM ventas WHERE id = $id;" ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}

        
        public function borrar($id){
            $sql = "DELETE FROM ventas WHERE id=$id";
            $res = mysqli_query($this->conexion->getConexion(),$sql);
            return $res;
            
        }

        public function update($id,$idC,$idA){
            $sql = "UPDATE ventas SET idCliente = $idC, idAuto = $idA WHERE id = $id;";
            $res = mysqli_query($this->conexion->getConexion(),$sql);
            return $res;
        }
        


    }





?>