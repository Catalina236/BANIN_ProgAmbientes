<?php
require_once "bd.php";

class Trabajo extends Conexion {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->obtenerConexion();
    }

    // Método de depuración
    private function debug($message) {
        error_log(print_r($message, true));
    }

    public function crearUsuario($num_doc, $tipo_doc, $nombres, $apellidos, $email, $telefono, $id_rol, $nom_usu, $contraseña){
        $contraseña=PASSWORD_HASH($contraseña, PASSWORD_DEFAULT, array("cost"=>16));
        $sql="INSERT INTO persona VALUES (:num, :tipo, :nom, :ape, :email, :tel, :id)";
        $sql2="INSERT INTO usuario VALUES (:nom_usu, :num, :pass)"; 
        $consult=$this->conexion->prepare($sql);
        $consult2=$this->conexion->prepare($sql2);
        $consult->bindValue(":num",$num_doc);
        $consult->bindValue(":tipo", $tipo_doc);
        $consult->bindValue(":nom", $nombres);
        $consult->bindValue(":ape", $apellidos);
        $consult->bindValue(":email", $email);
        $consult->bindValue(":tel", $telefono);
        $consult->bindValue(":id", $id_rol);
        $consult2->bindValue(":num", $num_doc);
        $consult2->bindValue(":nom_usu", $nom_usu);
        $consult2->bindValue(":pass", $contraseña);
        $resultado=$consult->execute();
        $resultado2=$consult2->execute();

        if($resultado>0){
            if($resultado2>0){
                echo "<script type='text/javascript'>
            alert('Usuario adicionado correctamente...');
            window.location='usuario.php';
            </script>";
            }
        }
        else{
            echo "<script type='text/javascript'>
                echo ('error En la asignacion del registro.....');
                window.location='usuario.php';
                </script>";
        }
    }



    
        public function iniciarSesion($num_doc, $password) {
            $this->debug("Iniciando sesión con num_doc: " . gettype($num_doc) . ", password: " . gettype($password));
    
            // Asegurarnos de que los parámetros son strings
            $num_doc = (string)$num_doc;
            $password = (string)$password;
    
            $sql = "SELECT * FROM usuario JOIN persona ON persona.numero_documento=usuario.numero_documento WHERE usuario.numero_documento=:nro_doc";
            $consult = $this->conexion->prepare($sql);
            $consult->bindParam(':nro_doc', $num_doc, PDO::PARAM_STR);
            $consult->execute();
            $result = $consult->fetch(PDO::FETCH_ASSOC);
    
            $this->debug("Resultado de la consulta: " . print_r($result, true));
    
            if ($result) {    
                if (password_verify($password, $result['contraseña'])) {
                    session_start();
                    $_SESSION['numero_documento'] = $result['numero_documento'];
                    $_SESSION['id_rol'] = $result['id_rol'];
                    $rol = $result['id_rol'];
                    switch ($rol) {
                        case '3':
                            header('Location: /BANIN_CIDE/app/evaluador/moduloConsulta.php');
                            exit();
                        case '2':
                            header('Location: /BANIN_CIDE/app/coordinador/vacantes.php');
                            exit();
                        case '1':
                            header('Location: /BANIN_CIDE/app/administrador/usuario.php');
                            exit();
                        default:
                            return "<div class='alerta text-center'>Rol no válido.</div>";
                    }
                }
            }
            return "<div class='alerta text-center'>Documento o contraseña incorrectos</div>";
        }

    public function ver_usuarios(){
        $sql="SELECT * FROM persona JOIN usuario ON persona.numero_documento=usuario.numero_documento JOIN rol ON persona.id_rol=rol.id_rol";
        $consult=$this->conexion->prepare($sql);
        $consult->execute();
        $result=$consult->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function ver_un_usuario($numero_doc){
        $sql="SELECT * FROM persona JOIN usuario ON persona.numero_documento=usuario.numero_documento JOIN rol ON persona.id_rol=rol.id_rol WHERE persona.numero_documento=:numero";
        $consult=$this->conexion->prepare($sql);
        $consult->bindParam(":numero", $numero_doc, PDO::PARAM_STR);
        $consult->execute();
        $result=$consult->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } 
    public function eliminarUsuario($numero)  {
        $sql="DELETE FROM persona WHERE numero_documento=:num";
        $consult=$this->conexion->prepare($sql);
        $consult->bindValue(":num",$numero);
        $resultado=$consult->execute();
        if($resultado){
            echo "<script type='text/javascript'>
            alert ('Usuario eliminado coon éxito...');
            window.location='usuario.php';
            </script>";
        }
        else{
            echo "Error al eliminar el usuario";
        }
    }
    public function actualizar_usuario($numero, $nombre_usuario, $tipo_doc, $contraseña, $nombres, $apellidos, $email, $telefono, $rol){
        $sql="UPDATE persona SET numero_documento=:num, tipo_doc=:tipo,     nombres=:nomb, apellidos=:ape, email=:em, telefono=:tel, id_rol=:id WHERE numero_documento=:num";
        $sql2="UPDATE usuario SET nombre_usuario=:nom, contraseña=:pass WHERE nombre_usuario=:nom";
        $consult=$this->conexion->prepare($sql);
        $consult2=$this->conexion->prepare($sql2);
        $consult->bindParam(":num",$numero);
        $consult->bindParam(":tipo", $tipo_doc);
        $consult->bindParam(":nomb", $nombres);
        $consult->bindParam(":ape",$apellidos);
        $consult->bindParam(":em",$email);
        $consult->bindParam(":tel",$telefono);
        $consult->bindParam(":id",$rol);
        $consult2->bindParam(":nom",$nombre_usuario);
        $consult2->bindParam(":pass",$contraseña);
        $resultado=$consult->execute();
        $resultado2=$consult2->execute();
        if($resultado>0){
            if($resultado2>0){
                echo "<script type='text/javascript'>
                alert ('Usuario Actualizado Correctamente...');
                window.location='usuario.php';
                </script>";
            }
        }
    }
    }
