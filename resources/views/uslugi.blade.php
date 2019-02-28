@extends('layouts.main')
@section('head')
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description"
          content="Массовые катания, тренажерный зал, аренда ледового поля, хоккей, хореографический класс в Вологде"/>
    <title>Услуги - Ледовая арена города Вологды</title>
    <link href="/public/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
    <link href="/public/css/css-36da8-27468.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/public/css/css-579db-00020.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/public/css/fonts.css" rel="stylesheet" type="text/css"/>
    <script src="/public/js/js-f6072-00020.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            initTooltips();
            $("body").on("subform-row-add", initTooltips);

            function initTooltips(event, container) {
                container = container || document;
                $(container).find(".hasTooltip").tooltip({"html": true, "container": "body"});
            }
        });
    </script>


    <!-- META FOR IOS & HANDHELD -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <script type="text/javascript">
        //<![CDATA[
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement("style");
            msViewportStyle.appendChild(
                document.createTextNode("@-ms-viewport{width:auto!important}")
            );
            document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
        }
        //]]>
    </script>
    <!-- //META FOR IOS & HANDHELD -->
    <meta name="theme-color" content="#003399">
</head>
<body>
<div class="t3-wrapper features-intro features-intro-2fw">
@endsection
@section('content')
    <div id="t3-mainbody" class="t3-mainbody">

        <!-- MAIN CONTENT -->
        <div id="t3-content" class="t3-content">
            <div id="system-message-container">
            </div>


            <div class="usl-page usl-page-bg" itemscope itemtype="http://schema.org/Blog">

                <div class="page-header">
                    <h1> Услуги</h1>
                </div>

                <!-- Item list -->
                <div class="usl-items container">

                    <!-- Row -->
                    <div class="row row-usl">

                        <div class="usl-item-cont col-md-12">

                            <div class="usl-item">

                                <a href="/uslugi/massovoe-katanie" title="Массовое катание">
                                    <div class="usl-image"
                                         style="background: url('/public/images/uslugi-cat/mass1.jpg') center no-repeat;">
                                        <img src="/" alt=""/>
                                    </div>

                                </a>


                                <div class="usl-desc">
                                    <a href="/uslugi/massovoe-katanie" title="">
                                        <h3 class="usl-title">Массовое катание</h3>
                                    </a>
                                    <p>Вы хотите <strong>интересно, с пользой для здоровья</strong> провести время?</p>
                                    <p>Тогда приходите к нам на массовое катание на коньках<strong> в любое время года,
                                            в любую погоду!</strong></p>
                                    <div class="links"><a class="readmore-link btn btn-default"
                                                          href="/uslugi/massovoe-katanie" title="Массовое катание">Подробнее...</a>
                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- // Row -->
                    <!-- Row -->
                    <div class="row row-usl">

                        <div class="usl-item-cont col-md-12">

                            <div class="usl-item">

                                <a href="/uslugi/arenda-ledovogo-polya" title="Аренда ледового поля">
                                    <div class="usl-image"
                                         style="background: url('/public/images/uslugi-cat/arenda.jpg') center no-repeat;">
                                        <img src="/" alt=""/>
                                    </div>

                                </a>


                                <div class="usl-desc">
                                    <a href="/uslugi/arenda-ledovogo-polya" title="">
                                        <h3 class="usl-title">Аренда ледового поля</h3>
                                    </a>
                                    <p><strong>Предлагаем почасовую аренду ледового поля</strong> для проведения
                                        тренировок на льду, соревнований и прочих мероприятий.</p>
                                    <p>Ледовое поле оборудовано по современным требованиям к спортивным сооружениям.
                                        Трибуны вмещают <strong>234 человека.</strong></p>
                                    <div class="links"><a class="readmore-link btn btn-default"
                                                          href="/uslugi/arenda-ledovogo-polya"
                                                          title="Аренда ледового поля">Подробнее...</a></div>


                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- // Row -->
                    <!-- Row -->
                    <div class="row row-usl">

                        <div class="usl-item-cont col-md-12">

                            <div class="usl-item">

                                <a href="/uslugi/razmeshchenie-informatsii-reklamy"
                                   title="Размещение информации (рекламы)">
                                    <div class="usl-image"
                                         style="background: url('/public/images/uslugi-cat/rekl.jpg') center no-repeat;">
                                        <img src="/" alt=""/>
                                    </div>

                                </a>


                                <div class="usl-desc">
                                    <a href="/uslugi/razmeshchenie-informatsii-reklamy" title="">
                                        <h3 class="usl-title">Размещение информации (рекламы)</h3>
                                    </a>
                                    <p>Реклама на ледовой арене – это эффективный инструмент коммуникаций с позитивно
                                        настроенной публикой.&nbsp;На протяжении всего свободного катания, хоккейных
                                        матчей, тренировок и во время проведения мастер-классов <strong>люди будут
                                            видеть вашу рекламу.</strong></p>
                                    <div class="links"><a class="readmore-link btn btn-default"
                                                          href="/uslugi/razmeshchenie-informatsii-reklamy"
                                                          title="Размещение информации (рекламы)">Подробнее...</a></div>


                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- // Row -->
                    <!-- Row -->
                    <div class="row row-usl">

                        <div class="usl-item-cont col-md-12">

                            <div class="usl-item">

                                <a href="/uslugi/sportivnoe-katanie" title="Спортивное катание">
                                    <div class="usl-image"
                                         style="background: url('/public/images/uslugi-cat/sport-kat.jpg') center no-repeat;">
                                        <img src="/" alt=""/>
                                    </div>

                                </a>


                                <div class="usl-desc">
                                    <a href="/uslugi/sportivnoe-katanie" title="">
                                        <h3 class="usl-title">Спортивное катание</h3>
                                    </a>
                                    <p>Спортивное катание – это время для занятий на льду учащихся детско-юношеских&nbsp;
                                        спортивных школ отделений фигурного катания и хоккея с шайбой.</p>
                                    <div class="links"><a class="readmore-link btn btn-default"
                                                          href="/uslugi/sportivnoe-katanie" title="Спортивное катание">Подробнее...</a>
                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- // Row -->
                    <!-- Row -->
                    <div class="row row-usl">

                        <div class="usl-item-cont col-md-12">

                            <div class="usl-item">

                                <a href="/uslugi/prokat-zatochka-i-formovka-konkov"
                                   title="Прокат, заточка и формовка коньков">
                                    <div class="usl-image"
                                         style="background: url('/public/images/uslugi-cat/prokat.jpg') center no-repeat;">
                                        <img src="/" alt=""/>
                                    </div>

                                </a>


                                <div class="usl-desc">
                                    <a href="/uslugi/prokat-zatochka-i-formovka-konkov" title="">
                                        <h3 class="usl-title">Прокат, заточка и формовка коньков</h3>
                                    </a>
                                    <p>Если у Вас нет своих коньков, то мы предоставим их Вам в прокат! У нас есть весь
                                        размерный ряд, начиная с 26 размера.</p>
                                    <div class="links"><a class="readmore-link btn btn-default"
                                                          href="/uslugi/prokat-zatochka-i-formovka-konkov"
                                                          title="Прокат, заточка и формовка коньков">Подробнее...</a>
                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- // Row -->

                </div>
                <!-- // Item list -->

                <!-- Pagination -->
                <!-- //Pagination -->

            </div>

        </div>
        <!-- //MAIN CONTENT -->

    </div>


    <nav class="wrap t3-navhelper ">
        <div class="container">

            <ol class="breadcrumb ">
                <li class="active"><span class="hasTooltip"><i class="fa fa-map-marker" data-toggle="tooltip"
                                                               title="Вы здесь: "></i></span></li>
                <li><a href="/" class="pathway">Главная</a><span class="divider">/</span></li>
                <li><span>Услуги</span></li>
            </ol>

        </div>
    </nav>

    <!-- BACK TOP TOP BUTTON -->
    <div id="back-to-top" data-spy="affix" data-offset-top="300" class="back-to-top hidden-xs hidden-sm affix-top">
        <button class="btn btn-primary" title="Back to Top"><i class="fa fa-caret-up"></i></button>
    </div>
    <script type="text/javascript">
        (function ($) {
            // Back to top
            $('#back-to-top').on('click', function () {
                $("html, body").animate({scrollTop: 0}, 500);
                return false;
            });
            $(window).load(function () {
                // hide button to top if the document height not greater than window height*2;using window load for more accurate calculate.
                if ((parseInt($(window).height()) * 2) > (parseInt($(document).height()))) {
                    $('#back-to-top').hide();
                }
            });
        })(jQuery);
    </script>
    <!-- BACK TO TOP BUTTON -->
   @endsection