/**
 * CLEAN UI THEME SETTINGS
 */

var cleanUI = {
    hasTouch: (function() { return ('ontouchstart' in document.documentElement) })()
};



/**
 * CLEAN UI TEMPLATE SCRIPTS
 */

$(function(){

    /////////////////////////////////////////////////////////////////////////////
    // Slide toggle menu items on click

    $('.left-menu .left-menu-list-submenu > a').on('click', function(){
        var accessDenied = $('body').hasClass('menu-top') && $(window).width() > 768;

        if (!accessDenied) {
            var that = $(this).parent(),
                opened = $('.left-menu .left-menu-list-opened');

            if (!that.hasClass('left-menu-list-opened') && !that.parent().closest('.left-menu-list-submenu').length)
                opened.removeClass('left-menu-list-opened').find('> ul').slideUp(200);

            that.toggleClass('left-menu-list-opened').find('> ul').slideToggle(200);
        }
    });


    /////////////////////////////////////////////////////////////////////////////
    // Main menu scripts

    if (!$('body').hasClass('menu-top')) {
        if (!cleanUI.hasTouch) {
            if (!cleanUI.hasTouch) {
                $('nav.left-menu .scroll-pane').each(function() {
                    $(this).jScrollPane({
                        autoReinitialise: true,
                        autoReinitialiseDelay: 100
                    });
                    var api = $(this).data('jsp'),
                        throttleTimeout;
                    $(window).bind('resize', function() {
                        if (!throttleTimeout) {
                            throttleTimeout = setTimeout(function() {
                                api.reinitialise();
                                throttleTimeout = null;
                            }, 50);
                        }
                    });
                });
            }
        }
    }

    if ($('body').hasClass('menu-top')) {

        var translateSelector = $('nav.left-menu .left-menu-inner'),
            startTranslateX = 0;

        translateSelector.addClass('scrolled-to-left');

        $(window).on('resize', function(){
            startTranslateX = 0;
            translateSelector.css('transform', 'translate3d(' + 0 + 'px, 0px, 0px)');
        });

        $('nav.left-menu').on('mousemove', function(e) {

            if ($(window).width() > 751) {

                console.log(e)

                var menuWidth = $('nav.left-menu').width(),
                    windowWidth = $(window).width(),
                    boxedOffset = (windowWidth - menuWidth) / 2,
                    innerWidth = (function() {
                        var width = 0;
                        $('nav.left-menu .left-menu-list-root > *').each(function(){
                            width += $(this).width();
                        });
                        return width;
                    })(),
                    logoWidth = $('nav.left-menu .logo-container').outerWidth(),
                    deltaWidth = menuWidth - logoWidth - innerWidth,
                    hoverOffset = 100;

                if (deltaWidth < 0) {

                    if (e.clientX < windowWidth - menuWidth - boxedOffset + logoWidth + hoverOffset) {

                        if (startTranslateX < 0 || startTranslateX < deltaWidth) {

                            startTranslateX = startTranslateX - deltaWidth;
                            translateSelector
                                .removeClass('scrolled-to-right')
                                .addClass('scrolled-to-left')
                                .css('transform', 'translate3d(' + startTranslateX + 'px, 0px, 0px)')

                        }

                    }

                    if (e.clientX > menuWidth + boxedOffset - hoverOffset) {

                        if (startTranslateX >= 0 || startTranslateX > deltaWidth) {

                            startTranslateX = deltaWidth;
                            translateSelector
                                .removeClass('scrolled-to-left')
                                .addClass('scrolled-to-right')
                                .css('transform', 'translate3d(' + startTranslateX + 'px, 0px, 0px)')

                        }

                    }
                }

            }

        });

    }


    /////////////////////////////////////////////////////////////////////////////
    // Toggle menu on viewport < 768px

    $('.left-menu-toggle').on('click', function(){
        $(this).toggleClass('active');
        $('nav.left-menu').toggleClass('left-menu-showed');
        $('.main-backdrop').toggleClass('main-backdrop-showed')
    });


    /////////////////////////////////////////////////////////////////////////////
    // Hide menu and backdrop on backdrop click

    $('.main-backdrop').on('click', function(){
        $('.left-menu-toggle').removeClass('active');
        $('nav.left-menu').removeClass('left-menu-showed');
        $('.main-backdrop').removeClass('main-backdrop-showed')
    });


    $('nav.left-menu a.left-menu-link').on('click', function(){
        if (!$(this).parent().hasClass('left-menu-list-submenu')) {
            $('.left-menu-toggle').removeClass('active');
            $('nav.left-menu').removeClass('left-menu-showed');
            $('.main-backdrop').removeClass('main-backdrop-showed')
        }
    });

});