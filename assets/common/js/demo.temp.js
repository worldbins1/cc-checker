/**
 * TEMPLATE OPTIONS
 * Theme demo temporary scripts, remove it in your app
 */

$(function(){

    /////////////////////////////////////////////////////////////////////////////
    // TODO-NICK REFACTOR THIS CODE


    var body = $('body'),
        themeColorClasses = 'theme-dark theme-default theme-blue theme-orange theme-red theme-green',
        settingClasses = themeColorClasses + ' mode-superclean mode-default menu-fixed menu-static colorful-disabled colorful-enabled',
        colorfulClasses = 'left-menu-list-color-primary left-menu-list-color-success left-menu-list-color-warning left-menu-list-color-danger left-menu-list-color-yellow';


    // THEME COLOR
    $('#options-theme .btn').on('click', function(){
        $('#options-theme .active').removeClass('active');
        var themeSelector = $(this).find('input').val();
        body.removeClass(themeColorClasses).addClass(themeSelector);
    });


    // MODE SUPERCLEAN
    $('#options-mode .btn').on('click', function(){
        var themeSelector = $(this).find('input').val();
        body.removeClass('mode-superclean mode-default').addClass(themeSelector);
    });


    // FIXED MENU
    $('#options-menu .btn').on('click', function(){
        var themeSelector = $(this).find('input').val();
        body.removeClass('menu-fixed menu-static').addClass(themeSelector);
    });


    // COLORFUL MENU
    $('#options-colorful .btn').on('click', function(){
        var themeSelector = $(this).find('input').val();
        localStorage.setItem('options-colorful', themeSelector);
        body.removeClass('colorful-disabled colorful-enabled').addClass(themeSelector);
        $('nav.left-menu .left-menu-list-root > li').removeClass(colorfulClasses);
        if (themeSelector == 'colorful-enabled') {
            setTimeout(function(){
                $('nav.left-menu .left-menu-list-root > li').each(function(){
                    var classArray = colorfulClasses.split(' '),
                        randomClass = classArray[Math.floor(Math.random() * classArray.length)];

                    $(this).addClass(randomClass)
                })
            }, 200)
        }
    });


    // SET SETTINGS DEPENDING ON BODY CLASSES
    function setThemeSettings(arguments) {
        var classes = arguments.split(" ");
        for (var j = 0; j < classes.length; j++) {
            if (body.hasClass(classes[j])) {
                $('.left-menu-block .btn input[value=' + classes[j] + ']').trigger('click');
            }
        }
        return false;
    }

    setThemeSettings(settingClasses);

});