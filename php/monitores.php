<?php
include "../_global/config.php";
include "../_global/conexion.php";
include "carrito.php"
?>

<?php include "../_templates/head.php" ?>
<!--********************* Catalogo *****************-->


<section class="row" id="tmAbout">


<header class="col-12 p-0 tm-about-header">
    <h2 class="text-uppercase my-3 text-center text-dark tm-about-page-title">Catalogo</h2>
    <hr class="tm-about-title-hr">
</header>
<?php
$sentencia = $pdo->prepare("SELECT * FROM `productos`");
$sentencia->execute();
$listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
<?php foreach ($listaProductos as $producto) { ?>
    <div class="col-lg-3 mt-2">
        <div class="p-3 w-100 h-100 card tm-bg-black-transparent tm-about-box">
            <div class="card tm-bg-black-transparent  tm-about">
                <img class="card-img-top" width="250px" height="250px" alt="<?php echo $producto['nombre']; ?>" title="<?php echo $producto['nombre']; ?>" src="../../php/<?php echo $producto['imagen']; ?>" data-toggle="popover" data-trigger="hover" data-content=<?php echo $producto['descripcion']; ?>>
            </div>
            <div class="card-body mh-25">
                <h3 class="tm-about-name"><?php echo $producto['nombre']; ?></h3>
                <p class="tm-about-description">
                    <?php echo $producto['detalles']; ?>
                </p>
                <p class="tm-about-description justify-content-end"> $
                    <?php echo $producto['precio']; ?>
                </p>
                <form action="" method="POST" class="tm-call-to-action-form">
                    <input type="hidden" name="id" id="id" value="<?php echo (openssl_encrypt($producto['id'], COD, KEY)); ?>">
                    <br>
                    <input type="hidden" name="nombre" id="nombre" value="<?php echo (openssl_encrypt( $producto['nombre'], COD, KEY));?>">
                    <br>
                    <input type="hidden" name="marca" id="marca" value="<?php echo (openssl_encrypt($producto['marca'], COD, KEY)); ?>">
                    <br>
                    <input type="hidden" name="categoria" id="categoria" value="<?php echo (openssl_encrypt($producto['categoria'], COD, KEY)); ?>">
                    <br>
                    <input type="hidden" name="precio" id="precio" value="<?php echo (openssl_encrypt($producto['precio'], COD, KEY)); ?>">
                    <br>
                    <input type="hidden" name="imagen" id="imagen" value="<?php echo (openssl_encrypt($producto['imagen '], COD, KEY)); ?>">
                    <br>
                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo (openssl_encrypt(1, COD, KEY)) ?>" ;>
                    <br>
                    <button type="submit" class="btn btn-Secondary" name="btnAccion" value="Agregar" type="submit">
                        Agregar
                    </button>
                </form>
            </div>
        </div>
    </div>
<?php }
?>
<!-- Button trigger modal -->
</section>




</div>
<!-- .container-fluid -->
</div>
<?php
include "../_templates/footer.php";
?>

<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>