
'use strict';

const w = $(window).width();
const spwidth = 767;
const tabletwidth = 1025;

{
	const openMenu = document.getElementById('menu_open');
	const Nav = document.querySelector('header nav');

	openMenu.addEventListener('click', function () {
		openMenu.classList.toggle('active');
		Nav.classList.toggle('active');
	});
}


$(function () {
	$("body").removeClass("preload");

	setTimeout(function () {
		$('.lower_ttl').addClass('active');
	}, 300);
	setTimeout(function () {
		$('.lower_ttl_bg .box').addClass('active');
	}, 1000);

	$(window).on('load scroll', function () {
		let scrollPos = $(this).scrollTop();

		if (scrollPos > 500) {
			$('header').addClass('active');
		} else {
			$('header').removeClass('active');
		}
		
	});

	$('.price03_in .box table').on('click', function () {
		$(this).next().fadeOut();
	});

	$('.faq03 .box .item .que').on('click', function () {
		$(this).toggleClass('active');
		$(this).next().slideToggle();
	});

	$('a[href^="#"]').click(function () {
		var speed = 300;
		var href = $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({ scrollTop: position - 100 }, speed, "swing");
		return false;
	}); 


	





});