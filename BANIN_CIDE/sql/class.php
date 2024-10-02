<?php
require_once "bd.php";

class Trabajo extends Conexion{
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
        $this->conexion=$this->conexion->obtenerConexion();
    }

     public function crearUsuario($num_doc, $tipo_doc, $nombre_completo, $contraseña, $email, $telefono, $id_rol) {
        // Verificar si el número de documento ya existe
        $sqlVerificar = "SELECT COUNT(*) FROM usuario WHERE numero_documento = :num";
        $consultVerificar = $this->conexion->prepare($sqlVerificar);
        $consultVerificar->bindValue(":num", $num_doc);
        $consultVerificar->execute();
        $existe = $consultVerificar->fetchColumn();
    
        if ($existe > 0) {
            echo "<script type='text/javascript'>
            alert('Error: El número de documento ya está registrado.');
            window.location='usuario.php';
            </script>";
            return; // Salir de la función para no intentar la inserción
        }
    
        // Hashear la contraseña
        $contraseña = hash('sha256', $contraseña);
    
        // Insertar el nuevo usuario
        $sql = "INSERT INTO usuario (numero_documento, tipo_doc, nombre_completo, contraseña, email, telefono, id_rol)
                VALUES (:num, :tipo, :nom, :pass, :email, :tel, :id)";
        $consult = $this->conexion->prepare($sql);
        $consult->bindValue(":num", $num_doc);
        $consult->bindValue(":tipo", $tipo_doc);
        $consult->bindValue(":nom", $nombre_completo); // Nombre completo ya concatenado
        $consult->bindValue(":pass", $contraseña);
        $consult->bindValue(":email", $email);
        $consult->bindValue(":tel", $telefono);
        $consult->bindValue(":id", $id_rol);
    
        $resultado = $consult->execute();
        if ($resultado) {
            echo "<script type='text/javascript'>
            alert('Usuario adicionado correctamente...');
            window.location='usuario.php';
            </script>";
        } else {
            echo "<script type='text/javascript'>
            alert('Error en la asignación del registro...');
            window.location='usuario.php';
            </script>";
        }
    }



    public function iniciarSesion($num_doc, $password) {
        // Hash the password for comparison
        $hashedPassword = hash('sha256', $password);
        
        $sql = "SELECT * FROM usuario WHERE numero_documento = :nro_doc AND contraseña = :pass";
        $consult = $this->conexion->prepare($sql);
        $consult->bindParam(':nro_doc', $num_doc, PDO::PARAM_STR);
        $consult->bindParam(':pass', $hashedPassword, PDO::PARAM_STR);
        $consult->execute();
        
        $result = $consult->fetch(PDO::FETCH_ASSOC);
        
        if ($result) {
            $_SESSION['numero_documento'] = $result['numero_documento'];
            $rol = $result['id_rol'];
            $_SESSION['id_rol'] = $rol;
            
            switch ($rol) {
                case '3':
                    header('Location:../home/consultarEstadoBanin.php');
                    break;
                case '2':
                    header('Location:../coordinador/vacantes.php');
                    break;
                case '1':
                    header('Location: /BANIN_CIDE/app/administrador/panelControl.php');
                    break;
                default:
                    // Handle unexpected role
                    echo "<div class='alerta text-center'>Rol no válido.</div>";
            }
        } else {
            echo "<div class='alerta text-center'>Credenciales no válidas.</div>";
        }
    }
    public function ver_usuarios() {
        $sql = "SELECT usuario.*, rol.nombre_rol FROM usuario JOIN rol ON usuario.id_rol = rol.id_rol";
        $consult = $this->conexion->prepare($sql);
        $consult->execute();
        $result = $consult->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function ver_un_usuario($numero_doc) {
        $sql = "SELECT usuario.*, rol.nombre_rol FROM usuario JOIN rol ON usuario.id_rol = rol.id_rol WHERE usuario.numero_documento = :numero";
        $consult = $this->conexion->prepare($sql);
        $consult->bindParam(":numero", $numero_doc, PDO::PARAM_STR);
        $consult->execute();
        $result = $consult->fetch(PDO::FETCH_ASSOC); // Cambiamos a fetch para un solo registro
        return $result; // Regresamos un solo resultado
    }

    public function eliminarUsuario($numero)  {
        $sql="DELETE FROM usuario WHERE numero_documento=:num";
        $consult=$this->conexion->prepare($sql);
        $consult->bindValue(":num",$numero);
        $resultado=$consult->execute();
        if($resultado){
            echo "<script type='text/javascript'>
            alert ('Usuario eliminado coon éxito...');
            window.location='panelControl.php';
            </script>";
        }
        else{
            echo "Error al eliminar el usuario";
        }
    }
    public function actualizar_usuario($numero, $tipo_doc, $contraseña, $nombre_completo, $email, $telefono, $rol) {
        // Verificar si se proporciona una nueva contraseña
        if (!empty($contraseña)) {
            $contraseña = hash('sha256', $contraseña);
            $sql = "UPDATE usuario SET tipo_doc = :tipo, contraseña = :pass, nombre_completo = :nombre, email = :em, telefono = :tel, id_rol = :id WHERE numero_documento = :num";
        } else {
            // Si no hay nueva contraseña, no la actualizamos
            $sql = "UPDATE usuario SET tipo_doc = :tipo, nombre_completo = :nombre, email = :em, telefono = :tel, id_rol = :id WHERE numero_documento = :num";
        }
    
        $consult = $this->conexion->prepare($sql);
        $consult->bindParam(":num", $numero);
        $consult->bindParam(":tipo", $tipo_doc);
        
        // Solo enlazamos la contraseña si se proporciona una nueva
        if (!empty($contraseña)) {
            $consult->bindParam(":pass", $contraseña);
        }
        
        $consult->bindParam(":nombre", $nombre_completo);
        $consult->bindParam(":em", $email);
        $consult->bindParam(":tel", $telefono);
        $consult->bindParam(":id", $rol);
        
        $resultado = $consult->execute();
        
        if ($resultado > 0) {
            echo "<script type='text/javascript'>
            alert('Usuario actualizado correctamente...');
            window.location='panelControl.php';
            </script>";
        }
    }

}