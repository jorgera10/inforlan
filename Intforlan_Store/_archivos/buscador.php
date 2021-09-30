<link rel="stylesheet" href="css/cards.css"/>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../bootstrap-5.1.1-dist/css/bootstrap.min.css">


<?php 
include("../_global/conexionBuscar.php");



$buscardor=mysqli_query($conexion,"SELECT * FROM productos WHERE id LIKE LOWER('%".$_POST["buscar"]."%') OR marca LIKE LOWER ('%".$_POST["buscar"]."%') ");
$numero = mysqli_num_rows($buscardor); ?>


<h5 class="card-tittle">Resultados encontrados (<?php echo $numero; ?>):</h5>

<?php while($producto = mysqli_fetch_assoc($buscardor)){ ?>


    <div class="card tm-bg-black-transparent">

<img alt=" <?php echo $producto['nombre']; ?>" title="<?php echo $producto['nombre']; ?>" src="../php/<?php echo $producto['imagen']; ?>" data-content=<?php echo $producto['descripcion']; ?>>

<div class="accordion accordion-flush tm-bg-black-transparent" id="accordionFlushExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Mas informacion
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body" style="color: black;">
                <h6 style="font-size: 13px; text-align: justify;"><?php echo $producto['descripcion']; ?></h6>
            </div>
        </div>
    </div>
</div>
<br>

<h3><?php echo $producto['nombre']; ?></h3>
<h4 class="btnPrecio tm-about-description justify-content-end"> $
    <?php echo $producto['precio']; ?>
</h4>


<?php } ?>