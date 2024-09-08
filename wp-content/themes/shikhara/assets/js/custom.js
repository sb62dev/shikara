jQuery(document).ready(function () {
    
    jQuery('.cmnSlider').slick({
        infinite: false,
        arrows: true,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
    });

    jQuery('.ecosysten_slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 1000,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: jQuery(".eco_slideNav .eco_arrow_prev"),
        nextArrow: jQuery(".eco_slideNav .eco_arrow_next"),
        touchMove: true,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    }); 

    jQuery(window).on("scroll", function () {
        AOS.init({
            duration: 1000,
            once: true
        });
    });

    jQuery(window).scroll(function () {

        var sticky = jQuery('.sticky-header'),
            scroll = jQuery(window).scrollTop();

        if ($(window).width() > 992) {
            if (scroll >= 250) {
                sticky.addClass('Sticky-fixed');
            } else {
                sticky.removeClass('Sticky-fixed');
            }
        }

    });

    jQuery('.navbar-toggler').on('click', function () {
        jQuery('body').addClass('scrl_fixed');
    });

    jQuery('.closeBtn a, .fixdNav .fixdNav-mid li a').on('click', function () {
        jQuery('body').removeClass('scrl_fixed');
    });

    const navLinks = document.querySelectorAll('.fixdNav .fixdNav-mid li a')
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('collapsibleNavbar');
        const bsCollapse = new bootstrap.Collapse(menuToggle, {
            toggle: false
        });
    }); 
    navLinks.forEach((l) => {
        l.addEventListener('click', () => {
            bsCollapse.toggle()
        })
    })

    jQuery(".smoth-scroll").on('click', function (event) { 
        if (this.hash !== "") { 
            event.preventDefault(); 
            var hash = this.hash; 
            jQuery('html, body').animate({
                scrollTop: jQuery(hash).offset().top
            }, 800, function () { 
                window.location.hash = hash;
            });
        }
    });
    
    jQuery(".scrollId").on('click', function (event) { 
        if (this.hash !== "") { 
            event.preventDefault(); 
            var hash = this.hash; 
            jQuery('html, body').animate({
                scrollTop: jQuery(hash).offset().top - 180 // Adjust the offset by -200px
            }, 800, function () { 
                // Use history.pushState to update the URL without scrolling
                history.pushState(null, null, hash);
            });
        }
    });


    jQuery(window).scroll(function () {
        var windscroll = jQuery(window).scrollTop();
        if (windscroll >= 100) {
            jQuery('.cmnSec').each(function (i) {
                if (jQuery(this).position().top <= windscroll + 100) {
                    jQuery('.main-navigation li .active').removeClass('active');
                    jQuery('.main-navigation li a').eq(i).addClass('active');
                }
            });

        } else {
            jQuery('.main-navigation li .active').removeClass('active');
        }

    }).scroll(); 

}); 

jQuery(window).on("load", function () {
    new WOW().init();
});

jQuery(window).on("load resize", function () {
    var e = jQuery(window).width();
    jQuery(".count_lftpadd").each(function () {
        var t = jQuery(this).offset(); 
        767 < e && (jQuery(".container_lftpadd").css({
            "padding-left": +t.left
        }), jQuery(".container_rghtpadd").css({
            "padding-right": +t.left
        }), jQuery(".container_lftpadd_").css({
            "padding-left": +t.left - 25
        }))  
    });   
}); 

equalheight = function (container) {
    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        $el,
        topPosition = 0;
    jQuery(container).each(function () {
        $el = jQuery(this);
        jQuery($el).height("auto");
        topPostion = $el.position().top;

        if (currentRowStart != topPostion) {
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest =
                currentTallest < $el.height() ? $el.height() : currentTallest;
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
};

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').length > 0 ? $('header').outerHeight() : 0;

$(window).scroll(function (event) {
    didScroll = true;
});

setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    if (Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}

function smoothScrollTo(hash, offsetAdjustment = 90) {
    if (hash !== "") {
        var targetOffset = $(hash).offset().top;
        var headerHeight = $('.oisHeader').outerHeight() || 0;
        var offset = targetOffset - headerHeight - offsetAdjustment;
        $('html, body').animate({
            scrollTop: offset
        }, {
            duration: 1500,
            complete: function () {
                // Update the URL without creating an entry in the browser's history
                window.history.replaceState(null, null, hash);
            }
        });
    }
} 