$(window).load(function() {

  if($('.mob-menu-nav').length > 0) {
    $('body').on('click', '.mob-menu-trigger', function() {
      var $this = $(this),
          $pushMenu = $this.closest('.mob-menu').find('.mob-menu-nav'),
          $body = $this.closest('body');

      if($this.hasClass('active')) {
        $this.removeClass('active');
        $body.removeClass('mob-menu-toleft');
        $pushMenu.removeClass('mob-menu-open');
      } else {
        $this.addClass('active');
        $body.addClass('mob-menu-toleft');
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

  $.fn.equalHeight = function() {
    var maxHeight = 0;
    return this.each(function(index, box) {
      var boxHeight = $(box).height();
      maxHeight = Math.max(maxHeight, boxHeight);
    }).height(maxHeight);
  };

  if ( $(window).width() > 767) {
    $(document).ready(function() {
      $('.grid-view .grid-item').equalHeightRow();
      $('.cta-wrap .cta-box').equalHeight();
      $('.archive-wrap ul li').equalHeight();
      if($('.equal-holder').length) {
        $('.equal').equalHeight();
      }
    });

    $(window).resize(function(){
      $('.grid-view .grid-item').css('height','auto');
      $('.grid-view .grid-item').equalHeight();
      $('.cta-wrap .cta-box').css('height','auto');
      $('.cta-wrap .cta-box').equalHeight();
      $('.archive-wrap ul li').css('height','auto');
      $('.archive-wrap ul li').equalHeight();
    });

    // if($('.equal-holder').length) {
    // 	function equalHeight(group) {
    // 		var tallest = 0;
    // 		group.each(function() {
    // 			var thisHeight = $(this).height();
    // 			if(thisHeight > tallest) {
    // 				tallest = thisHeight;
    // 			}
    // 		});
    // 		group.height(tallest);
    // 	}
    // 	equalHeight($(".equal"));
    // }
  }

  if($('.contact-form').length) {
    $('.contact-form').validate();

    // function updateCountdown() {
    //   var remaining = 1200 - $('.contact-text').val().length;
    //   $('.char-counter').text(remaining);
    // }
    // updateCountdown();
    // $('.contact-text').change(updateCountdown);
    // $('.contact-text').keyup(updateCountdown);
  }

  if($(".more-scroll").length) {
    $(".more-scroll").click(function(smooth){
      smooth.preventDefault();
      var destination = 0,
          docHeight = $(document).height(),
          winHeight = $(window).height(),
          offsetTop = $(this.hash).offset().top;

      if(offsetTop > docHeight - winHeight){
        destination = docHeight - winHeight;
      }else{
        destination = offsetTop;
      }
      $('html,body').animate({scrollTop:destination}, 700, 'easeInCubic');
    });
  }

  var date = new Date();
  var year = date.getFullYear();

  $('.current-year').text(year);

  if($('.menu-main-nav-container').length > 0) {
    $('.develop a').prepend('<i class="fa fa-code fa-lg"></i>');
    $('.design a').prepend('<i class="fa fa-paint-brush fa-lg"></i>');
    $('.collections a').prepend('<i class="fa fa-archive fa-lg"></i>');
    $('.lab a').prepend('<i class="fa fa-flask fa-lg"></i>');
    $('.news a').prepend('<i class="fa fa-newspaper-o fa-lg"></i>');
  }

});

if ( $(window).width() < 768) {
    $(window).off('.affix');
    $(".blog-nav")
      .removeClass("affix affix-top affix-bottom")
      .removeData("bs.affix");
  }

$.fn.affixCalc = function() {
  var offset = this.offset();
  this.affix({
    offset: {
      top: offset.top
    }
  });

  if ( $(window).width() < 768) {
    $(window).off('.affix');
    this
      .removeClass("affix affix-top affix-bottom")
      .removeData("bs.affix");
  }

  return this;
};

$(window).on('load', function(){
  $(".blog-nav").affixCalc();
});

$(window).on('resize', function(){
  $(".blog-nav").affixCalc();
});
