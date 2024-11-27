<?php
require "../conexion.php";
require "header.html";
require "configC.php";

$db = new Database();
$con = $db->conectar();

$sql = $con ->prepare("SELECT id_Mascotas, foto, estado_Adopcion, nombre, tipo_Especie, color, edad, sexo, tamano from mascotas
inner join estado on  mascotas.id_Estado_fk=estado.id_Estado
inner join especie on  mascotas.id_Especie_fk=especie.id_Especie
inner join edad on mascotas.id_Edad_fk=edad.id_Edad
inner join sexo on mascotas.id_Sexo_fk=sexo.id_Sexo
inner join tamano on mascotas.id_Tamano_fk=tamano.id_Tamano order by id_Mascotas ASC;");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>


<main>
<section class="adopcion">
        <div class="container">
            <h1>¡Encuentra a tu nuevo mejor amigo!</h1>
            <!--<div class="filtros">
                <label for="especie">Especie:</label>
                <select id="especie" aria-label="Filtrar por especie">
                    <option value="todos">Todos</option>
                    <option value="Perro">Perros</option>
                    <option value="Gato">Gatos</option>
                </select>
                <label for="edad">Edad:</label>
                <select id="edad" aria-label="Filtrar por edad">
                    <option value="todas">Todas</option>
                    <option value="Cachorro">Cachorro</option>
                    <option value="Adulto">Adulto</option>
                </select>
            </div>-->
            <div class="container1">
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 g-5">
                <?php foreach($resultado as $row){ ?>
                <div class="col">
                  <div class="card shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">Mascota</h5>
                    <img src= "../archivos/<?php echo $row['foto'];?>" alt="" width= 300px>
                    <p class="card-text">Estado de adopción: <?php echo $row['estado_Adopcion']; ?> <br></p>
                    <p class="card-text">Nombre: <?php echo $row['nombre']; ?> <br></p>
                    <p class="card-text">Especie: <?php echo $row['tipo_Especie']; ?> <br></p>
                    <p class="card-text">Color: <?php echo $row['color']; ?> <br></p> 
                    <p class="card-text">Edad: <?php echo $row['edad']; ?> <br></p> 
                    <p class="card-text">Sexo: <?php echo $row['sexo']; ?> <br></p>
                    <p class="card-text">Tamaño: <?php echo $row['tamano']; ?> </p>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class='btn-group'>
                    <a href="Detalles.php?id_Mascotas=<?php echo $row['id_Mascotas'];?>&token=<?php echo hash_hmac('sha1', $row['id_Mascotas'], KEY_TOKEN);?>" class="ver-mas">Ver más</a>
                    </div>
                    </div>
                  </div>
                </div>
                  </div>
                <?php }?>
                </div>
                </div>      
        </div>
    </section>

</main>
 
<?php
require "footer.html";
