<?php
include "../_global/conexion.php";
include "../_global/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Computadoras</title>
    <link rel="stylesheet" href="../../bootstrap-5.1.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/templatemo-style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/personalizado.css">
    <link rel="stylesheet" href="../css/cards.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</head>


<!--boton flotante-->
<div class="containerButon">
    <input type="checkbox" id="btn-mas">
    <div class="redes">
        <a href="../php/mostrarCarrito.php" class="fas fa-store"></a>
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-instagram"></a>
    </div>
    <div class="btn-mas">
        <label for="btn-mas" class="fa fa-plus"></label>
    </div>
</div>

<!--***********BODY********************-->

<body id="aboutPage">



    <!--       b ody                 -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="../img/bg-01.jpg">
        <div class="container-fluid">
            <div class="row tm-brand-row">
                <div class="col-lg-4 col-11">
                    <div class="tm-brand-container tm-bg-white-transparent">
                        <button onclick="location.href='../index.php'" style="background-color: transparent; border: none;">
                            <i class="fas fa-3x text-center py-2 fa-pen tm-brand-icon"></i>
                        </button>
                        <div class="tm-brand-texts">
                            <h1 class="text-uppercase tm-brand-name"><a href="../index.php" style="color: #7b7579;">Intforlan</a></h1>
                            <p class="small">Somos tu mejor opción</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-1">
                    <div class="tm-nav">
                        <nav class="navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <div class="tm-nav-link-highlight"></div>
                                        <a class="nav-link" href="../php/computadoras.php">Computadores</a>
                                    </li>
                                    <li class="nav-item green-highlight ">
                                        <div class="tm-nav-link-highlight"></div>
                                        <a class="nav-link" href="../php/monitores.php">Celular<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="tm-nav-link-highlight"></div>
                                        <a class="nav-link" href="../php/instrumentos.php">Instrumentos</a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="tm-nav-link-highlight"></div>
                                        <a class="nav-link" href="../php/pedestales.php">Pedestales</a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="tm-nav-link-highlight"></div>
                                        <a class="nav-link" href="../contact.html">Contacto</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>