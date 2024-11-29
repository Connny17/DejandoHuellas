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
        <!-- Columna para el carrusel -->
        <div class="col-md-6 order-md-1">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $foto ?>" class="d-block w-100" alt="Imagen de la mascota">
                    </div>
                    <!-- Si tienes más imágenes, puedes añadir más items aquí -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Columna para los datos -->
        <div class="col-md-6 order-md-2">
            <h2>¡Hola, soy <?php echo $nombre ?>!</h2>
            <h4>Estado de adopción: <?php echo $estado ?> </h4>
            <h4>Especie: <?php echo $especie ?></h4>
            <h4>Color: <?php echo $color ?></h4>
            <h4>Tamaño: <?php echo $tamano ?></h4>
            <h4>Edad: <?php echo $edad ?></h4>
            <h4>Sexo: <?php echo $sexo ?></h4>
            <h4>Salud: <br></h4>
            <?php if ($vacunado == 1) { ?>
                <h4><img src="img/mascotas.png" alt="" width="30px"> Vacunado</h4>
            <?php } ?>
            <?php if ($desparasitado == 1) { ?>
                <h4><img src="img/perro.png" alt="" width="30px"> Desparasitado</h4>
            <?php } ?>
            <?php if ($esterilizado == 1) { ?>
                <h4><img src="img/cuidado-de-mascotas.png" alt="" width="30px"> Esterilizado</h4>
            <?php } ?>
            <h4>Descripción: <br><?php echo $descripcion ?></h4>
            <h4>Cuidados especiales: <br><?php echo $cuidados ?></h4>
            <h4>Historia de rescate: <br> <?php echo $historia ?></h4>
            <div class="d-flex justify-content-center">
            <a href="Adopta.php?id_Mascotas=<?php echo $id ?>" class="btn btn-warning ">Adoptar</a>
            </div>
            </div>
            </div>
    </div>
</div>
</section>
</main>

<?php require "footer.html"; ?>