 <div class="container-fluid fix-nav-2">
        <div class="row" style=" background-color: #F0F0F0;margin-top: 2%;padding: 30px;">
               <div class="col-md-8">
                <div class="Infonhantin">
                   <h5 class="nhan-tin">ĐĂNG KÍ NHẬN TIN</h5></div>
                   <input type="email" placeholder="Email..." class="input-text" name="email" id="newsletter1">
                   <button type="submit" name="submitNewsletter" class="subscribe" value="Đăng ký!">
                                    Đăng ký!</button>
               </div>
               <div class="col-md-4">
                    <div class="Infonhantin">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-youtube"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                    </div>
               </div>
        </div>
        <div class="row" style="padding: 30px 0 20px 0;">
            <div class="col-md-6">
                <div class="address">
                    <h5 style="font-size: 16px; margin-bottom: 3%;">MAXSTORE</h5>
                    <p><i class="add-icon"></i>&emsp;113/37/81 tổ 3 khu phố 6 phường phú hòa tp.TDM</p>
                    <p>&emsp;<i class="phone-icon"></i> 038 319 7989</p>
                    <p>&emsp;<i class="email-icon"></i> phuccog@gmail.com</p>
                    <div
                      class="fb-like"
                      data-share="true"
                      data-width="450"
                      data-show-faces="true">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="info wow" data-wow-duration="2s" data-wow-delay="0.2s" data-wow-iteration="2">
                    <h5 style="font-size: 16px; margin-bottom: 3%;">THÔNG TIN</h5>
                    <p><a href="">Giới thiệu</a><br></p>
                    <p><a href="">Chính sách vận chuyển</a><br></p>
                    <p><a href="">Quy định & Chính sách</a><br></p>
                    <p><a href="">Chính sách bảo mật</a><br></p>
                </div>
            </div>
            <div class="col-md-4" >
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMaxStore-483720979068217%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=340&height=238&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="238" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
    </div>
        <div class="row">
            <div class="foot">
                <p class="foot-text">@Copyright 2019 MaxStore. Thiết kế bởi FFQ </p>
                <img src="Image/payments-1.png">
            </div>
        </div>
    </div>
    <div class="container-fluid">
            <a href="#nav" style="position: fixed;
                          right: 3%;
                           top: 70%;" class="To-top-by-p">
                        <i class="fa fa-chevron-up" style="font-size: 20px;"></i></a>     
    </div>

  
<script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
    <script>
new WOW().init();
</script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript" src="StyleND/owl.carousel.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="StyleND/index.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3"></script>
    <script src="https://hocwebgiare.com/thiet_ke_web_chuan_demo/Multislider/js/multislider.js"></script>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=664230060669047&autoLogAppEvents=1"></script>
    <script src="StyleND/sanpham.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3&appId=664230060669047&autoLogAppEvents=1"></script>
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '406942833252654',
      xfbml      : true,
      version    : 'v3.3'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
    </script>
    <script>
      var owl = $('.owl-carousel');
            owl.owlCarousel({
                items:5,
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:1000,
                autoplayHoverPause:true,
                 responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:3
                        },
                        1000:{
                            items:5
                        }
                    }
            });
        $('.owl-carousel').on('onmouseup',function(){
    owl.trigger('stop.owl.autoplay');
})
    </script>
 
</body>
</html>