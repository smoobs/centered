(function($) {
"use strict";

$(document).ready(function(){

		/* ======= CURRENT MENU ITEM ======= */
		
		var i, sections, hash, element, pos, pos_sec, current_id, height_element, menu_h;
		
		var menu_h = $(".menu").css("height");
		menu_h = parseInt(menu_h,10);
		
		var height,
		pos,
		element_menu,
		id_slide;

	$(document).scroll(function(){
		pos = $(this).scrollTop();
		$(".slide-menu").each(function() {
			id_slide = $(this).attr("id");
			height = $(this).css("height");
			element_menu = $('#desktop-menu #nav a[href$="#'+id_slide+'"]:first');
			if($(this).offset().top <= pos + 100 && element_menu.length > 0) {
				$("#desktop-menu #nav li").removeAttr("id");
				element_menu.parent().attr("id","current_menu_item");
			}
		});
	});
		
		
		
		
		
		/* ======= CLEAR AJAX FORM ======= */
		
		if($("#form-ajax").is('*')) {
			$('#form-ajax')[0].reset();
		}
		
		/* ======= COMMENT FORM ======= */
		$("#post-comment-form textarea").val("Your message...");
		

		var def;
		var def2;
		$("#post-comment-form input[type='text']").focus(function () {
			def = $(this).val();
			if ($(this).val() == def ) {
				$(this).val("");
			}
		}).blur(function () {
			if ($(this).val() == '') {
				$(this).val(def);
			}
		});
		
		$("#post-comment-form textarea").focus(function () {
			def2 = $(this).val();
			if ($(this).val() == def2 ) {
				$(this).val("");
			}
		}).blur(function () {
			if ($(this).val() == '') {
				$(this).val(def2);
			}
		});
		
		/* ======= MOBILE MENU ======= */
	
		$(".menu-mobile-button").click(function() {
			if($("#mobile-menu").css("display") == "none") {
				$("#mobile-menu").slideDown(300);
			}
			else {
				$("#mobile-menu").slideUp(300);
			}
		});
		
		$("#mobile-menu a").click(function() {
			$("#mobile-menu").slideUp(300);
		});


		
		/* ======= BACK TO TOP ======= */
		
				$(window).scroll(function () {
					if ($(this).scrollTop() > 700) {
						$('#backtop').css("visibility","visible");
						$('#backtop').css("opacity",1);
					} else {
						$('#backtop').css("opacity",0);
						$('#backtop').css("visibility","hidden");
					}
				});

						// scroll body to 0px on click
				$('#backtop').click(function () {
					$('body,html').animate({
						scrollTop: 0
						}, 800);
						return false;
					});
	
		
		/* ======= SCROLL ITEMS ======= */
		


		$('.scrolling-links').localScroll({offset: {top: -menu_h},duration: 1000});
		$('.arrow-link').localScroll();
		$('#mobile-menu ul').localScroll({offset: {top: -menu_h},duration: 1000});
		
		
				
		/* ======= FITVIDS ======= */
		
		$(".media-post").fitVids();
		$(".fit").fitVids();
		
		/* ======= BAR GRAPH ======= */
		
		$('.bar').appear(function() {	
			var layer = jQuery(".percent-layer", this).css("width");
			var parent = jQuery(this).css("width");
			var percent = parseInt(layer,10)*100/parseInt(parent,10);
			$(".percent-layer", this).css("width","0%");
			$(".percent-layer", this).stop().animate( { width: percent+"%" }, { duration: 2500 } );
		});	
		
		/* ======= COUNTDOWN ======= */
		
		$('.number_container').appear(function() {
				var count_element = $(".number", this).html();
				$(".number", this).countTo({
					from: 0,
					to: count_element,
					speed: 2500,
					refreshInterval: 50,
				});
		});
		
		/* ======= CLIENT CAROUSEL ======= */
		
		$(".client-carousel").flexisel({
			visibleItems: 5
		});
		
		/* ======= ISOTOPE ======= */
		
		var $container = $('.portfolio-container');
		$container.isotope({
			filter: '*',
			layoutMode: 'fitRows',
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false
			},
		});
 
		$('.portfolio-categories ul li a').click(function(){
			$('.portfolio-categories ul li .current').removeClass('current');
			$(this).addClass('current');
	 
			var selector = $(this).attr('data-filter');
			$container.isotope({
				filter: selector,
				layoutMode: 'fitRows',
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}
			});
			return false;
		}); 
		
		$(window).load(function() {
			var hash = window.location.hash;
			$container.isotope('reLayout', function() {
				$("html, body").scrollTo(hash, 1000, { offset: -menu_h });
			});
			
			var filtertoggle = $('body');
			$(function(){
				setTimeout(function() {
					$container.isotope('reLayout');
				}, filtertoggle.hasClass("") ? 755: 755);
			});
		});
		
		/* ======= RESPONSIVE SLIDES ======= */
		
		$(function() {
			$(".rslides-testimonials").responsiveSlides({
				nav: true,
				auto: false,
				prevText: "<i class='icon-angle-left'></i>",
				nextText: "<i class='icon-angle-right'></i>",
				navContainer: ".testimonials-navi"
			});
		});
		
		$(function() {
			$(".rslides-twitter").responsiveSlides({
				nav: true,
				auto: false,
				prevText: "<i class='icon-angle-left'></i>",
				nextText: "<i class='icon-angle-right'></i>",
				navContainer: ".navi-tweet"
			});
		});
		
		$(function() {
			$(".rslides-blog").responsiveSlides({
				nav: true,
				auto: true,
				prevText: "<i class='icon-angle-left'></i>",
				nextText: "<i class='icon-angle-right'></i>"
			});
		});
		
		
		
		/* ======= AJAX PORTFOLIO LOAD ======= */
		var toLoad;
		$('.portfolio-container a').click(function(){
			$(window).scrollTo( '.portfolio-works', 1000, { offset: -80 } );
			toLoad = $(this).attr('href');
			$('.ajax-portfolio-loader').slideDown(500);
			$.ajax({
				url: toLoad,
				success: function(data) {
					$(".portfolio-view .row").html(data);
					$(".ajax-portfolio-loader").slideUp(500, function() { $(".portfolio-view .row").slideDown(500, function() { $('.close-button').show(500); }); } );
					$(window).scrollTo( ".portfolio-view", 1000, { offset: -120 } );
				}
			});

			return false;
		});
		
		$(".close-button").click(function() {
			$('.portfolio-view .row').slideUp(500, function() { $('.portfolio-view .row').html(''); });
			$(this).hide('fast');
			$('.ajax-portfolio-loader').slideUp(500);
		});
		
		/* ======= AJAX EMAIL CONTACT ======= */
		
		
		var standard_pt = $("#form-ajax #personal").val();
		var standard_et = $("#form-ajax #email").val();
		var standard_wt = $("#form-ajax #website").val();
		var standard_mt = $("#form-ajax #message-contact").val();

		$('#form-ajax').submit(function(){	
			var errors = false;
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var email_field = $("#email");
			var personal_field = $("#personal");
			var message_text = $("#message-contact");
			var website_field = $("#website");
			
			
            if(!emailReg.test($.trim(email_field.val()))) {
				email_field.addClass("error-input");
				errors = true;
			}
			
			if(personal_field.val() === '') {
				personal_field.addClass("error-input");
				errors = true;
			}
			
			if(message_text.val() === '' || message_text.val() === standard_mt) {
				message_text.addClass('error-input');
				errors = true;
			}
			
			if(personal_field.val() === '' || personal_field.val() === standard_pt) {
				personal_field.addClass('error-input');
				errors = true;
			}
			
			if(errors === false) {
				if(website_field.val() === standard_wt) {
					website_field.val('');
				}
				email_field.removeClass("error-input");
				personal_field.removeClass("error-input");
				message_text.removeClass("error-input");
				var formInput = $(this).serialize();
				
				$.ajax({  
							type: "POST",  
							url: url_js,
							data: formInput,  
							success: function(response) {
								if (response == "")
								{
										$(".contact-form").slideUp("fast");
										$(".contact-success").fadeIn("slow");
								}

								else
								{
									alert('Problem with send email');
								}
							}
						}); 
			}
			
			return false;
		});

		/* =============================== SHORTCODES =============================== */
		
		/* ======= SINGLE & MULTIPLE TOGGLES ======= */
		
		$(".toggle").click(function() {
			var parent = $(this).parent();
			var content = $(".toggle-content",this);
				if(parent.hasClass("single-toggles")) {
					$(".toggle-title-text",parent).addClass("hover-icon");
				}
				if(content.css("display") === "none") {
					if(parent.hasClass("single-toggles")) {
						$(".toggle-content",parent).slideUp(200);
						$(".toggle-arrow i",parent).removeClass("icon-angle-down");
						$(".toggle-arrow i",parent).addClass("icon-angle-right");
						$(".toggle-title-text",parent).addClass("hover-icon");
					}
					content.slideDown(200);
					$(".toggle-title-text",this).removeClass("hover-icon");
					$(".toggle-arrow i",this).removeClass("icon-angle-right");
					$(".toggle-arrow i",this).addClass("icon-angle-down");
				}
				else {
					content.slideUp(200);
					$(".toggle-title-text",this).addClass("hover-icon");
					$(".toggle-arrow i",this).removeClass("icon-angle-down");
					$(".toggle-arrow i",this).addClass("icon-angle-right");
				}
		});

		/* ======= TABS ======= */
		
		$('.tabs-menu').each(function() {
			$("ul.tabs-menu > li:first-child").addClass('active-tab');
            var $ul = $(this);
            var $li = $ul.children('li');
			
            $li.each(function() { 
                var $trescTaba = $($(this).children('a').attr('href'));
                if ($(this).hasClass('active-tab')) {
                    $trescTaba.show();
                } else {
                    $trescTaba.hide();
                }
            });
            $li.click(function() {$(this).children('a').click();});
            $li.children('a').click(function() {
                $li.removeClass('active-tab');         
                $li.each(function() {
                    $($(this).children('a').attr('href')).hide();
                });
                $(this).parent().addClass('active-tab');
                $($(this).attr('href')).show();
                return false;
            });
        });
		
		/* ======= ALERTS ======= */
	
		$(".close-alert").click(function() {
			$(this).parent().hide(400);
		});
	
	
	
	});
})(jQuery);