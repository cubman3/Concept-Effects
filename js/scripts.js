(function () {


    $(window).on('load resize', function(){
    	// console.log($(window).width());
		if ($(window).width() < 768) {
			$('[data-context="site-nav"]')
				.removeClass('justify-content-center')
				.addClass('flex-column');
		} else {
			$('[data-context="site-nav"]')
				.addClass('justify-content-center')
				.removeClass('flex-column');
		}

	});

	$('[data-action="toggle-mobile-nav"]').on('click', function(){
		$('nav.site-nav').slideToggle()
	});

}());