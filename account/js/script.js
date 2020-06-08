/*
tinc project builder
jsFile create on 18.09.2018 16:20:24
*/



$(document).ready(function () {

    var overlay = $('#overlay');
    var openMod = $('.openMod');
    var close = $('.close');
    var blockMod = $('.blockMod');

    function modalEvent() {
        overlay.fadeIn(500);
        $(".blockMod#" + $(this).attr('data-modal')).addClass("open").fadeIn(500);
        $("body").addClass("bodyModal");
        $(".modalsScroll").addClass("open");
    }

    openMod.on("click", modalEvent);

    close.click(function () {
        overlay.fadeOut(500);
        $(".blockMod.open").fadeOut(500, function () {
            $(this).removeClass("open");
            $("body").removeClass("bodyModal");
            $(".modalsScroll").removeClass("open");
        });
    });
    var onModalClose = function () {
        $(this).fadeOut(500);
        $(".blockMod.open").fadeOut(500, function () {
            $(this).removeClass("open");
            $("body").removeClass("bodyModal");
            $(".modalsScroll").removeClass("open");
        });
    };

    overlay.click(onModalClose);

    var ua = detect.parse(navigator.userAgent);
    $("html").addClass(ua.browser.family);

    if ($('select'.length > 0)) {
        $('select').map(function () {
            $(this).selectric()
        })
    }

    $('.newsSlider .slider').owlCarousel({
        items: 3,
        margin: 105,
        dots: false,
        nav: true,
        navText: ["<span class='icon-left'></span>", "<span class='icon-right'></span>"]
    })

    if ($('.clock:not(.timer)').length > 0) {
        function clock() {
            var date = new Date(),
                hour = date.getHours(),
                min = date.getMinutes(),
                sec = date.getSeconds(),
                weekDay = date.getDay(),
                day = date.getDate(),
                month = date.getMonth(),
                monthArr = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
                year = date.getFullYear();

            if (hour < 10) hour = '0' + hour;
            if (min < 10) min = '0' + min;
            if (sec < 10) sec = '0' + sec;
            if (day < 10) day = '0' + day;

            if ($('.clock .date').length > 0) {
                document.getElementById('day').innerHTML = day + '/' + monthArr[month];
                document.getElementById('year').innerHTML = year;
            }

            if ($('.clock .time').length > 0) {
                document.getElementById('time').innerHTML = hour + ' : ' + min + ' : ' + sec;
            }

        }

        var timer;

        function clockStart() {
            timer = setInterval(clock, 1000);
            clock();
        }

        clockStart();
    }

    if ($('.tabs').length > 0) {
        $(".tabs").map(function () {
            $(this).tabs({
                active: 0,
                show: {
                    effect: "fadeIn",
                    duration: 300
                },
                hide: {
                    effect: "fadeOut",
                    duration: 300
                },
            })
        })
    }

    if ($('.tabs.planTabs').length > 0) {
        $('.tabs.planTabs').tabs({
            active: 1
        })
    }

    $('.enterNum').bind("change keyup input click", function () {
        if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9]/g, '');
        }
    })

    var faqHead = $('.faqItem .head'),
        faqContent = $('.faqItem .content');

    if ($('.faqItem').length > 0) {
        $('.faqItem').map(function () {
            var el = $(this)
            if (el.find(faqHead).length > 0 && el.find(faqContent).length > 0) {
                // $('.faqItem .head:not(.active)').siblings(faqContent).slideUp();

                el.find(faqHead).on('click', function () {
                    var el = $(this),
                        cont = el.siblings(faqContent);

                    // cont.stop().slideToggle(500);

                    if (el.hasClass('active')) {
                        cont.stop().slideUp(500, function () {
                            el.removeClass('active');
                        });

                    } else {
                        cont.stop().slideDown(500, function () {
                            el.addClass('active');
                        });
                    }
                })
            }
        })
    }

    new ClipboardJS('.copyLink');

    if ($('.filter').length > 0) {
        var dateFormat = "mm-dd-yy",
            from = $("#from")
            .datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1
            })
            .on("change", function () {
                to.datepicker("option", "minDate", getDate(this));
            }),
            to = $("#to").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1
            })
            .on("change", function () {
                from.datepicker("option", "maxDate", getDate(this));
            });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }
    }

    if ($('.payMet2').is(':checked')) {
        $('.payBalance').addClass('hidden');
    }

    if ($('.payMet1').is(':checked')) {
        $('.paySystem').addClass('hidden');
    }

    $('.payMet1').change(function () {
        if ($(this).is(':checked')) {
            $('.paySystem').addClass('hidden');
            $('.payBalance').removeClass('hidden')
        }
    })

    $('.payMet2').change(function () {
        if ($(this).is(':checked')) {
            $('.payBalance').addClass('hidden');
            $('.paySystem').removeClass('hidden')
        }
    })

    var refHead = $('.refItem .head'),
        refContent = $('.refItem .content');

    if ($('.refItem').length > 0) {
        $('.refItem').map(function () {
            var el = $(this)
            if (el.find(refHead).length > 0 && el.find(refContent).length > 0) {

                el.find(refHead).on('click', function () {
                    var el = $(this),
                        cont = el.siblings(refContent);

                    if (el.hasClass('active')) {
                        cont.stop().slideUp(500, function () {
                            el.removeClass('active');
                        });

                    } else {
                        cont.stop().slideDown(500, function () {
                            el.addClass('active');
                        });
                    }
                })
            }
        })
    }

})

$(window).on('load', function () {
    $('header .chart').addClass('visible')
    $('.logoLg').addClass('visible')
})