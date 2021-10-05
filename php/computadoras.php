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
    </header>

    <?php
    $sentencia = $pdo->prepare("SELECT * FROM `productos` WHERE categoria = 'computador'");

    $sentencia->execute();
    $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    ?>

    <?php foreach ($listaProductos as $producto) { ?>

        <div class="container col-12 col-xl-3 col-sm-5 col-md-4 col-lg-3 col-xl-2  mb-5">
            <div class="card tm-bg-black-transparent contenedor">

                <a href="../_archivos/informacion.php?id=<?php echo $producto['id'] ?>"><img alt=" <?php echo $producto['nombre']; ?>" title="<?php echo $producto['nombre']; ?>" src="../../php/<?php echo $producto['imagen']; ?>" data-content=<?php echo $producto['descripcion']; ?>></h3></a>

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

                <a href="../_archivos/informacion.php?id=<?php echo $producto['id'] ?>"><h3><?php echo $producto['nombre']; ?></h3></a>
                
                <h4 class="btnPrecio tm-about-description justify-content-end"> $
                    <?php echo $producto['precio']; ?>
                </h4>

                <!--Recolectando el ID-->

                <form action="" method="POST" class="formCard tm-call-to-action-form">

                    <input class="imputDisplay" name="id" id="id" value="<?php echo (openssl_encrypt($producto['id'], COD, KEY)); ?>">
                    <br>

                    <input class="imputDisplay" name="nombre" id="nombre" value="<?php echo (openssl_encrypt($producto['nombre'], COD, KEY)); ?>">
                    <br>

                    <input class="imputDisplay" name="marca" id="marca" value="<?php echo (openssl_encrypt($producto['marca'], COD, KEY)); ?>">
                    <br>

                    <input class="imputDisplay" name="categoria" id="categoria" value="<?php echo (openssl_encrypt($producto['categoria'], COD, KEY)); ?>">
                    <br>

                    <input class="imputDisplay" name="precio" id="precio" value="<?php echo (openssl_encrypt($producto['precio'], COD, KEY)); ?>">
                    <br>

                    <input class="imputDisplay" name="imagen" id="imagen" value="<?php echo (openssl_encrypt($producto['imagen'], COD, KEY)); ?>">
                    <br>
                    <input class="imputDisplay" name="fecha" id="fecha" value="<?php echo (openssl_encrypt($producto['fecha'], COD, KEY)); ?>">
                    <br>

                    <input class="imputDisplay" name="cantidad" id="cantidad" value="<?php echo (openssl_encrypt(1, COD, KEY)) ?>" ;>
                    <br>

                    <div class="btnContent" style="position: absolute; ">
                        <button type="submit" style="position: absolute; text-align: center; justify-content: center;" onclick="alerta()" class="btn btnCard" name="btnAccion" value="Agregar" type="submit">
                            Agregar
                        </button>

                    </div>

                </form>
            </div>
        </div>

    <?php } ?>
</section>

<?php
include "../_templates/footer.php";
?>


<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>