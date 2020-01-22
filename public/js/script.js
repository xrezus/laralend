$(document).ready(function() {
    $('.headus a').click(function() {
        $.scrollTo('.BlockUs', 500);
        return false;
    });
    $('.capa a').click(function() {
        $.scrollTo('.capabil', 500);
        return false;
    });
    $('.stat a').click(function() {
        $.scrollTo('.stats', 500);
        return false;
    });
    $('.pay a').click(function() {
        $.scrollTo('.pays', 500);
        return false;
    });
    $('.login2').click(function() {
        $('#modal').arcticmodal();
        return false;
    });
    $('.connect1').click(function() {
        $('#modal').arcticmodal();
        return false;
    });
    $('.open_order').on('click', function() {
        $('.open_order').attr('onclick', 'ga ("send", "event", "add_to_cart", "add_to_cart_click");  return true;');
    });
    $('.downbtn').on('click', function() {
        $('.downbtn').attr('onclick', 'ga ("send", "event", "buy_now", "buy_now_click");  return true;');
    });
    $('.adds_item_buy_items').on('click', function() {
        $('.adds_item_buy_items').attr('onclick', 'ga ("send", "event", "buy_now", "buy_now_click"); return true;');
    });
    $('.add_item_buy_it').on('click', function() {
        $('.add_item_buy_it').attr('onclick', 'ga ("send", "event", "add_to_basket", "add_to_basket"); return true;');
    });
    $('#place_order').on('click', function() {
        $('#place_order').attr('onclick', 'ga ("send", "event", "place_order", "place_order_send"); return true;');
    });
    $('.checkout-button').on('click', function() {
        $('.checkout-button').attr('onclick', 'ga ("send", "event", "proceed_to_checkout", "proceed_to_checkout_send"); return true;');
    });
    $(function() {
        var pull = $('#pull');
        menu = $('nav ul');
        menuHeight = menu.height();
        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });
        $(window).resize(function() {
            var w = $(window).width();
            if (w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    });
    $(function() {
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 700,
            namespace: "callbacks",
            before: function() {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
    $(function() {
        $('#da-slider').cslider({
            autoplay: true,
            bgincrement: 450
        });
    });
    $(function() {
        $('#da-slider2').cslider({
            autoplay: true,
            bgincrement: 450
        });
    });
    $(function() {
        $('#da-slider1').cslider({
            autoplay: false,
            bgincrement: 450
        });
    });
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            items: 6,
            lazyLoad: true,
            autoPlay: true,
            navigation: false,
            pagination: false,
        });
    });
    $(document).ready(function() {
        $("#owl-demo3").owlCarousel({
            items: 5,
            lazyLoad: true,
            autoPlay: true,
            speed: 800,
            navigation: false,
            pagination: false,
        });
    });
    $(document).ready(function() {
        $("#owl-demod").owlCarousel({
            items: 1,
            autoPlay: true,
            lazyLoad: false,
            lazyFollow: true,
            speed: 80000,
            rewindSpeed: 100000,
            navigation: true,
            pagination: false,
            loop: true,
            lazyEffect: "fade",
            mouseDrag: false,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            transitionStyle: "fade",
            lazyEffect: "fade",
            navigationText: ["<", ">"],
        });
    });
    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
})