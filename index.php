<?php include 'header.php'; ?>

<div class="carousel">
   <object class="carousel-arrow-down" type="image/svg+xml" data="media/svg/arrow-down.svg"></object>


   <div class="carousel-content container">
      <h1 class="title">Rain</h1>
      <p class="description">Chuva chuvisco chuvarada, por que que chove tanto assim?</p>
   </div>

   <div class="carousel-fixed">
      <div class="video-overlay"></div>
      <video autoplay muted loop id="video-rain" class="carousel-video" data-file="feat-rain">
         <source src="media/video/rain.mp4" type="video/mp4">
      </video>
      <img class="carousel-image" src="./media/bitmap/rain1.png" alt="">
   </div>

   <div class="close-featured js-close-featured">
      <object type="image/svg+xml" data="media/svg/arrow-down.svg"></object>
   </div>
</div>
<div class="card container"></div>


<?php include 'footer.php'; ?>
