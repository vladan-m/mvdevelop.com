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
      $('.grid-view').equalHeightRow();
      $('.archive-wrap ul li').equalHeight();
      if($('.equal-holder').length) {
        $('.equal').equalHeight();
      }
    });

    $(window).resize(function(){
      $('.grid-view .grid-item').css('height','auto');
      $('.grid-view').equalHeightRow();
      $('.archive-wrap ul li').css('height','auto');
      $('.archive-wrap ul li').equalHeight();
    });
  }

  if($('.contact-form').length) {
    $('.contact-form').validate();
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

});


$.fn.affixCalc = function() {
  var offset = this.offset();

  $(window).off('.affix');
  this
    .removeClass('affix affix-top affix-bottom')
    .removeData('bs.affix');
  this.affix({
    offset: {
      top: function() {
        return (offset.top);
      }
    }
  });

  if ( $(window).width() < 768) {
    $(window).off('.affix');
    this
      .removeClass("affix affix-top affix-bottom")
      .removeData("bs.affix");
  }
};

$(window).on('load', function(){
  $(".blog-nav").affixCalc();
});

$(window).on('resize', function(){
  $(".blog-nav").affixCalc();
});
