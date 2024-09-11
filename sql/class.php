<?php
require_once "bd.php";

class Trabajo extends Conexion{
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
        $this->conexion=$this->conexion->obtenerConexion();
    }

    public function iniciarSesion(string $num_doc, string $password){
        $sql="SELECT * FROM usuarios WHERE numero_documento=:nro_doc AND contraseña=:pass";
        $consult=$this->conexion->prepare($sql);
        $consult->bindParam(':nro_doc', $num_doc, PDO::PARAM_STR);
        $consult->bindParam(':pass', $password);
        $consult->execute();
        $result=$consult->fetchAll(PDO::FETCH_ASSOC);
        error_log(print_r($result, true));
        $num_filas=count($result);
        if($num_filas>0){
            foreach($result as $row){
                $_SESSION['numero_documento']=$row['numero_documento'];
                $rol=$row['rol'];
                $_SESSION['rol']=$rol;
            switch($rol){
                case 'Instructor evaluador':
                    header('Location:../evaluador/moduloConsulta.php');
                    break;
                case 'Coordinador':
                    header('Location:vercuenta.php');
                break;
                default;
                }
            }
            //var_dump($result);
        }
        else{
            echo 'Usuario o contraseña incorrectos';
        }
    }
}
