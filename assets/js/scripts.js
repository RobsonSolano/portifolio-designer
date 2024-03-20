const base_url = "https://php74.nano.docker/_estudos/mayara";
$(".alterar-tema").on("click", function () {
	// Verifica se o body possui a classe bg-light
	if ($("body").hasClass("bg-light")) {
		// Remove a classe bg-light do body e adiciona a classe bg-dark
		$("body").removeClass("bg-light").addClass("bg-dark");

		// Para outros elementos com a classe bg-light, faz a troca de classes
		$(".bg-light").removeClass("bg-light").addClass("bg-dark");
		$(".nav-link").addClass("text-light");
		$(".tema-light-icon").removeClass("d-block").addClass("d-none");
		$(".tema-dark-icon").removeClass("d-none").addClass("d-block");
	} else {
		// Remove a classe bg-dark do body e adiciona a classe bg-light
		$("body").removeClass("bg-dark").addClass("bg-light");

		// Para outros elementos com a classe bg-dark, faz a troca de classes
		$(".bg-dark").removeClass("bg-dark").addClass("bg-light");
		$(".nav-link").removeClass("text-light");
		$(".tema-dark-icon").removeClass("d-block").addClass("d-none");

		$(".tema-light-icon").removeClass("d-none").addClass("d-block");
	}

	$.ajax({
		url: base_url + "/ajax/change_theme",
		method: "POST",
		dataType: "html",
		data: {
			theme: $(this).data("tema"),
		},
		success: function (data) {
			console.log(data);
		},
		error: function (data) {
			console.log(data);
		},
		complete: function (data) {
			console.log(data);
		},
	});
});

$(".js-btn-enviar-email").on("click", function () {
	var nome = $(".js-input-nome").val();
	var email = $(".js-input-email").val();
	var celular = $(".js-input-celular").val();
	var message = $(".js-input-message").val();

	if (nome != "" && email != "" && celular != "" && message != "") {
		$(this).html("Enviando...").attr("disabled", "disabled");
		$('#contactForm').submit();
	}
});

$(document).ready(function () {
	$("#lightSlider").lightSlider({
		item: 3,
		autoWidth: true,
		slideMove: 1, // slidemove will be 1 if loop is true
		slideMargin: 10,

		addClass: "",
		mode: "slide",
		useCSS: true,
		cssEasing: "ease", //'cubic-bezier(0.25, 0, 0.25, 1)',//
		easing: "linear", //'for jquery animation',////

		speed: 800, //ms'
		auto: true,
		loop: true,
		slideEndAnimation: true,
		pause: 4000,

		keyPress: false,
		controls: true,
		prevHtml: "",
		nextHtml: "",

		rtl: false,
		adaptiveHeight: false,

		vertical: false,
		verticalHeight: 600,
		vThumbWidth: 300,

		thumbItem: 10,
		pager: true,
		gallery: false,
		galleryMargin: 5,
		thumbMargin: 5,
		currentPagerPosition: "middle",

		enableTouch: true,
		enableDrag: true,
		freeMove: true,
		swipeThreshold: 40,

		responsive: [
			{
				breakpoint: 1399,
				settings: {
					item: 2,
					slideMove: 1,
					slideMargin: 10,
				},
			},
			{
				breakpoint: 991,
				settings: {
					item: 2,
					slideMove: 1,
					slideMargin: 10,
				},
			},
			{
				breakpoint: 700,
				settings: {
					item: 1,
					slideMove: 1,
					verticalHeight: 400,
					vThumbWidth: 300,
					slideMargin: 0,
				},
			},
		],
		onBeforeStart: function (el) {},
		onSliderLoad: function (el) {},
		onBeforeSlide: function (el) {},
		onAfterSlide: function (el) {},
		onBeforeNextSlide: function (el) {},
		onBeforePrevSlide: function (el) {},
	});
});

function inputHandler(masks, max, event) {
	var c = event.target;
	var v = c.value.replace(/\D/g, "");
	var m = c.value.length > max ? 1 : 0;
	VMasker(c).unMask();
	VMasker(c).maskPattern(masks[m]);
	c.value = VMasker.toPattern(v, masks[m]);
}

var telMask = ["(99) 9999-99999", "(99) 99999-9999"];
var tel = document.querySelector("input[attrname=maskphone]");
VMasker(tel).maskPattern(telMask[0]);
tel.addEventListener("input", inputHandler.bind(undefined, telMask, 14), false);

var docMask = ["999.999.999-999", "99.999.999/9999-99"];
var doc = document.querySelector("#doc");
VMasker(doc).maskPattern(docMask[0]);
doc.addEventListener("input", inputHandler.bind(undefined, docMask, 14), false);
