$(function () {
    /* Index Page Video Play js */
    $('.video-img').on('click', function () {
        $(this).addClass('d-none');
        $('.embed-responsive').show()
            .removeClass('d-none');
        $("video").each(function () {
            this.play()
        });
    });

    /* Cat-Category Tab js */
    $('.category-tabs a').hover(function () {
        var tabid = $(this).attr("id");
        $('.category-tabs a').removeClass("active");
        $(this).addClass("active");
        $('.category-tabs-content .tab-pane').removeClass("active");
        $('.category-tabs-content' + ' ' + '#' + tabid + '-tab').addClass("active");
    });

    /* Dog-Category Tab js */
    $('.category-tabs1 a').hover(function () {
        var tabid = $(this).attr("id");
        $('.category-tabs1 a').removeClass("active");
        $(this).addClass("active");
        $('.category-tabs-content1 .tab-pane').removeClass("active");
        $('.category-tabs-content1' + ' ' + '#' + tabid + '-tab').addClass("active");
    });

    /* Fish-Category Tab js */
    $('.category-tabs2 a').hover(function () {
        var tabid = $(this).attr("id");
        $('.category-tabs2 a').removeClass("active");
        $(this).addClass("active");
        $('.category-tabs-content2 .tab-pane').removeClass("active");
        $('.category-tabs-content2' + ' ' + '#' + tabid + '-tab').addClass("active");
    });

    /* Bird-Category Tab js */
    $('.category-tabs3 a').hover(function () {
        var tabid = $(this).attr("id");
        $('.category-tabs3 a').removeClass("active");
        $(this).addClass("active");
        $('.category-tabs-content3 .tab-pane').removeClass("active");
        $('.category-tabs-content3' + ' ' + '#' + tabid + '-tab').addClass("active");
    });

    /* Card Hover Redirect js */
    $(".anchor-card").hover(
        function () {
            $(this).addClass("hover-card");
        },
        function () {
            $(this).removeClass("hover-card");
        }
    );

    /* Mobile Sidebar Menu js init */
    $("#menu1").metisMenu();

    /* Search Form Dropdown Open/Close js */
    $(".searchform").on('click', function(event) {
        event.stopPropagation();
        $(".search-dd").show();
    });
    $(document).click(function() {
        $(".search-dd").hide();
    });

    /* Blog Page Social Nav js(onscroll) */
    $(window).on('scroll', function () {
        var windowpos = $(window).scrollTop();
        if (windowpos >= 450) {
            $('#social_side_links').css({
                position: 'fixed',
                top: '25px'
            });
        } else {
            $('#social_side_links').css({
                position: 'absolute',
                top: '6px'
            });
        }
    });
});