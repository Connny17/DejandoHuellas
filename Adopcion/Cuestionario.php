<?php
require "header.html";
$id = isset($_GET['id_Mascotas']) ? $_GET['id_Mascotas'] : '';
session_start(); 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ $_SESSION['p1'] = $_POST['p1']; 
  $_SESSION['p2'] = $_POST['p2']; 
  $_SESSION['p3'] = $_POST['p3']; 
  $_SESSION['p4'] = $_POST['p4']; 
  $_SESSION['p5'] = $_POST['p5']; 
  $_SESSION['p6'] = $_POST['p6']; 
  $_SESSION['p7'] = $_POST['p7']; 
  $_SESSION['p8'] = $_POST['p8']; 
  $_SESSION['p9'] = $_POST['p9']; 
  $_SESSION['p10'] = $_POST['p10']; 
  $_SESSION['p11'] = $_POST['p11']; 
  $_SESSION['p12'] = $_POST['p12']; 
  $_SESSION['p13'] = $_POST['p13']; 
  $_SESSION['p14'] = $_POST['p14']; 
  $_SESSION['p15'] = $_POST['p15']; 
  $_SESSION['p16'] = $_POST['p16']; 
  $_SESSION['p17'] = $_POST['p17']; 
  $_SESSION['p18'] = $_POST['p18']; 
  $_SESSION['p19'] = $_POST['p19']; 
  $_SESSION['p20'] = $_POST['p20'];  
  header("Location: info.php"); 
  exit(); 
}
?>

<main>
<h2> </h2><br> <h2></h2>
<div class="row justify-content-center">
<form class="col-md-10" action="Cuestionario.php" enctype="multipart/form-data" method="post" >


  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Cuestionario: </label>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Por qué deseas adoptar?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p1" required>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">¿Actualmente tienes otros?¿Cuales?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p2" required>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">¿Anteriormente has tenido otros animales?¿Cuales?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p3"required>
  </div>
  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">¿Que pasó con el/ellos? </label>
    <input type="text" class="form-control" id="exampleInputText" name="p4"required>
  </div>
  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">¿Estas de acuerdo en mandarme fotos de vez en vez vía whatsapp?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p5"required>
  </div>


  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">¿En caso que te negaras habria problema por visita sorpresa?¿Porque? </label>
    <input type="text" class="form-control" id="exampleInputText" name="p6" required>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">¿Todas las personas en casa estan de acuerdo en adoptar?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p7" required>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">¿Hay niños en casa?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p8" required>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Edades:</label>
    <input type="text" class="form-control" id="exampleInputText" name="p9" required>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">En caso de vivir en un lugar rentado, ¿tus arrendadores permite animales en la casa ó
    departamento? O vives en casa Propia?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p10" required>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Si por algún motivo tuvieras que cambiar de domicilio, ¿Que pasaría con el animalito?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p11" required>
  </div>


  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">En caso de una ruptura en la familia (divorcio, fallecimiento) o de la llegada de un nuevo 
    integrante humano ¿Cuáles serían los cambios en el trato hacia el adoptado?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p12" required>
  </div>


  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">¿Cuántos años crees que vive un perro o gato promedio? </label>
    <input type="text" class="form-control" id="exampleInputText" name="p13" required>
  </div>


  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">¿Cómo te ves con tu adoptado dentro de 10 años?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p14" required>
  </div>


  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">¿Dónde dormiría el adoptado?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p15" required>
  </div>





  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Cuanto tiempo pasará sólo el adoptado?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p16" required>
  </div>


  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">¿Tienes empleados domésticos?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p17"  required>
  </div>


  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">¿Ellos están al tanto de los cuidados del perrito?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p18" required>
  </div>


  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">¿Estás de acuerdo en que ellos sean informacos sobre el cuidado al abrir las puertas para
    que no se escapen los perritos y que no tienen que golpearlos con escobas ni maltratarlos?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p19" required>
  </div>

  <br>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">¿Quién será responsable y se hará cargo de cubrir los gastos del adoptado?</label>
    <input type="text" class="form-control" id="exampleInputText" name="p20" required>
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