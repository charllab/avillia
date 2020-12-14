jQuery(function () {


    // make it rain
    let url = location.href.replace(/\/$/, "");

    if (location.hash) {
        const hash = url.split("#");
        $('#myTab a[href="#' + hash[1] + '"]').tab("show");
        url = location.href.replace(/\/#/, "#");
        history.replaceState(null, null, url);
        setTimeout(() => {
            $(window).scrollTop(0);
        }, 400);
    }

    $('a[data-toggle="tab"]').on("click", function () {
        let newUrl;
        const hash = $(this).attr("href");
        if (hash == "#home") {
            newUrl = url.split("#")[0];
        } else {
            newUrl = url.split("#")[0] + hash;
        }
        newUrl += "/";
        history.replaceState(null, null, newUrl);
    });


    // remove click on dropdown on mobile expand

    if ($(window).width() < 1440) {

        jQuery('li.menu-item.dropdown').click(function (event) {
            event.stopPropagation();
        });

        //alert('Less than 1440');
    } else {
        //alert('More than 1440');
    }

    // full bio click
    jQuery('.js-bio__btn').on('click', function () {
        var bios = jQuery('.js-bio-col--target');
        bios.removeClass('bio-block-expanded');
        jQuery.each($('.js-bio-col--target'), function(i, bio) {
            var temp = jQuery(bio).data('counter');
            jQuery(bio).removeClass('order-lg-' + (temp - 2));
            if (!jQuery(bio).hasClass('order-lg-' + temp))
                jQuery(bio).addClass('order-lg-' + temp);
        });
        var thisBio = jQuery(this).parents('.js-bio-col--target');
        var idx = thisBio.data('counter');
        if (idx % 2 == 1){
            thisBio.addClass('order-lg-' + (idx - 2));
            thisBio.removeClass('order-lg-' + idx);
        }
        thisBio.toggleClass('bio-block-expanded');
    });
    // close button click
    jQuery('.js-bio__close').on('click', function () {
        var closedBio = jQuery(this).parents('.js-bio-col--target');
        closedBio.removeClass('bio-block-expanded');
        var idx = closedBio.data('counter');
        if (idx % 2 == 1){
            closedBio.removeClass('order-lg-' + (idx - 2));
            closedBio.addClass('order-lg-' + idx);
        }
    });

    // owl homepage carousel

    jQuery('.welcome-slider').owlCarousel({
        items: 1,
        center: true,
        autoplay: false,
        autoplaySpeed: 1000,
        autoplayTimeout: 8000,
        loop: true,
        margin: 0,
        dots: true,
        nav: false
    });

    // ie11 object-fit fallback
    if (!Modernizr.objectfit || !Modernizr.smil) {
        $('.js-img-obj-fit__container').each(function () {
            var $container = $(this),
                imgUrl = $container.find('img').prop('src');
            if (imgUrl) {
                $container
                    .css('backgroundImage', 'url(' + imgUrl + ')')
                    .addClass('compat-object-fit');
            }
        });
    }

    // equal height cards
    var maxHeight = -1;

    jQuery('.ghostkit-icon-box-content').each(function () {
        maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height();
    });

    jQuery('.ghostkit-icon-box-content').each(function () {
        jQuery(this).height(maxHeight);
    });

    // js map search

    jQuery('.js-update-search').on('click', function (e) {
        e.preventDefault();

        var currentUrl = [location.protocol, '//', location.host, location.pathname].join('');

        location.href = currentUrl + '?' + jQuery('.js-search-form').serialize();
    });

    // js toggle listing views
    jQuery('.js-listing-page-toggle input').on('change', function () {
        var rel = jQuery(this).attr('rel');

        if (rel == 'js-view-list') {
            jQuery('.js-view-list').show();
            jQuery('.js-view-map').hide();
        } else {
            jQuery('.js-view-list').hide();
            jQuery('.js-view-map').show();

            map.fitBounds(bounds, 150);
        }
    });


    // make parent active
    jQuery('li.nav-item.active').parents('li.nav-item').addClass('drop-down-active');

    // BIG Slide
    var menuLink = jQuery('.menu-link').bigSlide({
        side: 'right',
        menuWidth: '16.5rem',
        easyClose: true,
        afterOpen: function () {
            jQuery('body').toggleClass('noscroll');
        },
        afterClose: function () {
            jQuery('body').toggleClass('noscroll');
        }
    });

    // Remove WP Block element iframe classes
    if (jQuery('.wp-block-embed-youtube').length) {
        jQuery('.wp-block-embed-youtube').removeClass().addClass('embed-responsive-item');
    }

    // Scrolling anchors
    jQuery('.scrollable-anchor').on('click', function (e) {
        e.preventDefault();

        jQuery('html,body').animate({
            scrollTop: jQuery(this.hash).offset().top
        }, 1000);
    });
});

var trackEvent = function (name, options) {
    trackGA(name, options);
    trackPixel(name, options);
};

var trackGA = function (name, options) {
    if (typeof gtag !== 'undefined') {
        gtag('event', name, {
            'event_category': options.category,
            'event_label': options.label,
            'value': options.value || 0
        });
    }
};

var trackPixel = function (name, options) {
    if (typeof gtag !== 'undefined') {
        fbq('track', 'Lead', {
            'event_category': options.category,
            'event_action': name,
            'value': options.value || 0,
            'currency': 'CAD'
        });
    }
};

var targetBlankExternalLinks = function () {
    var internalLinkRegex = new RegExp('^((((http:\\/\\/|https:\\/\\/)(www\\.)?)?'
        + window.location.hostname
        + ')|(localhost:\\d{4})|(\\/.*))(\\/.*)?$', '');

    jQuery('a').filter(function () {
        var href = jQuery(this).attr('href');
        return !internalLinkRegex.test(href);
    })
        .each(function () {
            jQuery(this).attr('target', '_blank');
        });
};