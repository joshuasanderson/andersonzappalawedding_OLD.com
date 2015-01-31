$(document).ready(function(){

	// On any click, toggle the nav open or closed.
	$(document).on('click', function(e) {
		if($(e.target).hasClass('menu-icon')) {
			toggleNav();
		} else if(isNavOpen() && !$(e.target).hasClass('menu')) {
			closeNav();
		}
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
		closeNav();
	} else {
		openNav();
	}
}

function closeNav() {
	$('.menu-icon').removeClass('open');
	$('nav').animate({ width: 0 }, 400, 'easeInOutQuint');
	$('nav').removeClass('open');
}

function openNav() {
	$('.menu-icon').addClass('open');
	$('nav').animate({ width: 300 }, 400, 'easeInOutQuint');
	$('nav').addClass('open');
}

function isNavOpen() {
	if($('nav').hasClass('open')) {
		return true;
	} else {
		return false;
	}
}