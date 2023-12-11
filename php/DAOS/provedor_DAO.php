<?php
    include(__DIR__ . "\../conexion_bd.php");
    //__DIR__ Entrega la direccion actual
    class ProvedorDAO{
        private $conexion;

        public function __construct(){
            $this->conexion = new ConexionBDAutosAmistosos();
        }


        public function agregarProvedor($id,$nombre,$direccion,$ce,$telefono){
            try{
                $sql = "INSERT INTO provedores VALUES($id,'$nombre','$direccion','$ce',$telefono);";
                $res = mysqli_query($this->conexion->getConexion(), $sql);
            }catch (Exception $e){
                $res = null;
            }
                
            return $res;
            
        }

        public function mostrarProvedoreslike($idlike){
			$sql = "SELECT * FROM provedores WHERE id LIKE '$idlike%' " ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}


        public function mostrarProvedores(){
			$sql = "SELECT * FROM Provedores" ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}

        public function mostrarProvedoresId($id){
			$sql = "SELECT * FROM provedores WHERE id = $id;" ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}

        
        public function borrar($id){
            $sql = "DELETE FROM provedores WHERE id=$id";
            $res = mysqli_query($this->conexion->getConexion(),$sql);
            return $res;
            
        }

        public function update($id,$nombre,$direccion,$ce,$telefono){
            $sql = "UPDATE clientes SET nombre = '$nombre', direccion = '$direccion', correo = '$ce', telefono = $telefono WHERE id = $id;";
            $res = mysqli_query($this->conexion->getConexion(),$sql);
            return $res;
        }
        


    }





?>