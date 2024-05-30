/**
    * Modal_Right
    * menu_Modal_Left
    * headerFixed
    * themesflatSearch
    * btn_switch_layout
    * menuAdminActive
    * niceSelectForm
    * bg_bottom
    * tabFooter
    * goTop
    * removePreloader
 */

(function ($) {
    "use strict";

    var menu_Modal_Left = function () {
        var menuType = "desktop";

        $(window).on("load resize", function () {
            var currMenuType = "desktop";
            var adminbar = $("#wpadminbar").height();

            if (matchMedia("only screen and (max-width: 991px)").matches) {
                currMenuType = "mobile";
            }

            if (currMenuType !== menuType) {
                menuType = currMenuType;

                if (currMenuType === "mobile") {
                    var hasChildMenu = $("#mainnav_canvas").find("li:has(ul)");
                    hasChildMenu.children("ul").hide();
                    if (hasChildMenu.find(">span").length == 0) {
                        hasChildMenu
                            .children("a")
                            .after('<span class="btn-submenu"></span>');
                    }
                    $(".btn-menu").removeClass("active");
                } else {
                    $("#header").find(".canvas-nav-wrap").removeClass("active");
                }
            }
        });

        $(".btn-menu").on("click", function (e) {
            $(this)
                .closest("#header")
                .find(".canvas-nav-wrap")
                .addClass("active");
        });

        $(".canvas-nav-wrap .overlay-canvas-nav").on("click", function (e) {
            $(this)
                .closest("#header")
                .find(".canvas-nav-wrap")
                .removeClass("active");
        });

        $(document).on(
            "click",
            "#mainnav_canvas li .btn-submenu",
            function (e) {
                $(this).toggleClass("active").next("ul").slideToggle(300);
                e.stopImmediatePropagation();
            }
        );
    };

    var Modal_Right = function() {
        const body = $('body');
        const modalMenu = $('.modal-menu-left');
        const modalMenuBody = modalMenu.children('.modal-menu__body');

        if (modalMenu.length) {
            const open = function() {
                modalMenu.addClass('modal-menu--open');
            };
            const close = function() {
                modalMenu.removeClass('modal-menu--open');
            };

            $('.modal-menu-left-btn, .span-modal-menu-left-btn').on('click', function() {
                open();
            });
            $('.modal-menu__backdrop, .modal-menu__close').on('click', function() {
                close();
            });
        }

        modalMenu.on('click', function(event) {
            const trigger = $(this);
            const item = trigger.closest('[data-modal-menu-item]');
            let panel = item.data('panel');

            if (!panel) {
                panel = item.children('[data-modal-menu-panel]').children('.modal-menu__panel');

                if (panel.length) {
                    modalMenuBody.append(panel);
                    item.data('panel', panel);
                    panel.width(); // force reflow
                }
            }

            if (panel && panel.length) {
                event.preventDefault();
            }
        });
    };

    var headerFixed = function () {
        if ($("body:not(.page-template-page-dashboard)").hasClass("header_sticky")) {
            var header = $("#header"),
                hd_height = $("#header").height(),
                injectSpace = $("<div />", { height: hd_height }).insertAfter(
                    $("#header")
                );
            injectSpace.hide();
            $(window).on("load scroll resize", function () {
                    var wpadminbar = $("#wpadminbar").height();
                    if ($(window).scrollTop() >= hd_height) {
                        header.addClass("fixed-show");
                        injectSpace.show();
                    } else {
                        header.removeClass("fixed-show");
                        injectSpace.hide();
                    }
                    if ( $(window).scrollTop() > 500 ) {
                        header.addClass('header-sticky');
                        $(".header-sticky").css("top", wpadminbar);
                    } else {
                        $(".header-sticky").removeAttr("style");
                        header.removeClass('header-sticky');
                    }
            });
        }
    };

    var themesflatSearch = function () {
        $(document).on("click", function (e) {
            var clickID = e.target.id;
            if (clickID != "s") {
                $(".top-search").removeClass("show");
                $(".show-search").removeClass("active");
            }
        });

        $(".show-search").on("click", function (event) {
            event.stopPropagation();
        });

        $(".search-form").on("click", function (event) {
            event.stopPropagation();
        });

        $(".show-search").on("click", function (e) {
            if (!$(this).hasClass("active")) $(this).addClass("active");
            else $(this).removeClass("active");
            e.preventDefault();

            if (!$(".top-search").hasClass("show"))
                $(".top-search").addClass("show");
            else $(".top-search").removeClass("show");
        });
    };

    var goTop = function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                $(".go-top").addClass("show");
            } else {
                $(".go-top").removeClass("show");
            }
        });
        $(".go-top").on("click", function (event) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, 0);
        });
    };

    var parallax_effect = function () {
        if ($(".parallax").length > 0) {
            $(".parallax").parallax("50%", -0.5);
        }
    };

    var filterPortfolioIsotope = function() { 
        if ($(".themesflat-project-taxonomy.pj-page").length > 0) {
            $(window).on("load", function () {
                if ( $( '.container-filter' ).hasClass('show-filter') ) {
                    if ( $().isotope ) {           
                        var $container = $('.container-filter');
                        $container.imagesLoaded(function(){
                            $container.isotope({
                                itemSelector: '.item',
                                transitionDuration: '1s',
                            });
                        });
        
                        $('.posttype-filter li').on('click',function() {                           
                            var selector = $(this).find("a").attr('data-filter');
                            $('.posttype-filter li').removeClass('active');
                            $(this).addClass('active');
                            $container.isotope({ filter: selector });
                            return false;
                        });            
                    };
                };        
            });
        }
    };

    var footerFixed = function () {
        if ($(".footer-fixed").length > 0) {
            $("#main-content").addClass('fixed-footer-content');
            $(window).on("load scroll resize", function () {
                var footer = $(".footer-fixed").height();
                $("#main-content").css("margin-bottom", footer + 'px');
            });
        }
    };

    // Mouse Custom Cursor
    var custom_cursor = function() { 
        var tfCursor = jQuery(".tfmouseCursor");
        if (tfCursor.length) {
        if ($("body")) {
            const e = document.querySelector(".cursor-inner"),
            t = document.querySelector(".cursor-outer");
            let n,
            i = 0,
            o = !1;
            (window.onmousemove = function (s) {
            o ||
                (t.style.transform =
                "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                (e.style.transform =
                "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                (n = s.clientY),
                (i = s.clientX);
            }),
            $("body").on("mouseenter", "button, a, .cursor-pointer", function () {
                e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
            }),
            $("body").on("mouseleave", "button, a, .cursor-pointer", function () {
                ($(this).is("a", "button") &&
                $(this).closest(".cursor-pointer").length) ||
                (e.classList.remove("cursor-hover"),
                t.classList.remove("cursor-hover"));
            }),
            (e.style.visibility = "visible"),
            (t.style.visibility = "visible");
        }
        }
    }

    var removePreloader = function () {
        $("#preloader").fadeOut("slow", function () {
            setTimeout(function () {
                $("#preloader").remove();
            }, 1000);
        });
    };


    // Dom Ready
    $(function () {
        menu_Modal_Left();
        Modal_Right();
        headerFixed();
        themesflatSearch();
        filterPortfolioIsotope();
        parallax_effect();
        footerFixed();
        custom_cursor();
        goTop();
        removePreloader();
    });
})(jQuery);
