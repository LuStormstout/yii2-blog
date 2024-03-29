(function (window) {
    'use strict';

    var Even = {};

    Even.backToTop = function () {
        var $backToTop = $('#back-to-top');

        $(window).scroll(function () {
            if ($(window).scrollTop() > 100) {
                $backToTop.fadeIn(1000);
            } else {
                $backToTop.fadeOut(1000);
            }
        });

        $backToTop.click(function () {
            $('body,html').animate({ scrollTop: 0 });
        });
    };

    Even.mobileNavbar = function () {
        var $mobileNav = $('#mobile-navbar');
        var $mobileNavIcon = $('.mobile-navbar-icon');
        var slideout = new Slideout({
            'panel': document.getElementById('mobile-panel'),
            'menu': document.getElementById('mobile-menu'),
            'padding': 180,
            'tolerance': 70
        });
        slideout.disableTouch();

        $mobileNavIcon.click(function () {
            slideout.toggle();
        });

        slideout.on('beforeopen', function () {
            $mobileNav.addClass('fixed-open');
            $mobileNavIcon.addClass('icon-click').removeClass('icon-out');
        });

        slideout.on('beforeclose', function () {
            $mobileNav.removeClass('fixed-open');
            $mobileNavIcon.addClass('icon-out').removeClass('icon-click');
        });

        $('#mobile-panel').on('touchend', function () {
            slideout.isOpen() && $mobileNavIcon.click();
        });
    };

    Even.toc = function () {
        var SPACING = 20;
        var $toc = $('.post-toc'),
            $footer = $('.post-footer');

        if ($toc.length) {
            var minScrollTop = $toc.offset().top - SPACING;
            var maxScrollTop = $footer.offset().top - $toc.height() - SPACING;

            var tocState = {
                start: {
                    'position': 'absolute',
                    'top': minScrollTop
                },
                process: {
                    'position': 'fixed',
                    'top': SPACING
                },
                end: {
                    'position': 'absolute',
                    'top': maxScrollTop
                }
            }

            $(window).scroll(function () {
                var scrollTop = $(window).scrollTop();

                if (scrollTop < minScrollTop) {
                    $toc.css(tocState.start);
                } else if (scrollTop > maxScrollTop) {
                    $toc.css(tocState.end);
                } else {
                    $toc.css(tocState.process);
                }
            })
        }

        var HEADERFIX = 30;
        var $toclink = $('.toc-link'),
            $headerlink = $('.headerlink');

        var headerlinkTop = $.map($headerlink, function (link) {
            return $(link).offset().top;
        });

        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop();

            for (var i = 0; i < $toclink.length; i++) {
                var isLastOne = i + 1 === $toclink.length,
                    currentTop = headerlinkTop[i] - HEADERFIX,
                    nextTop = isLastOne ? Infinity : headerlinkTop[i+1] - HEADERFIX;

                if (currentTop < scrollTop && scrollTop <= nextTop) {
                    $($toclink[i]).addClass('active');
                } else {
                    $($toclink[i]).removeClass('active');
                }
            }
        });
    };

    Even.fancybox = function () {
        if ($.fancybox){
            $('.post').each(function () {
                $(this).find('img').each(function () {
                    $(this).wrap('<a class="fancybox" href="' + this.src + '" title="' + this.alt + '"></a>');
                });
            });

            $('.fancybox').fancybox({
                openEffect	: 'elastic',
                closeEffect	: 'elastic'
            });
        }
    };

    Even.visits = function () {
        var $visits = $('.post-visits');

        function updateVisits(dom, time) {
            var text = dom.text() + ' ' + time;
            dom.text(text);
        }

        function addCounter(Counter) {
            var query = new AV.Query(Counter);

            var url = $visits.data('url').trim();
            var title = $visits.data('title').trim();

            query.equalTo('url', url);
            query.find().then(function (results) {
                if (results.length > 0) {
                    var counter = results[0];
                    counter.save(null, {
                        fetchWhenSave: true
                    }).then(function (counter) {
                        counter.increment('time', 1);
                        return counter.save();
                    }).then(function (counter) {
                        updateVisits($visits, counter.get('time'));
                    });
                } else {
                    var newcounter = new Counter();
                    newcounter.set('title', title);
                    newcounter.set('url', url);
                    newcounter.set('time', 1);

                    newcounter.save().then(function (counter) {
                        updateVisits($visits, newcounter.get('time'));
                    });
                }
            }, function (error) {
                console.log('Error:' + error.code + " " + error.message);
            });
        }

        function showTime(Counter) {
            $visits.each(function () {
                var $this = $(this);
                var query = new AV.Query(Counter);
                var url = $this.data('url').trim();

                query.equalTo('url', url);
                query.find().then(function (results) {
                    if (results.length === 0) {
                        updateVisits($this, 0);
                    } else {
                        var counter = results[0];
                        updateVisits($this, counter.get('time'));
                    }
                }, function (error) {
                    console.log('Error:' + error.code + " " + error.message);
                });
            })
        }

        if (typeof AV === 'object') {
            var Counter = AV.Object.extend('Counter');
            if ($visits.length === 1) {
                addCounter(Counter);
            } else {
                showTime(Counter);
            }
        }
    }

    window.Even = Even;
})(window);