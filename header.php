<?php
   function gearc_version(){
      $version = "1.18";
      echo "?v=" . $version;
   }
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Gear Creations</title>


      <link rel="stylesheet" href="lib/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="css/gearc.css<?php gearc_version(); ?>"/>

      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
   </head>
   <body>
      <nav class="header navbar row navbar-expand-lg navbar-dark">
         <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav">
                <li class="nav-item">
                 <a class="nav-link" href=".">Projetos</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link" href="sobre.php">Sobre</a>
                </li>
             </ul>
            </div>

               <a class="navbar-brand" href=".">
                 <object class="gearc-logo" type="image/svg+xml" data="media/svg/GearC Logo Extenso.svg"></object>
               </a>

               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>







         </div>
      </nav>

      <div class="wrapper">
