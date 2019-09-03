
	var owl = $('.home-slider');
	owl.owlCarousel({
		items: 1,
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 10000,
		autoplayHoverPause: true,
		nav: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});


	var owl = $('.testimonial-slider');
	owl.owlCarousel({
		items: 1,
		loop: true,
		margin: 10,
		autoplay: false,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		nav: false,
		dots: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});
	var owl = $('.endorsed');
	owl.owlCarousel({
		items: 4,
		loop: true,
		margin: 10,
		autoplay: false,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		nav: false,
		dots: true,
		responsive: {
			0: {
				items: 1,
				autoplay: true
			},
			600: {
				items: 2,
				autoplay: false
			},
			1000: {
				items: 4
			}
		}
	});
	var owl = $('.event-slider');
	owl.owlCarousel({
		items: 4,
		loop: true,
		margin: 10,
		autoplay: false,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		nav: false,
		dots: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 4
			}
		}
	});

	$(window).scroll(function() {
		var x = $(this).scrollTop();
		if (x >= 20) {
			$(".col-12.col-lg-10.text-right.top-nav").addClass("none")
		} else {
			$(".col-12.col-lg-10.text-right.top-nav").removeClass("none")
		}
	});

	$(document).ready(function() {
		if ($(window).width() < 769) {
			$('.slide-number').addClass("for-mobile");
		} else {
			$('.slide-number').removeClass("for-mobile");
		}
	});
	$(document).ready(function() {
		$(".step-1 a").click(function() {
			$(".step-1 a").parent().removeClass("active-step");
			$(this).parent().addClass("active-step");
		});
	});

	function openCity(evt, cityName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("col-lg-3");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
			tabcontent[i].classList.remove("active");
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(cityName).style.display = "block";
		document.getElementById(cityName).classList.add("active");
	};
	$(document).ready(function() {
		if ($(window).width() > 769) {
			$('.wrap-8 .slide-number a').attr('onclick', '');
		} else {

		}
	})


	$(document).ready(function() {
		$('.dropdown-menu a.sub').on("click", function(e) {
			$(this).next('ul').toggle();
			e.stopPropagation();
			e.preventDefault();
		});
	});
