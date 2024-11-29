<?php


$db = new Database();
$con = $db->conectar();

if(!empty($_GET["id"]) and !empty($_GET["nombre"])){

$id = $_GET["id"];
$ruta = $_GET["nombre"];

if (file_exists($ruta)) { unlink($ruta);}

$eliminar1 = $con ->prepare("delete from solicitud where id_Mascotas_fk=$id");
 $eliminar1->execute(); 

$eliminar = $con ->prepare("delete from mascotas where id_Mascotas=$id");
 $eliminar->execute();  

}

?>