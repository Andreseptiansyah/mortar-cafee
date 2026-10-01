// Menus 
function mining_industry_menu_open_nav() {
  jQuery(".sidenav").addClass('show');
}
function mining_industry_menu_close_nav() {
  jQuery(".sidenav").removeClass('show');
}

( function( window, document ) {
  function mining_industry_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const mining_industry_nav = document.querySelector( '.sidenav' );

      if ( ! mining_industry_nav || ! mining_industry_nav.classList.contains( 'show' ) ) {
        return;
      }
      const elements = [...mining_industry_nav.querySelectorAll( 'input, a, button' )],
        mining_industry_lastEl = elements[ elements.length - 1 ],
        mining_industry_firstEl = elements[0],
        mining_industry_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;

      if ( ! shiftKey && tabKey && mining_industry_lastEl === mining_industry_activeEl ) {
        e.preventDefault();
        mining_industry_firstEl.focus();
      }

      if ( shiftKey && tabKey && mining_industry_firstEl === mining_industry_activeEl ) {
        e.preventDefault();
        mining_industry_lastEl.focus();
      }
    } );
  }
  mining_industry_keepFocusInMenu();
} )( window, document );

jQuery('document').ready(function($){
	// preloader
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);

  // Sticky Header
  $(window).scroll(function(){
		var sticky = $('.header-sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});

});

/*sticky copyright*/
window.addEventListener('scroll', function() {
  var sticky = document.querySelector('.copyright-sticky');
  if (!sticky) return;

  var scrollTop = window.scrollY || document.documentElement.scrollTop;
  var windowHeight = window.innerHeight;
  var documentHeight = document.documentElement.scrollHeight;

  var isBottom = scrollTop + windowHeight >= documentHeight-100;

  if (scrollTop >= 100 && !isBottom) {
    sticky.classList.add('copyright-fixed');
  } else {
    sticky.classList.remove('copyright-fixed');
  }
});

/*sticky sidebar*/
window.addEventListener('scroll', function() {
  var sticky = document.querySelector('.sidebar-sticky');
  if (!sticky) return;

  var scrollTop = window.scrollY || document.documentElement.scrollTop;
  var windowHeight = window.innerHeight;
  var documentHeight = document.documentElement.scrollHeight;

  var isBottom = scrollTop + windowHeight >= documentHeight-100;

  if (scrollTop >= 100 && !isBottom) {
    sticky.classList.add('sidebar-fixed');
  } else {
    sticky.classList.remove('sidebar-fixed');
  }
});

// Scroller
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});

// Slider pagination
jQuery(document).ready(function($) {
  var $mining_industry_carousel = $('#carouselExampleIndicators');
  var $mining_industry_current = $('#slider-current');
  var totalSlides = $mining_industry_carousel.find('.carousel-item').length;

  // Set total on load
  $('#slider-total').text(String(totalSlides).padStart(2, '0'));

  function mining_industry_updateCurrentSlide() {
    var index = $mining_industry_carousel.find('.carousel-item.active').index();
    $mining_industry_current.text(String(index + 1).padStart(2, '0'));
  }
  mining_industry_updateCurrentSlide();

  $mining_industry_carousel.on('slid.bs.carousel', function () {
    mining_industry_updateCurrentSlide();
  });
});

// Title Color
jQuery(document).ready(function() {
  jQuery("#slider .inner_carousel .slider-title").each(function() {
    var t = jQuery(this).text().trim();
    var splitT = t.split(" ");

    if (splitT.length >= 2) {
      var beforeLastTwo = splitT.slice(0, -2).join(" ");
      var lastTwo = splitT.slice(-2).join(" ");
      var newText = beforeLastTwo + ' <span class="title-text">' + lastTwo + '</span>';
      jQuery(this).html(newText);
    } else {
      // If text has less than 2 words, don't modify
      jQuery(this).html(t);
    }
  });
});

// Project Slider
jQuery(document).ready(function () {
  var owl = jQuery('#project-section .owl-carousel');

  owl.on('initialized.owl.carousel changed.owl.carousel refreshed.owl.carousel', function () {
    setTimeout(function () {
      jQuery('#project-section .owl-item').css('border-left', '1px solid #00000010');
      jQuery('#project-section .owl-item.active').first().css('border-left', 'none');
    }, 0);
  });

  owl.owlCarousel({
    margin: 0,
    loop: true,
    dots: false,
    autoplay: true,
    nav: true,
    navText: ['<i class="fa-solid fa-caret-left"></i>', '<i class="fa-solid fa-caret-right"></i>'],
    responsive: {
      0: { items: 1 },
      768: { items: 2 },
      992: { items: 3 },
      1200: { items: 4 }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });
});


/*sticky sidebar*/
window.addEventListener('scroll', function() {
  var sticky = document.querySelector('.sidebar-sticky');
  if (!sticky) return;

  var scrollTop = window.scrollY || document.documentElement.scrollTop;
  var windowHeight = window.innerHeight;
  var documentHeight = document.documentElement.scrollHeight;

  var isBottom = scrollTop + windowHeight >= documentHeight-100;

  if (scrollTop >= 100 && !isBottom) {
    sticky.classList.add('sidebar-fixed');
  } else {
    sticky.classList.remove('sidebar-fixed');
  }
});
/* Progress Bar */
document.addEventListener("DOMContentLoaded", function () {
    const mining_industry_progressBar =
        document.getElementById("mining_industry_elemento_progress_bar");
    if (!mining_industry_progressBar) return;
    window.addEventListener("scroll", function () {
        const mining_industry_scrollTop =
            document.documentElement.scrollTop || document.body.scrollTop;
        const mining_industry_height =
            document.documentElement.scrollHeight -
            document.documentElement.clientHeight;
        const mining_industry_scrolled =
            (mining_industry_scrollTop / mining_industry_height) * 100;
        mining_industry_progressBar.style.width =
            mining_industry_scrolled + "%";
    });
});