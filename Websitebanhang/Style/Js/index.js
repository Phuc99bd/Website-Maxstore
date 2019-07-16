$(document).ready(function() {     
   $('.To-top-by-p').fadeOut();
      $(window).scroll(function(event) {
      var pos_body = $('html,body').scrollTop();

      // console.log(pos_body);
      if(pos_body>250){
         $('.To-top-by-p').fadeIn();
      }
      else{
         $('.To-top-by-p').fadeOut();
      }
   });
   $('.To-top-by-p').click(function(event) {
      $('html,body').animate({scrollTop: 0},1200);
   });
});

$('.collapse').collapse();
