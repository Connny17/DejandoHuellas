<?php
require "header.html";
$id = isset($_GET['id_Mascotas']) ? $_GET['id_Mascotas'] : '';
session_start(); 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ $_SESSION['domicilio'] = $_POST['domicilio']; 
  $_SESSION['colonia'] = $_POST['colonia'];
  $_SESSION['municipio'] = $_POST['municipio'];
  header("Location: contacto.php"); 
  exit(); 
}
?>
<main>
  
<h2> </h2><br> <h2></h2>
<div class="row justify-content-center">
<form class="col-md-10" action="Domicilio.php" enctype="multipart/form-data" method="post" >

<br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Domicilio </label>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Domicilio: </label>
    <input type="text" class="form-control" id="exampleInputText" name="domicilio" required>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Colonia: </label>
    <input type="text" class="form-control" id="exampleInputText" name="colonia" required>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Delegación o municipio: </label>
    <input type="text" class="form-control" id="exampleInputText" name="municipio" required>
  </div>

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


  