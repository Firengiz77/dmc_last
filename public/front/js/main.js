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


var video = document.getElementById("video");
if (video.hasAttribute("controls")) {
  video.removeAttribute("controls")
} else {
  video.setAttribute("controls", "controls")
}


$(document).ready(function () {


	$('.moderator').slick({
	  dots: false,
	  infinite: true,
	  speed: 800,
	  autoplay: false,
	  autoplaySpeed: 2000,
	  slidesToShow: 3,
	  slidesToScroll: 3,
      arrows: true,
	  responsive: [
		{
		  breakpoint: 991,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}]
	});

	$('.speakers').slick({
	  dots: false,
	  infinite: true,
	  speed: 800,
	  autoplay: false,
	  autoplaySpeed: 2000,
	  slidesToShow: 3,
	  slidesToScroll: 3,
      arrows: true,
	  responsive: [
		{
		  breakpoint: 991,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}]
	});
	$('.supporter').slick({
	  dots: false,
	  infinite: true,
	  speed: 800,
	  autoplay: false,
	  autoplaySpeed: 2000,
	  slidesToShow: 4,
	  slidesToScroll: 4,
      arrows: true,
	  responsive: [
		{
		  breakpoint: 991,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 650,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		  }
		}]
	});
	
	$('.supporter2').slick({
	  dots: false,
	  infinite: true,
	  speed: 800,
	  autoplay: false,
	  autoplaySpeed: 2000,
	  slidesToShow: 4,
	  slidesToScroll: 4,
      arrows: true,
	  responsive: [
		{
		  breakpoint: 991,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 650,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		},
		]
	});
  });



//   TIME



    // Set the date we're counting down to
	let date_from_video = $('#date_from_video').val();
    var countDownDate = new Date(date_from_video).getTime();

    // Update the count down every 1 second
    var x = setInterval(function () {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      
      $language_2 = $('#language_2').val();
      if($language_2 == 'az'){
         document.getElementById("days").innerHTML = ` <div class="show-time">${days} <span class="time-measure"> Gün </span></div> <div>:</div>`
      document.getElementById("hours").innerHTML = ` <div class="show-time">${hours} <span class="time-measure">Saat</span></div> <div>:</div>`
      document.getElementById("minutes").innerHTML = ` <div class="show-time">${minutes} <span class="time-measure">Dəqiqə</span></div> <div>:</div>`
      document.getElementById("seconds").innerHTML = ` <div class="show-time">${seconds} <span class="time-measure">Saniyə</span></div>`
      }
      else if($language_2 == 'en'){
           document.getElementById("days").innerHTML = ` <div class="show-time">${days} <span class="time-measure"> Day </span></div> <div>:</div>`
      document.getElementById("hours").innerHTML = ` <div class="show-time">${hours} <span class="time-measure">Hour</span></div> <div>:</div>`
      document.getElementById("minutes").innerHTML = ` <div class="show-time">${minutes} <span class="time-measure">Minute</span></div> <div>:</div>`
      document.getElementById("seconds").innerHTML = ` <div class="show-time">${seconds} <span class="time-measure">Second</span></div>`
      }
    
     
    

      // If the count down is over, write some text
      if (distance < 0) {
        clearInterval(x);
         if($language_2 == 'az'){
        document.getElementById("days").innerHTML = ` <div class="show-time">00 <span class="time-measure">Gün</span></div> <div>:</div>`
        document.getElementById("hours").innerHTML = ` <div class="show-time">00 <span class="time-measure">Saat</span></div> <div>:</div>`
        document.getElementById("minutes").innerHTML = ` <div class="show-time">00 <span class="time-measure">Dəqiqə</span></div> <div>:</div>`
        document.getElementById("seconds").innerHTML = ` <div class="show-time">00 <span class="time-measure">Saniyə</span></div>`
         }
           else if($language_2 == 'en'){
        document.getElementById("days").innerHTML = ` <div class="show-time">00 <span class="time-measure">Day</span></div> <div>:</div>`
        document.getElementById("hours").innerHTML = ` <div class="show-time">00 <span class="time-measure">Hour</span></div> <div>:</div>`
        document.getElementById("minutes").innerHTML = ` <div class="show-time">00 <span class="time-measure">Minute</span></div> <div>:</div>`
        document.getElementById("seconds").innerHTML = ` <div class="show-time">00 <span class="time-measure">Second</span></div>`
         }
         
      }
    }, 1000);



	// Scroll Top

	$(window).scroll(function () {
		var scroll = $(window).scrollTop();
		if (scroll >= 100) {
		  $("#toTop").fadeIn();
		} else {
		  $("#toTop").fadeOut();
		}
	  });

	  $(document).on("click", "#toTop", function () {
		$("html, body").animate({ scrollTop: 0 }, 500);
	  });







// const  btnticket = document.querySelectorAll(".ticket button");
// const countwist = document.querySelector(".count");
// let newcountwist = 0;


// btnticket.forEach((item) => {

// item.addEventListener("click", () => {
  
//   newcountwist++;
//   countwist.innerHTML = newcountwist;
//   jSuites.notification({
// 	success: 1,
// 	name: 'Məhsul',
// 	message: 'Səbətə əlavə edildi.',
// })
    //   })
// })
