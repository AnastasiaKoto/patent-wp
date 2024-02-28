document.addEventListener("DOMContentLoaded", function (event) {
    jQuery(function ($) {

        /*page mktu */
        if (window.innerWidth < 768) {
            $(".section-mkty-area-item").click(function () {
                let id = $(this).attr("data-target");
                $("#"+id).find(".section-mkty-tabs-item__name").text($(this).attr("data-number"));
                $(".section-mkty-area-item").removeClass("section-mkty-area-item_active");
                $(this).addClass("section-mkty-area-item_active");
            });
            Fancybox.bind(".section-mkty-area-item", {
                dragToClose:false,
                hideScrollbar: false,
                mainClass:"modal-mkty",
                closeButton:'<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7867 1.24296C15.8544 1.17535 15.908 1.09508 15.9446 1.00674C15.9812 0.918404 16 0.823724 16 0.728108C16 0.632491 15.9812 0.537811 15.9446 0.449473C15.908 0.361135 15.8544 0.280869 15.7867 0.213258C15.7191 0.145647 15.6389 0.0920148 15.5505 0.055424C15.4622 0.0188331 15.3675 0 15.2719 0C15.1763 0 15.0816 0.0188331 14.9933 0.055424C14.9049 0.0920148 14.8247 0.145647 14.757 0.213258L8 6.97175L1.24296 0.213258C1.17535 0.145647 1.09508 0.0920148 1.00674 0.055424C0.918404 0.0188331 0.823724 7.12398e-10 0.728108 0C0.632491 -7.12398e-10 0.537811 0.0188331 0.449473 0.055424C0.361135 0.0920148 0.280869 0.145647 0.213258 0.213258C0.145647 0.280869 0.0920148 0.361135 0.055424 0.449473C0.0188331 0.537811 -7.12398e-10 0.632491 0 0.728108C7.12398e-10 0.823724 0.0188331 0.918404 0.055424 1.00674C0.0920148 1.09508 0.145647 1.17535 0.213258 1.24296L6.97175 8L0.213258 14.757C0.076711 14.8936 0 15.0788 0 15.2719C0 15.465 0.076711 15.6502 0.213258 15.7867C0.349804 15.9233 0.535002 16 0.728108 16C0.921214 16 1.10641 15.9233 1.24296 15.7867L8 9.02824L14.757 15.7867C14.8936 15.9233 15.0788 16 15.2719 16C15.465 16 15.6502 15.9233 15.7867 15.7867C15.9233 15.6502 16 15.465 16 15.2719C16 15.0788 15.9233 14.8936 15.7867 14.757L9.02824 8L15.7867 1.24296Z" fill="white"/> </svg>'
            });
            $(".section-mkty-area-item").attr("data-fancybox", "");
            $(".section-mkty-area-item").each(function (i, item) {
                let id = $(this).attr("data-target");
                $(item).attr("href", '#' + id);
            });

        }
        else {
            $(".section-mkty-area-item").each(function (i, item) {
                if ($(item).hasClass("section-mkty-area-item_active")) {
                    let id = $(item).attr("data-target");
                    $("#" + id).addClass("section-mkty-tabs-item_active");
                }
            });


            $(".section-mkty-area-item").click(function () {
                $(".section-mkty-tabs-item").removeClass("section-mkty-tabs-item_active");
                $(".section-mkty-area-item").removeClass("section-mkty-area-item_active");
                $(this).addClass("section-mkty-area-item_active");
                let id = $(this).attr("data-target");
              
                $("#" + id).addClass("section-mkty-tabs-item_active");
            });



        }


        $(window).resize(function () {
            if (window.innerWidth > 768) {
                Fancybox.unbind(".section-mkty-area-item", {});
                $(".section-mkty-area-item").click(function () {
                    $(".section-mkty-tabs-item").removeClass("section-mkty-tabs-item_active");
                    $(".section-mkty-area-item").removeClass("section-mkty-area-item_active");
                    $(".section-mkty-tabs-item").removeAttr("style");
                    $(this).addClass("section-mkty-area-item_active");
                    let id = $(this).attr("data-target");
                    $("#"+id).find(".section-mkty-tabs-item__name").text($(this).attr("data-number"));
                    $("#" + id).addClass("section-mkty-tabs-item_active");
                });
                
                $(".section-mkty-area-item").removeAttr("data-fancybox");
                $(".section-mkty-area-item").each(function (i, item) {
                    let id = $(this).attr("data-target");
                    $(item).attr("href", "javascript:void(0)");
                });
              
            }
            else {

             
                Fancybox.bind(".section-mkty-area-item", {
                    dragToClose:false,
                    hideScrollbar: false,
                    mainClass:"modal-mkty",
                    closeButton:'<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7867 1.24296C15.8544 1.17535 15.908 1.09508 15.9446 1.00674C15.9812 0.918404 16 0.823724 16 0.728108C16 0.632491 15.9812 0.537811 15.9446 0.449473C15.908 0.361135 15.8544 0.280869 15.7867 0.213258C15.7191 0.145647 15.6389 0.0920148 15.5505 0.055424C15.4622 0.0188331 15.3675 0 15.2719 0C15.1763 0 15.0816 0.0188331 14.9933 0.055424C14.9049 0.0920148 14.8247 0.145647 14.757 0.213258L8 6.97175L1.24296 0.213258C1.17535 0.145647 1.09508 0.0920148 1.00674 0.055424C0.918404 0.0188331 0.823724 7.12398e-10 0.728108 0C0.632491 -7.12398e-10 0.537811 0.0188331 0.449473 0.055424C0.361135 0.0920148 0.280869 0.145647 0.213258 0.213258C0.145647 0.280869 0.0920148 0.361135 0.055424 0.449473C0.0188331 0.537811 -7.12398e-10 0.632491 0 0.728108C7.12398e-10 0.823724 0.0188331 0.918404 0.055424 1.00674C0.0920148 1.09508 0.145647 1.17535 0.213258 1.24296L6.97175 8L0.213258 14.757C0.076711 14.8936 0 15.0788 0 15.2719C0 15.465 0.076711 15.6502 0.213258 15.7867C0.349804 15.9233 0.535002 16 0.728108 16C0.921214 16 1.10641 15.9233 1.24296 15.7867L8 9.02824L14.757 15.7867C14.8936 15.9233 15.0788 16 15.2719 16C15.465 16 15.6502 15.9233 15.7867 15.7867C15.9233 15.6502 16 15.465 16 15.2719C16 15.0788 15.9233 14.8936 15.7867 14.757L9.02824 8L15.7867 1.24296Z" fill="white"/> </svg>'
                });
                $(".section-mkty-area-item").attr("data-fancybox", "");
                $(".section-mkty-area-item").each(function (i, item) {
                    let id = $(this).attr("data-target");
                    $(item).attr("href", '#' + id);
                });
              
            }
        });


        $(".dropdown-mkty__header").click(function(){
            $(this).toggleClass("dropdown-mkty__header_active")
                $(this).next().slideToggle();
        });


    })


});