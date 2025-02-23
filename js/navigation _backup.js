//Navigation
document.addEventListener("DOMContentLoaded", function (event) {

    feather.replace(); // Init Feather icon set

    const sectionEls = document.querySelectorAll('.section');
    const headerEl = document.querySelector('.header');
    const navLinkEls = document.querySelectorAll('.nav-link');
    const popoverEl = document.querySelector('.popover');
    const contentEl = document.querySelector('.content');
    const backgroundEl = document.querySelector('.background');

    const sections = ['platform', 'solutions', 'plans', 'services', 'partners', 'resources'];

    // TODO: generate on the fly
    const dimensions = {
        platform: {
            width: 740,
            height: 400,
            x: 0
        },
        solutions: {
            width: 740,
            height: 360,
            x: 100
        },
        plans: {
            width: 0,
            height: 0,
            x: 200
        },
        /*services: { width: 390, height: 250, x: 300 },*/
        partners: {
            width: 0,
            height: 0,
            x: 400
        },
        resources: {
            width: 1130,
            height: 370,
            x: -200
        }
    }

    const popoverLeft = popoverEl.getBoundingClientRect().x;

    navLinkEls.forEach((navLink) => {
        let section = navLink.getAttribute('data-nav');
        //console.log(dimensions);
        let rect = navLink.getBoundingClientRect();
        dimensions[section].arrowX = rect.left + (rect.width / 2) - popoverLeft;
    });



    function showSection(section) {
        popoverEl.classList.add('open');
        sectionEls.forEach(el => el.classList.remove('active'));
        sectionEls.forEach(el => el.classList.remove('active2'));
        document.querySelector(`.section-${section}`).classList.add('active');

        /*if (section == 'platform') {
            setTimeout(function () {
                document.querySelector('.section-${section} span.drop-link').classList.add('active2');
            }, 1000);
        }*/




        // Resize and position background
        backgroundEl.style.transform = `
        translateX(${ dimensions[section].x }px)
        scaleX(${ dimensions[section].width / dimensions['platform'].width })
        scaleY(${ dimensions[section].height / dimensions['platform'].height })
      `;

        // Resize and position content
        contentEl.style.width = dimensions[section].width + 'px';
        contentEl.style.height = dimensions[section].height + 'px';

        contentEl.style.transform = `translateX(${ dimensions[section].x }px)`

        // size container? If we remove from CSS and do everything dynamically.
    }


    navLinkEls.forEach((navLink) => {
        navLink.addEventListener('mouseenter', (event) => {
            let targetPopover = event.target.getAttribute('data-nav');
            showSection(targetPopover);
        });
    });

    headerEl.addEventListener('mouseleave', () => {
        popoverEl.classList.remove('open');
    })
});

//Main menu - Platform hover
$(".drop2-menu li a").hover(function() {
    var i = $(this).parent().index();
    $('.drop2-menu-product').hide();
    $('.drop2-menu-product:nth-of-type(' + (i+2) + ')').show();
    $('.drop2-menu li a').removeClass('on');
    $(this).addClass('on');
}, function() {});


$(".drop2" ).mouseleave(function() {
    $('.drop2-menu-default').fadeIn();
    $('.drop2-menu-product').hide();
    $('.drop2-menu li a').removeClass('on');
    $('.drop2-menu2 li a').removeClass('on');
});


/*$( ".drop2-menu2 li a" ).hover(function() {
    var i = $(this).parent().index();
    $('.drop2-menu2-description ul').hide();
    $('.drop2-menu2-description ul:nth-of-type(' + (i+1) + ')').fadeIn();
    $('.drop2-menu2 li a').removeClass('on');
    $(this).addClass('on');
}, function() {});*/


//Mobile menu
$(".menu-mobile dl dt.mm-arrow").click(function() {
    $(this).next('dd').slideToggle(600);
    $(this).toggleClass('active open');
});

$("a.mm-anchor").click(function() {
    $('input.burger').prop('checked', false);
});

$("input.burger").click(function () {
    if ($('input.burger').is(':checked')) {
        $('nav.main').css("z-index", "99999");
    } else {
        $('nav.main').css("z-index", "9999");
    }
});




