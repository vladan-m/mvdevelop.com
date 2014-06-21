$(window).load(function() {

  if ( $(window).width() > 767) {
    if($('.equal-holder').length) {
    	function equalHeight(group) {
    		var tallest = 0;
    		group.each(function() {
    			var thisHeight = $(this).height();
    			if(thisHeight > tallest) {
    				tallest = thisHeight;
    			}
    		});
    		group.height(tallest);
    	}
    	equalHeight($(".equal"));
    }
  }
  
  if($('.carousel').length) {
    $('.carousel').carousel({
      interval: 5000
    });
  }
  
  if($('.slider').length) {
    $('.slider').bxSlider({
      mode: 'fade',
      auto: true,
      controls: false,
      pause: 5000,
      pager: false
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

});