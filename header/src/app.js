import 'bootstrap';
import './scss/app.scss';
import './scss/main.scss';
import './scss/main-responsive.scss';

import {gsap} from 'gsap';
import Typed from 'typed.js';
import imagesLoaded from 'imagesloaded';

// Load single div backgrounds
$(function () {
    var image = document.querySelectorAll('img[data-bg="true"], [data-bg="true"]');

    for (var i = 0; i < image.length; i++) {
        (function (n) {
            var img = new Image();

            img.onload = imageFound;
            img.onerror = imageNotFound;
            img.src = image[n].src;

            function imageFound() {
                image[n].parentNode.style.backgroundImage = 'url(' + img.src + ')';

                if ($(image[n]).parent().is('.bg')) {
                    $(image[n]).parent().css({
                        opacity: '1'
                    });
                }
            }

            function imageNotFound() {
                image[n].parentNode.style.backgroundColor = '#f5f5f5';
            }
        }(i));
    }
});

// Load section backgrounds
$(function () {
    var section = document.querySelectorAll('div[data-section-bg], section[data-section-bg], [data-section-bg]');

    for (var i = 0; i < section.length; i++) {
        (function (n) {
            var img = new Image();
            var sectionBG = document.createElement('div');

            sectionBG.classList.add('section-bg');

            img.onload = imageFound;
            img.onerror = imageNotFound;
            img.src = section[n].getAttribute('data-section-bg');

            function imageFound() {
                section[n].append(sectionBG);
                sectionBG.style.backgroundImage = 'url(' + img.src + ')';
            }

            function imageNotFound() {
                sectionBG.style.backgroundColor = '#f5f5f5';
            }
        }(i));
    }
});

// Expandables
$(function () {
    var elements = document.querySelectorAll('.expandable[data-expand="true"]');

    var a;

    for (var i = 0; i < elements.length; i++) {
        (function (n) {
            elements[i].children[0].onclick = function (e) {
                var that = this;

                clearTimeout(a);

                if (!that.classList.contains('is-expanded')) {

                    $(that).parents('.app-list-li').siblings().find('.expandable > div:first-of-type').removeClass('is-expanded');
                    $(that).parents('.app-list-li').siblings().find('.expandable .expandable-child').css({
                        overflow: '',
                        maxHeight: '',
                    });

                    that.classList.add('is-expanded');
                    that.nextElementSibling.style.maxHeight = that.nextElementSibling.scrollHeight + 'px';
                    a = setTimeout(function () {
                        that.nextElementSibling.style.overflow = 'visible';
                    }, 400);
                } else {
                    that.nextElementSibling.style.overflow = '';
                    that.nextElementSibling.style.maxHeight = '';
                    that.classList.remove('is-expanded');
                }
            }
        }(i));
    }

});

// Custom Dropdown
$(function () {
    var dropdown = $('.custom-dropdown'),
        trigger = $('a[data-trigger="dropdown"], [data-trigger="dropdown"], button[data-trigger="dropdown"]'),
        target;

    var a, b;

    function showNavigation(e) {
        if (!$(e.target).parents('.custom-dropdown').length) {
            e.preventDefault();
        }

        target = $(e.target).closest('.custom-dropdown-parent').find(dropdown);

        $('.custom-dropdown-parent').not($(e.target).closest('.custom-dropdown-parent')).find(dropdown).hide();
        $('.custom-dropdown-parent').not($(e.target).closest('.custom-dropdown-parent')).find(dropdown).removeClass('custom-dropdown-open');

        $(e.target).closest('.custom-dropdown-parent').siblings().find(dropdown).hide();
        $(e.target).closest('.custom-dropdown-parent').siblings().find(dropdown).removeClass('custom-dropdown-open');
        $(e.target).closest('.custom-dropdown-parent').siblings().find('> a').removeClass('custom-dropdown-is-open');

        if (!target.hasClass('custom-dropdown-open')) {
            $(e.target).closest('.custom-dropdown-parent').find(trigger).addClass('custom-dropdown-is-open');
            $(e.target).closest('li').siblings('.active').addClass('active-breadcrumb').removeClass('active');

            target.show();
            setTimeout(function () {
                target.addClass('custom-dropdown-open');
            }, 50);
        } else {
            if (trigger.is(e.target) || trigger.has(e.target).length > 0) {
                $(e.target).closest('.custom-dropdown-parent').find(trigger).removeClass('custom-dropdown-is-open');
                $('.active-breadcrumb').addClass('active').removeClass('active-breadcrumb');

                target.removeClass('custom-dropdown-open');
                setTimeout(function () {
                    target.hide();
                }, 200);
            }
        }
    }

    function hideNavigation() {
        trigger.removeClass('custom-dropdown-is-open');

        dropdown.removeClass('custom-dropdown-open');
        a = setTimeout(function () {
            dropdown.hide();
        }, 200);
    }

    $(document).on('click', function (e) {
        clearTimeout(a);
        clearTimeout(b);

        if (trigger.is(e.target) || trigger.has(e.target).length > 0 || dropdown.is(e.target) || dropdown.has(e.target).length > 0) {
            showNavigation(e);
        } else {
            hideNavigation();
        }
    });
});

// Animation timeline
$(function () {
    var elements = [
        {
            search: document.querySelectorAll('.hero-module-column')[0],
            results: document.querySelectorAll('.hero-module-column')[1],
            resultsLi: document.querySelectorAll('.app-list-li'),
            click: document.querySelectorAll('.click')[0],
            sequenceCard: document.querySelectorAll('.sequence-card'),
            notificationCard: document.querySelectorAll('.notifications-card'),
        }
    ];

    var typed, typeS = 20;

    var tl = gsap.timeline();

    imagesLoaded('#hero-home .section-bg', {background: true}, function () {
        tl.set(elements[0].search, {
            position: 'relative',
            opacity: 0,
            left: window.innerWidth / 2 - ((window.innerWidth - 1200) / 2),
            x: '-50%'
        });
        tl.set(elements[0].results, {opacity: 0});
        tl.set(elements[0].resultsLi, {opacity: 0});
        tl.set(elements[0].sequenceCard, {opacity: 0, x: -20});
        tl.set(elements[0].notificationCard, {opacity: 0, x: -20});
        tl.set(elements[0].click, {opacity: 0});
        tl.to($('.hero-module'), {opacity: 1, duration: 0.4, ease: 'none'});
        tl.to(elements[0].search, {delay: 1, opacity: 1, duration: 0.4, ease: 'none'});
        tl.to(elements[0].search, {left: 0, x: 0, duration: 1, ease: 'expo.out'}, '+=1');
        tl.call(typeStrings);
    });

    function typeStrings() {
        typed = new Typed('.typed-1', {
            strings: ['San Francisco, CA'],
            typeSpeed: typeS,
            showCursor: false,
            onComplete: function () {
                typed = new Typed('.typed-2', {
                    strings: ['Computer Software'],
                    typeSpeed: typeS,
                    showCursor: false,
                    onComplete: function () {
                        typed = new Typed('.typed-3', {
                            strings: ['10,000+'],
                            typeSpeed: typeS,
                            showCursor: false,
                            onComplete: function () {
                                typed = new Typed('.typed-4', {
                                    strings: ['1B+'],
                                    typeSpeed: typeS,
                                    showCursor: false,
                                    onComplete: function () {
                                        typed = new Typed('.typed-5', {
                                            strings: ['C-Suite'],
                                            typeSpeed: typeS,
                                            showCursor: false,
                                            onComplete: function () {
                                                typed = new Typed('.typed-6', {
                                                    strings: ['CEO'],
                                                    typeSpeed: typeS,
                                                    showCursor: false,
                                                    onComplete: function () {
                                                        tl.to(elements[0].results, {
                                                            opacity: 1,
                                                            duration: 0.4,
                                                            ease: 'none'
                                                        }, '+=0.5');
                                                        tl.to(elements[0].resultsLi, {
                                                            opacity: 1,
                                                            duration: 0.4,
                                                            stagger: 0.2,
                                                            ease: 'none',
                                                        });
                                                        tl.to(elements[0].click, {
                                                            opacity: 1,
                                                            duration: 0.4,
                                                            ease: 'none'
                                                        });
                                                        tl.call(function () {
                                                            elements[0].click.classList.add('clicked');
                                                            setTimeout(function () {
                                                                elements[0].click.classList.remove('clicked');
                                                            }, 300);
                                                            elements[0].resultsLi[4].children[0].children[0].click();
                                                        }, null, null, 2);
                                                        tl.to(elements[0].click, {
                                                            marginTop: 30,
                                                            right: 6,
                                                            duration: 1,
                                                            ease: 'expo.out'
                                                        }, '+=0.5');
                                                        tl.call(function () {
                                                            elements[0].click.classList.add('clicked');
                                                            setTimeout(function () {
                                                                elements[0].click.classList.remove('clicked');
                                                            }, 300);
                                                            elements[0].resultsLi[4].querySelector('[data-trigger="dropdown"]').click();
                                                        }, null, null, 2);
                                                        tl.to(elements[0].click, {
                                                            opacity: 1,
                                                            duration: 0.5,
                                                            onComplete: addActive
                                                        }, '+=0.5');
                                                        tl.to(elements[0].click, {
                                                            marginTop: 92,
                                                            right: -40,
                                                            duration: 1,
                                                            ease: 'expo.out'
                                                        }, '-=0.25');

                                                        function addActive() {
                                                            elements[0].resultsLi[4].querySelector('.custom-dropdown-ul li:nth-child(2)').classList.add('action');
                                                        }

                                                        tl.call(function () {
                                                            elements[0].click.classList.add('clicked');
                                                            elements[0].resultsLi[4].querySelector('[data-trigger="dropdown"]').click();
                                                            setTimeout(function () {
                                                                elements[0].click.style.opacity = '0';
                                                            }, 300);
                                                        }, null, null, 2);
                                                        tl.to(elements[0].sequenceCard, {
                                                            opacity: 1,
                                                            x: 0,
                                                            duration: 0.8,
                                                            stagger: 0.3,
                                                            ease: 'expo.out',
                                                        });
                                                        tl.to(elements[0].notificationCard, {
                                                            opacity: 1,
                                                            x: 0,
                                                            duration: 0.8,
                                                            stagger: 0.2,
                                                            ease: 'expo.out',
                                                        });
                                                    },
                                                });
                                            }
                                        });
                                    }
                                });
                            }
                        });
                    }
                });
            }
        });
    }
});