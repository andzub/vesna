$(document).ready(function() {

    $(".carousel").owlCarousel({
        items: 1,
        nav: true, // Show next and prev buttons
        slideSpeed: 500,
        autoplayTimeout: 5000,
        loop: true,
        navText: true,
        singleItem: true,
        autoplay: true,
        stopOnHover: true,
        pagination: false
    });


    $(".carousel-technology").owlCarousel({
        items: 1,
        nav: true, // Show next and prev buttons
        slideSpeed: 500,
        autoplayTimeout: 4500,
        loop: true,
        navText: true,
        singleItem: true,
        autoplay: false,
        stopOnHover: true,
        pagination: false,
        width: 980
    });

    $(".carousel-header").owlCarousel({
        items: 1,
        nav: false, // Show next and prev buttons
        slideSpeed: 500,
        autoplayTimeout: 8000,
        loop: true,
        navText: false,
        singleItem: true,
        autoplay: true,
        stopOnHover: true,
        pagination: false
    });

    $(".carousel-trust").owlCarousel({
        items: 5,
        nav: true, // Show next and prev buttons
        slideSpeed: 500,
        autoplayTimeout: 5500,
        loop: true,
        navText: true,
        singleItem: true,
        autoplay: true,
        stopOnHover: true,
        pagination: false
    });


    //<--languages
    $(".lang-block").hover(function() {
        $(this).animate({width: "90px"}, 100);
        $(this).find(".languages__link").addClass('showLang');
    },
    function() {
        $(this).find(".languages__link").removeClass('showLang');
        $(this).animate({width: "40px"}, 100);
    })

    //languages-->

    $("li").children(".menuCatalog__list").click(function() {
        $(this).siblings(".menuCatalog__second").slideToggle();
    });


    //Для смены иконок при наведении на главной
    $(".mainMenu__item").hover(function() {
        $(this).find(".foricon").css("display", "none");
        $(this).find(".foricon-hover").css("display", "block");
    }, function() {
        $(this).find(".foricon").css("display", "block");
        $(this).find(".foricon-hover").css("display", "none");
    });

    //Для смены цвета текста при наведении в блоге
    // $(".tile__item").hover(function () {
    //     $(this).find(".tile__title").css("color", "#145092");
    // }, function() {
    //     $(this).find(".tile__title").css("color", "#000");
    // });

    // var owl = $(".carousel-header");
    //
    //   owl.owlCarousel({
    //       items:4,
    //       loop:true,
    //       margin:10,
    //       autoPlay:false,
    //       autoplayTimeout:1000,
    //       autoplayHoverPause:true
    //   });
    //
    //   owl.trigger('owl.play',300);



    // копируем для меню наше стандартное меню
    $(".menu").clone().removeClass("menu").attr("id", "menu").appendTo(".btn-group");

    jQuery(document).ready(function($) {
        $("#menu").mmenu({
            "extensions": [
                "pagedim-black"
            ],
            "offCanvas": {
                "position": "right"
            },
            "iconPanels": true,
            "navbar": {
                "title": "Меню"
            },
            "navbars": [{
                "position": "top"
            }]
        });
    });

    // табы

    $("#js-tabs .item:first-of-type").css("display", "block");
    $(".center-menu .button").hover(function() {
        $("#js-tabs").children().css("display", "none").eq($(this).index()).css("display", "block");
    });

    // читать далее
    var startHeight = $(".seotext").height();
    $("#js-next").click(function() {

        var height = $(".seotext").children().height();

        if ($(".seotext").hasClass("active")) {
            $("#js-next").text("Скрыть");
            $(".seotext").removeClass("active");
            $(".seotext").animate({
                    height: height
                },
                500);
        } else {
            console.log(" не актив ");
            $("#js-next").text("Читать далее");
            $(".seotext").addClass("active");
            $(".seotext").animate({
                    height: startHeight
                },
                500);
        }

    })


    // сайдбар на моб
    $(".js-sidebar").clone().removeClass("js-sidebar").attr("id", "mobile-sidebar").appendTo(".mobile-sidebar a");
    jQuery(document).ready(function($) {
        $("#mobile-sidebar").mmenu({
            "extensions": [
                "pagedim-black"
            ],
            "offCanvas": {
                "position": "left"
            },
            "navbar": {
                "title": "Каталог"
            },
            "iconPanels": true,
            "counters": true,
            "navbars": [{
                "position": "top"
            }]
        });
    });
    // модальные окна
    $("#callback").iziModal({
        // title: "Обратный звонок",
        // subtitle: "Заполните форму ниже",
        // overlayColor: 'rgba(255, 255, 255, 0.4)',
        // headerColor: '#205a9c',
        // iconColor: 'white',
        fullscreen: false,
        width: '100%',
        padding: 20,
        attached: "top"
            // attached: 'top' прикреплялка к верху
    });
    $(document).on('click', '.trigger-call', function(event) {
        event.preventDefault();
        $('#callback').iziModal('open');
    });

    $("#search-modal").iziModal({
        // title: "Поиск",
        // subtitle: "Заполните форму ниже",
        // overlayColor: 'rgba(255, 255, 255, 0.4)',
        // headerColor: '#205a9c',
        // iconColor: 'white',
        fullscreen: false,
        width: '100%',
        padding: 20,
        attached: "top"
            // attached: 'top' прикреплялка к верху
    });

    $(document).on('click', '.trigger-search', function(event) {
        event.preventDefault();
        $('#search-modal').iziModal('open');
    });


    $("#languages-modal").iziModal({
        // title: "Поиск",
        // subtitle: "Заполните форму ниже",
        // overlayColor: 'rgba(255, 255, 255, 0.4)',
        // headerColor: '#205a9c',
        // iconColor: 'white',
        fullscreen: false,
        width: '100%',
        padding: 20,
        attached: "top"
            // attached: 'top' прикреплялка к верху
    });


    $(document).on('click', '.trigger-languages', function(event) {
        event.preventDefault();
        $('#languages-modal').iziModal('open');
    });


    $("#calc-modal").iziModal({
        overlayColor: 'rgba(255, 255, 255, 0.4)',
        fullscreen: false,
        height: "100%",
        attached: "top",
        padding: 20
    });
    $(document).on('click', '.trigger-calc', function(event) {
        event.preventDefault();
        $('#calc-modal').iziModal('open');
    });


    // for main menu
    $(".mainMenu__item").hover(function() {
            $(".mainMenu__cross, .mainMenu__line").css("opacity", "0");
            $(this).find(".mainMenu__cross, .mainMenu__line").css("opacity", "1");
        },
        function() {
            $(".mainMenu__cross, .mainMenu__line").css("opacity", "0");
        });


    // circle form order
    $('.orderForm__item').bind('keyup', function(e) {
        var $inputVal = $(this).find('input').val();
        if ($inputVal !== '') {
            $(this).find('.orderForm__circle').css({
                "background-color": "#b7d167",
                "border": "3px solid #86c06a"
            });
        } else {
            $(this).find('.orderForm__circle').css({
                "background-color": "#E86340",
                "border": "3px solid #BE3308"
            });
        }
    });

    // circle after press button

    $('#orderButton').bind('click', function() {
        var $nameOrder = $('#nameOrder');
        var $telOrder = $('#telOrder');
        var $emailOrder = $('#emailOrder');
        var $nameOrderVal = $('#nameOrder').val();
        var $telOrderVal = $('#telOrder').val();
        var $emailOrderVal = $('#emailOrder').val();

        function circleError(nameInput) {
            $(nameInput).siblings().css({
                "background-color": "#E86340",
                "border": "3px solid #BE3308"
            });
        };
        if ($nameOrderVal.length < 2) {
            circleError($nameOrder);
        };
        if ($telOrderVal.length < 10) {
            circleError($telOrder);
        };
        if ($emailOrderVal.length <= 6 || $emailOrderVal.search('@') == -1) {
            console.log($emailOrderVal.search('@'));
            circleError($emailOrder);
        };
    });

    // табы
    //     (function($){
    // 	jQuery.fn.lightTabs = function(options){
    //
    // 		var createTabs = function(){
    // 			tabs = this;
    // 			i = 0;
    //
    // 			showPage = function(i){
    // 				$(tabs).children("div").children("div").hide();
    // 				$(tabs).children("div").children("div").eq(i).show();
    // 				$(tabs).children("ul").children("li").removeClass("active");
    // 				$(tabs).children("ul").children("li").eq(i).addClass("active");
    // 			}
    //
    // 			showPage(0);
    //
    // 			$(tabs).children("ul").children("li").each(function(index, element){
    // 				$(element).attr("data-page", i);
    // 				i++;
    // 			});
    //
    // 			$(tabs).children("ul").children("li").click(function(){
    // 				showPage(parseInt($(this).attr("data-page")));
    // 			});
    // 		};
    // 		return this.each(createTabs);
    // 	};
    // })(jQuery);
    //
    //     $(".tabs").lightTabs();
});