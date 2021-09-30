<?php include("conexion.php") ?>

<?php include("includes/header.php") ?>







<div class="container p-4 m-4 justify-content-center">
    <div class="row">
        <div class="col-md-4">


            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<? $_SESSION['message-type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php session_unset();
            } ?>

            <div class="card card-body">
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
                        <input type="text" name="descripcion" rows='2' class="form-control" placeholder="Descripcion..." autofocus>
                    </div>
                    <br>

                    <div class="form-group">
                        <input type="text" name="precio" rows='2' class="form-control" placeholder="precio" autofocus>
                    </div>
                    <br>

                    <div class="form-group">
                        <input type="file" name="imagen" rows='2' class="form-control" value="imagen">
                    </div>
                    <br><br>


                    <input type="submit" class="btn btn-success btn-block" name="ingresar" value="Guardar">
                </form>
            </div>
        </div>

        <!--consulta tabla que muestra-->
        <div class="col-md-8">

            <table class="table table-bordered">
                <thead>
                    <th>id</th>
                    <th>nombre</th>
                    <th>marca</th>
                    <th>categoria</th>
                    <th>descripcion</th>
                    <th>precio</th>
                    <th>imagen</th>
                    <th>accion</th>
                </thead>
                <tbody>
                    <?php
                    $query = 'SELECT * FROM productos';
                    $result = mysqli_query($conexion, $query);

                    while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['marca'] ?></td>
                            <td><?php echo $row['categoria'] ?></td>
                            <td><?php echo $row['descripcion'] ?></td>
                            <td><?php echo $row['precio'] ?></td>
                            <?php echo '<td><img src="' . $row['imagen'] . '"width = 80px height= auto></td>' ?>

                            <td>
                                <a href="editar.php?id=<?php echo $row['id'] ?>">
                                    <i class="far fa-edit" style="font-size: 25px;"></i>
                                </a>

                                <a href="eliminar.php?id=<?php echo $row['id'] ?>">
                                    <i class="far fa-trash-alt" style="font-size: 25px; color: red;"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





<?php include("includes/footer.php") ?>