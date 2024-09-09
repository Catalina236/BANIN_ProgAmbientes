<?php
define('DB_HOST','localhost');
define('DB_HOST','root');
define('DB_PASS','');
define('DB_BASS','banin_pa');
class Conexion{
    private $pdo;
    
    public function __construct(){
        $dsn='mysql:host=' .DB_HOST . ';dbname=' .DB_NAME;
        try{
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOExcepction $e){
            throw new Exception("Error de conexión a la base de datos: ". $e->getMessage());
        }
    }
    public function obtenerconexion(){
        return $this->pdo;
    }

}
?>