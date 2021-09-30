<?php
    $servidor = "mysql:dbname=".BD.";host=".SERVIDOR; 

    try{

        $pdo = new PDO($servidor, USUARIO, PASSWORD,
            array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8")
        );

    }catch(PDOException $e){
        echo"<script>alert('encontramos un error')</script>";
    }

?>

