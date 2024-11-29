<?php
require "header.html";
session_start();
header("Location: enviarForm.php"); 
?>

<main>

<h2> </h2><br> <h2></h2>
<div class="row justify-content-center">
<form class="col-md-10" action="enviarForm.php" enctype="multipart/form-data" method="post" >
<div class="mb-3">
<p>
El adoptado se entregará al adoptante una vez aprobada esta solicitud, en caso de que varias
 personas se muestren interesadas y nos llenen el formato de adopción se deliberará quien es 
la persona más adecuada para el animalito y a quienes no adopten al animalito por el cual 
preguntaron inicialmente les ayudaremos a encontrar a un animalito adecuado para la familia.
</p> <br> </br>
</div>
<br>
  <div class="mb-3">
  <br>
<h3>AL RELLENAR ESTE FORMULARIO, EL ADOPTANTE ACEPTO QUE:</h3> <br>

<p>1. El adoptado será un miembro más de su familia <br> </br>
2. El adoptado tendrá en todo momento agua, alimento y mucho amor.  <br> </br>
3. El adoptado usará siempre un collar con su placa de identificación <br> </br>
4. En el caso de que el adoptado sea perro, siempre se le saque a pasear con correa, nunca suelto.<br> </br>
5. El adoptado no será en ningún caso golpeado, maltratado, humillado, abandonado niregalado. <br> </br>
6. El adoptado recibirá los cuidados médicos necesarios para su bienestar (desparasitación cada seis meses
 y vacunación anual).<br> </br>
7. El perrito/gatito nno será jamás regalado ni reubicado sin consentimiento previo ni visto bueno de quien 
se lo está entregando, en el entendido que esto es para salvaguardar la integridad del animalito y que viva 
en un hogar seguro y donde sea amado, cuidado y respetado. <br> </br>
8. En caso de cambiar de domicilio o teléfonos se notificará previamente a la protectora
</p>


<p>De quien ya tiene todos los datos de contacto. El adoptante está de acuerdo que todos 
los requisitos son para salvaguardar la integridad del animalito (a)</p>

<p>Si por la edad del animalito se tuviera que entregar sin esterilizar (como excepción), me comprometo a que tan pronto cumpla
los seis meses lo haré.</p>  
</div>
<div class="mb-3">
<p>


Recuerda que estas haciendo responsable de un ser vivo por lo que, queda establecido en este contrato que: <br> <br>

1. El animal puesto en adopción no deberá ser vendido o regalado, sin el consentimiento del protector. Si el adoptante no
puede cuidar más al animal, por razones de fuerza mayor, que deberá explicar, tendrá que informarlo al protector (Eva 
Daniela Escalante Cruz), si por alguna razón en ese momento no tuviera espacio para recibirlo lo único que se pediría es
que lo tuvieran en el lapso que le encuentro nuevo hogar… Siendo este un claro incumplimiento al presente contrato. 
<br> </br>
2. El adoptante se compromete a comunicarse con el protector, con el fin de verificar el estado y cuidado de la mascota
presentando fotos de la misma y solo en caso de negarse a mandar las fotos permitirá la visita domiciliaria sorpresa para
verificar que el adoptado (animalito) este en buenas condiciones. 
<br> </br>
3. En caso de fallecimiento del animal, el adoptante deberá notificar las causas de la muerte y deslindar, si es el caso, de
negligencia al adoptante. El extravío del animal será considerado como negligencia por parte del dueño y será una falta
a este contrato. 
<br> </br>
4. El protector otorga una copia del presente contrato a la Brigada de Protección Animal de la Secretaría de Seguridad Pública 
de Cancún, Quintana Roo, por lo que en caso de que haya maltrato para el animalito, le da el derecho de inspeccionar el 
nuevo hogar de la mascota, y de confiscarla en caso de determinar que el animal efectivamente está recibiendo maltrato,
o que haya evidencia de violación de cualquier otra estipulación del contrato, asumiendo el adoptante toda
responsabilidad legal y económica que pueda generarse. 
<br> </br>
5. El presente contrato considera a la Ley de Protección a los Animales de Cancún, donde se establecen penas en contra del 
maltrato animal.
</p>
</div>

<input type="submit" value="Enviar" name="Enviar">

</div>
</form>
</main>
</div>

<?php
require "footer.html";
?>

