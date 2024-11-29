<?php
require "../conexion.php";
session_start();

$db = new Database();
  $con = $db->conectar();

if(isset($_POST['Enviar'])){

$id_Mascotas = $_SESSION['id_Mascotas_fk'];
$nombreS= $_SESSION['nombre'];
$aPaterno= $_SESSION['apellido_Paterno'];
$aMaterno= $_SESSION['apellido_Materno'];
$domicilio = $_SESSION['domicilio'];
$edad= $_SESSION['edad'];
$ocupacion= $_SESSION['ocupacion'];
$colonia= $_SESSION['colonia'];
$municipio= $_SESSION['municipio'];
$correo= $_SESSION['correo'];
$celular= $_SESSION['celular'];
$nReferencia= $_SESSION['nReferencia'];
$numReferencia= $_SESSION['numReferencia'];
$p1= $_SESSION['p1'];
$p2= $_SESSION['p2'];
$p3= $_SESSION['p3'];
$p4= $_SESSION['p4'];
$p5= $_SESSION['p5'];
$p6= $_SESSION['p6'];
$p7= $_SESSION['p7'];
$p8= $_SESSION['p8'];
$p9= $_SESSION['p9'];
$p10= $_SESSION['p10'];
$p11= $_SESSION['p11'];
$p12= $_SESSION['p12'];
$p13= $_SESSION['p13'];
$p14= $_SESSION['p14'];
$p15= $_SESSION['p15'];
$p16= $_SESSION['p16'];
$p17= $_SESSION['p17'];
$p18= $_SESSION['p18'];
$p19= $_SESSION['p19'];
$p20= $_SESSION['p20'];

$visitas = isset($_SESSION['visitas']) ? $_SESSION['visitas'] : 0;
$vacunacion = isset($_SESSION['vacunacion']) ? $_SESSION['vacunacion'] : 0;
$paseos = isset($_SESSION['paseos']) ? $_SESSION['paseos'] : 0;
$collar = isset($_SESSION['collar']) ? $_SESSION['collar'] : 0;
$desparacitacion = isset($_SESSION['desparacitacion']) ? $_SESSION['desparacitacion'] : 0;
$cepillado = isset($_SESSION['cepillado']) ? $_SESSION['cepillado'] : 0;
$limpieza = isset($_SESSION['limpieza']) ? $_SESSION['limpieza'] : 0;
$alimentacion = isset($_SESSION['alimentacion']) ? $_SESSION['alimentacion'] : 0;


  $registro = $con ->prepare("INSERT INTO solicitud (id_Mascotas_fk, nombre_solicitante, apellido_Paterno, apellido_Materno, domicilio,
  edad, ocupacion, colonia, municipio, correo, celular, nReferencia, numReferencia, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, visitas_Vet, vacunación,
  paseos, collarId, desparasitacion, cepillado, limpArenero, alimentacion) values (?,?,?,?,?,?, ?,?,?,?,?,?,?,?,?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");

  $registro->execute([$id_Mascotas,$nombreS,$aPaterno,$aMaterno,$domicilio,$edad,$ocupacion,$colonia,$municipio,$correo,$celular,$nReferencia,
  $numReferencia, $p1, $p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15,$p16,$p17,$p18,$p19,$p20, 
  $visitas,$vacunacion,$paseos,$collar,$desparacitacion,$cepillado,$limpieza,$alimentacion]);

  echo "Nuevo registro creado exitosamente";

} else{

  echo "Nuevo registro no creado exitosamente";

}













?>