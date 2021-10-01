<link rel="stylesheet" href="css/cards.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../bootstrap-5.1.1-dist/css/bootstrap.min.css">


<?php
include("../_global/conexionBuscar.php");
include "../_global/config.php";
include "../_global/conexion.php";
include "../php/carrito.php";



$buscardor = mysqli_query($conexion, "SELECT * FROM productos WHERE id LIKE LOWER('%" . $_POST["buscar"] . "%') OR nombre LIKE LOWER ('%" . $_POST["buscar"] . "%') ");
$numero = mysqli_num_rows($buscardor); ?>



<?php while ($producto = mysqli_fetch_assoc($buscardor)) { ?>



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

        <input class="imputDisplay" name="cantidad" id="cantidad" value="<?php echo (openssl_encrypt(1, COD, KEY)) ?>" ;>
        <br>

        <div class="btnContent" style="position: absolute; ">
            <button type="submit" style="position: absolute; text-align: center; justify-content: center;" class="btn btnCard" name="btnAccion" value="Agregar" type="submit">
                Agregar
            </button>
        </div>
    </form>
<?php } ?>