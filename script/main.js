(function ($) {
    let ul_arrays = [];
// let menu=
    $('.faq-item').on('click', function (e) {
        let theItem = $(this);
        if (theItem.hasClass('open-item'))
            theItem.removeClass('open-item');
        else
            theItem.addClass('open-item');
    })
    $('.mega-menu .wp-block-navigation__container > li > ul').append('<a class="the-x"></a>')
    $('.wp-block-navigation__responsive-container-open.always-shown').on('click', function (e) {

    })
    $('.the-mobile-menu form.wp-block-search__button-outside .wp-block-search__inside-wrapper input').attr('placeholder', 'Search')
    $('.menu-icon a:not(".open")').on('click', function (e) {
        // console.log('make it open')
        if ($(this).hasClass('open')) {
            $(this).removeClass('open')
            $('body').removeClass('overflowyhidden')
            $('.the-mobile-menu').removeClass('open')

        } else {
            $(this).addClass('open')
            $('body').addClass('overflowyhidden')
            $('.the-mobile-menu').addClass('open')
        }
    });

    $('.the-x').on('click', function (e) {
        $('.mega-menu.wp-block-navigation .wp-block-navigation__container > li.wp-block-navigation-item').removeClass('hover')

    });
    $('.donations-part .donation-packs').on('click', function (e) {
        let x = $(this).find('.donation-center .donation-big-size').html()
        let y = $(this).find('.donation-center .donation-small-size').html()
        // console.log('x',x,'y',y)
        $('.bottom-donation-box .donation-big-size').html(x)
        $('.bottom-donation-box .donation-small-size').html(y)
        // scrollTo($('#donateme'), 1500);
        // $('html, body').animate({ scrollTop: $("#donateme").offset().top }, 1000, "easeInExpo");
    })
    $('.tababuttons > div').on('click', function (e) {
        $('.tababuttons > div').removeClass('hoverrred')
        $(this).addClass('hoverrred')
        if ($(this).hasClass('firstdiv1')) {
            $('.tabweek').removeClass('d-none')
            $('.tabonce').addClass('d-none')
        }
        if ($(this).hasClass('firstdiv2')) {
            $('.tabonce').removeClass('d-none')

            $('.tabweek').addClass('d-none')

        }

    })
    $('.mini-search').on('click','.active-search .close-search-i', function (e) {
        if ($('.on-click-search-hide').hasClass('visibility-hidden')) {
            $('.mini-search.make-other-hidden .wp-block-search__inside-wrapper.active-search input').css('width', 0)

            $('.mini-search.make-other-hidden .wp-block-search__inside-wrapper ').removeClass('active-search').css('left','inherit').css('top','inherit')
            // $('.mini-search.make-other-hidden .wp-block-search__inside-wrapper .search-icon-i').remove()
            $('.mini-search.make-other-hidden .wp-block-search__inside-wrapper input').val('');
            $('.on-click-search-hide').removeClass('visibility-hidden')
            $('.mini-search.make-other-hidden .wp-block-search__inside-wrapper .close-search-i').remove()
        }
    })
    $(".mini-search.make-other-hidden .wp-block-search__inside-wrapper input").focus(function() {
        var $this = $(this);
        $this.select();

        // Work around Chrome's little problem
        $this.mouseup(function() {
            // Prevent further mouseup intervention
            $this.unbind("mouseup");
            return false;
        });
    });
    $('.make-other-hidden > div > button:not(".close-search-i")').on('click', function (e) {
        let the_value=$('.mini-search.make-other-hidden .wp-block-search__inside-wrapper input').val();
        // if(!$('.on-click-search-hide').hasClass('visibility-hidden'))
        console.log('hi',the_value,$('.on-click-search-hide').hasClass('visibility-hidden'))
        // $('.mega-menu.wp-block-navigation .wp-block-navigation__container > li.wp-block-navigation-item').removeClass('hover')
        if (!$('.on-click-search-hide').hasClass('visibility-hidden')) {
            e.preventDefault();

            $('.on-click-search-hide').addClass('visibility-hidden')
            // $('.startofinput').offset().top + headerMobile.height()
            let t = $('.startofinput') ? $('.startofinput').offset().top : 0;
            let l = $('.startofinput') ? $('.startofinput').offset().left : 0;
            let l2 = $('.mini-search.make-other-hidden').offset().left;
            let w = l2 - l;
            $('.mini-search.make-other-hidden .wp-block-search__inside-wrapper ').addClass('active-search').css('left', l).css('top', t - 16);
            $('.mini-search.make-other-hidden .wp-block-search__inside-wrapper input').css('width', w + 38).focus();
            $('.mini-search.make-other-hidden .wp-block-search__inside-wrapper ').append('<button type="button" class="close-search-i"></button>')

            $('.mini-search.make-other-hidden .wp-block-search__inside-wrapper input').attr('placeholder','Search');
            // console.log('$(\'.startofinput\').offset()',$('.startofinput').offset())
            // $('.mini-search.make-other-hidden').
        }
    })
    $('.mega-menu.wp-block-navigation .wp-block-navigation__container > li.wp-block-navigation-item > a').on('click', function (e) {
        e.preventDefault();
        let li = $(this).parent();
        if (li.hasClass('hover')) {
            li.removeClass('hover')
        } else {
            $('.mega-menu.wp-block-navigation .wp-block-navigation__container > li.wp-block-navigation-item').removeClass('hover')
            li.addClass('hover')
        }
    })
    $.each($('ul.accordion'), function (item, e) {
        console.log('item', item, e)
        let ul = $(e);
        let defaultHeight = ul.height();
        if (item != 0) {
            ul.css('height', '40px')
            ul.addClass('close')
        }

    })
    var headerMobile = $('header.wp-block-template-part');
    var headPosition = headerMobile.offset().top + headerMobile.height();
    // console.log('$(\'header.wp-block-template-part\').offset().top',headerMobile.offset().top+headerMobile.height())
    if (window.innerWidth < 960) {
        $('.wp-block-navigation__responsive-container').css('top', headPosition)
    }
    if ($('ul').hasClass('accordion')) {

        // let parent=ul.parent();
        // let firstLi=ul.find('li:first-child')
        // parent.prepend(firstLi.html());
        // firstLi.remove()

    }
    $('ul.accordion li:first-child').on('click', function (e) {
        e.preventDefault();
        let ul = $(this).parent();
        if (ul.hasClass('close')) {
            ul.removeClass('close');
            let defaultHeight = ul.height();

            ul.css('height', 'auto')

        } else {
            ul.css('height', '40px')

            ul.addClass('close')
        }
    });
    $('.first-mobile-menu > ul > li > a, .first-mobile-menu > ul > li > button').on('click', function (e) {
        e.preventDefault();
        let word = $(this).parent().find('a').html();
        console.log('click on first level',)
        let li = $(this).parent();
        li.find('> ul').addClass('get-bigger');
        li.find('> ul').prepend('<li class="go-back-to-root-li"><a href="#" class="go-back-to-root">' + word + '</a></li>')
    });
    $('.first-mobile-menu > ul > li > ul.get-bigger > li > a, .first-mobile-menu > ul > li > ul.get-bigger > li > button').on('click', function (e) {
        e.preventDefault();
        console.log('click on second level')
        // let li = $(this).parent();
        // li.find('ul').addClass('get-bigger');
    });
    $('.first-mobile-menu').on('click', '> ul > li > ul.get-bigger > li > a, > ul > li > ul.get-bigger > li > button', function (e) {
        e.preventDefault();
        console.log('click on main')
        let li = $(this).parent();
        let ul = li.find('ul');
        console.log('li.find(\'ul\')', li.find('ul'))
        if (ul.hasClass('get-more-big')) {
            ul.removeClass('get-more-big');
            li.find('button').attr('aria-expanded', 'false')

        } else {
            ul.addClass('get-more-big');
            li.find('button').attr('aria-expanded', 'true')

        }
    });
    $('.first-mobile-menu').on('click', '.go-back-to-root,.go-back-to-root-li', function (e) {
        e.preventDefault();
        console.log('click on back menu')
        // let li = $(this).parent();
        $('.go-back-to-root-li').remove();
        $('.first-mobile-menu').find('.get-bigger').removeClass('get-bigger');
    });
    $.fn.cssImportant = function (name, value) {
        const $this = this;
        const applyStyles = (n, v) => {
            // Convert style name from camelCase to dashed-case.
            const dashedName = n.replace(/(.)([A-Z])(.)/g, (str, m1, upper, m2) => {
                return m1 + "-" + upper.toLowerCase() + m2;
            });
            // Loop over each element in the selector and set the styles.
            $this.each(function () {
                this.style.setProperty(dashedName, v, 'important');
            });
        };
        // If called with the first parameter that is an object,
        // Loop over the entries in the object and apply those styles.
        if ($.isPlainObject(name)) {
            for (const [n, v] of Object.entries(name)) {
                applyStyles(n, v);
            }
        } else {
            // Otherwise called with style name and value.
            applyStyles(name, value);
        }
        // This is required for making jQuery plugin calls chainable.
        return $this;
    };
})(jQuery);