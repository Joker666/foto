/**
 * Created by joker on 5/21/14.
 */


//slidebar

(function($) {
    $(document).ready(function() {
        var mySlidebars = new $.slidebars();
        $('.sb-toggle-left').on('click', function() {
            mySlidebars.toggle('right');
            $('div.navbar-left').toggleClass('menu-toggle-box-shadow');
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

        //$('.sb-toggle-left').click(mySlidebars.close);
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