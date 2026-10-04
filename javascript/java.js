var swiper = new Swiper(".mySwiper", {
	slidesPerview: 1,
	loop: true,
		autoplay: {
			delay: 5000,
		},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
});