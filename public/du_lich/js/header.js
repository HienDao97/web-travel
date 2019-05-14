$('#menu-2').click(function(){
	$('#menu-1').removeClass("search-menu-active");
	$('#menu-2').addClass("search-menu-active");
	$('#search-menu-form-1').css("display", "none");
	$('#search-menu-form-2').css("display", "block");
});

$('#menu-1').click(function(){
	$('#menu-2').removeClass("search-menu-active");
	$('#menu-1').addClass("search-menu-active");
	$('#search-menu-form-2').css("display", "none");
	$('#search-menu-form-1').css("display", "block");
});

$('.search-advance').click(function(){
	$('.mobile-row').css("display", "none");
	$('.give-up-search-advance').css("display", "block");
	$('.search-row-2').css("display", "block");
});

$('.give-up-search-advance').click(function(){
	$('.mobile-row').css("display", "block");
	$('.give-up-search-advance').css("display", "none");
	$('.search-row-2').css("display", "none");
});

$('.header-menu-button-left').click(function(){
	$('.menu-bar').css("display", "flex");
	$('.header-menu-button-left').css("display", "none");
	$('.anti-scroll').css("display", "block");
	$('body').addClass("body-not-scroll");
	$('.header-menu-button-right').css("display", "none");
	$('.header-menu-button-right-active').css("display", "none");
	$('.search-menu').removeClass("search-menu-bar-active");
});

$('.header-menu-button-left-active').click(function(){
	$('.menu-bar').css("display", "none");
	$('.header-menu-button-left').css("display", "block");
	$('.anti-scroll').css("display", "none");
	$('body').removeClass("body-not-scroll");
});

$('.anti-scroll').click(function(){
	$('.menu-bar').css("display", "none");
	$('.header-menu-button-left').css("display", "block");
	$('.anti-scroll').css("display", "none");
	$('body').removeClass("body-not-scroll");
	$('.header-menu-button-right').css("display", "block");
});

$('.search-buttom-home-mobile').click(function(){
	$('.search-menu').addClass("search-menu-bar-active");
	$('.search-buttom-home-mobile').css("display", "none");
	$('.header-menu-button-right').css("display", "none");
	$('.header-menu-button-right-active').css("display", "block");
	$('body').addClass("body-not-scroll");
});

$('.header-menu-button-right').click(function(){
	$('.search-menu').addClass("search-menu-bar-active");
	$('.search-buttom-home-mobile').css("display", "none");
	$('.header-menu-button-right').css("display", "none");
	$('.header-menu-button-right-active').css("display", "block");
	$('body').addClass("body-not-scroll");
});

$('.header-menu-button-right-active').click(function(){
	$('.search-menu').removeClass("search-menu-bar-active");
	$('.search-buttom-home-mobile').css("display", "block");
	$('.header-menu-button-right').css("display", "block");
	$('.header-menu-button-right-active').css("display", "none");
	$('body').removeClass("body-not-scroll");
});
