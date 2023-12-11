<?php


class ConexionBDAutosAmistosos{
    private $conexion;
    private $host = "localhost";
    
    /*
    private $usuario = "id19788961_cesar1xd1";
    private $pass = "!Cesar1xd1";
    private $bd = "id19788961_autosamistosos";
    */
    private $usuario = "cesar1xd1";
    private $pass = "cesar1xd1";
    private $bd = "autosamistosos";
    

    public function __construct(){
        $this->conexion = mysqli_connect(
            $this->host,
            $this->usuario,
            $this->pass,
            $this->bd
        );

        if(!$this->conexion){
            die("Error de conexion a la BD ->" . mysqli_connect_error() . " - " . mysqli_connect_errno());
        }
    }

    public function getConexion(){
        return $this->conexion;
    }
    
    
}

?>