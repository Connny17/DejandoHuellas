<?php
require "header.html";
$id_Mascotas = isset($_GET['id_Mascotas']) ? $_GET['id_Mascotas'] : '';
session_start(); 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 
  $_SESSION['id_Mascotas_fk'] = $_POST['id_Mascotas_fk'];
  $_SESSION['nombre'] = $_POST['nombre']; 
  $_SESSION['apellido_Paterno'] = $_POST['apellido_Paterno'];
  $_SESSION['apellido_Materno'] = $_POST['apellido_Materno'];
  $_SESSION['edad'] = $_POST['edad'];
  $_SESSION['ocupacion'] = $_POST['ocupacion'];
  header("Location: Domicilio.php"); 
}
?>

<main>

<h2> </h2><br> <h2></h2>
<div class="row justify-content-center">
<form class="col-md-10" action="Adopta.php" enctype="multipart/form-data" method="post" >
<div class="mb-3">
<h2 class="text-center"> Formulario de adopción animal</h2>
<br><br>
</div>

<br>
  <div class="mb-3">
  <input type="hidden" value="<?=$id_Mascotas?>" name="id_Mascotas_fk">
  </div>

<br>
  <div class="mb-3">
    <label for="exampleInputText" class="">Datos generales:</label>
  </div>

<br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Apellido paterno:</label>
    <input type="text" class="form-control" id="exampleInputText" name="apellido_Paterno" required>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Apellido materno:</label>
    <input type="text" class="form-control" id="exampleInputText" name="apellido_Materno" required>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Nombre (s):</label>
    <input type="text" class="form-control" id="exampleInputText" name="nombre" required>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Edad:</label>
    <input type="number" class="form-control" id="exampleInputText" name="edad" required>
  </div>

  <br>
<div class="mb-3">
  <label for="exampleInputText" class="form-label">Ocupación:</label>
  <input type="text" class="form-control" id="exampleInputText" name="ocupacion" required>
</div>

<!-- Botón centrado con clases personalizadas -->
<div class="d-flex justify-content-center">
  <input type="submit" value="Siguiente" name="Siguiente" class="btn btn-siguiente">
</div>

</div>
</form>
</main>
</div>

<?php
require "footer.html";
?>