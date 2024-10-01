<?php
class Conexion {
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
}
