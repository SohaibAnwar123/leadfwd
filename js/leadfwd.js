//MENU CHANGE
/*$(window).scroll(function () {
    if ($(window).scrollTop() > 111){
        $('.main').addClass("dark");
        $('.main .top-logo img.colored').hide(-100);
        $('.main .top-logo img.white').show("slide", { direction: "left" }, 1000);
        $('a.menu-tel').addClass('light');
    }
    else {
        $('.main').removeClass("dark");
        $('.main .top-logo img.white').hide(-100);
        $('.main .top-logo img.colored').show("slide", { direction: "left" }, 1000);
        $('a.menu-tel').removeClass('light');
    }
 });*/

var go = true;
$(window).scroll(function () {
    if ($(this).scrollTop() > 300 && go) {
        $('nav.main').fadeOut(600);

        $("ul.top-bar li.logo").animate({
            width: "100px"
        }, 500);
        $('ul.top-bar-s').addClass('addLogo');
        $("ul.top-bar-s li.logo").animate({
            width: "100px"
        }, 500);

        $("ul.top-bar li.announcekit").animate({
            width: "0",
            height: "0",
            marginLeft: "0"
        }, 500);
        /*$("ul.top-bar-s li.announcekit").animate({ 
                    width: "0",
                    height: "0",
                    marginLeft: "0"
                }, 500);*/
        $("ul.top-bar li.login-top").animate({
            width: "70px"
        }, 500);

        go = false;
    } else if ($(this).scrollTop() < 300 && !go) {
        $('nav.main').fadeIn(600);
        $("ul.top-bar li.logo").animate({
            width: "0"
        }, 500);
        $('ul.top-bar-s').removeClass('addLogo');
        $("ul.top-bar-s li.logo").animate({
            width: "0"
        });
        $("ul.top-bar li.login-top").animate({
            width: "0"
        }, 500);
        $("ul.top-bar li.announcekit").animate({
            width: "100px",
            height: "44px",
            marginLeft: "auto"
        }, 500);
        /*$("ul.top-bar-s li.announcekit").animate({ 
                    width: "85px",
                    height: "44px",
                    marginLeft: "auto"
                }, 500);*/
        go = true;
    }
});




window.onload = function () {


    //Announcekit
    window.announcekit = (window.announcekit || {
        queue: [],
        on: function (n, x) {
            window.announcekit.queue.push([n, x]);
        },
        push: function (x) {
            window.announcekit.queue.push(x);
        }
    });
    window.announcekit.push({
        "widget": "https://announcekit.app/widgets/v2/19zody",
        "selector": ".announcekit-widget"
    });



    //CAROUSEL 1
    $(".dg-link1").click(function () {
        $(".dg-layout1").show("slide", {
            direction: "left"
        }, 1000);
        $(".dg-layout3").hide("slide", {
            direction: "left"
        }, 1000);
        $(".dg-layout2").hide("slide", {
            direction: "left"
        }, 1000);
        $('.dg2-dots a').removeClass('on');
        $(this).addClass('on');
    });
    $(".dg-link2").click(function () {
        $(".dg-layout2").show("slide", {
            direction: "right"
        }, 1000);
        $(".dg-layout1").hide("slide", {
            direction: "right"
        }, 1000);
        $(".dg-layout3").hide("slide", {
            direction: "right"
        }, 1000);
        $('.dg2-dots a').removeClass('on');
        $(this).addClass('on');
    });
    $(".dg-link3").click(function () {
        $(".dg-layout3").show("slide", {
            direction: "left"
        }, 1000);
        $(".dg-layout2").hide("slide", {
            direction: "left"
        }, 1000);
        $(".dg-layout1").hide("slide", {
            direction: "left"
        }, 1000);
        $('.dg2-dots a').removeClass('on');
        $(this).addClass('on');
    });


    //FADE ELEMENTS ON SCROLL
    $(window).scroll(function () {
        $(".ht3-box").css("opacity", 1 - $(window).scrollTop() / 600);
        $(".ht3-box.w220").css("opacity", "1");
        $(".ht3-box.w230").css("opacity", "1");
    });


    //MODAL
    $(function () {
        $('a.ms-row').hover(function () {
            $(this).next('.ms-title').find('.ms-bun').css('opacity', '1');
            $(this).next('.ms-title').css('color', '#222222');
            $(this).nextAll('.ms-package').css('color', '#222222');
        }, function () {
            // on mouseout, reset the background colour
            $('.ms-bun').css('opacity', '');
            $('.ms-title').css('color', '');
            $('.ms-package').css('color', '');
        });

        $('.ms-package a').hover(function () {
            $(this).parents('dd').find('a.ms-row').css('background-color', '#ffda0d');
        }, function () {
            // on mouseout, reset the background colour
            $('a.ms-row').css('background-color', '');
        });

        $('.ms-title a').hover(function () {
            $(this).parents('dd').find('a.ms-row.msr-submenu').css('background-color', '#ffda0d');
        }, function () {
            $('a.ms-row').css('background-color', '');
        });


        // Modal for big screens
        $(".modal-show").click(function () {
            $(".modal-container").fadeIn(1000);
        });
        $(".modal-close").click(function () {
            $(".modal-container").fadeOut(1000);
        });

        // Modal for small screens
        $("#mt-starter-hide").click(function () {
            $("#mt-starter-content").slideUp(800);
            $("#mt-starter-hide").hide();
            $("#mt-starter-show").show();
        });

        $("#mt-starter-show").click(function () {
            $("#mt-starter-content").slideDown(800);
            $("#mt-starter-show").hide();
            $("#mt-starter-hide").show();
        });

        $("#mt-team-hide").click(function () {
            $("#mt-team-content").slideUp(800);
            $("#mt-team-hide").hide();
            $("#mt-team-show").show();
        });

        $("#mt-team-show").click(function () {
            $("#mt-team-content").slideDown(800);
            $("#mt-team-show").hide();
            $("#mt-team-hide").show();
        });


    });

    //PRICE CHANGE
    $("#starter-switch-monthly").click(function () {
        $("#starter-annual").hide();
        $("#starter-monthly").show();
        $("#starter-switch-monthly").hide();
        $("#starter-switch-annual").show();
    });
    $("#starter-switch-annual").click(function () {
        $("#starter-monthly").hide();
        $("#starter-annual").show();
        $("#starter-switch-annual").hide();
        $("#starter-switch-monthly").show();
    });
    $("#team-switch-monthly").click(function () {
        $("#team-annual").hide();
        $("#team-monthly").show();
        $("#team-switch-monthly").hide();
        $("#team-switch-annual").show();
    });
    $("#team-switch-annual").click(function () {
        $("#team-monthly").hide();
        $("#team-annual").show();
        $("#team-switch-annual").hide();
        $("#team-switch-monthly").show();
    });


    // IMAGE GALLERY - engage
    $(document).ready(function () {
        $("button.close-btn").click(function () {
            $(".p3-img-ss").css('opacity', '0');
            $(".p3-img-ss").css('visibility', 'hidden');
        });
    });

    function toggleOpacity(nChild) {
        $('ul.p3-list li:nth-child(' + nChild + ')').click(function () {
            var opacity;
            for (var i = 1; i < 4; i++) {
                if (i == nChild)
                    opacity = '1';
                else
                    opacity = '0';
                $('.p3-img' + i).css('opacity', opacity);
            }
            $(this).toggleClass('active').siblings().removeClass('active');
        });
    }

    function toggleOpacityResp(nChild) {
        $('ul.p3-list li:nth-child(' + nChild + ')').click(function () {
            $('#img' + nChild).css('opacity', '1');
            $('#img' + nChild).css('visibility', 'visible');
        });
    }
    for (var j = 1; j < 4; j++) {
        toggleOpacity(j);
    }
    for (var j = 1; j < 4; j++) {
        toggleOpacityResp(j);
    }



    // Image Gallery
    $("ul.flex1__links li").click(function () {
        var i = $(this).index();
        $('.f1-img').hide(600);
        $('.f1-img:nth-of-type(' + (i + 1) + ')').show(600);
        $('ul.flex1__links li').removeClass('active');
        $(this).addClass('active');
    });

    $(".f1-img").hover(function () {
        $(this).find('.l4-link-container').show();
    }, function () {
        $(this).find('.l4-link-container').hide();
    });

    $(".f1-img-close").click(function () {
        $(this).parent().fadeOut(600);
    });

    // width decider
    var sWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if (parseInt(sWidth) >= 1140) {
        $('.pb--wrapper').removeClass('pb--mobile');
        $('.pb--wrapper').addClass('pb--desktop');
    } else {
        $('.pb--wrapper').removeClass('pb--desktop');
        $('.pb--wrapper').addClass('pb--mobile');
    }

    // Plan Builder
    // desktop
    $(".pb--desktop .pb--product-top-open").click(function () {
        $(this).parent('.pb--product-top-buttons').parent('header').next('section.pb--hide').slideToggle(600);
        $(this).hide();
        $(this).next('button').show();
    });
    $(".pb--product-top-close").click(function () {
        $(this).parent('.pb--product-top-buttons').parent('header').next('section.pb--hide').slideToggle(600);
        $(this).hide();
        $(this).prev('button').show();
    });

    //Auto scroll discover to bottom
    $(".pb--desktop .pb--product-top-open.pb-discover-to-bottom").click(function () {
        $(".pb--left").animate({
            scrollTop: $(
                '.pb--left').get(0).scrollHeight
        }, 600);
    });

    $(".pb--desktop a.pb--product-see-features, .pb--desktop .pb--product-top-open").click(function () {
        var i = $(this).parent().parent().parent().index();
        $('.pb--features').hide();
        $('.pb--features:nth-of-type(' + (i + 2) + ')').fadeIn();
    });


    // mobile
    $(".pb--mobile .pb--product-top-open").click(function () {
        $(this).parent('.pb--product-top-buttons').parent('header').next('section').slideToggle(600);
        $(this).parent('.pb--product-top-buttons').parent('header').parent('.pb--product').find('.pb--feature').slideUp();
    });

    $(".pb--mobile .pb--product-see-features").click(function () {
        $(this).parent('.pb--product-top-buttons').parent('header').parent('.pb--product').find('.pb--feature').slideToggle(600);
        $(this).parent('.pb--product-top-buttons').parent('header').parent('.pb--product').find('.pb--hide').slideUp();
    });

    // Prospect calculator + slider
    function prospectSlider(el, v, prospectStr, page) {
        var prospectArray = JSON.parse(prospectStr);
        var prospectLeads = 0;
        var prospectCost = 0;
        var i = 0;
        for (var key in prospectArray) {
            if (i == v) {
                prospectLeads = key;
                prospectCost = prospectArray[key];
                break;
            }
            i++;
        }
        //bold text
        el.parents('ul').find('li').css('font-weight', 'normal');
        el.parents('ul').find('li:nth-child(' + (v + 2) + ')').css('font-weight', 'bold');
        if (page == '1') { //page view
            $('.pc-d1').find('dd:nth-of-type(1) span').text('$' + prospectCost);
            $('.pc-d1').find('dd:nth-of-type(2)').text(prospectLeads + ' leads per month');
            $('.pc-d2').find('dd:nth-of-type(1) span').text('$' + (prospectCost * 9 / 10).toFixed(0));
            $('.pc-d2').find('dd:nth-of-type(3)').html('<span>' + prospectLeads + '</span> ' + (prospectLeads * 12 / 10) + ' leads per month');
            $('.pc-d3').find('dd:nth-of-type(1) span').text('$' + (prospectCost * 8 * 12 / 10).toFixed(0));
            $('.pc-d3').find('dd:nth-of-type(3)').html('<span>' + prospectLeads + '</span> ' + (prospectLeads * 15 / 10) + ' leads per month');
            $('.pc-d3').find('dd:nth-of-type(4)').text((prospectLeads * 15 * 12 / 10) + ' credits preloaded');
        } else { //plans view
            $('#prospect-cost-1').text('$' + prospectCost);
            $('#prospect-leads-1').text(prospectLeads);
            $('#prospect-cost-2').text('$' + (prospectCost * 9 / 10).toFixed(0));
            $('#prospect-leads-2').text(prospectLeads * 12 / 10);
            $('#prospect-leads-2').parent('li').find('span').text(prospectLeads);
            $('#prospect-cost-3').text('$' + (prospectCost * 8 * 12 / 10).toFixed(0));
            $('#prospect-leads-4').text(prospectLeads * 15 / 10);
            $('#prospect-leads-4').parent('li').find('span').text(prospectLeads);
            $('#prospect-leads-3').text(prospectLeads * 15 * 12 / 10);
            //selected box
            var buyBox = el.parents('.pb--product-layout').find('.pb--pricing');
            if (buyBox.is(':visible')) {
                var thisEl = buyBox.parent().find('.pb--product-box-active').attr('data-id');
                planSelect(buyBox, thisEl, 'prospect');
            }
        }
    }
    //plans slider
    $(function () {
        $("#prospect-slider").slider({
            value: 0,
            min: 0,
            max: 5,
            step: 1,
            slide: function (event, ui) {
                prospectSlider($(this), ui.value, prospectString, '0');
            }
        });
    });
    //page slider
    $(function () {
        $("#prospect-slider-page").slider({
            value: 0,
            min: 0,
            max: 5,
            step: 1,
            slide: function (event, ui) {
                prospectSlider($(this), ui.value, prospectString, '1');
            }
        });
    });
    // Campaign calculator + slider + switch
    function campaignSlider(el, v, campaignStr, switchId, page) {
        var campaignArray = JSON.parse(campaignStr);
        var campaignLeads = 0;
        var campaignCost1 = 0;
        var campaignCost2 = 0;
        var campaignCycle = ((switchId == '1') ? 'yearly' : 'monthly');
        var i = 0;
        for (var key in campaignArray) {
            if (i == v) {
                campaignLeads = key;
                campaignCost1 = ((switchId == '1') ? ((campaignArray[key][0] * 8 * 12 / 10).toFixed(1)) : campaignArray[key][0]);
                campaignCost2 = ((switchId == '1') ? ((campaignArray[key][1] * 8 * 12 / 10).toFixed(1)) : campaignArray[key][1]);
                break;
            }
            i++;
        }
        //bold text
        el.parents('ul').find('li').css('font-weight', 'normal');
        el.parents('ul').find('li:nth-child(' + (v + 2) + ')').css('font-weight', 'bold');
        //both views
        $('.campaign-leads-1').text(campaignLeads);
        $('#campaign-cost-1').text('$' + campaignCost1);
        $('#campaign-cost-2').text('$' + campaignCost2);
        if (page == '1') { //page view
            $('.b2-price2').find('label').text(campaignCycle);
        } else { //plans view
            $('.pb--small-box-subtitle').find('label').text(campaignCycle);
            //selected box
            var buyBox = el.parents('.pb--product-layout').find('.pb--pricing');
            if (buyBox.is(':visible')) {
                var thisEl = buyBox.parent().find('.pb--product-box-active').attr('data-id');
                planSelect(buyBox, thisEl, 'campaign');
            }
        }
    }
    //switch
    $("#campaign-switch").click(function () {
        if ($(this).attr('data-id') == '0') { //from yearly to monthly
            $(this).text('Switch to monthly billing');
            $(this).attr('data-id', '1');
        } else { //from monthly to yearly
            $(this).text('Switch to yearly billing and Save 20%');
            $(this).attr('data-id', '0');
        }
        if ($(this).hasClass('switch-page')) //page
            campaignSlider($("#campaign-slider-page"), $("#campaign-slider-page").slider("option", "value"), campaignString, $(this).attr('data-id'), '1');
        else //plans
            campaignSlider($("#campaign-slider"), $("#campaign-slider").slider("option", "value"), campaignString, $(this).attr('data-id'), '0');
    });
    //plans slider
    $(function () {
        $("#campaign-slider").slider({
            value: 0,
            min: 0,
            max: 6,
            step: 1,
            slide: function (event, ui) {
                campaignSlider($(this), ui.value, campaignString, $("#campaign-switch").attr('data-id'), '0');
            }
        });
    });
    //page slider
    $(function () {
        $("#campaign-slider-page").slider({
            value: 0,
            min: 0,
            max: 6,
            step: 1,
            slide: function (event, ui) {
                campaignSlider($(this), ui.value, campaignString, $("#campaign-switch").attr('data-id'), '1');
            }
        });
    });
    // Discover calculator + slider
    function discoverSlider(el, v, discoverStr) {
        var discoverArray = JSON.parse(discoverStr);
        var discoverLeads = 0;
        var discoverCost = 0;
        var i = 0;
        for (var key in discoverArray) {
            if (i == v) {
                discoverLeads = key;
                discoverCost = discoverArray[key];
                break;
            }
            i++;
        }
        el.parents('ul').find('li').css('font-weight', 'normal');
        el.parents('ul').find('li:nth-child(' + (v + 2) + ')').css('font-weight', 'bold');
        $('#discover-cost-1').text('$' + discoverCost);
        $('#discover-leads-1, #discover-leads-2').text(discoverLeads);
        $('#discover-cost-2').text('$' + (discoverCost * 8 * 12 / 10).toFixed(0));
        //selected box
        var buyBox = el.parents('.pb--product-layout').find('.pb--pricing');
        if (buyBox.is(':visible')) {
            var thisEl = buyBox.parent().find('.pb--product-box-active').attr('data-id');
            planSelect(buyBox, thisEl, 'discover');
        }
    }
    $(function () {
        $("#discover-slider").slider({
            value: 0,
            min: 0,
            max: 3,
            step: 1,
            slide: function (event, ui) {
                discoverSlider($(this), ui.value, discoverString);
            }
        });
    });
    // Plan builder show Buy Now row
    $(".pb--product-box").click(function () {
        $(this).addClass('pb--product-box-active');
        $('.pb--product-box-active').not(this).removeClass('pb--product-box-active');
        var buyBox = $(this).parent('.pb--product-layout').find('.pb--pricing');
        buyBox.slideDown(600);
        var thisEl = $(this).attr('data-id');
        var boxEl = buyBox.find('button').attr('id').replace('show_', '');
        planSelect(buyBox, thisEl, boxEl);
    });
    // Calculate on seats blur
    $(".pb--pricing-field").blur(function () {
        var buyBox = $(this).parents('.pb--product-layout').find('.pb--pricing');
        var thisEl = $(this).val();
        var boxEl = $(this).attr('id').replace('select_', '');
        if (boxEl == 'seats') {
            thisEl += '-' + parseInt($(this).parents('article.pb--product').find('.pb--product-box-active').attr('data-id'));
        }
        planSelect(buyBox, thisEl, boxEl);
    });
    // Use arrows to add seats
    $(".field-add-remove img").click(function () {
        var buyBox = $(this).parents('.pb--product-layout').find('.pb--pricing');
        var thisEl = buyBox.find('.pb--pricing-field').val();
        if ($(this).hasClass('add')) {
            buyBox.find('.pb--pricing-field').val(parseInt(thisEl) + 1);
        } else if (parseInt(thisEl) > 1) {
            buyBox.find('.pb--pricing-field').val(parseInt(thisEl) - 1);
        }
        thisEl = buyBox.find('.pb--pricing-field').val();
        var boxEl = buyBox.find('.pb--pricing-field').attr('id').replace('select_', '');
        if (boxEl == 'seats') {
            thisEl += '-' + parseInt($(this).parents('article.pb--product').find('.pb--product-box-active').attr('data-id'));
        }
        planSelect(buyBox, thisEl, boxEl);
    });

    function planSelect(buyBox, thisPlan, boxPlan) {
        var creditsPlan = $('#' + boxPlan + '-leads-1').text();
        var dataPlan = parseInt(thisPlan) - 1;
        var prodKey = '';
        var priceKey = '';
        //var prod = boxPlan.charAt(0).toUpperCase() + boxPlan.slice(1) + ' (' + creditsPlan + ')';
        var productsArray = JSON.parse(stripeProducts);
        var productDetails = [];
        for (var key in productsArray) {
            productDetails = productsArray[key];
            if (productDetails.type == boxPlan && productDetails.credits == creditsPlan) {
                prodKey = key;
                priceKey = productDetails.prices[dataPlan];
            }
        }
        if (boxPlan == 'prospect') {
            buyBox.find('span b').text($('#prospect-leads-' + thisPlan).text() + ' leads');
            buyBox.find('span').find('label').text('billed ' + ((thisPlan == '3') ? 'yearly' : 'monthly'));
            buyBox.find('span .pb--pricing-sum').text($('#prospect-cost-' + thisPlan).text());
        } else if (boxPlan == 'engage') {
            buyBox.find('input[type="text"]').val($('#engage-leads-' + thisPlan).text());
            buyBox.find('span .pb--pricing-sum').text('$' + parseInt($('#engage-cost-' + thisPlan).text().replace('$', '')) * 12);
        } else if (boxPlan == 'seats') {
            var engageCosts = thisPlan.split('-');
            var engageCost = parseInt($('#engage-cost-' + engageCosts[1]).text().replace('$', '')) * 12;
            if (parseInt(engageCosts[0])) {
                var seatIndex = engageCosts[1] - 1;
                engageCost += (parseInt(engageCosts[0]) - $('#leads_seats').val().split('-')[seatIndex]) * $('#leads_costs').val().split('-')[seatIndex];
            }
            buyBox.find('span .pb--pricing-sum').text('$' + engageCost);
        } else if (boxPlan == 'ai') {
            if (parseInt(thisPlan)) {
                var aiCosts = JSON.parse($('#leads_ai').val());
                var aiCost = 0;
                for (var i = 0; i < aiCosts.length; i++) {
                    if (parseInt(thisPlan) < parseInt(aiCosts[i][0])) {
                        aiCost = aiCosts[i][1];
                        break;
                    }
                }
                buyBox.find('span .pb--pricing-sum').text('$' + parseInt(thisPlan) * aiCost);
            }
        } else if (boxPlan == 'campaign') {
            buyBox.find('span b').text($('#campaign-leads-1').text() + ' contacts');
            buyBox.find('span').find('label').text('billed ' + (($("#campaign-switch").attr('data-id') == '1') ? 'yearly' : 'monthly'));
            buyBox.find('span .pb--pricing-sum').text($('#campaign-cost-' + thisPlan).text());
        } else if (boxPlan == 'discover') {
            buyBox.find('span b').text($('#discover-leads-' + thisPlan).text() + ' leads');
            buyBox.find('span').find('label').text('billed ' + ((thisPlan == '2') ? 'yearly' : 'monthly'));
            buyBox.find('span .pb--pricing-sum').text($('#discover-cost-' + thisPlan).text());
        }
        $('#product_' + boxPlan).val(prodKey);
        $('#price_' + boxPlan).val(priceKey);
    }

    //Calendly buttons
    $("#video-show").click(function () {
        $('.video-show').fadeIn(500);
        $('.calendly-show').hide();
    });
    $("#calendly-show").click(function () {
        $('.calendly-show').fadeIn(500);
        $('.video-show').hide();
    });


    //FAQ
    $("ul.faq li a.toggle.open").click(function () {
        $('.faq-answers').slideUp(600);
        $('.close').hide();
        $('.open').show();
        $(this).parent().find('.faq-answers').slideDown(600);
        $(this).hide();
        $(this).next('a').show();
    });
    $("ul.faq li a.toggle.close").click(function () {
        $(this).parent().find('.faq-answers').slideUp(600);
        $(this).hide();
        $(this).prev('a').show();
    });

    //Home Products
    $(".ps-name").click(function () {
        $(this).next('article').slideToggle(600);
        $(this).toggleClass('opened');
    });

    //Typing  effect
    var TxtType = function (el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function () {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function () {
            that.tick();
        }, delta);
    };

    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);


    $(".a2-list4 li").click(function () {
        var i = $(this).index();
        $('.a2-list3 li').hide();
        $('.a2-list3 li:nth-of-type(' + (i + 1) + ')').fadeIn();
        $('.a2-list4 li').removeClass('on');
        $(this).addClass('on');
    });


    $(".g7-list1 li").click(function () {
        var i = $(this).index();
        $('.g7-list2 li').hide();
        $('.g7-list2 li:nth-of-type(' + (i + 1) + ')').fadeIn();
        $('.g7-list1 li').removeClass('active');
        $(this).addClass('active');
    });


}

// pricing_nav tabs start 

$('.pricing_nav li a').on('click', function () {
    var target = $(this).attr('data-rel');
    $('.pricing_nav li a').removeClass('active');
    $(this).addClass('active');
    $("#" + target).fadeIn('slow').siblings(".tab-box").hide();
    return false;
});
// pricing_nav tabs end

// pricing Month Yearly start 
// $('.pricingMY span').on('click', function () {
//     var target = $(this).attr('data-rel');
//     $('.pricingMY span').removeClass('active');
//     $(this).addClass('active');
//     $("#" + target).fadeIn('slow').siblings(".tab-box").hide();
//     return false;
// });

$('.pricingMY span').on('click', function () {
    var targetClass = $(this).attr('data-target-class');
    $('.pricingMY span').removeClass('active');
    $(this).addClass('active');
    $('.' + targetClass).fadeIn('slow').siblings(".tab-box").hide();
    return false;
});
// pricing Month Yearly end

// pricing changes on monthly and yearly start

//  make unique checklist 

// for Solo montthly
$('select[name="monthlyListSolo1"], select[name="monthlyListSolo2"]').on('change', function () {
    // Get the selected value
    var selectedValue = $(this).val();
    // Update the other list
    $('select[name="monthlyListSolo1"], select[name="monthlyListSolo2"]').not(this).val(selectedValue).trigger('custom-change');
});

// Listen for custom change events on both lists
$('select[name="monthlyListSolo1"], select[name="monthlyListSolo2"]').on('custom-change', function () {
    // Get the selected value
    var selectedValue = $(this).val();
    // Update the other list
    $('select[name="monthlyListSolo1"], select[name="monthlyListSolo2"]').not(this).val(selectedValue);
});

// for Pro montthly
$('select[name="monthlyListPro1"], select[name="monthlyListPro2"]').on('change', function () {
    // Get the selected value
    var selectedValue = $(this).val();
    // Update the other list
    $('select[name="monthlyListPro1"], select[name="monthlyListPro2"]').not(this).val(selectedValue).trigger('custom-change');
});

// Listen for custom change events on both lists
$('select[name="monthlyListPro1"], select[name="monthlyListPro2"]').on('custom-change', function () {
    // Get the selected value
    var selectedValue = $(this).val();
    // Update the other list
    $('select[name="monthlyListPro1"], select[name="monthlyListPro2"]').not(this).val(selectedValue);
});

// for Solo yearly
$('select[name="yearlyListSolo1"], select[name="yearlyListSolo2"]').on('change', function () {
    // Get the selected value
    var selectedValue = $(this).val();
    // Update the other list
    $('select[name="yearlyListSolo1"], select[name="yearlyListSolo2"]').not(this).val(selectedValue).trigger('custom-change');
});

// Listen for custom change events on both lists
$('select[name="yearlyListSolo1"], select[name="yearlyListSolo2"]').on('custom-change', function () {
    // Get the selected value
    var selectedValue = $(this).val();
    // Update the other list
    $('select[name="yearlyListSolo1"], select[name="yearlyListSolo2"]').not(this).val(selectedValue);
});

// for Pro montthly
$('select[name="yearlyListPro1"], select[name="yearlyListPro2"]').on('change', function () {
    // Get the selected value
    var selectedValue = $(this).val();
    // Update the other list
    $('select[name="yearlyListPro1"], select[name="yearlyListPro2"]').not(this).val(selectedValue).trigger('custom-change');
});

// Listen for custom change events on both lists
$('select[name="yearlyListPro1"], select[name="yearlyListPro2"]').on('custom-change', function () {
    // Get the selected value
    var selectedValue = $(this).val();
    // Update the other list
    $('select[name="yearlyListPro1"], select[name="yearlyListPro2"]').not(this).val(selectedValue);
});



$(document).ready(function () {
    // monthly 
    $('.soloPlanM .price_picklist').on('change', function () {
        var price_picklist_value = $(this).val();
        var priceTitle = $('.soloPlanM .priceTitle');

        // Update priceTitle based on the selected value
        if (price_picklist_value == 1) {
            priceTitle.text('$39');
        } else if (price_picklist_value == 2) {
            priceTitle.text('$79');
        }
    });


    // yearly
    $('.soloPlanY .price_picklist').on('change', function () {
        var price_picklist_value = $(this).val();
        var priceTitle = $('.soloPlanY .priceTitle');

        // Update priceTitle based on the selected value
        if (price_picklist_value == 1) {
            priceTitle.text('$566');
        } else if (price_picklist_value == 2) {
            priceTitle.text('$950');
        }
    });
    // monthly 
    $('.proPlanM .price_picklist').on('change', function () {
        var price_picklist_value = $(this).val();
        var priceTitle = $('.proPlanM .priceTitle');
        if (price_picklist_value == 1) {
            priceTitle.text('$139');
        } else if (price_picklist_value == 2) {
            priceTitle.text('$179');
        } else if (price_picklist_value == 3) {
            priceTitle.text('$229');
        } else if (price_picklist_value == 4) {
            priceTitle.text('$259');
        }
    });
    // yearly
    $('.proPlanY .price_picklist').on('change', function () {
        var price_picklist_value = $(this).val();
        var priceTitle = $('.proPlanY .priceTitle');
        if (price_picklist_value == 1) {
            priceTitle.text('$1526');
        } else if (price_picklist_value == 2) {
            priceTitle.text('$2390');
        } else if (price_picklist_value == 3) {
            priceTitle.text('$3446');
        } else if (price_picklist_value == 4) {
            priceTitle.text('$3830');
        }
    });
    // emailCredits
    $('.emailCredits .sod-list-drop').on('change', function () {
        var price_picklist_value = $(this).val();
        var priceTitle = $('.emailCredits .sod-list-price b');
        if (price_picklist_value == 1) {
            priceTitle.text('$25');
        } else if (price_picklist_value == 2) {
            priceTitle.text('$45');
        } else if (price_picklist_value == 3) {
            priceTitle.text('$200');
        } else if (price_picklist_value == 4) {
            priceTitle.text('$350');
        }
    });
    // voiceCredits
    $('.voiceCredits .sod-list-drop').on('change', function () {
        var price_picklist_value = $(this).val();
        var priceTitle = $('.voiceCredits .sod-list-price b');
        if (price_picklist_value == 1) {
            priceTitle.text('$40');
        } else if (price_picklist_value == 2) {
            priceTitle.text('$120');
        } else if (price_picklist_value == 3) {
            priceTitle.text('$250');
        }
    });
    //   // voiceCredits
    //     $('.voiceCredits .sod-list-drop').on('change', function() {
    //       var price_picklist_value = $(this).val();
    //       var priceTitle = $('.voiceCredits .sod-list-price b');
    //       if (price_picklist_value == 1) {
    //         priceTitle.text('$40');
    //       } else if (price_picklist_value == 2) {
    //         priceTitle.text('$120');
    //       } else if (price_picklist_value == 3) {
    //         priceTitle.text('$250');
    //       }
    //     });
});
// pricing changes on monthly and yearly end