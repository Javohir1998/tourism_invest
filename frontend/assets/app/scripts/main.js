$(document).ready(function(){$("header .menu_top .wrapper .left .lang .current_lang").click(function(){$(this).parent().toggleClass("lang_width"),$("header .menu_top .wrapper .left .lang .current_lang").hasClass("lang_width")&&$(".lang .choose_lang .current_lang").toggleClass("margin-right-10")}),$(".index_top_slider").owlCarousel({loop:!0,margin:0,nav:!1,dots:!1,responsive:{0:{items:1},600:{items:1},1e3:{items:1}}}),$("header .menu_bottom .search_button").click(function(e){""==$("header .menu_bottom .search .input_block input").val()&&e.preventDefault(),$("header .menu_bottom .search .input_block").toggleClass("width_input"),$("header .menu_bottom .search .input_block input").toggleClass("input"),$("header .menu_bottom .menu_links li").toggleClass("scale"),1200==$(window).width()&&$("header .menu_bottom .menu_links li").removeClass("scale")}),$("header .menu_bottom .mobile_menu_button").click(function(){$("header .menu_bottom .menu_links").toggleClass("flex")}),$(".video-gallery").lightGallery({share:!1}),$(function(){"use strict";$(".animated_progress span").each(function(){$(this).animate({width:$(this).data("progress")},1e3,function(){$(this).text($(this).data("progress"))})})}),$("#aniimated-thumbnials").lightGallery({thumbnail:!0,selector:"a"})});