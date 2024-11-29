<?php
require "header.html";
$id = isset($_GET['id_Mascotas']) ? $_GET['id_Mascotas'] : '';
session_start(); 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ $_SESSION['celular'] = $_POST['celular']; 
  $_SESSION['correo'] = $_POST['correo'];
  $_SESSION['nReferencia'] = $_POST['nReferencia'];
  $_SESSION['numReferencia'] = $_POST['numReferencia'];
  header("Location: Cuestionario.php"); 
  exit(); 
}
?>

<main>

<h2> </h2><br> <h2></h2>
<div class="row justify-content-center">
<form class="col-md-10" action="contacto.php" enctype="multipart/form-data" method="post" >


  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Datos de contacto: </label>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Telefono:</label>
    <input type="number" class="form-control" id="exampleInputText" name="celular">
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">E-MAIL:</label>
    <input type="email" class="form-control" id="exampleInputText" name="correo">
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Nombre de referencia</label>
    <input type="text" class="form-control" id="exampleInputText" name="nReferencia">
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Telefono de referencia:</label>
    <input type="number" class="form-control" id="exampleInputText" name="numReferencia">
  </div>
  <input type="submit" value="Siguiente">


</div>
</form>
</main>
</div>

<?php
require "footer.html";
?>