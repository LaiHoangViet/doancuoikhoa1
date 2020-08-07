console.log(1);
$(window).scroll(function() {
	var height = 
	$(window).scrollTop();
	console.log(height);
	if(height > 150) {
		$('.menu-logo').addClass('active');
		$('.search').addClass('active');
		$('.material-icons').addClass('active');
		$('.login-logout').addClass('active');
		$('.menu-khach-hang').addClass('active');
		$('.header-menu').addClass('active');
	} else {
		$('.menu-logo').removeClass('active');
		$('.search').removeClass('active');
		$('.login-logout').removeClass('active');
		$('.material-icons').removeClass('active');
		$('.menu-khach-hang').removeClass('active');
		$('.header-menu').removeClass('active');
	}
});