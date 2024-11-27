<?php
require "../conexion.php";
require "header.html";
require "configC.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<section class="adopcion">
<div class="container">

<?php
$db = new Database();
$con = $db->conectar();

$id = isset($_GET['id_Mascotas']) ? $_GET['id_Mascotas'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if($id == '' || $token == ''){
echo 'Error al procesar la peticion';
exit;
}else{
    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
if ($token == $token_tmp) {

    $sql = $con->prepare("SELECT count(id_Mascotas) FROM mascotas WHERE id_Mascotas=?");
    $sql->execute([$id]);
    $count = $sql->fetchColumn();

    if ($count > 0) {
        $sql = $con->prepare("SELECT id_Mascotas, foto, estado_Adopcion, nombre, tipo_Especie, color, tamano, edad, sexo, vacunado, desparasitado,
        esterilizado, descripcion, cuidados, historia_Rescate 
        FROM mascotas
        inner join estado on mascotas.id_Estado_fk=estado.id_Estado
        inner join especie on mascotas.id_Especie_fk=especie.id_Especie
        INNER JOIN edad ON mascotas.id_Edad_fk = edad.id_Edad
        INNER JOIN sexo ON mascotas.id_Sexo_fk = sexo.id_Sexo
        INNER JOIN tamano ON mascotas.id_Tamano_fk = tamano.id_Tamano
        WHERE id_Mascotas = ? LIMIT 1");

        $sql->execute([$id]);
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);

        $foto = $resultado['foto'];
        $estado = $resultado['estado_Adopcion'];
        $nombre = $resultado['nombre'];
        $especie = $resultado['tipo_Especie'];
        $color = $resultado['color'];
        $tamano = $resultado['tamano'];
        $edad = $resultado['edad'];
        $sexo = $resultado['sexo'];
        $vacunado = $resultado['vacunado'];
        $desparasitado = $resultado['desparasitado'];
        $esterilizado = $resultado['esterilizado'];
        $descripcion = $resultado['descripcion'];
        $cuidados = $resultado['cuidados'];
        $historia = $resultado['historia_Rescate'];

    }
}


    else{
        echo 'Error al procesar la petición';
    exit;
          }
        
}


 
?>


<main>
<section>
<div class="container">
<div class="row">
<div class="col-md-6 order-md-1">
<img src="<?php echo $foto ?>" alt="" width=400px>
<br>


</div>
<div class="col-md-6 order-md-2">
<h2> ¡Hola soy <?php echo $nombre?>!</h2> <br>
<h4>Estado de adopcion: <?php echo $estado?> </h4> 

<h4>Especie: <?php echo $especie?></h4>
<h4>Color: <?php echo $color?></h4>
<h4>Tamaño: <?php echo $tamano?></h4>
<h4>Edad: <?php echo $edad?></h4>
<h4>Sexo: <?php echo $sexo?></h4>
<h4>Salud:</h4>
<?php if($vacunado==1){  ?>
<h4><img src="img/mascotas.png" alt="" width="50px"><?php echo "  Vacunado";?></h4>
<?php  }?>

<?php if($desparasitado==1){  ?>
<h4><img src="img/perro.png" alt="" width="50px"><?php echo "  Desparasitado";?></h4>
<?php  }?>

<?php if($esterilizado==1){  ?>
<h4><img src="img/cuidado-de-mascotas.png" alt=""  width="50px"> <?php echo "  Esterilizado";?></h4>
<?php  }?>

<h4>Descripcion: <?php echo $descripcion?></h4>
<h4>Cuidados especiales: <?php echo $cuidados?></h4>
<h4>Historia de rescate: <?php echo $historia?></h4>

<td><a href="Adopta.php" class="btn btn-warning">Adoptar</a></td>
</tr>
    </div>
  </div>
</div>
</div>
</div>
</div>
</main>
</section>

<?php require "footer.html"; ?>