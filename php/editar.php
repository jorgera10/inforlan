<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $squery = "SELECT * FROM productos WHERE id = $id";
    $result = mysqli_query($conexion, $squery);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $_POST['nombre'];
        $marca = $_POST['marca'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        
    }
}

if (isset($_POST['update'])) {
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];


    $query = "UPDATE productos SET nombre='$nombre', marca = '$marca',categoria='$categoria',descripcion='$descripcion',precio='$precio' WHERE id = '$id'";


    mysqli_query($conexion, $query);

    $_SESSION['message'] = 'Usuario actualizado correctamente';
    $_SESSION['message_type'] = 'warning';

    header("Location: index.php");
}


?>


<?php include('includes/header.php') ?>
<div class="container p-4 w-50">
    <div class="row">
        <div class="card card-body">
            <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">

                <form action="ingresar.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <input type="text" name="marca" class="form-control" placeholder="Marca" autofocus>
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <select name="categoria" class="form-select" aria-label="Default select example">
                            <option value="computador">computador</option>
                            <option value="teclados">teclados</option>
                            <option value="monitores">monitores</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Descripcion..." class="form-control"></textarea>
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <input type="text" name="precio" rows='2' class="form-control" placeholder="precio" autofocus>
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <input type="file" name="imagen" rows='2' class="form-control" placeholder="imagen" autofocus>
                    </div>
                    <br>


                    <button class="btn btn-success end" name="update">
                        Update
                    </button>
                </form>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>