
$(document).ready(function() {    
   $('.To-top-by-p').fadeOut();
      $(window).scroll(function(event) {
      var pos_body = $('html,body').scrollTop();
      if(pos_body>50)
      {
         $('.navbar').addClass("sticky-top");
      }
      else{
            $('.navbar').removeClass("sticky-top");
            
      }
      // console.log(pos_body);
      if(pos_body>100){
         $('.To-top-by-p').fadeIn();
      }
      else{
         $('.To-top-by-p').fadeOut();
      } 

   });  
      $('.To-top-by-p').click(function(event) {
       $('html,body').animate({scrollTop: 0},500);
       
   });
  
});
$('.carousel').carousel({
     interval: 3000
});
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
function swap()
{
  $('.fa-bars').removeClass("activede");
  $('.fa-th-large').addClass("activede");
  $('.show-grid').css("display","block");
  $('.show-list').css("display","none");
}
function swap2(){
  $('.fa-th-large').removeClass("activede");
  $('.fa-bars').addClass("activede");
  $('.show-grid').css("display","none");
  $('.show-list').css("display","block");
 }
function numberdown()
{
    $('#input-sl').val(function(){if(parseInt($('#input-sl').val()) -1 >=1){
    return (parseInt($('#input-sl').val())-1);}
    else{
      return '1';
    }
    })
};
function numberup()
{
    $('#input-sl').val(function(){
    return (parseInt($('#input-sl').val())+1);
    })
};
// Map
function Xclose()
{
  $('.notification-mh').css("display","none");
}

$('.checksubmit').click(function(){
              var passcu = $('#passcu').val(); 
              var passnew = $('#passnew').val();
              var xnpassnew =$('#xnpassnew').val();
              $.post('Modules/Changepass.php',{txtpass: passcu,txtnew: passnew
              ,txtxn: xnpassnew },
                function(data){
                $('.result-pass').html(data);
    });
});
$('.showpass').click(function(){
  
  if($('.showpass').html() =="Show pass"){
    $('.showpass').html("Hide pass");
    $('#passcu').attr("type","text");
     $('#passnew').attr("type","text");
      $('#xnpassnew').attr("type","text");
  }
  else{
    $('.showpass').html("Show pass");
    $('#passcu').attr("type","password");
     $('#passnew').attr("type","password");
      $('#xnpassnew').attr("type","password");
  }

  

})