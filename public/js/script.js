!function(a){a(document).ready(function(){var b=new a.slidebars;$slidebar=a("div.sb-slidebar"),a(".sb-toggle-left").on("click",function(){$slidebar.parent().hasClass("sb-active")&&a("div.navbar-left").toggleClass("menu-toggle-box-shadow"),b.toggle("right")});var c=a("#sb-site, .sb-site");c.on("touchend click",function(){a("div.navbar-left").removeClass("menu-toggle-box-shadow")}),a(".sb-toggle-submenu").off("click").on("click",function(){$submenu=a(this).parent().children(".sb-submenu"),a(this).add($submenu).toggleClass("sb-submenu-active"),$submenu.hasClass("sb-submenu-active")?$submenu.slideDown(200):$submenu.slideUp(200)}),a(".fancybox").fancybox({hideOnContentClick:!0,padding:0,openEffect:"elastic",openSpeed:150,closeEffect:"elastic",closeSpeed:150,closeClick:!0,helpers:{overlay:null,buttons:{}}}),a(window).scroll(function(){console.log(a(window).scrollTop()),a(window).scrollTop()>1&&a("nav").addClass("nav-shadow"),a(window).scrollTop()<1&&a("nav").removeClass("nav-shadow")}),a(".deletePhoto").on("click",function(b){if(a("a[data-method]").length>0){var c=a(this).attr("href");a("#modalDeletePhoto").attr("action",c)}a.fn.custombox(this,{url:"#promtModal",effect:"sign"}),b.preventDefault()})})}(jQuery),$(window).load(function(){function a(){c.removeClass().addClass(b.width()/b.height()<d?"bgheight":"bgwidth")}var b=$(window),c=$("#bg"),d=c.width()/c.height();b.resize(a).trigger("resize")});