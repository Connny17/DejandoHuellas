<?php
require 'fpdf/fpdf.php';
require "../conexion.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'email/PHPMailer-6.9.3/src/PHPMailer.php';
require 'email/PHPMailer-6.9.3/src/SMTP.php';
require 'email/PHPMailer-6.9.3/src/Exception.php';

$db = new Database();
$con = $db->conectar();

$id = isset($_GET['id_Mascotas']) ? $_GET['id_Mascotas'] : '';

$sql1 = $con ->prepare("SELECT id_solicitud, id_Mascotas_fk, color, nombre, nombre_solicitante, apellido_Paterno, apellido_Materno, domicilio, edad, ocupacion, colonia, municipio,
correo, celular, nReferencia, numReferencia, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14,
p15, p16, p17, p18, p19, p20,visitas_Vet, vacunación, paseos, collarId, desparasitacion, cepillado, limpArenero, alimentacion from solicitud   
inner join mascotas on solicitud.id_Mascotas_fk=mascotas.id_Mascotas where id_Mascotas_fk= :id;");
$sql1->bindParam(':id', $id, PDO::PARAM_INT);
$sql1->execute(); 
$resultado = $sql1->fetchAll(PDO::FETCH_ASSOC);

if (count($resultado) > 0) { $datos = $resultado[0]; 
} else { 
    die('No se encontraron datos.'); 
}

$pdf = new fpdf('P','mm', 'Letter');
$pdf->AddPage();
$pdf->SetFont('Arial','B', 16);
$pdf->SetCreator('Andrea');

function setText($pdf, $texto, $longitud, $x, $y)
{
$pdf->SetXY($x, $y);
$pdf->Cell($longitud, 5,mb_convert_encoding
($texto,'ISO-8859-1','UTF-8'),0, 1, 'L');
}

$pdf->Image('imagenes/Formato_Adopcion1.jpg',0,0, 216,278);

$pdf->SetFont('Arial','', 12);
setText($pdf, $datos['apellido_Paterno'],160,87,60);

setText($pdf, $datos['apellido_Materno'],60,20,65);


setText($pdf, $datos['nombre_solicitante'],160,65,65);

setText($pdf, $datos['domicilio'],160,10,74);


setText($pdf, $datos['edad'],77,10,104);


setText($pdf, $datos['ocupacion'],190,10,104);


setText($pdf, $datos['colonia'],330,10,105);


setText($pdf, $datos['municipio'],170,10,112);


setText($pdf, $datos['correo'],83,10,119);


setText($pdf, $datos['celular'],83,87,119);


setText($pdf, $datos['nReferencia'],83,50,127);


setText($pdf, $datos['numReferencia'],83,53,135);

setText($pdf, $datos['p1'],83,53,164);


setText($pdf, $datos['p2'],83,65,170);


setText($pdf, $datos['p3'],83,110,177);

setText($pdf, $datos['p4'],83,40,184);


setText($pdf, $datos['p5'],83,128,191);

setText($pdf, $datos['p6'],30,20,202);

setText($pdf, $datos['p7'],83,110,210);

setText($pdf,$datos['p8'],83,32,217);

setText($pdf, $datos['p9'],83,67,217);

setText($pdf, $datos['p10'],83,70,228);

setText($pdf, $datos['p11'],30,20,240);

setText($pdf, $datos['p12'],30,20,254);

$pdf->AddPage();
$pdf->Image('imagenes/Formato_Adopcion2.jpg',0,0, 216,280);


setText($pdf, $datos['p13'],160,64,14);

setText($pdf, $datos['p14'],160,55,21);

setText($pdf, $datos['p15'],160,15,27);

setText($pdf, $datos['p16'],160,35,34);

setText($pdf, $datos['p17'],160,20,40);

setText($pdf, $datos['p18'],160,46,46);

setText($pdf, $datos['p19'],30,20,62);

setText($pdf, $datos['p20'],30,20,75);


$sql2 = $con ->prepare("SELECT id_Mascotas, foto, nombre, tipo_Especie,color, tamano, edad, sexo from mascotas
inner join especie on mascotas.id_Especie_fk=especie.id_Especie
inner join edad on mascotas.id_Edad_fk=edad.id_Edad
inner join sexo on mascotas.id_Sexo_fk=sexo.id_Sexo
inner join tamano on mascotas.id_Tamano_fk=tamano.id_Tamano where id_Mascotas= :id;");
$sql2->bindParam(':id', $id, PDO::PARAM_INT);
$sql2->execute();
$consulta = $sql2->fetchAll(PDO::FETCH_ASSOC);

if (count($consulta) > 0) { $datos2 = $consulta[0]; 
} else { 
    die('No se encontraron datos.'); 
}

$pdf->AddPage();
$pdf->Image('imagenes/Formato_Adopcion3.jpg',0,0, 216,280);

setText($pdf, $datos2['nombre'],32,35,106);

setText($pdf, $datos2['edad'],100,130,106);

setText($pdf, 'Especie: '.$datos2['tipo_Especie'].' Color: '.$datos2['color'].' Tamaño: '.$datos2['tamano'],32,15,123);

setText($pdf, $datos2['sexo'],100,146,123);

$pdfdoc=$pdf->Output('', 'S');


$mail= new PHPMailer(true);

try{
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->Host= 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = "dejandohuellasdejandohuellas2@gmail.com";
$mail->Password= 'tdpworyhmcbztlgm';
$mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port=  587;

$mail->setFrom('dejandohuellasdejandohuellas2@gmail.com', 'Dejando Huellas');
$mail->addAddress('connyyehparra@gmail.com','Personal');
$mail->addCC('l20530296@cancun.tecnm.mx');


// Adjuntar el PDF desde la memoria 
$mail->addStringAttachment($pdfdoc, 'documento.pdf'); 

// Contenido del correo 
$mail->isHTML(true); 
$mail->Subject = 'Prueba'; 
$mail->Body = 'Adjunto encontrarás el PDF que solicitaste.'; 
$mail->send(); echo 'El mensaje ha sido enviado'; 
} 

catch (Exception $e) { 
    echo "El mensaje no pudo ser enviado. Error de Mailer: {$mail->ErrorInfo}";

}

?>