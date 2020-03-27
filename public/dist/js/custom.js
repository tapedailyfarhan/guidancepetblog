$(function () {
    "use strict";

    // Feather Icon Init Js
    feather.replace();

    // this is for close icon when navigation open in mobile view
    $(".searchtoggler").on('click', function () {
        $(".mobile-search").toggleClass("open");
    });

    $(".sidebartoggler").on('click', function () {
        $("#main-wrapper").addClass("show-sidebar");
    });

    $(".sidebar-toggle").on('click', function () {
        $("#main-wrapper").removeClass("show-sidebar");
    });

    // ==============================================================
    //tooltip
    // ==============================================================
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    // ==============================================================
    //Popover
    // ==============================================================
    $(function () {
        $('[data-toggle="popover"]').popover()
    })

    // ==============================================================
    // Perfact scrollbar
    // ==============================================================
    $('.scrollable').perfectScrollbar({
        wheelPropagation: !0
    });

    // ==============================================================
    // Resize all elements
    // ==============================================================
    $("body, .page-wrapper").trigger("resize");
    $(".page-wrapper").delay(20).show();

    $(document).on('click', '.mega-menu', function (e) {
        e.stopPropagation()
    });

    // For Custom File Input
    $('.custom-file-input').on('change', function () {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
});