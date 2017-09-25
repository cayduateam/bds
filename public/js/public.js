//parallax
(function ($) {

    $.fn.parallax = function () {

        var varWidthWindow = $(window).width();

        if (varWidthWindow < 768)
        {
            $(this).css('background-position', "");
            return;
        }

        $(this).each(function () {

            var $obj = $(this);

            $(window).scroll(function () {

                var varTopScroll = $(window).scrollTop();
                var varTopElement = $obj.offset().top;
                var varHeightWindow = $(window).height();

                var varElementVisibilityStartPoint = varTopElement - varHeightWindow;
                varElementVisibilityStartPoint = (varElementVisibilityStartPoint < 0) ? 0 : varElementVisibilityStartPoint;

                if (varTopElement + varHeightWindow < varTopScroll || varTopElement > varTopScroll + varHeightWindow) {
                    /* console.log("Out of view"); */
                    return;
                }

                var yPos = -((varTopScroll - varElementVisibilityStartPoint) * $obj.data('speed'));
                var bgpos = '50% ' + yPos + 'px';

                $obj.css('background-position', bgpos);

            });
        });

        return this;

    };


}(jQuery));
jQuery( document ).ready(function() {
    new WOW().init();
    AOS.init();
    jQuery(".parallax").parallax();
    
    //list tab
    // $('#listTabs').responsiveTabs();
    //end list tab

    $('ul.navbar-nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(90).slideDown(250);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(90).slideUp(250);
    });
});
//end parallax