<?php
include "../_global/conexionBuscar.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM `productos` WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $nombre = $row['nombre'];
        $precio = $row['precio'];
        $marca = $row['marca'];
        $descripcion = $row['descripcion'];

        echo $nombre;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $nombre ?></title>
    <link rel="stylesheet" href="../css/informacion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
</head>

<?php 
$imageNombre = 'opcion_fondo4.jpg';
?>
<body>
    <div class="presentacion">
        <div id="carouselExampleInterval" class="img carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img class="imgItem" src="https://blog.hootsuite.com/wp-content/uploads/2019/02/photographer-865295_1920-e1550084906860.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img class="imgItem" src="https://github.com/jorgera10/AprendiendoGit/blob/master/<?php echo $nombre?>.jpg?raw=true" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="imgItem" src="https://github.com/jorgera10/AprendiendoGit/blob/master/opcion_fondo4.jpg?raw=true" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="producto-info">
            <div class="producto-texto">
                <h1><?php echo $nombre ?></h1>
                <h2><?php echo $marca ?></h2>
                <p><?php echo $descripcion ?></p>
            </div>
            <div class="volverAtras">
                <a href="#">Volver</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>