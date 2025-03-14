// @ts-nocheck
headerScroll = function () {

    var $ = jQuery.noConflict();

    $(window).scroll(function () {

        var scrollPosition = $(this).scrollTop();
        if (scrollPosition > 50) {
            $('body').addClass('header-scroll');
        } else {
            $('body').removeClass('header-scroll');
        }
    });


    if (window.location.href.indexOf("/product-category/") > -1) {
        // Move .hover-image inside .woocommerce-loop-product__link
        $('.woocommerce-loop-product__link').each(function () {
            var $productLink = $(this);
            var $hoverImage = $productLink.find('.hover-image');
            $productLink.append($hoverImage);
        });
    }

}


bugherAnimation = function () {

    var $ = jQuery.noConflict();

    $('#nav-bugherd').click(function () {

        $('html').toggleClass('open-menu');
    });

    // Mobile 

    $('.mobile-sidebar-toggle').click(function () {

        $('html').toggleClass('sidebar-opened');

        if ($('html').hasClass('sidebar-opened')) {
            $('.mobile-sidebar-toggle i').removeClass('fa-sliders').addClass('fa-xmark');
        }
        else {
            $('.mobile-sidebar-toggle i').removeClass('fa-xmark').addClass('fa-sliders');
        }
    });


    // Product Archive sidebar

    $('.mobile-filter-toggle').click(function () {

        $('html').toggleClass('sidebar-opened');

    });

    $('.sidebar-overlay--woocommerce, .aw-woo-wrap .yit-wcan-parent-terms a').click(function () {

        $('html').removeClass('sidebar-opened');

    });
}


anchorSmoothScroll = function () {
    var $ = jQuery.noConflict();

    $('a[href^="#"]').on('click', function (event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            var topOffset = 90; // Change this value to adjust the top space
            $('html, body').stop().animate({
                scrollTop: target.offset().top - topOffset
            }, 1000);
        }
    });
}


mobileSubMenu = function () {

    var $ = jQuery.noConflict();

    // Mobile Parent Menu Slideup and SlideDown

    $(".not-desktop-menu .aw-primary-menu .menu .parent-list").click(function () {

        var clickedParent = $(this);

        if (!clickedParent.hasClass("menu-active")) {

            $(".aw-primary-menu .menu .parent-list").removeClass("menu-active");
            $(".aw-primary-menu .menu .parent-list>.sub-menu").slideUp();
        }

        clickedParent.toggleClass("menu-active");
        clickedParent.children(".aw-primary-menu .menu .parent-list>.sub-menu").slideToggle();

    });
}


// Sidebar fixed to absolute

sideBarFixed = function () {

    var $ = jQuery.noConflict();

    var documentBody = $('body');
    var hasBeenTrigged = false;

    $(window).scroll(function () {

        if ($(this).scrollTop() >= 110 && !hasBeenTrigged) {
            $(documentBody).addClass('did-scroll');
            $(documentBody).removeClass('did-scroll-top');
            hasBeenTrigged = true;
        }

        if ($(this).scrollTop() < 110 && hasBeenTrigged) {
            $(documentBody).toggleClass('did-scroll');
            $(documentBody).toggleClass('did-scroll-top');
            hasBeenTrigged = false;
        }
    });
}


sideBarFixedEnd = function () {

    $ = jQuery.noConflict();

    //Check if element is visible
    $.fn.isInViewport = function () {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();

        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    var documentBody = $('body');
    var footerElement = $('#footer');
    var hasBeenTrigged = false;

    $(window).on('resize scroll', function () {

        $ = jQuery.noConflict();

        if (($(footerElement).isInViewport()) && !hasBeenTrigged) {

            $(documentBody).addClass('limit-fixed');
            hasBeenTrigged = true;
        }

        if (!(($(footerElement).isInViewport())) && hasBeenTrigged) {

            $(documentBody).removeClass('limit-fixed');
            hasBeenTrigged = false;
        }
    });
}


// Related Post Card Slider

relatedPostSlider = function () {
    var $relatedPost = $('.related-carousel').flickity({
        freeScroll: true,
        imagesLoaded: true,
        wrapAround: true,
        cellAlign: 'left',
        cellSelector: '.carousel-cell',
        groupCells: true,
        contain: true,
        prevNextButtons: false,
        lazyLoad: true,
        // autoPlay: 3000,
        autoPlay: false,
        pageDots: true,
        pauseAutoPlayOnHover: false
    });

    $relatedPost.show().flickity('resize');
}


licensableSlidersAddClass = function () {

    function sliderVisibleScreenWidth() {
        if ($(window).width() <= 767) {
            $(".invisible-collection .aw-licensable-items").addClass("invisible-carousel");
        } else {
            $(".invisible-collection .aw-licensable-items").removeClass("invisible-carousel");
        }
    }

    function sliderCryptologyScreenWidth() {
        if ($(window).width() <= 767) {
            $(".cryptology-collection .aw-licensable-items").addClass("cryptology-carousel");
        } else {
            $(".cryptology-collection .aw-licensable-items").removeClass("cryptology-carousel");
        }
    }

    // Call the function on page load and window resize
    sliderVisibleScreenWidth();
    sliderCryptologyScreenWidth();

    $(window).resize(function () {
        sliderVisibleScreenWidth();
        sliderCryptologyScreenWidth();

        // Home Slider Visible
        var $carouselVisible = $('.aw-licensable-items.invisible-carousel').flickity({
            freeScroll: true,
            imagesLoaded: true,
            wrapAround: true,
            cellAlign: 'left',
            cellSelector: '.invisible-carousel .aw-licensable-items__item',
            groupCells: 1,
            contain: true,
            prevNextButtons: false,
            pageDots: false,
            lazyLoad: true,
            autoPlay: true
        });

        // previous
        $('.invisible-collection .button--previous').on('click', function () {
            $carouselVisible.flickity('previous');
        });

        // next
        $('.invisible-collection .button--next').on('click', function () {
            $carouselVisible.flickity('next');
        });

        $carouselVisible.show().flickity('resize');

        // Home Slider CRYPTO
        var $carouselCrypto = $('.aw-licensable-items.cryptology-carousel').flickity({
            freeScroll: true,
            imagesLoaded: true,
            wrapAround: true,
            cellAlign: 'left',
            cellSelector: '.cryptology-carousel .aw-licensable-items__item',
            groupCells: 1,
            contain: true,
            pageDots: false,
            prevNextButtons: false,
            lazyLoad: true,
            autoPlay: true
        });

        // previous
        $('.cryptology-collection .button--previous').on('click', function () {
            $carouselCrypto.flickity('previous');
        });

        // next
        $('.cryptology-collection .button--next').on('click', function () {
            $carouselCrypto.flickity('next');
        });

        $carouselCrypto.show().flickity('resize');
    });

}


elementAccordion = function () {

    $ = jQuery.noConflict();

    $(".acc-item > .acc-btn").on("click", function (e) {

        e.preventDefault()

        if ($(this).hasClass("active")) {

            $(this).removeClass("active");

            $(this).siblings(".content").slideUp(200);

            $(".acc-item > .acc-btn i").removeClass("fa-angle-up").addClass("fa-angle-down");

        } else {

            $(".acc-item > .acc-btn i").removeClass("fa-angle-up").addClass("fa-angle-down");

            $(this).find("i").removeClass("fa-angle-down").addClass("fa-angle-up");

            $(".acc-item > .acc-btn").removeClass("active");

            $(this).addClass("active");

            $(".content").slideUp(200);

            $(this).siblings(".content").slideDown(200);
        }
    });
}



galleryPanzoom = function () {

    $(".magnifying-area").each(function (index) {
        var $magnifying_area = $(this);
        var $magnifying_img = $magnifying_area.find(".magnifying-img");

        $magnifying_area.on("mouseenter", function () {
            $magnifying_img.css({
                "transition": "none",
                "transform": "scale(2)",
                "transition": "transform 2s ease"
            });
        });

        $magnifying_area.on("mousemove", function (event) {
            var rect = this.getBoundingClientRect();
            var clientX = event.clientX - rect.left;
            var clientY = event.clientY - rect.top;

            var mWidth = $magnifying_area.innerWidth();
            var mHeight = $magnifying_area.innerHeight();

            var xPercent = (clientX / mWidth) * 100;
            var yPercent = (clientY / mHeight) * 100;

            $magnifying_img.css({
                "transformOrigin": xPercent + "% " + yPercent + "%",
                "transform": "scale(2)"
            });
        });

        $magnifying_area.on("mouseleave", function () {
            $magnifying_img.css({
                "transform": "scale(1)",
                "transformOrigin": "50% 50%",
                "transition": "transform 1s ease"
            });
        });
    });
}


licensableForm = function () {

    $ = jQuery.noConflict();

    $('.custom-file-upload .file-upload-input').on('change', function (e) {
        var fileName = e.target.files[0].name;
        $(this).siblings('.file-selected-name').text(fileName);
    });

}


popupTrigger = function () {

    $ = jQuery.noConflict();

    $('.patterns-icons__link').click(function () {
        var popup_content_item = $(this).attr('data-trigger-lb');

        $('.patterns-icons__link').removeClass('dp-current');
        $('.popup-form-wrap__item').removeClass('dp-current');

        $(this).addClass('dp-current');
        $("#popup-pattern-lb-" + popup_content_item).addClass('dp-current');

        if ($(this).hasClass('dp-current')) {
            $('html').addClass('show-popup-form');

        } else {
            $('html').removeClass('show-popup-form');
        }
    });

    // Get the text from the .pattern-title paragraph
    var patternTitle = $('.licensable-info .aw-headline').text();

    // Set the value of the hidden field
    $('.pattern-title-field input').val(patternTitle);
	
	
	// THIS IS FOR THE SHOP PAGE 
	
	var $conciergeLink = $('.design-concierge');
	var $conciergeItem = $('.popup-form-wrap__item');
	
		$conciergeLink.click(function () {
		
		 $conciergeItem.addClass('dp-current');

		if ($conciergeItem.hasClass('dp-current')) {
            $('html').addClass('show-popup-form');

        } else {
            $('html').removeClass('show-popup-form');
        }
	});

    // close lightbox
    $('.popup-form-close, .back-form-close').click(function () {

        $('html').removeClass('show-popup-form');
        $('.popup-form-wrap__item').removeClass('dp-current');

		// Update the browser URL without reloading the page
		var newUrl = window.location.href.split('#')[0]; // Get the URL without hash
		history.pushState(null, null, newUrl); // Update the URL to remove the hash
    });
}




aboutPopups = function(){
    
    $ = jQuery.noConflict();

    $('.about-popup').click(function () {
        var popup_content_item = $(this).attr('data-trigger-about');

        $('.about-popup').removeClass('dp-current');
        $('.popup-form-wrap__item').removeClass('dp-current');

        $(this).addClass('dp-current');
        $("#popup-about-" + popup_content_item).addClass('dp-current');

        if ($(this).hasClass('dp-current')) {
            $('html').addClass('show-popup-form');

        } else {
            $('html').removeClass('show-popup-form');
        }
    });
    
    // close lightbox
    $('.popup-form-close, .back-form-close, #popup-about-2').click(function () {

        $('html').removeClass('show-popup-form');
        $('.popup-form-wrap__item').removeClass('dp-current');

        // Update the browser URL without reloading the page
        var newUrl = window.location.href.split('#')[0]; // Get the URL without hash
        history.pushState(null, null, newUrl); // Update the URL to remove the hash
    });
}







homeBannerSerch = function () {

    // Create a button element
    var $submitButton = $("<button aria-label='Enter Search icon'>")
        .attr("type", "submit")
        .attr("id", "search-button")
        .html('<i class="fas fa-search"></i>');

    // Append the button to the form
    $("#search-filter-form-55898").append($submitButton);

    // Attach a click event handler to the button
    $submitButton.on("click", function (event) {
        event.preventDefault();

        // Your search logic here
        var searchTerm = $("#search-input").val();
    });

    //this is if the search filter have a loadmore option

    if ($('.aw-result').hasClass('no-post-found')) {
        $('#site-content').addClass('hide-load-more');
    }
    else {
        $('#site-content').removeClass('hide-load-more');
    }
}


downloadAlert = function () {

    $('.download-read-more').on('click', function (e) {
        //e.preventDefault();

        $('#callout-shake').addClass('callout-animation');

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 0
        }, 900, 'swing');
    });
}


jQuery(document).ready(headerScroll);
jQuery(document).ready(bugherAnimation);
jQuery(document).ready(anchorSmoothScroll);
jQuery(document).ready(mobileSubMenu);
jQuery(document).ready(sideBarFixed);
jQuery(document).ready(sideBarFixedEnd);
jQuery(document).ready(relatedPostSlider);
jQuery(document).ready(licensableSlidersAddClass);
jQuery(document).ready(elementAccordion);
jQuery(document).ready(galleryPanzoom);
jQuery(document).ready(licensableForm);
jQuery(document).ready(popupTrigger);
jQuery(document).ready(aboutPopups);
jQuery(document).ready(homeBannerSerch);
jQuery(document).ready(downloadAlert);
