@extends('layouts.main')
@section('head')
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="description"
              content="Массовые катания, тренажерный зал, аренда ледового поля, хоккей, хореографический класс в Арск"/>
        <title>Услуги - Ледовая арена города Арск</title>
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
            <div id="t3-mainbody" class="container t3-mainbody">
                <div class="row">

                    <!-- MAIN CONTENT -->
                    <div id="t3-content" class="t3-content col-xs-12">


                        <div class="item-page clearfix">


                            <!-- Article -->
                            <article>
                                <meta itemprop="inLanguage" content="ru-RU">
                                <meta itemprop="url" content="/kontakty">


                                <header class="article-header clearfix">
                                    <h1 class="article-title" itemprop="headline">
                                        Контактная информация Ледовой Арены
                                        <meta itemprop="url" content="http://arena-vologda.ru/kontakty">
                                    </h1>

                                </header>


                                <!-- Aside -->
                                <!-- //Aside -->


                                <section class="article-content clearfix">
                                    <div class="col-md-6">
                                        <h3>Реквизиты:</h3>
                                        <p>Муниципальная бюджетная организация дополнительного образования "Детско-юношеская спортивная школа "Арча Арена"</p>
                                        <p>ИНН 3525286517 &nbsp;КПП 352501001</p>
                                        <p>Фактический и юридический адрес: 422000, РТ, г. Арск, ул. Сибирский тракт, д.14 А</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Контакты:</h3>
                                        <p class="Textbody">Телефон: +7(843)-663-57-04</p>
                                        <p>E-mail:
                                            <span id="cloak1fff2e4003f1428eead824e8e846d2a4"><a
                                                        href="mailto:liedovyi@mail.ru">	ArskArena@yandex.ru</a>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <p
                                        <img style="display: block; margin-top: 20px; margin-left: auto; margin-right: auto;"
                                             src="{{ asset('public/images/arena-main-photo.jpg') }}" alt="arena main photo" width="1499"></p>
                                </section>

                                <!-- footer -->
                                <!-- //footer -->


                            </article>
                            <!-- //Article -->


                        </div>


                    </div>
                    <!-- //MAIN CONTENT -->

                </div>
            </div>


            <nav class="wrap t3-navhelper ">
                <div class="container">

                    <ol class="breadcrumb ">
                        <li class="active"><span class="hasTooltip" data-original-title="" title=""><i
                                        class="fa fa-map-marker" data-toggle="tooltip" title="Вы здесь: "></i></span>
                        </li>
                        <li><a href="/" class="pathway">Главная</a><span class="divider">/</span></li>
                        <li><span>Контакты</span></li>
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