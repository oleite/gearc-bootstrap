
$('.carousel-video').on('click', function(){

   load_featured( $(this).data("file") );
});

var cardActive = false;

function load_featured( featuredFile ) {

   if(cardActive) {
      cardActive = false;

      $('html, body').animate({
         scrollTop: 0,
         complete: function () {
              //Hide your button here
         }
      }, 750);

      setTimeout(function(){
         $('.carousel').removeClass("active");
      }, 100);
      setTimeout(function(){
         $('.card').removeClass("active");
      }, 750);

   } else {
      cardActive = true;

      var result = "posts/" + featuredFile + ".html" + "?nocache=" + Math.random();
      console.log("Loaded " + result);
      $('.card').load( result );

      //$('.featured').hide().load(result).toggle('500ms');

      $('.card').addClass("active");
      $('.carousel').addClass("active");


      $('html, body').animate({
         scrollTop: $(window).height(),
         complete: function () {
              //Hide your button here
         }
      }, 750);
   }
}
