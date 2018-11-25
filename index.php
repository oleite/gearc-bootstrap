<?php include 'header.php'; ?>

<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
   <object class="carousel-arrow-down" type="image/svg+xml" data="media/svg/arrow-down.svg"></object>

   <ol class="carousel-indicators">
     <li data-target="#carousel" data-slide-to="0" class="active"></li>
     <li data-target="#carousel" data-slide-to="1"></li>
   </ol>

   <div class="carousel-inner">
      <div class="carousel-item active">

         <div class="item-content">
            <h1 class="title">Rain</h1>
            <p class="description">Chuva chuvisco chuvarada, por que que chove tanto assim?</p>
         </div>
         <div class="item-fixed">
            <div class="video-overlay"></div>
            <video autoplay muted loop id="video-rain" class="item-video" data-file="feat-rain">
               <source src="media/video/rain.mp4" type="video/mp4">
            </video>
            <img class="item-image" src="./media/bitmap/rain1.png" alt="">
         </div>

      </div>
      <div class="carousel-item">

         <div class="item-content">
            <h1 class="title">Atenção - Limpeza</h1>
            <p class="description">meu pé meu querido pé que me aguenta o dia inteiro</p>
         </div>
         <div class="item-fixed">
            <div class="video-overlay"></div>
            <video autoplay muted loop id="video-limpeza" class="item-video" data-file="feat-limpeza">
               <source src="media/video/atencao-limpeza.mp4" type="video/mp4">
            </video>
            <img class="item-image" src="./media/bitmap/featured-sobre.jpg" alt="">
         </div>

      </div>

   </div>

   <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>

</div>
<div class="carcard">
   <div class="close-featured js-close-featured">
      <object type="image/svg+xml" data="media/svg/arrow-down.svg"></object>
   </div>
   <div id="carcard-wrapper" class="container"></div>
</div>


<?php include 'footer.php'; ?>
