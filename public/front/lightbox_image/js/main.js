$(function() {

  var siteSticky = function() {
		$(".js-sticky-header").sticky({topSpacing:0});
	};
	siteSticky();

	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function() {
			
			var counter = 0;
      $('.site-mobile-menu .has-children').each(function(){
        var $this = $(this);
        
        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find('.arrow-collapse').attr({
          'data-toggle' : 'collapse',
          'data-target' : '#collapseItem' + counter,
        });

        $this.find('> ul').attr({
          'class' : 'collapse',
          'id' : 'collapseItem' + counter,
        });

        counter++;

      });

    }, 1000);

		$('body').on('click', '.arrow-collapse', function(e) {
      var $this = $(this);
      if ( $this.closest('li').find('.collapse').hasClass('show') ) {
        $this.removeClass('active');
      } else {
        $this.addClass('active');
      }
      e.preventDefault();  
      
    });

		$(window).resize(function() {
			var $this = $(this),
				w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
	    var container = $(".site-mobile-menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
	    }
		});
	}; 
	siteMenuClone();

});


$(document).ready(function () {
	$('.customer-logos').slick({
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 1500,
	  arrows: false,
	  dots: false,
	  pauseOnHover: false,
	  responsive: [{
		  breakpoint: 1300,
		  settings: {
			slidesToShow: 5
		  }
		},
		{
		  breakpoint: 1100,
		  settings: {
			slidesToShow: 4
		  }
		},
		{
		  breakpoint: 768,
		  settings: {
			slidesToShow: 4
		  }
		},
		{
		  breakpoint: 520,
		  settings: {
			slidesToShow: 3
		  }
		},
		{
		  breakpoint: 420,
		  settings: {
			slidesToShow: 2
		  }
		}

	  ]
	});
  });




//   Contact Form JS
$('.nav-phone').click(function () {
	$('.contact-modal').addClass('show')
	$('body').addClass('modal-open');

  })

  $('.contact-submit').click(function () {
	var error_text = $('.error-text')
	var name = $('form input[name="name"]').val().trim();
	var email = $('form input[name="email"]').val().trim();
	var textarea = $('form textarea').val().trim();
	var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;

	if (name == "" || textarea == '' || email == "") {
	  $('.error.modal').addClass('show')
	  $('.backdrop').css('display', 'block')
	} else if (email != "" && !pattern.test(email)) {
	  $('.backdrop').css('display', 'block')

	  $('.error-text').html("Enter valid email!");
	  $('.error.modal').addClass('show')
	} else {
	  $('.navbar-contact-modal .modal').removeClass('show')
	  $('.navbar-contact-modal .modal').hide()
	  $('.success.modal').addClass('show')
	  $('.success .modal-backdrop').remove();
	  $('.backdrop').css('display', 'block')
	}

  })

  $('.success .close').click(function () {
	$('.success.modal').removeClass('show')
	$('.modal-backdrop').remove();
	$('body').removeClass('modal-open');
	$("input, textarea").val("");
	$('.backdrop').css('display', 'none')
	$('body').removeClass('modal-open');

  })
  $('.error .close').click(function () {
	$('.error.modal').removeClass('show')
	$('.backdrop').css('display', 'none')
	$('body').removeClass('modal-open');

  })
  $('.contact-modal .close').click(function () {
	$('.contact-modal.modal').removeClass('show')
	$('body').removeClass('modal-open');
  })