
$('.carousel-video').on('click', function(){

   load_featured( $(this).data("file") );
});


function load_featured( featuredFile ) {

   var result = "posts/" + featuredFile + ".html";
   console.log("Loaded " + result);
   $('.featured').load( result );

   //$('.featured').hide().load(result).toggle('500ms');

   $('.featured').addClass("active");

   var viewportHeight = $(window).height();

   $('html, body').animate({
      scrollTop: viewportHeight * .9,
      complete: function () {
           //Hide your button here
      }
   }, 750);
}
