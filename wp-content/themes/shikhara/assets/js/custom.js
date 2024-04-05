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

    jQuery('.teamSlider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: jQuery(".team_slideNav .eco_arrow_prev"),
        nextArrow: jQuery(".team_slideNav .eco_arrow_next"),
        touchMove: true,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

    jQuery('.discover_slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 2.5,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: jQuery(".discover_arrow_prev"),
        nextArrow: jQuery(".discover_arrow_next"),
        touchMove: true,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    jQuery('.howWork_icons_slider').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1000,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

    jQuery('.review_slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: jQuery(".review_arrow_prev"),
        nextArrow: jQuery(".review_arrow_next"),
        touchMove: true,
    });

    jQuery('.discourse_slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true
    });
    
    jQuery('.numb_slider').slick({
        infinite: false,
        arrows: true,
        autoplay: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
        }
        ]
    });
    
    jQuery('.post2Slider1, .post2Slider2').slick({
        infinite: false,
        arrows: true,
        autoplay: false,
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: false, 
    });
    
    if (jQuery(window).width() < 767) {
    
        jQuery('.deepdrive_mob_slider').slick({
            infinite: false,
            arrows: false,
            autoplay: false,
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: true 
        }); 
        
    }

    jQuery('.post_vault_slider').slick({
        infinite: false,
        arrows: true,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
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
    const menuToggle = document.getElementById('collapsibleNavbar')
    const bsCollapse = new bootstrap.Collapse(menuToggle, {
        toggle: false
    })
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

    jQuery(".reportLP_nav li a").on('click', function (event) { 
        if (this.hash !== "") { 
            event.preventDefault(); 
            var hash = this.hash; 
            var offset = jQuery(hash).offset().top - 100; 
            jQuery('html, body').animate({
                scrollTop: offset
            }, 800, function () { 
                window.location.hash = hash;
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

    if (localStorage.getItem('pop') === null) {
        jQuery('#reportPop').modal('show');
        localStorage.setItem('pop', '1');
    }

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
        })) 
    });
    
    jQuery(".lineCntGet").each(function () {
        var t = jQuery(this).offset(); 
        var leftValue = t.left; 
        jQuery(".dotinRgt").css({"left": +t.left})
        jQuery(".dotinLft").css({"right": +t.left})
    }); 
    
    jQuery(".mdl_chaplftCount").each(function () {
        var t = jQuery(this).offset(); 
        var leftValue = t.left; 
        jQuery(".mdl_dotinLft").css({"left": +t.left})
        jQuery(".mdl_dotinRgt").css({"right": +t.left})
    }); 
    
    equalheight('.homeblog .eco_system_title');

});

jQuery(window).scroll(function () {
    var scroll = jQuery(window).scrollTop();
    if (scroll > 4500) {
        jQuery(".investSec_logo img").addClass("vector_rotate");
    } else {
        jQuery(".investSec_logo img").removeClass("vector_rotate");
    }

    if (scroll > 600) {
        jQuery(".howWork_wealthLogo img").addClass("vector_rotate");
    } else {
        jQuery(".howWork_wealthLogo img").removeClass("vector_rotate");
    }
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
var navbarHeight = $('header').outerHeight();

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

jQuery(document).ready(function ($) {
    
    function submitPoll() {
        var selectedAnswer = $('input[name="poll_answer"]:checked');

        if (selectedAnswer.length > 0) {
            var answerId = selectedAnswer.val();
            var answerText = selectedAnswer.closest('li').text(); 
            var answerContainer = $('#answerContainer'); 
 
            $('#pollBtn').text('VIEW ANSWERS');
            $('#pollForm').hide(); 
            
            var matchingListItem = $('#pollForm ul li[data-id="' + correctAnswerId + '"]');

            if (matchingListItem.length > 0 && answerId !== correctAnswerId) { 
                $('.poll_hourBox_btn .link_wrap_style').hide();
                var correctAnswerText = matchingListItem.text(); 
                answerContainer.html(
                    '<strong>Your Ans:</strong>' + answerText +
                    '<br class="mt-2"><strong>Correct Ans:</strong>' + correctAnswerText
                ); 
            } else if (matchingListItem.length > 0 && answerId == correctAnswerId) { 
                $('.poll_hourBox_btn .link_wrap_style').hide();
                var correctAnswerText = matchingListItem.text(); 
                answerContainer.html(
                    '<strong>Correct Ans:</strong> ' + correctAnswerText
                ); 
            } 
            
        } else {
            alert('Please select an answer before submitting.');
        }
    }

    // Attach the event listener to the button
    $('#pollBtn').on('click', function (event) {
        event.preventDefault();
        submitPoll();
    });   
    
    var total_chapters = $('#pagiNav').data('totalchap');
    
    $('.mdl_chapters_tabs .mdl_chapters_subMenus').hide();
    $('.mdl_chapters_tabs .nav-tabs .active .mdl_chapters_subMenus').show();

    $('.mdl_chapters_tabs .nav-tabs .nav-link').on('click', function (e) {
        e.preventDefault();

        $('.mdl_chapters_tabs .mdl_chapters_subMenus').hide();
        $(this).parent().find('.mdl_chapters_subMenus').show();
        $('.mdl_chapters_tabs .nav-tabs li').removeClass('active');
        $(this).parent().addClass('active');
        var tabId = $(this).attr('href');
        $('.mdl_chapters_rght .tab-content .tab-pane').removeClass('active show');
        $(tabId).addClass('active show');
        
        smoothScrollTo(this.hash, 30);
        updatePrevNextLinks(tabId);
        
    });  
    
    $(".mdl_chapters_tabs .mdl_chapters_subMenus li a").on('click', function (event) {
        smoothScrollTo(this.hash, 30);
    });
 
    if (jQuery(window).width() < 767) { 
        
        $('.mdl_chapters_openTgl').on('click', function (e) {
            $('#mdl_chapters_tabs').show();
        }); 
        
        $('.mdl_chapters_tabs li a, .mdl_chapters_closeTgl').on('click', function (e) {
            $('#mdl_chapters_tabs').hide();
        }); 
        
    }
    
    if (window.location.hash) { 
        var targetTab = window.location.hash;   
        if ($(targetTab).length) { 
            
            $('.mdl_chapters .tab-pane').removeClass('show active');
            $(targetTab).addClass('show active'); 
            $('.mdl_chapters_tabs .nav-item').removeClass('show active'); 
            $('.mdl_chapters_tabs .nav-item a').removeClass('show active');  
            $('.mdl_chapters_tabs .mdl_chapters_subMenus').hide();
            $('.mdl_chapters_tabs a[href="' + targetTab + '"]').closest('.nav-item').addClass('active');
            $('.mdl_chapters_tabs a[href="' + targetTab + '"]').addClass('show active');
            $('.mdl_chapters_tabs .nav-tabs .active .mdl_chapters_subMenus').show();
            
            var headerHeight = jQuery('.oisHeader').outerHeight() || 0;
            var offset = $(targetTab).offset().top - headerHeight - 110;
            jQuery('html, body').animate({
                scrollTop: offset
            }, 1500); 
            
            updatePrevNextLinks(targetTab);
        }
    } else { 
        var firstTabId = $('.mdl_chapters_tabs .nav-tabs .nav-link').first().attr('href');
        $(firstTabId).addClass('show active');
        updatePrevNextLinks(firstTabId);
    }
    
    function goToNextChapter() {
        var currentTab = $('.mdl_chapters_tabs .nav-tabs .nav-item.active .nav-link');
        var nextTab = currentTab.parent().next().find('.nav-link');
        if (nextTab.length) {
            nextTab.click();
        }
    }

    function goToPrevChapter() {
        var currentTab = $('.mdl_chapters_tabs .nav-tabs .nav-item.active .nav-link');
        var prevTab = currentTab.parent().prev().find('.nav-link');
        if (prevTab.length) {
            prevTab.click();
        }
    }

    $('.mdl_PagiNav .blog-single-page-nav .pagi_nextNav a').on('click', function (event) {
        event.preventDefault();
        goToNextChapter();
    });

    // Attach the event listener to the "Prev" link
    $('.mdl_PagiNav .blog-single-page-nav .pagi_prevNav a').on('click', function (event) {
        event.preventDefault();
        goToPrevChapter();
    });
    
    function updatePrevNextLinks(currentTabId) { 

        if (typeof currentTabId === 'string' && currentTabId.startsWith('#chapter-')) { 
            
            var currentChapterIndex = parseInt(currentTabId.split('-')[1]); 

            // Determine the previous and next chapter indices
            var prevChapterIndex = Math.max(1, currentChapterIndex - 1);
            var nextChapterIndex = Math.min(total_chapters, currentChapterIndex + 1);

            // Check if there is a previous chapter
            if (prevChapterIndex !== currentChapterIndex) {
                $('.mdl_PagiNav .blog-single-page-nav .pagi_prevNav a').attr('href', '#chapter-' + prevChapterIndex);
                $('.mdl_PagiNav .blog-single-page-nav .pagi_prevNav').show();
            } else {
                $('.mdl_PagiNav .blog-single-page-nav .pagi_prevNav a').removeAttr('href');
                $('.mdl_PagiNav .blog-single-page-nav .pagi_prevNav').hide();
            }

            // Check if there is a next chapter
            if (nextChapterIndex !== currentChapterIndex) {
                $('.mdl_PagiNav .blog-single-page-nav .pagi_nextNav a').attr('href', '#chapter-' + nextChapterIndex);
                $('.mdl_PagiNav .blog-single-page-nav .pagi_nextNav').show();
            } else {
                $('.mdl_PagiNav .blog-single-page-nav .pagi_nextNav a').removeAttr('href');
                $('.mdl_PagiNav .blog-single-page-nav .pagi_nextNav').hide();
            }
        
        } 
    }

}); 