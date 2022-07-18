(function($){
    $(document).ready(function(){
        //Toggle menu
        $('nav .menu-icon').click(() => {
            $('body').toggleClass('nav-active');
        })

        $('.closeMenu, .openMenu, #mobileMenu .navbar-nav li a').click(() => {
            $('#mobileMenu').toggleClass('-open');
            $('.openMenu, .closeMenu').toggleClass('d-none');
            $('body').toggleClass('no-scroll');
        })

        //Clients Carousel
        $('#clientsCarousel').owlCarousel({
            nav: false,
            navText : ['<i class="fas fa-angle-left" aria-hidden="true"></i>','<i class="fas fa-angle-right" aria-hidden="true"></i>'],
            dots: true,
            loop: false,
            rewind: true,
            autoplay: true,
            autoplayTimeout:3000,
            autoplayHoverPause:false,
            stagePadding: 0,
            margin: 4,
            checkVisibility: true,
            navElement: 'div',
            responsive : {
              0 : {
                items: 6,
                slideBy: 6,
                dots: true
              },
              1440 : {
                items: 13,
                slideBy: 13
              }
            }
        });
		
		//Clients Carousel
        $('#galeria').owlCarousel({
            nav: false,
            dots: true,
            loop: false,
            rewind: true,
            stagePadding: 0,
            margin: 0,
            responsive :{
              0 : {
                items: 2,
                slideBy: 2,
              },
              1440 : {
                items: 4,
                slideBy: 4
              }
            }
        });

        /* Add collapse to singleService features on mobile */
        const btn = $('#serviceContent .service .body span');
        let c = 0;
        if ($(window).width() < 567) {
            $('#serviceContent .service .body p').addClass('collapse');
            btn.text('+');
        }
        $(btn).on('click', function(){            
            c++;
            if(c % 2 != 0){
                $(this).text('-');
            }else{
                $(this).text('+');
            }
        });
        

        //Init AOS animations
        AOS.init({
            offset: 200,
            duration: 200,
            easing: 'ease-in-sine',
            disable: 'mobile',
            once: true
        });
		
		new WOW().init();

        //Stop hero video when modal video shows up
        function reelController(){
          let $v = $('body').find('video');
          $('#playReel').on('click', function(){
            $v[0].pause();
          })
          $('#viewReel').on('click', function(){
            $v[0].play();
          })
        }reelController();
		
		
		
		
		//by Pixels
  let imgSpace = 300;
  !imgSpace && imgSpace++;


		$(function() {
			$('.js-hover-fade-desk').each(function() {
				var Deskoff_img = $(this).find('img').attr('src').replace('nosotros', 'nosotros-brush');
				var Deskon_img = $('<img src="'+ Deskoff_img +'" alt="" style="position:absolute; opacity:0;" class="img-fluid" />');

				$(this).find('img').before(Deskon_img);

				$(this).find('img').hover(function() {
					$(this).stop().animate({'opacity': '1'}, 400);
				},　function(){
					$(this).stop().animate({'opacity': '0'}, 300);
					}
				)
			});
 		});
		
		 $(window).on("scroll", function() {
			//console.log($(this).scrollTop())
			if($(this).scrollTop() > 400){
			  $("#c1").attr("src").replace('nosotros-m', 'nosotros-brush-m');
			}
		  });
		
		var initialSrc = "./wp-content/themes/love-agency/assets/img/nosotros-m.png";
		var scrollSrc = "./wp-content/themes/love-agency/assets/img/nosotros-brush-m.png";

		$(window).scroll(function() {
		   var value = $(this).scrollTop();
		   if (value > 300){
			  $("#c1").attr("src", scrollSrc);
		   }else{
			  $("#c1").attr("src", initialSrc);
			}
		});
        

    }); /* document ready */
})(jQuery);

