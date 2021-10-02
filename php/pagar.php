<?php
include "../_global/config.php";
include "../_global/conexion.php";
include "carrito.php";
include "../_templates/head.php";
?>

<?php
if ($_POST) {
    $total = 0;
    $sid = session_id();
    $correo = $_POST['email'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];


    foreach ($_SESSION['CARRITO'] as $indice => $producto) {

        $total = $total + ($producto['precio'] * $producto['cantidad']);
    }

    $sentencia = $pdo->prepare("INSERT INTO `ventas`(`claveTransaccion`, `datos`, `fecha`, `correo`, `total`, `estado`, `nombre`, `apellido`) VALUES (:ClaveTransaccion, '', NOW(), :correo, :total, 'pendiente', :nombre, :apellido)");

    $sentencia->bindParam(":ClaveTransaccion", $sid);
    $sentencia->bindParam(":correo", $correo);
    $sentencia->bindParam(":nombre", $nombre);
    $sentencia->bindParam(":apellido", $apellido);
    $sentencia->bindParam(":total", $total);

    $sentencia->execute();
    $idVentas = $pdo->lastInsertId();
}


?>

<section id="p-5 tmAppFeatures">
    <div class="col-lg-12 tm-bg-white-transparent ">
    <!--
        
        <div class=" col-lg-12 tm-app-feature-icon-container icon-wrap pt-5" style="text-align: center;">
                <p><i class="fas fa-4x px-3 py-4 fa-air-freshener tm-app-feature-icon  far fa-thumbs-up" style="text-align: center;"></i></p>
            </div>
        -->    
        <div class="tm-app-feature-box">
            <div class="tm-app-feature-description-box">
                <h3 class="mb-4 tm-app-feature-title"><?php echo $nombre . "  " . $apellido ?></h3>
                <p class="tm-app-feature-description"><?php echo $correo ?></p>
                <p style="text-align: justify;">
                    Su pedido esta ingresado exitosamente,
                    debe sequir las siguientes instrucciones
                    para finalizar su compra:
                    Una vez que realice el Depósito o Transferencia Bancaria a
                    estos datos, envíe una foto del comprobante bancario a
                    nuestra cuenta de <a href="https://wa.link/rl7zpd" target="_blank">WhatsApp</a> para
                    que su compra se apruebe:
                    <br>
                    BANCO PICHINCHA
                    <br> Cuenta AHORROS: 2204418816
                    <br> Adrian Nathaniel Mosquera Gonzalez
                    <br> C.I: 1723518294
                    <br> intforlanempresa@gmail.com
                    <br> Teléfono: 097 897 1466

                    El depósito lo puede hacer en un Banco Pichincha "Mi
                    Vecino" o ventanilla del Banco que le quede cercano. No
                    necesita tener una cuenta bancaria ni ser mayor de edad.
                </p>
                <?php echo  "<h3 style='display:inline;'>Total a pagar: </h3>"."<h1 style='display:inline;'>" . $total . " $ </h1>";?>
            </div>
        </div>
    </div>
</section>

<?php
include "../_templates/footer.php";
?>