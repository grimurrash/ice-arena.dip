@extends('layouts.main')
@section('head')
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>О нас - ледовая арена города Арск</title>
        <link href="/public/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
        <link href="/public/css/css-36da8-27468.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/public/css/css-579db-00020.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/public/css/fonts.css" rel="stylesheet" type="text/css"/>
        {{--<script src="/public/fontawesome/js/all.min.js"></script>--}}
        {{--<link rel="stylesheet" href="/public/fontawesome/css/all.min.css">--}}
        {{--<script src="/public/bootstrap/js/bootstrap.min.js"></script>--}}
        {{--<link rel="stylesheet" href="/public/bootstrap/css/bootstrap.min.css">--}}
        <script src="/public/js/js-3444a-00020.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(window).on('load', function () {
                new JCaption('img.caption');
            });
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
        <meta name="HandheldFriendly" content="true"/>
        <meta name="apple-mobile-web-app-capable" content="YES"/>
        <!-- //META FOR IOS & HANDHELD -->


        <meta name="theme-color" content="#003399">
    </head>
    <body>
    <div class="t3-wrapper features-intro features-intro-2">
        <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->
        @endsection
        @section('content')
            <div id="t3-mainbody" class="container t3-mainbody">
                <div id="t3-content" class="t3-content">
                    <div class="item-page clearfix">
                        <!-- Article -->
                        <article>
                            <meta itemprop="inLanguage" content="ru-RU">
                            <meta itemprop="url" content="/arena">


                            <header class="article-header clearfix">
                                <h1 class="article-title" itemprop="headline">
                                    О Ледовой Арене
                                    <meta itemprop="url" content="http://arena-vologda.ru/arena">
                                </h1>

                            </header>


                            <!-- Aside -->
                            <!-- //Aside -->


                            <section class="article-content clearfix">
                                <p>
                                    <img style="display: block; margin-top: 20px; margin-left: auto; margin-right: auto;"
                                         src="{{ asset('public/images/arena-main-photo.jpg') }}" alt="arena main photo" width="1499"></p>
                                <p><strong>"Ледовый дворец"</strong> введен в эксплуатацию в мае 2013 года.</p>
                                <p>Это единственная в городе Вологде крытая ледовая арена, оборудованная всем
                                    необходимым как для массовых катаний и мероприятий, так и для профессиональных
                                    тренировок и соревнований.</p>
                                <p><strong>Каток круглый год!</strong></p>
                                <p>Расположен на ул. Пугачева, дом 44, в районе «Водники».</p>
                                <p>Ледовая Арена оснащена системой озвучивания и музыкального сопровождения с
                                    комплектом беспроводных микрофонов, LED экраном, системой многоканальной записи
                                    и воспроизведения с комплектом профессиональных видеокамер. Трибуны вмещают 234
                                    человека.</p>
                                <p>Оборудованы комфортные и теплые <strong>раздевалки</strong> для хоккеистов,
                                    фигуристов, посетителей массовых катаний, класса хореографии&nbsp; и
                                    тренажерного зала.</p>
                                <p>На первом этаже находится современный хореографический класс площадью 105,0
                                    кв.м.</p>
                                <p>На втором этаже здания «Ледовой арены» располагается кафе на 40 посадочных мест с
                                    видом на ледовое поле, оснащенный всем необходимым оборудованием тренажерный зал
                                    и методический кабинет вместимостью 30 человек.</p>
                                <p><strong>Наши реквизиты:</strong></p>
                                <p>Муниципальное автономное учреждение "Ледовый дворец"</p>
                                <p>ИНН 3525286517 &nbsp;КПП 352501001</p>
                                <p>Фактический и юридический адрес: 160024, Россия, Вологодская обл., г. Вологда,
                                    ул. Пугачева, 44</p>
                                <p>&nbsp;</p></section>

                            <!-- footer -->
                            <!-- //footer -->


                        </article>
                        <!-- //Article -->
                    </div>
                </div>
            </div>
            <nav class="wrap t3-navhelper ">
                <div class="container">

                    <ol class="breadcrumb ">
                        <li class="active"><span class="hasTooltip" data-original-title="" title=""><i
                                        class="fa fa-map-marker" data-toggle="tooltip" title="Вы здесь: "></i></span>
                        </li>
                        <li><a href="/" class="pathway">Главная</a><span class="divider">/</span></li>
                        <li><span>О нас</span></li>
                    </ol>

                </div>
            </nav>

            <!-- BACK TOP TOP BUTTON -->
            <div id="back-to-top" data-spy="affix" data-offset-top="300"
                 class="back-to-top hidden-xs hidden-sm affix-top">
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