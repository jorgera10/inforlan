<?php
session_start();

$mensaje = "";

if (isset($_POST['btnAccion'])) {

    switch ($_POST['btnAccion']) {

        case 'Agregar':
            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $id = openssl_decrypt($_POST['id'], COD, KEY);
                $mensaje .= "ID correcto: " . $id . "<br/>";
            } else {
                $mensaje .= "ID incorrecto :(" . $id . "<br/>";
            }

            if (is_string(openssl_decrypt($_POST['nombre'], COD, KEY))) {
                $nombre = openssl_decrypt($_POST['nombre'], COD, KEY);
                $mensaje .= "nombre correcto: " . $nombre . "<br/>";
            } else {
                $mensaje .= "nombre incorrecto :(" . $nombre . "<br/>";
            }

            if (is_string(openssl_decrypt($_POST['marca'], COD, KEY))) {
                $marca = openssl_decrypt($_POST['marca'], COD, KEY);
                $mensaje .= "marca correcto: " . $marca . "<br/>";
            } else {
                $mensaje .= "marca incorrecto :(" . $marca . "<br/>";
            }

            if (is_string(openssl_decrypt($_POST['categoria'], COD, KEY))) {
                $categoria = openssl_decrypt($_POST['categoria'], COD, KEY);
                $mensaje .= "categoria correcto: " . $categoria . "<br/>";
            } else {
                $mensaje .= "categoria incorrecto :(" . $categoria . "<br/>";
            }

            if (is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))) {
                $precio = openssl_decrypt($_POST['precio'], COD, KEY);
                $mensaje .= "precio correcto: " . $precio . "<br/>";
            } else {
                $mensaje .= "precio incorrecto :(" . $precio . "<br/>";
            }

            if (is_string(openssl_decrypt($_POST['imagen'], COD, KEY))) {
                $imagen = openssl_decrypt($_POST['imagen'], COD, KEY);
                $mensaje .= "imagen correcto: " . $imagen. "<br/>";
            } else {
                $mensaje .= "imagen incorrecto :(" . $imagen . "<br/>";
            }

            if (is_numeric(openssl_decrypt($_POST['cantidad'], COD, KEY))) {
                $cantidad = openssl_decrypt($_POST['cantidad'], COD, KEY);
                $mensaje .= "cantidad correcto: " . $cantidad . "<br/>";
            } else {
                $mensaje .= "cantidad incorrecto :(" . $cantidad . "<br/>";
            }

            if (!isset($_SESSION['CARRITO'])) {
                $producto = array(
                    'id' => $id,
                    'nombre' => $nombre,
                    'marca' => $marca,
                    'categoria' => $categoria,
                    'precio' => $precio,
                    'imagen' => $imagen,
                    'cantidad' => $cantidad,

                );

                $_SESSION['CARRITO'][0] = $producto;
                $mensaje = "Producto agregado al carrito";
            } else {

                    $NumeroProductos = count($_SESSION['CARRITO']);
                    $producto = array(
                        'id' => $id,
                        'nombre' => $nombre,
                        'marca' => $marca,
                        'categoria' => $categoria,
                        'precio' => $precio,
                        'imagen' => $imagen,
                        'cantidad' => $cantidad,

                    );
                    $_SESSION['CARRITO'][$NumeroProductos] = $producto;
                    $mensaje = "Producto agregado al carrito";
                
            }



            break;

        case 'Eliminar':
            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $id = openssl_decrypt($_POST['id'], COD, KEY);

                foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                    if ($producto['id'] == $id) {
                        unset($_SESSION['CARRITO'][$indice]);
                    }
                }
            } else {
                $mensaje .= "ID incorrecto :(" . $id . "<br/>";
            }


            break;
    }
}
