popupSignup = function () {

    $ = jQuery.noConflict();

    /*-----------------------------
    Newsletter Popup  -------------
    -----------------------------*/

    setTimeout(function () {

        $('html').addClass('notice-popup-open');

    }, 6000);

    $('.popup-notice .close-button, .popup-notice .bg-close').click(function () {

        $('html').removeClass('notice-popup-open');
        Cookies.set('dp-news-not-interested', 'true', { expires: 7 });

    });

    // Check if user has seen popup
    var popupSignup = Cookies.get('dp-news-not-interested');

    if (popupSignup) {
        $('html').addClass('did-see-popup');
    }

    $(document).on('gform_confirmation_loaded', function (event, formId) {

        if (formId == 16) {
            Cookies.set('did-sign-up', 'true', { expires: 365 });
        }

    });

    var signupCookie = Cookies.get('did-sign-up');

    if (signupCookie) {
        $('html').addClass('did-sign-up');
    }


    /*------------------------------
    Free Sample Popup  -------------
    ------------------------------*/

    $('.popup-notice-gs .close-button, .popup-notice-gs .bg-close').click(function () {

        $('html').removeClass('notice-popup-open');
        Cookies.set('dp-sample-not-interested', 'true', { expires: 7 });

    });

    // Check if user has seen popup
    var popupGetSample = Cookies.get('dp-sample-not-interested');

    if (popupGetSample) {
        $('html').addClass('did-see-popup-gs');
    }

    $(document).on('gform_confirmation_loaded', function (event, formId) {

        if (formId == 19) {
            Cookies.set('did-sign-up-gs', 'true', { expires: 365 });
        }

    });

    var popupGetSampleCookie = Cookies.get('did-sign-up-gs');

    if (popupGetSampleCookie) {
        $('html').addClass('did-sign-up-gs');
    }

}

jQuery(document).ready(popupSignup);

