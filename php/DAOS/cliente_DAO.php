<?php
    include(__DIR__ . "\../conexion_bd.php");
    //__DIR__ Entrega la direccion actual
    class ClienteDAO{
        private $conexion;

        public function __construct(){
            $this->conexion = new ConexionBDAutosAmistosos();
        }


        public function agregarCliente($id,$nombre,$direccion,$ce,$telefono,$fecha){
            try{
                $sql = "INSERT INTO clientes VALUES($id,'$nombre','$direccion','$ce',$telefono,'$fecha');";
                $res = mysqli_query($this->conexion->getConexion(), $sql);
            }catch (Exception $e){
                $res = null;
            }
                
            return $res;
            
        }

        public function mostrarClientelike($idlike){
			$sql = "SELECT * FROM clientes WHERE id LIKE '$idlike%' " ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}


        public function mostrarAuto(){
			$sql = "SELECT * FROM clientes" ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}

        public function mostrarAutoId($id){
			$sql = "SELECT * FROM clientes WHERE id = $id;" ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}

        
        public function borrar($id){
            $sql = "DELETE FROM clientes WHERE id=$id";
            $res = mysqli_query($this->conexion->getConexion(),$sql);
            return $res;
            
        }

        public function update($id,$nombre,$direccion,$ce,$telefono,$fecha){
            $sql = "UPDATE autos SET nombre = '$nombre', direccion = '$direccion', correo = '$ce', telefono = $telefono, f_nacimiento = '$fecha' WHERE id = $id;";
            $res = mysqli_query($this->conexion->getConexion(),$sql);
            return $res;
        }
        


    }





?>