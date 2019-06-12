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

                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        Заявка успешно добавлена
                                    </div>
                                @endif
                                @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                @endif
                                <section class="article-content clearfix">
                                    <div class="col-md-3">
                                        <h3>Реквизиты:</h3>
                                        <p>Муниципальная бюджетная организация дополнительного образования
                                            "Детско-юношеская спортивная школа "Арча Арена"</p>
                                        <p>ИНН 3525286517 &nbsp;КПП 352501001</p>
                                        <p>Фактический и юридический адрес: 422000, РТ, г. Арск, ул. Сибирский тракт,
                                            д.14 А</p>
                                        <h3>Контакты:</h3>
                                        <p class="Textbody">Телефон: +7(843)-663-57-04</p>
                                        <p>E-mail:
                                            <span id="cloak1fff2e4003f1428eead824e8e846d2a4"><a
                                                        href="mailto:liedovyi@mail.ru"> ArskArena@yandex.ru</a>
                                            </span>
                                        </p>
                                    </div>

                                    <div class="col-md-5">
                                        <a class="btn btn-default btn-block"
                                           href="https://yandex.ru/maps/?um=constructor%3A9789f8664307b5cdc67179c4b7df5f0ebf84dbe2a7451dc75543be5319643407&source=constructorLink"
                                           target="_blank" rel="noopener">Открыть на Яндекс.Карте <i class="fa fa-map-o"
                                                                                                     aria-hidden="true"></i></a>
                                        <div id="YMapsID_com_content_article_26_0_1_map" class="zhym-map-default"
                                             style="margin:0;padding:0;width:100%;height:500px;">
                                            <script type="text/javascript" charset="utf-8" async
                                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9789f8664307b5cdc67179c4b7df5f0ebf84dbe2a7451dc75543be5319643407&amp;width=auto&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header text-center">
                                                <h3>Обратная связь</h3>
                                            </div>
                                            <div class="card-body">
                                                <form action="{{ route('feedback.store') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="name">Ваше имя:*</label>
                                                        <input type="text" required placeholder="Имя"
                                                               class="form-control" id="name" name="name" maxlength="255"
                                                               style="width: 100%;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Телефон:*</label>
                                                        <input type="text" required placeholder="Телефон"
                                                               class="form-control" id="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="phone" maxlength="255"
                                                               style="width: 100%;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">E-mail:*</label>
                                                        <input type="text" required placeholder="Электронная почта"
                                                               class="form-control" id="email" name="email" maxlength="255"
                                                               style="width: 100%;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="comment">Комментарий:*</label>
                                                        <textarea id="comment" required name="comment"
                                                                  placeholder="Комментарий"
                                                                  style="width: 100%; height: 100px"></textarea>
                                                    </div>
                                                    <div class="text-center">
                                                        <input type="submit" value="Отправить" class="btn btn-primary">
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
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