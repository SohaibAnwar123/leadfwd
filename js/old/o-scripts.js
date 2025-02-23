jQuery(document).ready(function() {
    // Cache selectors
    var lastId,
            topMenu = $("#top-menu"),
            topMenuHeight = topMenu.outerHeight() + 60,
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function() {
                var item = $($(this).attr("href"));
                if (item.length) {
                    return item;
                }
            });

    $('#subnav').hide();

    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function(e) {
        var href = $(this).attr("href"),
                offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 500);
        e.preventDefault();
    });

    /*
     $('#counter .slider ul').bxSlider({
     mode: "fade", 
     pager: false,
     controls: false,
     auto: 5000
     });
     */

    function showSliderTooltip(currentSlide) {

        var css = {},
                currentSlide = currentSlide ? currentSlide : $($('#kick ul li').get(0)),
                position = currentSlide.data('position') ? currentSlide.data('position') : 'bottom left';

        position = position.split(' ');

        css[ position[0] ] = '40px';
        css[ position[1] ] = '40px';

        $('.slider-tooltip').remove();
        $('<div/>')
                .addClass('slider-tooltip')
                .css(css)
                .html('<h1>' + currentSlide.data('title') + '</h1>' + currentSlide.data('text'))
                .hide()
                .appendTo(currentSlide)
                .fadeIn(500);
    }

    showSliderTooltip();

    $('#kick .slider ul').bxSlider({
        mode: "horizontal",
        pager: false,
        controls: true,
        auto: 5000,
        onSlideBefore: function(currentSlide) {
            $('.slider-tooltip').fadeOut(500);
        },
        onSlideAfter: showSliderTooltip
    });

    $('#email-marketing .tabs-content').bxSlider({
        mode: "horizontal",
        pager: true,
        controls: false,
        pagerCustom: '#tabs-control1',
        adaptiveHeight: true
    });

    $('#sugar .tabs-content').bxSlider({
        mode: "horizontal",
        pager: true,
        controls: false,
        pagerCustom: '#tabs-control2',
        adaptiveHeight: true
    });

    /**
     $('.counter').countdown({
     until: new Date(2013, 5 - 1, 30),
     layout: '<b>{d<}{dn} {dl}, {d>}' + '{hn} {hl}, {mn} {ml}, {sn}</b> and <b>{sl}</b> {desc}',
     description: ' to go!'
     });
     **/

    $('#emTab .slider ul').bxSlider({
        mode: "horizontal",
        pager: false,
        controls: true,
    });

    $('#nurturing .slider ul').bxSlider({
        mode: "horizontal",
        pager: false,
        controls: true,
    });

    $('#leadScreen .slider ul').bxSlider({
        mode: "horizontal",
        pager: false,
        controls: true,
    });



    $('.fancybox-media').fancybox({
        openEffect: 'none',
        closeEffect: 'none',
        helpers: {
            media: {}
        }
    });

    checkOffset()

    $(window).scroll(function() {
        checkOffset();

        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight;

        // Get id of current scroll item
        var cur = scrollItems.map(function() {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
                    .parent().removeClass("active")
                    .end().filter("[href=#" + id + "]").parent().addClass("active");
        }
        ;

        //clear the inputs on focus
        $('#contact-form input').focus(function() {
            value = $(this).val();
            $(this).val('');
        }).blur(function() {
            if ($(this).val() == '') {
                $(this).val(value);
            }
        });

        $('#contact-form textarea').focus(function() {
            value = $(this).text();
            $(this).text('');
        }).blur(function() {
            if ($(this).text() == '') {
                $(this).text(value);
            }
        });

        $(".popup").dialog({
            modal: false,
            autoOpen: false
        });

        $('.popup-opener').each(function() {
            $(this).click(function() {
                target = $(this).attr('href');
                $(target).dialog("open");
                w = $(target).children('.screenshot').children('img').width() + 36,
                        $(target).dialog("option", "width", w);
                return false;
            })
        });

        $('.popup').click(function(event) {
            event.stopPropagation();
        });

        $('body').click(function(event) {
            $(".popup").dialog('close')
        });

    });

    if (typeof $('.counter-bg-icon').magican !== 'undefined') {
        $('.counter-bg-icon').magican({
            effects: 'move|rotate',
            speed: '1s',
            easing: 'ease-in-out'
        });

        $('#counter').mouseenter(function() {
            $('.counter-bg-icon').magican('play');
        });

        $('#counter').mouseleave(function() {
            $('.counter-bg-icon').magican('revert');
        });
    }

    // bootstrap tooltips for pricing //

    $('#sugar .features-table .feature, .pricing-table .feature').popover({
        container: 'body',
        placement: 'top',
        trigger: 'hover'
    });

    // Pricing -> View Plans Popups

    $('#emailMarketPlan, #marketer-plan').click(function() {
        $('.price-plan-popup-wrapper').fadeIn(500, function() {
            $('.price-plan-popup-wrapper table.emailMarketTable').fadeIn(700);
        });
    });

    $('#emailAutomationPlan, #pro-plan').click(function() {
        $('.price-plan-popup-wrapper').fadeIn(500, function() {
            $('.price-plan-popup-wrapper table.emailAutoTable').fadeIn(700);
        });
    });

    $('.pp-close').click(function() {
        $('.price-plan-popup-wrapper table').fadeOut(500, function() {
            $('.price-plan-popup-wrapper').fadeOut(700);
        });
    });

    //* new pricing page script *//

    $('#new-pricing-root > section > .section-body > .price-plan-box > ul.plan-features > li > a').tooltip({
        container: 'body',
        placement: 'top',
        trigger: 'hover'
    });

    $('.missing-source').mouseover(function() {
        var fHeight = $('.' + $(this).attr('data-target')).parents('.price-plan-box').height();
        $('.' + $(this).attr('data-target')).parents('.price-plan-box').height(fHeight);
        $('.' + $(this).attr('data-target')).css('color', '#ff9000').stop().effect("bounce", {times: 3}, 500, function() {
            $('.' + $(this).attr('data-target')).parents('.price-plan-box').css('height', 'auto');
        });
    });

    $('.missing-source').mouseout(function() {
        $('.' + $(this).attr('data-target')).css('color', '#5c5c5c');
    });

    $('#btnShowAllFeatures').click(function() {
        var self = this;
        if (!$('#all-features').is(':visible')) {
            $('html, body').animate({
                scrollTop: $(this).parent().offset().top
            }, 500, function() {
                $(self).parent().addClass('fixed-el');
                $(self).text('Close Features View');
                $('#all-features').show('slide', {direction: 'up'}, function() {
                    $(window).on('scroll', hideAllFeaturesHandler);
                });
            });

        } else {
            $(window).off('scroll', hideAllFeaturesHandler);
            $('#all-features').hide('slide', {direction: 'up'}, function() {
                $(self).text('Show all Features');
                $(self).parent().removeClass('fixed-el');
                $('html, body').animate({
                    scrollTop: $(self).parent().offset().top
                }, 500);
            });
        }

    });

});

function hideAllFeaturesHandler() {
    
    console.log('hideAllFeaturesHandler');

    var self = $('#btnShowAllFeatures');
    var fPanel = $('#btnShowAllFeatures').parent();

    if (fPanel.offset().top < $('#all-features').offset().top || fPanel.offset().top > ($('#all-features').offset().top + $('#all-features').height())) {
        $(window).off('scroll', hideAllFeaturesHandler);
        $(self).parent().removeClass('fixed-el');
        $('#all-features').hide();
        $(self).text('Show all Features');
        $('html, body').animate({
            scrollTop: $(self).parent().offset().top
        }, 10);
    }
}

function checkOffset() {
    /**
     if ($('#marketing').html() != undefined) {
     if ($('#register-bar').offset().top > $('#footer').offset().top || $(document).scrollTop() + window.innerHeight < $('#marketing').offset().top) {
     $('#register-bar').hide();
     }
     if ($(document).scrollTop() + window.innerHeight < $('#footer').offset().top && $(document).scrollTop() + window.innerHeight > $('#marketing').offset().top) {
     $('#register-bar').show();
     }
     } else {
     if ($('#register-bar').html() != undefined) {
     if ($('#register-bar').offset().top > $('#footer').offset().top || $(document).scrollTop()<1) {
     $('#register-bar').hide();
     }
     if ($(document).scrollTop() + window.innerHeight < $('#footer').offset().top && $(document).scrollTop()>=1) {
     $('#register-bar').show();
     }
     }
     }
     **/

    if ($('#register-bar').html() != undefined) {
        if ($('#register-bar').offset().top > $('#footer').offset().top || $(document).scrollTop() < 1) {
            $('#register-bar').hide();
        }
        if ($(document).scrollTop() + window.innerHeight < $('#footer').offset().top && $(document).scrollTop() >= 1) {
            $('#register-bar').show();
        }
    }

    if ($('#subnav').html() != undefined) {
        if ($('#subnav').offset().top < 848) {
            $('#subnav').hide();
        }
        if ($(document).scrollTop() > 848) {
            $('#subnav').show();
        }
    }

}
