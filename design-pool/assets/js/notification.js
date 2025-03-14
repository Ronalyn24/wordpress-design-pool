jQuery(document).ready(function($) {
    console.log("Download notification 5");
    $('.downloadLinks__link a').click(function(e) {

        console.log("Notification sent");

        // Assuming you have a way to get the logged-in user's email in JavaScript
        var userEmail = userDetails.email;

        var patternText = $('.licensable-content__column .aw-headline').text();
        var currentDate = new Date().toISOString().slice(0, 10); // Format: YYYY-MM-DD

        $('.notify-email input').val(userEmail);
        $('.notify-pattern input').val(patternText);
        $('.notify-date input').val(currentDate);

        $('#gform_submit_button_23').trigger('click');
    });
});
