<?php

class Database {

private $hostname = "localhost";
private $database = "u649901890_ADhuellas08";
private $username = "u649901890_AADhuellas07";
private $password = "s]6Dq[LS";
private $charset = "utf8";

public function conectar(){
try{
$conexion = "mysql:host=".$this->hostname . "; dbname=" . $this->database .";
charset=". $this->charset;

$options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES => false

];

$pdo = new PDO($conexion, $this->username, $this->password, $options);

return $pdo;

}catch(PDOException $e){

    echo 'Error conexion: '. $e->getMessage();
    exit;
}

}
}

?>