  <!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
      

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <script>
            $(document).ready(function(){
              $('.dropdown-submenu a.test').on("click", function(e){
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
              });
            });

        </script>

        <script>
            $(document).ready(function(){
              $('.bxslider').bxSlider();
            });
        </script>

        <!-- <script src="owl/assets/js/jquery-1.9.1.min.js"></script> -->
        <script src="owl/owl-carousel/owl.carousel.js"></script>

        <!-- Frontpage Demo -->
        <script>

        $(document).ready(function($) {
        $("#recent").owlCarousel({
            singleItem : true,
            
            // Navigation
            navigation : true,
            navigationText : ["",""],
            rewindNav : true,
            scrollPerPage : false,

            pagination : false,
            paginationNumbers : false,

            slideSpeed : 1000,
            
            //Lazy load
            lazyLoad : true,
            lazyFollow : true,
            lazyEffect : "fade",
            
            // Responsive
            responsive: true,
            responsiveRefreshRate : 0,
            responsiveBaseWidth: window,

            // Responsive
            autoPlay : false,
            stopOnHover : true,
        });

        });


        $("body").data("page", "frontpage");

        $(function() {  
        $('.change').click(function(){
            $('$theme-color').css('background', 'yellow');
            

          });
        });
        

        </script>
       
      <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57ea97efd09f7e38"></script> 

    