<?php
require_once('../../app/config.php');
require_once('../../sql/class.php');
requireRole(['1']);
$dato=new Trabajo();
if(isset($_GET['numero'])){
    $numero=$_GET['numero'];
    $dato->eliminarUsuario($numero);
}
