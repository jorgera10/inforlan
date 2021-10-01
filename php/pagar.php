<?php
include "../_global/config.php";
include "../_global/conexion.php";
include "carrito.php";
include "../_templates/head.php";
?>

<?php 
if($_POST){
    $total=0;
    $sid = session_id();
    $correo = $_POST['email'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    foreach($_SESSION['CARRITO'] as $indice=>$producto){

        $total=$total+($producto['precio']*$producto['cantidad']);

    }

    $sentencia = $pdo->prepare("INSERT INTO `ventas`(`claveTransaccion`, `datos`, `fecha`, `correo`, `total`, `estado`, `nombre`, `apellido`) VALUES (:ClaveTransaccion, '', NOW(), :correo, :total, 'pendiente', :nombre, :apellido)");

    $sentencia->bindParam(":ClaveTransaccion", $sid);
    $sentencia->bindParam(":correo", $correo);
    $sentencia->bindParam(":nombre", $nombre);
    $sentencia->bindParam(":apellido", $apellido);
    $sentencia->bindParam(":total", $total);

    $sentencia->execute();
    $idVentas=$pdo->lastInsertId();

    echo "<h1>".$total."</h1>";
}

?>



<?php
include "../_templates/footer.php";
?>