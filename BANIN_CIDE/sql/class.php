<?php
require_once "bd.php";

class Trabajo extends Conexion{
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
        $this->conexion=$this->conexion->obtenerConexion();
    }

    public function crearUsuario($num_doc, $tipo_doc, $nombres, $apellidos, $email, $telefono, $id_rol, $nom_usu, $contraseña){
        $contraseña=hash('sha256',$contraseña);
        try{
            $sql="INSERT INTO usuario VALUES (:num, :tipo, :nom, :ape, :email, :tel, :id, :pass)";
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
            $consult->bindValue(":pass", $contraseña);
            $resultado=$consult->execute();
            if($resultado>0){
                echo "<script type='text/javascript'>
                alert('Usuario adicionado correctamente...');
                window.location='usuario.php';
                </script>";
                }
            else{
            echo "<script type='text/javascript'>
                echo ('error En la asignacion del registro.....');
                window.location='usuario.php';
                </script>";
        }
    }catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            $_SESSION['error'] = 'El usuario ya existe. Intenta con otro documento.';
        }else {
            echo "Error: " . $e->getMessage();
    }
}
}
    public function iniciarSesion($num_doc, $password){
        $sql="SELECT * FROM usuario WHERE usuario.numero_documento=:nro_doc AND contraseña=:pass";
        $consult=$this->conexion->prepare($sql);
        $password=hash('sha256', $password);
        $consult->bindParam(':nro_doc', $num_doc, PDO::PARAM_STR);
        $consult->bindParam(':pass', $password, PDO::PARAM_STR);
        $consult->execute();
        $result=$consult->fetch(PDO::FETCH_ASSOC);
        if($result){
            $_SESSION['numero_documento']=$result['numero_documento'];
            $rol=$result['id_rol'];
            $_SESSION['id_rol']=$rol;
            switch($rol){
                case '3':
                    header('Location:../home/consultarEstadoBanin.php');
                    break;
                case '2':
                    header('Location:../coordinador/vacantes.php');
                    break;
                case '1':
                    header('Location:/dashboard/BANIN_ProgAmbientes/app/administrador/usuario.php');
                    break;
                default;
                }
                }
                else{
                    echo "<div class='alerta text-center'>Documento o contraseña incorrectos</div>";
            }
        }   
    public function ver_usuarios(){
        $sql="SELECT * FROM usuario JOIN rol ON usuario.id_rol=rol.id_rol";
        $consult=$this->conexion->prepare($sql);
        $consult->execute();
        $result=$consult->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function ver_un_usuario($numero_doc){
        $sql="SELECT * FROM usuario JOIN rol ON usuario.id_rol=rol.id_rol WHERE usuario.numero_documento=:numero";
        $consult=$this->conexion->prepare($sql);
        $consult->bindParam(":numero", $numero_doc, PDO::PARAM_STR);
        $consult->execute();
        $result=$consult->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } 
    public function eliminarUsuario($numero)  {
        $sql="DELETE FROM usuario WHERE numero_documento=:num";
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
        $contraseña=hash('sha256',$contraseña);
        $sql="UPDATE usuario SET numero_documento=:num, tipo_doc=:tipo,nombres=:nomb, apellidos=:ape, email=:em, telefono=:tel, id_rol=:id, contraseña=:pass WHERE numero_documento=:num";
        $consult=$this->conexion->prepare($sql);
        $consult->bindParam(":num",$numero);
        $consult->bindParam(":tipo", $tipo_doc);
        $consult->bindParam(":nomb", $nombres);
        $consult->bindParam(":ape",$apellidos);
        $consult->bindParam(":em",$email);
        $consult->bindParam(":tel",$telefono);
        $consult->bindParam(":id",$rol);
        $consult->bindParam(":pass",$contraseña);
        $resultado=$consult->execute();
        if($resultado>0){
                echo "<script type='text/javascript'>
                alert ('Usuario Actualizado Correctamente...');
                window.location='usuario.php';
                </script>";
        }
    }
}