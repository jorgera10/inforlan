<?php

    $json = file_get_contents("inventario.json");
    $inventario = json_decode($json, true);

    foreach($inventario as $row){
        $id  = $row['id'];       
        $nombre  = $row['nombre'];
        $marca  = $row['marca'];
        $categoria  = $row['categoria'];
        $subcategoria  = $row['subcategoria'];
        $subcategoria2  = $row['subcategoria2'];
        $estado  = $row['estado'];
        $peso  = $row['peso'];
        $modelo  = $row['modelo'];
        $procesador  = $row['procesador'];
        $memoria  = $row['memoria'];
        $ranurasMemoria  = $row['ranuras memoria'];
        $discoDuro = $row['disco duro'];
        $sistemaOperativo  = $row['sistema operativo'];
        $graficos  = $row['graficos'];
        $puertos  = $row['puertos'];
        $sonido  = $row['sonido'];
        $color  = $row['color'];
        $garantia  = $row['garantia'];
        $precio  = $row['precio'];
        $disponible  = $row['disponible'];
        $imagen  = $row['imagen'];

        $sql = "INSERT INTO `productos`(`id`, `nombre`, `marca`, `categoria`, `subcategoria`, `subcategoria2`, `estado`, `peso`, `modelo`, `procesador`, `memoria`, `ranuras memoria`, `disco duro`, `sistema operativo`, `graficos`, `puertos`, `sonido`, `color`, `garantia`, `precio`, `disponible`, `imagen`) VALUES ('$id','$nombre','$marca','$categoria','$subcategoria','$subcategoria2','$estado','$peso','$modelo','$procesador','$memoria','$ranurasMemoria','$discoDuro','$sistemaOperativo','$graficos','$puertos','$sonido','$color','$garantia','$precio','$disponible','$imagen');";

        //mysqli_query()
        echo($sql);
    }

?>