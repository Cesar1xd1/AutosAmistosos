<?php
    include(__DIR__ . "\../conexion_bd.php");
    //__DIR__ Entrega la direccion actual
    class UserDAO{
        private $conexion;

        public function __construct(){
            $this->conexion = new ConexionBDAutosAmistosos();
        }


        public function agregarUsuario($user,$pass,$tipo){
            try{
                $sql = "INSERT INTO usuarios VALUES('$user','$pass','$tipo');";
                $res = mysqli_query($this->conexion->getConexion(), $sql);
            }catch (Exception $e){
                $res = null;
            }
                
            return $res;
            
        }


        public function autenticar($user,$pass){
			$sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND pw = '$pass'" ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}

        public function autenticarU($user){
			$sql = "SELECT * FROM usuarios WHERE usuario = '$user'" ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}

        public function autenticarP($pass){
			$sql = "SELECT * FROM usuarios WHERE pw = '$pass'" ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}


        public function mostrarUsuarios(){
			$sql = "SELECT * FROM usuarios" ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}

        public function mostrarUsuariosUser($user){
			$sql = "SELECT * FROM usuarios WHERE usuario = $user;" ;
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			return $res;
		}

        
        public function borrar($user){
            $sql = "DELETE FROM usuarios WHERE usuario=$user";
            $res = mysqli_query($this->conexion->getConexion(),$sql);
            return $res;
            
        }

        public function update($user,$pass,$tipo){
            $sql = "UPDATE usuarios SET pw = $pass, tipo = '$tipo' WHERE usuario = $user;";
            $res = mysqli_query($this->conexion->getConexion(),$sql);
            return $res;
        }
        


    }





?>