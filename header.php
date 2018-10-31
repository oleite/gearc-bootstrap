<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Gear Creations</title>

      <link rel="stylesheet" href="lib/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="css/gearc.css"/>

      <script src="lib/jquery-3.3.1.min.js"></script>
      <script src="lib/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
   </head>
   <body>
      <nav class="header navbar row navbar-expand-lg navbar-light">
         <div class="container">

            <div class="navbar-header">
               <a class="navbar-brand" href="#">
                 <object class="gearc-logo" type="image/svg+xml" data="media/svg/GearC Logo Extenso.svg"></object>
               </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                 <a class="nav-link" href="#">Projetos</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="#">Sobre</a>
                </li>
              </ul>
            </div>

         </div>
      </nav>


      <div class="carousel">
         <div class="video-overlay"></div>
         <video autoplay muted loop id="video-rain" class="carousel-video">
           <source src="media/video/rain.mp4" type="video/mp4">
         </video>
      </div>
