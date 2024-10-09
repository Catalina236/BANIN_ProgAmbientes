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
            window.location='panelControl.php';
            </script>";
        } else {
            echo "<script type='text/javascript'>
            alert('Error en la asignación del registro...');
            window.location='panelControl.php';
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
                    header('Location:../evaluador/vacantes.php');
                    break;
                case '2':
                    header('Location:../coordinador/vacantes.php');
                    break;
                case '1':
                    header('Location: /BANIN_CIDE/app/administrador/panelControl.php');
                    break;
                default:
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
    public function obtenerCodigos($cod_vacante) {
        $sql = "SELECT * FROM tipo_formacion 
                LEFT JOIN vacante ON tipo_formacion.Id_tipoF = vacante.Id_tipoF
                LEFT JOIN usuario ON usuario.numero_documento = vacante.num_doc_evaluador
                WHERE usuario.id_rol = 3 AND vacante.cod_vacante = :cod_vacante";
        
        $consult = $this->conexion->prepare($sql); 
        $consult->bindParam(':cod_vacante', $cod_vacante); 
        $consult->execute(); 
        $result1 = $consult->fetchAll(PDO::FETCH_ASSOC); 
        return $result1;
    }
    public function obtenerCodigo() {
        $sql = "SELECT * FROM vacante";
        $consult = $this->conexion->prepare($sql); 
        $consult->execute(); 
        $result1 = $consult->fetchAll(PDO::FETCH_ASSOC); 
        return $result1;
    }
    public function obtenerEvaluadores() {
        $sql = "SELECT numero_documento FROM usuario WHERE id_rol = 3";
        $consult = $this->conexion->prepare($sql);
        $consult->execute();
        return $consult->fetchAll(PDO::FETCH_ASSOC);
    }
    public function actualizarNumDocEvaluador($cod_vacante, $nuevo_num_doc_evaluador) {
        $sql = "UPDATE vacante SET num_doc_evaluador = :nuevo_num_doc_evaluador WHERE cod_vacante = :cod_vacante";
        $consult = $this->conexion->prepare($sql);
        $consult->bindParam(':nuevo_num_doc_evaluador', $nuevo_num_doc_evaluador);
        $consult->bindParam(':cod_vacante', $cod_vacante);
        return $consult->execute();

    }public function obtenerNombreEvaluador($num_doc_evaluador) {
        $sql = "SELECT nombre_completo FROM usuario WHERE numero_documento = :numero_documento";
        $consult = $this->conexion->prepare($sql);
        $consult->bindParam(':numero_documento', $num_doc_evaluador);
        $consult->execute();
        return $consult->fetchColumn();
    }
    public function crearvacante($cod_vacante, $nombre_vacante, $perfil_vacante, $nro_instr_req, $num_doc_candidato, $Id_tipoF) {
            // Prepara la consulta SQL solo con los campos que están en el formulario
            $sql = "INSERT INTO vacante (cod_vacante, nombre_vacante, perfil_vacante, nro_instr_req, num_doc_candidato, Id_tipoF, estado_BANIN, num_doc_evaluador)
                    VALUES (:cod_vacante, :nombreV, :perfil, :numIns, :numCan, :idF, 'Pendiente', NULL)"; 
    
            $consult = $this->conexion->prepare($sql);
    
            // Asignar los valores a los parámetros del formulario
            $consult->bindValue(":cod_vacante", $cod_vacante);
            $consult->bindValue(":nombreV", $nombre_vacante);
            $consult->bindValue(":perfil", $perfil_vacante);
            $consult->bindValue(":numIns", $nro_instr_req);
            $consult->bindValue(":numCan", $num_doc_candidato);
            $consult->bindValue(":idF", $Id_tipoF);
    
            try {
                $resultado = $consult->execute();
                if ($resultado) {
                    echo "<script type='text/javascript'>
                        alert('Vacante agregada correctamente.');
                        window.location='vacantes.php';
                        </script>";
                } else {
                    $errorInfo = $consult->errorInfo();
                    echo "Error en la inserción: " . $errorInfo[2];  // Muestra el error específico de la consulta SQL
                }
            } catch (PDOException $e) {
                echo "Error de PDO: " . $e->getMessage();
            }
            
    }
    public function buscar_usuario($termino) {
        if (empty($termino)) {
            // Si no hay término de búsqueda, devolver 10 usuarios aleatorios
            $sql = "SELECT usuario.*, rol.nombre_rol 
                    FROM usuario 
                    JOIN rol ON usuario.id_rol = rol.id_rol 
                    ORDER BY RAND() 
                    LIMIT 10";
            $consult = $this->conexion->prepare($sql);
            $consult->execute();
        } else {
            // Si hay término de búsqueda, buscar en varios campos
            $sql = "SELECT usuario.*, rol.nombre_rol 
                    FROM usuario 
                    JOIN rol ON usuario.id_rol = rol.id_rol 
                    WHERE usuario.numero_documento LIKE :termino 
                    OR usuario.nombre_completo LIKE :termino 
                    OR rol.nombre_rol LIKE :termino";
            $consult = $this->conexion->prepare($sql);
            $termino = "%$termino%";
            $consult->bindParam(':termino', $termino, PDO::PARAM_STR);
            $consult->execute();
        }       
        return $consult->fetchAll(PDO::FETCH_ASSOC);
    }
}