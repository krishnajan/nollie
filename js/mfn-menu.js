/*
@Name:		Horizontal multilevel menu
@Author:    Muffin Group
@WWW:       www.muffingroup.com
@Version:   1.2.4 - multiple columns last attribute
*/

(function($){
	$.fn.extend({
		muffingroup_menu: function(options) {
			
			var defaults = {
				delay       : 50,
				hoverClass  : 'hover',
				arrows      : true,
				animation   : 'fade',
				addLast		: true
			};
			
			options = $.extend(defaults, options);
	        
			var menu = $(this);
			menu.find("li:has(ul)").addClass("submenu");		

			if(options.arrows) {
				menu.find("li ul li:has(ul) > a").append("<span style='display: block; position: absolute; right: 10px; top: 7px; font-size: 8px;'><i class='icon-chevron-right'></i></span>")
			}

			menu.find("li").hover(function() {
				$(this).addClass(options.hoverClass);
				if (options.animation == "fade") {
					$(this).children("ul").fadeIn(options.delay);
					$(this).children("svg").show();
				} else if (options.animation == "toggle") {
					$(this).children("ul").slideToggle(options.delay);
					$(this).children("svg").show();
				};
			}, function(){
				$(this).removeClass(options.hoverClass);
				if (options.animation == "fade") {
					$(this).children("ul").fadeOut(options.delay);
					$(this).children("svg").hide();
				} else if (options.animation == "toggle") {
					$(this).children("ul").slideToggle(options.delay);
					$(this).children("svg").hide();
				};
			});
			
			if(options.addLast) {
				$(":nth-child(3n)", menu).addClass("last");
				$(".submenu ul li:last-child", menu).addClass("last-item");
			}
			
			menu.find("> li > a").append("<span style='display: block; position: absolute; right: 5px; top: 6px; font-size: 8px;'><i class='icon-chevron-right'></i></span>");
	
	    }
	});
})(jQuery);