<?php
require "header.html";
$id = isset($_GET['id_Mascotas']) ? $_GET['id_Mascotas'] : '';
session_start(); 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ $_SESSION['visitas'] = $_POST['visitas']; 
  $_SESSION['vacunacion'] = $_POST['vacunacion']; 
  $_SESSION['paseos'] = $_POST['paseos']; 
  $_SESSION['collar'] = $_POST['collar']; 
  $_SESSION['desparacitacion'] = $_POST['desparacitacion']; 
  $_SESSION['cepillado'] = $_POST['cepillado']; 
  $_SESSION['limpieza'] = $_POST['limpieza']; 
  $_SESSION['alimentacion'] = $_POST['alimentacion']; 
  header("Location: info.php"); 
  exit(); 
}
?>

<main>

<h2> </h2><br> <h2></h2>
<div class="row justify-content-center">
<form class="col-md-10" action="enviarForm.php" enctype="multipart/form-data" method="post" >

  <p>Es importante que estés consciente que al igual que nosotros el pequeño(a) necesitan 
  de los siguientes</p> <br>

  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="visitas" value="1" id="flexCheckDefault" required>
  <label class="form-check-label" for="flexCheckDefault">Vistas periódicas al veterinario</label>  

  <input class="form-check-input" type="checkbox" name="vacunacion" value="1" id="flexCheckDefault" required>
  <label class="form-check-label" for="flexCheckDefault">Vacunación</label>  

  <input class="form-check-input" type="checkbox" name="paseos" value="1" id="flexCheckDefault" required>
  <label class="form-check-label" for="flexCheckDefault">Paseos con correa para perro</label>

  <input class="form-check-input" type="checkbox" name="collar" value="1" id="flexCheckDefault" required>
  <label class="form-check-label" for="flexCheckDefault">Uso de collar y placa id</label>  

  <input class="form-check-input" type="checkbox" name="desparacitacion" value="1" id="flexCheckDefault" required>
  <label class="form-check-label" for="flexCheckDefault">Desapasitación</label>  

  <input class="form-check-input" type="checkbox" name="cepillado" value="1" id="flexCheckDefault" required>
  <label class="form-check-label" for="flexCheckDefault">Cepillado de pelo</label>

  <input class="form-check-input" type="checkbox" name="limpieza" value="1" id="flexCheckDefault" required>
  <label class="form-check-label" for="flexCheckDefault">Limpieza diaria de arenero(gato)</label>  

  <input class="form-check-input" type="checkbox" name="alimentacion" value="1" id="flexCheckDefault" required>
  <label class="form-check-label" for="flexCheckDefault">Alimentación saludable</label>  <br> <br>
  <div class="d-flex justify-content-center">
<input type="submit" value="Enviar" name="Enviar" class="btn btn-siguiente">
</div>


</div>




</div>
</form>
</main>
</div>
<?php
require "footer.html";
?>