(function ($, root, undefined) {
	
	$(function () {
		
		$('.slider').slider({
			interval: 6500,
			height: 600,
			indicators: false
		});
		$('.sidenav').sidenav({
			draggable: true,
			inDuration: 170,
			outDuration: 170
		});
		$('.modal').modal();
		$('.gallery-icon a').attr('data-fancybox', 'gallery').fancybox({
			infobar: true,
			toolbar: "auto",
			smallBtn: "auto",
			gutter: 120,
			loop: true,
			idleTime: 6,
			protect: false,
			modal: false,
			buttons: [
				"slideShow",
				"zoom",
				"share",
				"fullScreen",
				"thumbs",
				"close"
			],
		});

		// menu y scroll top
		const nav = document.querySelector('#menu');
		const topOfNav = nav.offsetTop;

		function fixnav() {
			if(window,scrollY >= topOfNav) {
				// document.body.style.paddingTop = nav.offsetHeight + 'px';
				document.body.classList.add('fixed-nav');
			} else {
				document.body.style.paddingTop = 0;
				document.body.classList.remove('fixed-nav');
			}
		}

		window.addEventListener('scroll', fixnav);
		var scrollTop = $(".scrollTop");
			$(window).scroll(function() {
		    // declare variable
			var topPos = $(this).scrollTop();
			if (topPos > 100) {
				$(scrollTop).css("opacity", "1");
			} else {
				$(scrollTop).css("opacity", "0");
			}
		});
		  //Click event to scroll to top
		$(scrollTop).click(function() {
			$('html, body').animate({
				scrollTop: 0
			}, 768);
			return false;
		});

		
	});
	
})(jQuery, this);
