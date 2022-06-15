$(document).ready(function(){
	$(window).scroll(function(){
		if (this.scrollY > 20) {
			$('.navbar').addClass("sticky");
		}else{
			$('.navbar').removeClass("sticky");
		}
		if(this.scrollY > 500){
			$('.scroll-up-btn').addClass("show");
		}else{
			$('.scroll-up-btn').removeClass("show");
		}
	});

	//toggle menu and navbar
	$('.menu-btn').click(function(){
		$('.navbar .menu').toggleClass("active");
		$('.menu-btn i').toggleClass("active");
	});

//owl carousel 
	$('.carousel').owlCarousel({
		margin: 0,
		loop: true,
		autoplay:true,
		autoplayTimeOut: 1000,
		autoplayHoverPause: true,
		responsive: {
			0:{
				items: 2,
				nav: false
			},
			600:{
				items: 3,
				nav: false
			},
			1000:{
				items: 4,
				nav: false
			},
			1200:{
				items: 5,
				nav: false
			}
		}
	});
	//slide up btn script
	$('.scroll-up-btn').click(function(){
		$('html').animate({scrollTop: 0});
	});
});