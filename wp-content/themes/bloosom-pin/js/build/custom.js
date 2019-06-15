jQuery(document).ready(function($) {

    if (blossom_pin_data.rtl == '1') {
        rtl = true;
    } else {
        rtl = false;
    }

    //banner slider
    $('.banner-slider').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 8,
        nav: true,
        dots: false,
        lazyload: true,
        rtl: rtl,
        navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="-19991 -11813 18 12"><path id="path" class="cls-1" d="M353.6,392.8v2H339.4l3.6,3.6-1.4,1.4-6-6,6-6,1.4,1.4-3.6,3.6Z" transform="translate(-20326.6 -12200.8)"/></svg> ', ' <svg xmlns="http://www.w3.org/2000/svg" viewBox="-18147 -11813 18 12"><path id="path" class="cls-1" d="M353.6,392.8v2H339.4l3.6,3.6-1.4,1.4-6-6,6-6,1.4,1.4-3.6,3.6Z" transform="translate(-17793.4 -11413.2) rotate(180)"/></svg> '],
        responsive: {
            0: {
                items: 1,
                margin: 0
            },
            600: {
                items: 2
            },
            768: {
                items: 3
            },
            1200: {
                items: 4
            },
            1400: {
                items: 5
            }
        },
    });

    //Home Page Masonry
    var $this = $('.blog:not(.no-post) #primary .site-main');
    $this.imagesLoaded(function() {
        $this.masonry({
            itemSelector: '.blog #primary .post'
        });
    });

    // Search Form
    var winWidth = $(window).width();
    if (winWidth > 1024) {
        var headerHeight = $('.site-header').outerHeight();
        $('.search-form-holder').css('top', headerHeight);
        $('.site-header .tools .search-icon').click(function() {
            $('body').toggleClass('form-open');
        });
    }

    // search form for mobile version
    var mobileHeaderHeight = $('.mobile-site-header').outerHeight();
    if (winWidth < 1025) {
        $('.search-form-holder').css('top', mobileHeaderHeight);
        $('.mobile-site-header .tools .search-icon').click(function() {
            $('body').toggleClass('form-open');
        });
    }

    //for single post scrolling header
    if (winWidth > 1024) {
        $(window).scroll(function() {
            if ($(this).scrollTop() > headerHeight) {
                $('.single .single-header').addClass("show");
            } else {
                $('.single .single-header').removeClass("show");
            }
        });
    }
    if (blossom_pin_data.single == '1') {
        // When the user scrolls the page, execute myFunction 
        var totalheight = $('.recommended-post').innerHeight() + $('.comment-section').innerHeight() + $('.instagram-section').innerHeight() + $('.newsletter-section').innerHeight() + $('.site-footer').innerHeight();

        window.onscroll = function() { 
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight - parseInt(totalheight);
            var scrolled = (winScroll / height) * 100;

            document.getElementById("myBar").style.width = scrolled + "%"; 
        };
    }

    //primary mobile menu
    if (winWidth < 1025) {
        $('.mobile-menu').prepend('<div class="btn-close-menu"><span></span></div>');
        $('#mobile-site-navigation ul li.menu-item-has-children').append('<div class="arrow-holder"><span class="fas fa-angle-down"></span></div>');
        $('#mobile-site-navigation ul li .arrow-holder').click(function() {
            $(this).prev().slideToggle();
            $(this).toggleClass('active');
        });

        $('#toggle-button').click(function() {
            // $('.main-navigation').toggleClass('open');
            $('body').toggleClass('menu-open');
        });

        $('.btn-close-menu').click(function() {
            $('body').removeClass('menu-open');
            $('.main-navigation').removeClass('open');
        });

        $('.overlay').click(function() {
            $('body').removeClass('menu-open');
            $('.main-navigation').removeClass('open');
        });

        $('#toggle-button').click(function(event) {
            event.stopPropagation();
        });

        $('#mobile-site-navigation').click(function(event) {
            event.stopPropagation();
        });
    }

    // Script for back to top
    $(window).scroll(function(){
        if($(this).scrollTop() > 300){
          $('.back-to-top').fadeIn();
        }else{
          $('.back-to-top').fadeOut();
        }
    });

    $(".back-to-top").click(function(){
        $('html,body').animate({scrollTop:0},600);
    });

    $(".insta-icon").prependTo(".profile-link");
});
