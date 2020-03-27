$(function () {
    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    var slidesPerPage = 4; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
        slideSpeed: 2000,
        nav: true,
        center: true,
        autoplay: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        dots: false,
        loop: true,
        responsiveRefreshRate: 200,
        responsive: {
            0: {
                items: 3
            }
        }
    }).on('changed.owl.carousel', syncPosition);

    sync2
        .on('initialized.owl.carousel', function () {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: 1,
            dots: false,
            nav: false,
            center: true,
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - 1);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }

        //end block

        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });

    $('.brands-slider').owlCarousel({
        items: 5,
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: false,
        responsiveClass: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 5
            }
        }
    });
    $('.blog-slider').owlCarousel({
        loop: true,
        mouseDrag: false,
        touchDrag: false,
        autoplay: true,
        nav: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });
    $(function () {
        // 1) ASSIGN EACH 'DOT' A NUMBER
        dotcount = 1;
        $('.reviews .owl-dot').each(function () {
            $(this).addClass('dotnumber' + dotcount);
            $(this).attr('data-info', dotcount);
            dotcount = dotcount + 1;
        });
        // 2) ASSIGN EACH 'SLIDE' A NUMBER
        slidecount = 1;
        $('.reviews .owl-item').not('.cloned').each(function () {
            $(this).addClass('slidenumber' + slidecount);
            slidecount = slidecount + 1;
        });
        $('.reviews .owl-dot').each(function () {
            grab = jQuery(this).data('info');
            slidegrab = $('.slidenumber' + grab + ' img').attr('src');
            console.log(slidegrab);
            $(this).css("background-image", "url(" + slidegrab + ")");
        });
    });
});