/**
 * Created by joker on 5/21/14.
 */
//slidebar


(function($) {
    $(document).ready(function() {

        //Toggle Slidebar
        var mySlidebars = new $.slidebars();
        $slidebar = $('div.sb-slidebar');
        $('.sb-toggle-left').on('click', function() {
            if ($slidebar.parent().hasClass('sb-active'))
                $('div.navbar-left').toggleClass('menu-toggle-box-shadow');
            mySlidebars.toggle('right');
        });

        //Toggle menu toggle box shadow class
        var $site = $('#sb-site, .sb-site');
        $site.on('touchend click', function(event) {
                $('div.navbar-left').removeClass('menu-toggle-box-shadow');
        });

        // Slidebars Submenus
        $('.sb-toggle-submenu').off('click').on('click', function() {
            $submenu = $(this).parent().children('.sb-submenu');
            $(this).add($submenu).toggleClass('sb-submenu-active'); // Toggle active class.

            if ($submenu.hasClass('sb-submenu-active')) {
                $submenu.slideDown(200);
            } else {
                $submenu.slideUp(200);
            }
        });


        $(window).scroll(function () {

            console.log($(window).scrollTop())
            if ($(window).scrollTop() > 1) {
                $('nav').addClass('nav-shadow');
            }
            if ($(window).scrollTop() < 1) {
                $('nav').removeClass('nav-shadow');
            }
        });

//        $('#upload-icon').on('click', function ( e ) {
//            $.fn.custombox( this, {
//                url: '#modal',
//                effect: 'sign'
//            });
//            e.preventDefault();
//        });
    });
}) (jQuery);

//login cover

$(window).load(function() {

    var theWindow        = $(window),
        $bg              = $("#bg"),
        aspectRatio      = $bg.width() / $bg.height();

    function resizeBg() {

        if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
            $bg
                .removeClass()
                .addClass('bgheight');
        } else {
            $bg
                .removeClass()
                .addClass('bgwidth');
        }

    }

    theWindow.resize(resizeBg).trigger("resize");

});