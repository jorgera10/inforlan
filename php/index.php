<?php
include_once 'database.php';
include 'mcript.php';
include_once 'conexion.php';

session_start();

if (isset($_GET['cerrar_sesion'])) {
    session_unset();

    // destroy the session 
    session_destroy();
}



function getRealIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    return $_SERVER['REMOTE_ADDR'];
}
$myIP = getRealIP();


if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 'Admin':
            header('location: index_admin.php');
            break;
        default:
    }
}

if (isset($_POST['user']) && isset($_POST['clave'])) {
    $username = $_POST['user'];
    $password = $_POST['clave'];
    $password = $encriptar($password);



    $db = new Database();
    $query = $db->connect()->prepare('SELECT *FROM usuario WHERE user = :user AND clave = :clave AND estado=1');
    $query->execute(['user' => $username, 'clave' => $password]);



    $row = $query->fetch(PDO::FETCH_NUM);


    if ($row == true) {

        //AQUI CARGA A LA TABLA AUDITORIA, TODO LO QUE HAGAS EN EL SISTEMA DEBE GUARDARSE


        $rol = $row[8];
        $_SESSION['rol'] = $rol;



        switch ($rol) {
            case 'Admin':
                header('location: index_admin.php');
                echo "Hola $user";
                break;

            default:
        }
    } else {
        // no existe el usuario
        echo "<script>window.alert('Nombre de usuario o contraseña incorrecto')</script>";
    }
    $queryS = "INSERT INTO `auditoria`( `nombre_user`, `transaccion`, `mensaje`, `ipmaquina`, `rol`) VALUES ('$username', 'Ingreso al Sistema', 'OK','$myIP','$rol')";


    $resultA = mysqli_query($conexion, $queryS);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <em>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
    </em>
    <link href="../css/estilologin.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="be-wrapper be-login">
        <div class="main-content container-fluid">
            <div class="splash-container">
                <div class="panel panel-default panel-border-color panel-border-color-primary">
                    <div class="panel-heading"><img src="../img/logo.jpeg" alt="logo" width="300px" class="logo-img"></div>
                    <div class="panel-body">

                        <form action="" method="POST" class="form">
                            <div class="form-group">
                                <label for="user"><i class="fas fa-user-tie"></i></label>
                                <input type="text" name="user" class="form-control" placeholder="Usuario" rows='1' autofocus>
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="fas fa-lock">
                                    </i></label>
                                <input type="password" name="clave" rows='2' class="form-control" placeholder="Contraseña" autofocus>
                            </div>


                            <div class="form-group login-submit">
                                <input class="btn btn-primary btn-xl" type="submit" value="Iniciar sesión">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>