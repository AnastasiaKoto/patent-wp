document.addEventListener("DOMContentLoaded", function (event) {
    jQuery(function ($) {
        $('.section-mkty-area-item').on('mouseenter', function(){
            if($('.calculator') && window.innerWidth > 768) {
                var linkPosition = $(this).position();
                var popapHeight = $('.section-mkty__tabs').outerHeight();

                $(".section-mkty-area-item").each(function (i, item) {

                    $(item).attr("href", "#" + $(item).attr("data-target"));
                    if ($(item).hasClass("section-mkty-area-item_active")) {
                        let id = $(item).attr("data-target");
                        $("#" + id).addClass("section-mkty-tabs-item_active");

                    }
                });

                $(".section-mkty-tabs-item").removeClass("section-mkty-tabs-item_active");
                $(".section-mkty-area-item").removeClass("section-mkty-area-item_active");
                $(this).addClass("section-mkty-area-item_active");
                let id = $(this).attr("data-target");
                $("#" + id).addClass("section-mkty-tabs-item_active");

                $('.section-mkty__tabs').css({
                    position: 'absolute',
                    top: linkPosition.top - popapHeight -10,
                    left: linkPosition.left,
                    opacity: '1',
                    transition: 'all .3s ease',
                    zIndex: '10' 
                });
            }
        });
    })
})