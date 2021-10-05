<?php
include "../_global/config.php";
include "../_global/conexion.php";
include "carrito.php";
?>

<?php include "../_templates/head.php" ?>


<div class="row">
    <header class="col-12 text-center text-white tm-bg-black-transparent p-3 tm-app-header">
        <h2 class="text-uppercase mb-2 tm-app-feature-header">Lista de compra</h2>
    </header>
</div>

<?php if (!empty($_SESSION['CARRITO'])) { ?>

    <?php $total = 0; ?>

    <section class="row tm-contact-row">
        <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>

            <div class="col-lg-6 px-10 tm-bg-black-transparent ">

                <div class="container" style="width: 100%; height: 175px ">
                    <div class="w-45 h-100 my-auto  p-5 productImagen">
                        <img  src="https://github.com/intforlan/IntforlanImages/blob/master/<?php echo $producto['nombre']?>_I1.jpg?raw=true"" alt="<?php echo $producto['nombre'] ?>" style="width: 70px; height: 70px;">
                    </div>
                    <div class="w-25 h-100 my-auto productNombre">
                        <h5 style="line-height: 160px"><?php echo $producto['marca'] ?></h5>
                    </div>

                    <div class="w-25 h-100 my-auto  productPrecio">
                        <h5 style="line-height: 160px">$ <?php echo $producto['precio'] ?></h5>
                    </div>

                    <div class="w-5 h-100 my-auto productDelete">
                        <form action="" method="POST">
                            <input type="hidden" id="id" name="id" value="<?php echo (openssl_encrypt($producto['id'], COD, KEY)); ?>">
                            <button type="submit" name="btnAccion" value="Eliminar" style="border: none; line-height: 160px; background:transparent;"><i class="fas fa-trash-alt" style=" font-size: 25px; color:#E7264C "></i></button>
                        </form>
                    </div>
                </div>
            </div>

            
            <?php $total = $total + ($producto['precio'] * $producto['cantidad']) ?>
            
            <?php } ?>
            
        </section>
        <br>
        <table class="tm-bg-black-transparent col-12">
            <td colspan="9" align="left">
                <h3>Total</h3>
            </td>
            <td colspan="3" align="left">
                <h3>$<?php echo number_format($total, 2); ?></h3>
            </td>
        </table>
        <br>
        <br>
            <div class="espacioBlanco h-20 w-20">

            </div>
        <div class="row">
            <header class="col-12 text-center text-white tm-bg-black-transparent p-3 tm-app-header">
                <h2 class="text-uppercase mb-2 tm-app-feature-header">Datos Personales</h2>
            </header>
        </div>

        <div class="col-lg-12 tm-contact">

            <form action="pagar.php" method="POST" id="tmContactForm" class="tm-bg-black-transparent tm-contact-form">
                <div class="form-group">
                    <input type="text" id="nombre" name="nombre" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Nombre" required="">
                </div>
                <div class="form-group">
                    <input type="text" id="apellido" name="apellido" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Apellido" required="">
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Email" required="">
                </div>

                <div class="form-group">
                    <input type="text" id="telefono" name="telefono" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Telefono Celular" required="">
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary tm-btn-submit rounded-0" name="btnAccion" value="proceder">
                        Comprar
                    </button>
                </div>
            </form>
        </div>


<?php } else { ?>
    <div class="alert alert-success">
        Aun no añades productos a tu carrito
    </div>
<?php } ?>


<?php include "../_templates/footer.php" ?>