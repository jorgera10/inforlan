<?php
require 'conexion.php';
include ('conexion.php');
    

    if (isset($_POST['ingresar'])){
        $nombre = $_POST['nombre'];
        $marca = $_POST['marca'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];

        /*--------------imagen-----------------*/
        $imagen='';

        if(isset($_FILES['imagen'])){
            $file = $_FILES['imagen'];
            $nombreImg = $file['name'];
            $tipo = $file['type'];
            $rutaProvisional = $file['temp_name'];
            $size = $file['size'];
            $dimesiones = getimagesize(($rutaProvisional));
            $width = $dimesiones[0];
            $height = $dimesiones[1];
            $carpeta = "imagenes/";

            if($tipo != 'image/jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif'){
                echo"El Archivo seleccionado no es una imagen";
            }
            else if($size > 5*1024*1024){ #tamanio en megas = 5 megas
                echo "EL Archivo es muy pesado";
            }
            else{
                $src = $carpeta.$nombreImg;
                move_uploaded_file($rutaProvisional, $src);
                $imagen = "imagenes/".$nombreImg;
            }


        }

        $query = "INSERT INTO productos(nombre, marca, categoria, descripcion, precio, imagen) VALUES ('$nombre', '$marca', '$categoria', '$descripcion', '$precio', '$imagen')";
        
        $result = mysqli_query($conexion, $query);
        
        if(!$result){
            die("falla fatal");
        }

        $_SESSION['message'] = 'Guardado exitosamente';
        $_SESSION['message_type'] = 'success';

        header("Location: index.php");
    
    
    }
?>