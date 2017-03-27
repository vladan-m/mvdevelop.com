$(window).load(function() {

  $('.menu-main-nav-container').show();

  if($('.mob-menu-nav').length > 0) {
    $('body').on('click', '.mob-menu-trigger', function() {
      var $this = $(this),
          $pushMenu = $this.closest('.mob-menu').find('.mob-menu-nav'),
          $html = $this.closest('html');
      if($this.hasClass('active')) {
        $this.removeClass('active');
        $html.removeClass('mob-menu-toright');
        $pushMenu.removeClass('mob-menu-open');
      } else {
        $this.addClass('active');
        $html.addClass('mob-menu-toright');
        $pushMenu.addClass('mob-menu-open');
      }
    });
  }

  if($('.entry').length > 0) {
    $('.entry:last').addClass('last');
  }

  if(window.location.href == "http://superiordevelop.com/archive/"){
    $('.mob-menu-nav').find('.archive').addClass('active');
  }
  if(window.location.href == "http://superiordevelop.com/about-us/"){
    $('.mob-menu-nav').find('.about').addClass('active');
  }
  if(window.location.href == "http://superiordevelop.com/contact-us/"){
    $('.mob-menu-nav').find('.contact').addClass('active');
  }

  $.fn.equalHeightRow = function() {
    if($('.grid-view').length > 0) {
    	var currentTallest = 0;
    	var currentRowStart = 0;
    	var rowDiv = new Array();

    	$('.grid-view .grid-item').each(function(index) {
    		if(currentRowStart != $(this).position().top) {
    			// we just came to a new row.  Set all the heights on the completed row
    			for(currentDiv = 0 ; currentDiv < rowDiv.length ; currentDiv++) rowDiv[currentDiv].height(currentTallest);

    			// set the variables for the new row
    			rowDiv.length = 0; // empty the array
    			currentRowStart = $(this).position().top;
    			currentTallest = $(this).height();
    			rowDiv.push($(this));
    		} else {
    			// another div on the current row.  Add it to the list and check if it's taller
    			rowDiv.push($(this));
    			currentTallest = (currentTallest < $(this).height()) ? ($(this).height()) : (currentTallest);
    		}
    		// do the last row
    		for(currentDiv = 0 ; currentDiv < rowDiv.length ; currentDiv++) rowDiv[currentDiv].height(currentTallest);
    	});
    }
  };

  if ( $(window).width() > 767) {
    $(document).ready(function() {
      $('.grid-view .grid-item').equalHeightRow();
    });

    $(window).resize(function(){
      $('.grid-view .grid-item').css('height','auto');
      $('.grid-view .grid-item').equalHeight();
    });
  }

  $.fn.equalHeight = function() {
    var maxHeight = 0;
    return this.each(function(index, box) {
      var boxHeight = $(box).height();
      maxHeight = Math.max(maxHeight, boxHeight);
    }).height(maxHeight);
  };

  if ( $(window).width() > 767) {
    $(document).ready(function() {
      $('.cta-wrap .cta-box').equalHeight();
      $('.archive-wrap ul li').equalHeight();
    });

    $(window).resize(function(){
      $('.cta-wrap .cta-box').css('height','auto');
      $('.cta-wrap .cta-box').equalHeight();
      $('.archive-wrap ul li').css('height','auto');
      $('.archive-wrap ul li').equalHeight();
    });
  }

  if($('.contact-form').length > 0) {
    function updateCountdown() {
      var remaining = 1200 - $('.contact-text').val().length;
      $('.char-counter').text(remaining);
    }
    updateCountdown();
    $('.contact-text').change(updateCountdown);
    $('.contact-text').keyup(updateCountdown);
  }

  if($('.menu-main-nav-container').length > 0) {
    $('.develop a').prepend('<i class="fa fa-code fa-lg"></i>');
    $('.design a').prepend('<i class="fa fa-paint-brush fa-lg"></i>');
    $('.collections a').prepend('<i class="fa fa-archive fa-lg"></i>');
    $('.lab a').prepend('<i class="fa fa-flask fa-lg"></i>');
    $('.news a').prepend('<i class="fa fa-newspaper-o fa-lg"></i>');
  }

});
