var swiper = new Swiper(".mySwiper", {
	slidesPerView: 3,
	spaceBetween: 25,
	loop: true,
	watchOverflow: true,
	pagination: {
		el: ".swiper-pagination",
		type: "fraction"
	},
	navigation: {
		nextEl: ".work-swiper-button-next",
		prevEl: ".work-swiper-button-prev"
	},
	breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetween: 15
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 20
		},
		992: {
			slidesPerView: 3,
			spaceBetween: 30,
			loop: false
		}
	}
});

var swiper = new Swiper(".myLpSwiper", {
	slidesPerView: 3,
	spaceBetween: 25,
	// autoHeight: true,
	loop: true,
	watchOverflow: true,
	pagination: {
		el: ".swiper-pagination",
		type: "fraction"
	},
	navigation: {
		nextEl: ".work-swiper-button-next",
		prevEl: ".work-swiper-button-prev"
	},
	breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetween: 15
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 20
		},
		992: {
			slidesPerView: 3,
			spaceBetween: 50,
			loop: false
		}
	}
});

var swiper = new Swiper(".myPrtSwiper", {
	slidesPerView: 3,
	spaceBetween: 25,
	loop: true,
	pagination: {
		el: ".swiper-pagination-portfolio",
		dynamicBullets: true,
	},
	breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetween: 15
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 20
		},
		992: {
			slidesPerView: 3,
			spaceBetween: 50,
		}
	}
});