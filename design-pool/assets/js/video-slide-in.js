(function($) {
  
  $(document).ready(function() {
      
    $ = jQuery.noConflict();

    if (window.innerWidth >= 1024) {
      const playInnerVideo = $('.aw-video-slide__play');
      const closeInnerVideo = $('.vid-slide-wrapper__close');
      const closeSlideVideo = $('.aw-video-slide__close');
  
      setTimeout(function () {
        $('.aw-video-slide').addClass('aw-video-slide-show').attr('aria-hidden', 'false');
      }, 3000); // 30000 milliseconds = 30 seconds
  
      $(closeSlideVideo).click(function () {
        $('.aw-video-slide').toggleClass('hide-close-icon');
        Cookies.set('video-not-interested', 'true', { expires: 365 });
      });
  
      // Check if user is interested in the video
      var videoInterested = Cookies.get('video-not-interested');
  
      if (videoInterested) {
        $('.aw-video-slide').toggleClass('hide-close-icon');
      }
  
      // Slide video Play icon
      $(playInnerVideo).click(function () {
        $('html').addClass('show-lb-video');
        $('.aw-video-slide').removeClass('aw-video-slide-show').attr('aria-hidden', 'true');
        Cookies.set('video-not-interested', 'true', { expires: 365 });
      });
  
      // Lightbox Close icon
      $(closeInnerVideo).click(function () {
        $('html').removeClass('show-lb-video');
  
        setTimeout(function () {
          $('.aw-video-slide').addClass('aw-video-slide-show').attr('aria-hidden', 'false');
        }, 10000);
      });
  
      // VIDEO LIGHTBOX PLAY/PAUSE
      const lightBoxVideo = document.getElementById('lightbox-video');
  
      $(playInnerVideo).click(function () {
        // Give the close button focus
        $('#stop-video').focus();
        lightBoxVideo.play();
  
        // Stop user from tabbing outside of the modal
        deflectFocus();
      });
  
      $('.video-pause').on('click', function () {
        lightBoxVideo.pause();
        $('.vid-slide-wrapper__content-item').focus();
      });
  
      // Brings focus back into the modal
      function deflectFocus() {
        $('#site-header, #skip-content').on('focusin.modalOpen', function (e) {
          $('#stop-video').focus();
        });
      };
  
      // Close lightbox on Esc key
      document.onkeydown = function (e) {
        if (e.key === 'Escape') {
          lightBoxVideo.pause();
          $('.vid-slide-wrapper').attr('aria-hidden', 'true');
          $('.aw-video-slide').attr('aria-hidden', 'false');
        }
      };
    }
    
    
  });
})(jQuery);
