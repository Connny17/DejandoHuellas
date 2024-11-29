<?php
require "header.php";
require "../conexion.php";

$db = new Database();
$con = $db->conectar();

$id = isset($_GET['id_Mascotas']) ? $_GET['id_Mascotas'] : '';

$sql = $con ->prepare("SELECT id_solicitud, id_Mascotas_fk, nombre_solicitante, apellido_Paterno, apellido_Materno, domicilio, edad, ocupacion, colonia, municipio,
correo, celular, nReferencia, numReferencia, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14,
p15, p16, p17, p18, p19, p20,visitas_Vet, vacunación, paseos, collarId, desparasitacion, cepillado, limpArenero, alimentacion   
from solicitud where id_Mascotas_fk=$id;");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<main>

<div class="container "> 
  <br>
<h1 class="text-center">Solicitudes</h1>

<BR></BR>

</div>


<div class="container">
   <div class="row justify-content-center P-5" >
   <div class="col-auto">
<table class="table">
<thead class="table-dark">
    <tr>
    <th scope="col">Id_solicitud</th>
      <th scope="col">Solicitante nombre</th>
      <th scope="col">apellido paterno</th>
      <th scope="col">apellido materno</th>
      <th scope="col"> </th>
      <th scope="col"> </th>
      <th scope="col"> </th>


    </tr>
  </thead>
  <tbody>
    <tr>
    
    <?php foreach($resultado as $filas){ ?>
<td><?php echo $filas['id_solicitud'] ?></td>
<td><?php echo $filas['nombre_solicitante'] ?></td>
<td><?php echo $filas['apellido_Paterno'] ?></td>
<td><?php echo $filas['apellido_Materno'] ?></td>

<td><a  class="btn btn-primary-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?=$filas['id_Mascotas_fk']?>">
  Ver solicitud
</a></td>


</tr>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop<?=$filas['id_Mascotas_fk']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Solicitud de adopción</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

<div class="row justify-content-center">
<form class="col-md-6 " action="" enctype="multipart/form-data" method="post" >

<div class="mb-3">
<label for="" class="form-label">Datos generales</label> <br>
<label for="" class="form-label">Nombre</label> <br>
<textarea name="" id="" readonly rows="1" cols="53"><?php echo $filas['nombre_solicitante'];?></textarea>
</div>


<div class="mb-3">
<label for="" class="form-label">Apellido paterno:</label> <br>
<textarea name="" id="" readonly rows="1" cols="53"><?php echo $filas['apellido_Paterno'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">Apellido materno:</label> <br>
<textarea name="" id="" readonly rows="1" cols="53"><?php echo $filas['apellido_Materno'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">Domicilio</label> <br>
<textarea name="" id="" readonly rows="3" cols="53"><?php echo $filas['domicilio'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">Edad</label> <br>
<textarea name="" id="" readonly rows="1" cols="53"><?php echo $filas['edad'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">Ocupación</label> <br>
<textarea name="" id="" readonly rows="1" cols="53"><?php echo $filas['ocupacion'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">Colonia</label> <br>
<textarea name="" id="" readonly rows="3" cols="53"><?php echo $filas['colonia'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">Municipio</label> <br>
<textarea name="" id="" readonly rows="1" cols="53"><?php echo $filas['municipio'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">Correo</label> <br>
<textarea name="" id="" readonly rows="1" cols="53"><?php echo $filas['correo'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">Telefono</label> <br>
<textarea name="" id="" readonly rows="1" cols="53"><?php echo $filas['celular'];?></textarea>
</div>


<div class="mb-3">
<label for="" class="form-label">Nombre de referencia</label> <br>
<textarea name="" id="" readonly rows="1" cols="53"><?php echo $filas['nReferencia'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">Número de referencia</label> <br>
<textarea name="" id="" readonly rows="1" cols="53"><?php echo $filas['numReferencia'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">Cuestionario</label> <br>
<label for="" class="form-label">¿Por qué deseas adoptar?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p1'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">¿Actualmente tienes otros?¿Cuales?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p2'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">¿Anteriormente has tenido otros animales?¿Cuales?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p3'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">¿Que pasó con el/ellos?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p4'];?></textarea>

</div>

<div class="mb-3">
<label for="" class="form-label">¿Estas de acuerdo en mandarme fotos de vez en vez vía whatsapp?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p5'];?></textarea>
</div>


<div class="mb-3">
<label for="" class="form-label">¿En caso que te negarashabria problema por visita sorpresa?¿Porque?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p6'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">¿Todas las personas en casa estan de acuerdo en adoptar? </label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p7'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">¿Hay niños en casa?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p8'];?></textarea>

</div>

<div class="mb-3">
<label for="" class="form-label">Edades</label> <br>
<textarea name="" id="" readonly rows="2" cols="53"><?php echo $filas['p9'];?></textarea>
</div>

<div class="mb-3">
<label for="" class="form-label">En caso de vivir en un lugar rentado, ¿tus arrendadores permite animales en la casa ó
departamento? O vives en casa Propia?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p10'];?></textarea>

</div>

<div class="mb-3">
<label for="" class="form-label">Si por algún motivo tuvieras que cambiar de domicilio, ¿Que pasaría con el animalito?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p11'];?></textarea>
 
</div>

<div class="mb-3">
<label for="" class="form-label">En caso de una ruptura en la familia (divorcio, fallecimiento) o de la llegada de un nuevo 
integrante humano ¿Cuáles serían los cambios en el trato hacia el adoptado?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p12'];?></textarea>

</div>

<div class="mb-3">
<label for="" class="form-label">¿Cuántos años crees que vive un perro o gato promedio?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p13'];?></textarea>

</div>

<div class="mb-3">
<label for="" class="form-label">¿Cómo te ves con tu adoptado dentro de 10 años?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p14'];?></textarea>

</div>

<div class="mb-3">
<label for="" class="form-label">¿Dónde dormiría el adoptado?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p15'];?></textarea>

</div>

<div class="mb-3">
<label for="" class="form-label">¿Cuanto tiempo pasará sólo el adoptado?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p16'];?></textarea>

</div>

<div class="mb-3">
<label for="" class="form-label">¿Tienes empleados domésticos?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p17'];?></textarea>

</div>

<div class="mb-3">
<label for="" class="form-label">¿Ellos están al tanto de los cuidados del perrito?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p18'];?></textarea>

</div>

<div class="mb-3">
<label for="" class="form-label">¿Estás de acuerdo en que ellos sean informacos sobre el cuidado al abrir las puertas para
que no se escapen los perritos y que no tienen que golpearlos con escobas ni maltratarlos?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p19'];?></textarea>

</div>

<div class="mb-3">
<label for="" class="form-label">¿Quién será responsable y se hará cargo de cubrir los gastos del adoptado?</label> <br>
<textarea name="" id="" readonly rows="6" cols="53"><?php echo $filas['p20'];?></textarea>

</div>

<div class="mb-3">

<a href="GenerarPdf.php?id_Mascotas=<?php echo $id;?>" class="btn btn-danger">Aprobar</a>
</div>

</form>



<?php } ?>
  </tbody>
</table>
</div>

    </div>
    </div>
    </div>






</main>


<?php require "footer.php"; ?>

