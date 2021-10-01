<?php
include "_global/config.php";
include "_global/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Intforlan Store</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" href="css/personalizado.css">

</head>


<body id="aboutPage">

  <!--boton flotante-->
  <div class="containerButon">
      <input type="checkbox" id="btn-mas">
      <div class="redes">
          <a href="php/mostrarCarrito.php" class="fas fa-store"></a>
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-instagram"></a>
      </div>
      <div class="btn-mas">
          <label for="btn-mas" class="fa fa-plus"></label>
      </div>
  </div>

  <div class="parallax-window" data-parallax="scroll" data-image-src="img/bg-01.jpg">
    <div class="container-fluid">
      <div class="row tm-brand-row">
        <div class="col-lg-4 col-11">
          <div class="tm-brand-container tm-bg-white-transparent">
            <button onclick="location.href='index.php'" style="background-color: transparent; border: none;">
              <i class="fas fa-3x text-center py-2 fa-pen tm-brand-icon"></i>
            </button>  
            <div class="tm-brand-texts">
              <h1 class="text-uppercase tm-brand-name"><a href="index.php" style="color: #7b7579;">Intforlan</a></h1>
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
                    <a class="nav-link" href="php/computadoras.php">Computadores</a>
                  </li>
                  <li class="nav-item green-highlight ">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="php/monitores.php">Celular<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="php/instrumentos.php">Instrumentos</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="php/pedestales.php">Pedestales</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="contact.html">Contacto</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>



      <!-- Catalogo -->

      <section class="row" id="tmAbout">
        
        <div class="container">
          <div class="col-12">
            <div class="mb-3">
              <input onkeyup="buscar_ahora($('#buscar_1').val());" type="text" class="form-control" id="buscar_1" placeholder="Que estas buscando?" name="buscar_1">
            </div>
            <div id="datos_buscador" class="container pl-5 pr-5" style="display: flex;"> </div>

          </div>
        </div>

        <div class="col-lg-4">
          <div class="tm-bg-black-transparent tm-about-box">
            <div class="tm-about-number-container"><i class="fas fa-laptop"></i></div>
            <h3 class="tm-about-name">Computadores</h3>
            <p class="tm-about-description">
              ¿Necesitas una computadora?Aquí en Intforlan encontraras las mejores computadoras del mercado a un precio increible, ¡Que esperas para llevarte la tuya!
            </p>
            <a href="#tmFeatures" class="btn btn-tertiary tm-btn-app-feature">Más productos</a>
          </div>
        </div>


        <div class="col-lg-4">
          <div class="tm-bg-black-transparent tm-about-box">
            <div class="tm-about-number-container"><i class="fas fa-mobile-alt"></i></div>
            <h3 class="tm-about-name">Celulares</h3>
            <p class="tm-about-description">
              Todo lo que necesitas al alcance de tus manos, la mejor tecnologia en celulares inteligentes ideales para recibir clases o convertirte en un gamer profecional
            </p>
            <a href="#tmFeatures" class="btn btn-tertiary tm-btn-app-feature">Más productos</a>
          </div>
        </div>


        <div class="col-lg-4">
          <div class="tm-bg-black-transparent tm-about-box">
            <div class="tm-about-number-container"><i class="fas fa-guitar"></i></div>
            <h3 class="tm-about-name">Instrumentos</h3>
            <p class="tm-about-description">
              Has pensado en convertirte en un artista de youtube? Pues Intforlan ayudara a convertir ese sueño en realidad con los mejores instrumentos musicales
            </p>
            <a href="#tmFeatures" class="btn btn-tertiary tm-btn-app-feature">Más productos</a>
          </div>
        </div>


        <div class="col-lg-4">
          <div class="tm-bg-black-transparent tm-about-box">
            <div class="tm-about-number-container"><i class="fab fa-acquisitions-incorporated"></i></div>
            <h3 class="tm-about-name">Pedestales</h3>
            <p class="tm-about-description">
              Disponesmos desde soporte para TV hasta un gran pedestal para piano, en Intforlan contamos con los mejores del país a precios incomparables
            </p>
            <a href="#tmFeatures" class="btn btn-tertiary tm-btn-app-feature">Más productos</a>
          </div>
        </div>
      </section>




      <!-- App Features -->
      <section id="tmAppFeatures">
        <div class="row">
          <header class="col-12 text-center text-white tm-bg-black-transparent p-3 tm-app-header">
            <h2 class="text-uppercase mb-2 tm-app-feature-header">Formas de pago y Envios a todo el Elcuador</h2>

          </header>
        </div>



        <div class="row">
          <div class="col-lg-6">
            <div class="tm-bg-white-transparent tm-app-feature-box">
              <div class="tm-app-feature-icon-container">
                <i class="fas fa-4x px-3 py-4 fa-air-freshener tm-app-feature-icon fas fa-money-bill"></i>
              </div>
              <div class="tm-app-feature-description-box">
                <h3 class="mb-4 tm-app-feature-title">Efectivo</h3>
                <p class="tm-app-feature-description">La manera más facil y efectiva de adquirir tu producto, pagas al momento de recibir tu pedido.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="tm-bg-white-transparent tm-app-feature-box">
              <div class="tm-app-feature-icon-container">
                <i class="fas fa-4x px-4 py-4 fa-binoculars tm-app-feature-icon fas fa-exchange-alt"></i>
              </div>
              <div class="tm-app-feature-description-box">
                <h3 class="mb-4 tm-app-feature-title">Transferencia</h3>
                <p class="tm-app-feature-description">La forma mas rápida, eficiente y comoda de realizar tu compra a travez del banco del Pichinca</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="tm-bg-white-transparent tm-app-feature-box">
              <div class="tm-app-feature-icon-container">
                <i class="fas fa-4x px-4 py-4 fa-campground tm-app-feature-icon fas fa-file-invoice-dollar"></i>
              </div>
              <div class="tm-app-feature-description-box">
                <h3 class="mb-4 tm-app-feature-title">Depósito</h3>
                <p class="tm-app-feature-description">El modo mas seguro de realizar el pago de tu producto, sin preocupaciones y cargos adicionales</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="tm-bg-white-transparent tm-app-feature-box">
              <div class="tm-app-feature-icon-container">
                <i class="fas fa-4x px-2 py-4 fa-fire tm-app-feature-icon fas fa-motorcycle mx-auto"></i>
              </div>
              <div class="tm-app-feature-description-box">
                <h3 class="mb-4 tm-app-feature-title">Entregas a domicilo</h3>
                <p class="tm-app-feature-description">Contamos con repartidores experimentados, con todas las normas de bioseguridad y entregas en tres días hábiles </p>
              </div>
            </div>
          </div>
        </div>

      </section>

      <!-- Page footer -->
      <footer class="row">
        <p class="col-12 text-white text-center tm-copyright-text">
          Copyright &copy; 2020 App Landing Page.
          Designed by <a href="#" class="tm-copyright-link">TemplateMo</a>
        </p>
      </footer>
    </div>
    <!-- .container-fluid -->
  </div>


  <script type="text/javascript">
    function buscar_ahora(buscar) {
      var parametros = {
        "buscar": buscar
      };
      $.ajax({
        data: parametros,
        type: 'POST',
        url: '_archivos/buscador.php',
        success: function(data) {
          document.getElementById("datos_buscador").innerHTML = data;
        }
      });
    }
    //   buscar_ahora();
  </script>


  <script src="js/jquery.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>