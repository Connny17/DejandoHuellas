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
                    <img src= "../archivos/<?php echo $row['foto'];?>" alt="" >
                    <br> </br><h2 class="card-title"><?php echo $row['nombre']; ?></h2>
                    <?php if($row['estado_Adopcion'] == "Disponible"): ?>
    
                    <?php endif; ?>
              
                    <div class="d-flex justify-content-center">
                    <div class='btn-group'>
                    <a href="Detalles.php?id_Mascotas=<?php echo $row['id_Mascotas'];?>&token=<?php echo hash_hmac('sha1', $row['id_Mascotas'], KEY_TOKEN);?>" class="ver-mas">Ver más                    </a>
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
