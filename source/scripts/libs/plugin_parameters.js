//Swiper Slider
import Swiper from "swiper/bundle";

export default function plugindParameters() {
	// Selector styling
	$("select.selectori").each(function () {
		var placeholder = $(this).data("placeholder") || "Default placeholder";
		$(this).select2({
			allowClear: true,
			minimumResultsForSearch: -1,
			placeholder: placeholder,
		});
	});
	// Slider
	let mySwiper = new Swiper(".testimonials_slider", {
		slidesPerView: 3,
		// autoplay: {
		// 	delay: 3000,
		// },
		spaceBetween: 40,
		pagination: {
			el: ".swiper-pagination",
		},
		breakpoints: {
			355: {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 30,
			},
			1024: {
				slidesPerView: 3,
				spaceBetween: 40,
			},
		},
	});
	// Gallery
	$(".magnific").each(function () {
		$(this).magnificPopup({
			delegate: "a",
			type: "image",
			gallery: {
				enabled: true,
			},
			zoom: {
				enabled: true,
				duration: 300,
			},
		});
	});
	if ($(".magnific_video").length) {
		$(".magnific_video").magnificPopup({
			disableOn: 700,
			type: "iframe",
			mainClass: "mfp-fade",
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false,
		});
	}
}
