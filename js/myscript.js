
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
		$('.lower_ttl_bg .box, .machine02,.salon02, .faq02, .salonlist02').addClass('active');
	}, 1000);

	$(window).on('load scroll', function () {
		let scrollPos = $(this).scrollTop();

		if (scrollPos > 500) {
			$('header').addClass('active');
		} else {
			$('header').removeClass('active');
		}

		if (w <= spwidth) {
			$('.fadeup').each(function () {



				let position = $(this).offset().top;
				let windowHeight = $(window).height();
				if (scrollPos > position - windowHeight - 100) {
					$(this).addClass('active');
				}
			});
		} else {

			
			$('.fadeup').each(function () {
				
				
				
				let position = $(this).offset().top;
				let windowHeight = $(window).height();
				if (scrollPos > position - windowHeight + 100) {
					$(this).addClass('active');
				}
			});
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


	$('#zip1').zip2addr({
		pref: '#pref1',
		addr: '#addr1'
	});

	// PRICE：月額利用料のタブメニュー切替
	$('.price03 .type_menu_tab ul li').on('click',function(){
		$('.price03 .type_menu_tab ul li').removeClass('active');
		$(this).addClass('active');
		// クリックしたタブが何番目か取得し、それに応じて表の表示切替
		var idx = $(this).index();
		$('.price03 .box').hide();
		$('.price03 .box').eq(idx).show();
	});




});