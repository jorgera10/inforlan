<?php
    include("conexion.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $squery = "DELETE FROM productos WHERE id = $id";
        $result = mysqli_query($conexion,$squery);

        if(!$result){
            die("ERROR!");
        }

        $_SESSION['message'] = 'Eliminado satisfactoriamente';
        $_SESSION['message_type'] = 'danger'; //color del mensaje
        header("Location: index_admin.php");
    }
?>