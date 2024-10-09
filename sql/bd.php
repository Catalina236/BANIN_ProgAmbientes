<?php
/*class Conexion {
    private $host = 'localhost';
    private $dbname = 'cidesafc_banin_pa';  
    private $user = 'cidesafc_banin';    
    private $password = '_@*Syth34ve#95AEd1C'; 
    private $port = 3306;  
    private $charset = 'utf8'; 
    private $conexion;

    public function __construct() {
        try {
            $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->dbname;charset=$this->charset";
            $this->conexion = new PDO($dsn, $this->user, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
        }
    }

    public function obtenerConexion() {
        return $this->conexion;
    }
}*/

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','banin_pa');
class Conexion{
    private $pdo;
    
    public function __construct(){
        $dsn='mysql:host=' .DB_HOST . ';dbname=' .DB_NAME;
        try{
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            throw new Exception("Error de conexión a la base de datos: ". $e->getMessage());
        }
    }
    public function obtenerconexion(){
        return $this->pdo;
    }

}