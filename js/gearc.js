$(document).ready(function() {
	// get current URL path and assign 'active' class
   var url = window.location.pathname;
	var pathname = url.substr(url.lastIndexOf('/') + 1);
	$('.nav-item > a[href="'+pathname+'"]').parent().addClass('active');
   if (pathname == "") {
      $('.nav-item > a[href="."]').parent().addClass('active');
   }
});


$('.item-video').click(function(event){
   event.stopPropagation();

   console.log('Loading featured');
   load_featured( $(this).data("file") );
});


$('.js-close-featured').click(function(event){
   event.stopPropagation();

   console.log('Closing featured');
   close_featured();
});


$('#carousel').on('slide.bs.carousel', function () {
  close_featured();
});
$('#carousel').carousel({
  interval: 10000
});

var carcardLive = false;

function close_featured() {
   carcardLive = false;

   $('html').animate({
      scrollTop: 0,
      complete: function () {
           //Hide your button here
      }
   }, 750);

   setTimeout(function(){
      $('.carousel').removeClass("live");
   }, 100);
   setTimeout(function(){
      $('.carcard').removeClass("live");
   }, 750);
}

function load_featured( featuredFile ) {

   if(carcardLive) {
      close_featured()
      $('#carousel').carousel('cycle');
   } else {
      carcardLive = true;
      $('#carousel').carousel('pause');

      var result = "posts/" + featuredFile + ".html" + "?nocache=" + Math.random();
      console.log("Loaded " + result);
      $('#carcard-wrapper').load( result );

      $('.carcard').addClass("live");
      $('.carousel').addClass("live");

      $('html').animate({
         scrollTop: $(window).height(),
         complete: function () {
              //Hide your button here
         }
      }, 750);

   }
}
