
$('.carousel-video').on('click', function(){

   load_featured( $(this).data("file") );
});


function load_featured( featuredFile ) {

   var result = "posts/" + featuredFile + ".html" + "?nocache=" + Math.random();
   console.log("Loaded " + result);
   $('.card').load( result );

   //$('.featured').hide().load(result).toggle('500ms');

   $('.card').addClass("active");

   var viewportHeight = $(window).height();

   $('html, body').animate({
      scrollTop: viewportHeight,
      complete: function () {
           //Hide your button here
      }
   }, 750);
}
