(function() {

	$(document).ready(function() {
		changeCurrentNavItem()
	});

	function changeCurrentNavItem() {
		var uri = $(location).attr('href');
		$('header>nav>ul li').removeClass('current');

		$('header>nav>ul li a').each(function() {
			if (uri.indexOf($(this).attr('href')) != -1) {
				$(this).parent().addClass('current')
			}
		});
	}

})();
