$(document).ready(function(){

	// Slide menu
	// $('.menu-icon').on('click', function(e) {
	// 	// Menu Show & Hide
	// 	e.preventDefault();

	// 	// if($('nav').hasClass('open')) {
	// 	// 	$(this).removeClass('open');
	// 	// 	$('nav').animate({ width: 0 }, 400, 'easeInOutQuint');
	// 	// 	$('nav').removeClass('open');
	// 	// 	// $('header, .wrapper').animate({ left: 0 }, 400, 'easeInOutQuint');
	// 	// 	// $('nav').removeClass('open');
	// 	// } else {
	// 	// 	$(this).addClass('open');
	// 	// 	$('nav').animate({ width: 300 }, 400, 'easeInOutQuint');
	// 	// 	$('nav').addClass('open');
	// 	// 	// $('header, .wrapper').animate({ left: 285 }, 400, 'easeInOutQuint');
	// 	// }

	// 	toggleNav();
	// });

	// Hide menu on any other click.
	$(document).on('click', function(e) {
		console.log(e.target.className);
		
		if(!$(e.target).hasClass('menu')) {
			toggleNav();
		}

		// if(!$(e.target).closest('nav').length) {
		// 	toggleNav();
		// }
	});

    // Service Detail Trigger
    $('.service-detail-trigger').on('click', function(e) {
        e.preventDefault();
        
        var detailName = $(this).data('servicename');
        $('#' + detailName).addClass('open');
    });
});

function toggleNav() {
	if($('nav').hasClass('open')) {
		$('.menu-icon').removeClass('open');
		$('nav').animate({ width: 0 }, 400, 'easeInOutQuint');
		$('nav').removeClass('open');
		// $('header, .wrapper').animate({ left: 0 }, 400, 'easeInOutQuint');
		// $('nav').removeClass('open');
	} else {
		$('.menu-icon').addClass('open');
		$('nav').animate({ width: 300 }, 400, 'easeInOutQuint');
		$('nav').addClass('open');
		// $('header, .wrapper').animate({ left: 285 }, 400, 'easeInOutQuint');
	}
}