@extends('layouts.main')
@section('head')
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description"
          content="Массовые катания, тренажерный зал, аренда ледового поля, хоккей, хореографический класс в Арск"/>
    <title>Размещение информации (рекламы) - Ледовая арена города Арск</title>
    <link href="/public/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
    <link href="/public/css/css-36da8-27468.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/public/css/css-579db-00020.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/public/css/fonts.css" rel="stylesheet" type="text/css"/>
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

    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/ba_modal.js?2.3.0"></script>
    <link rel="stylesheet" href="/public/css/ba-style.css?2.3.0">
    <link rel="stylesheet" href="/public/css/ba-effects.css?2.3.0">
    <script type="text/javascript" src="/public/js/ba_isotope.js?2.3.0"></script>
    <script type="text/javascript"
            src="/public/js/jquery.lazyload.min.js?2.3.0"></script>
    <script type="text/javascript" src="/public/js/ba-gallery.js?2.3.0"></script>
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


            <div class="item-page clearfix">


                <!-- Article -->
                <article>
                    <meta itemprop="inLanguage" content="ru-RU"/>
                    <meta itemprop="url" content="/uslugi/razmeshchenie-informatsii-reklamy"/>


                    <!-- Aside -->
                    <!-- //Aside -->


                    <section class="article-content clearfix">

                        <div class="a-header a-bg rekl">
                            <div class="container container-bg bg2">
                                <h1 class="header" style="text-align: center;">Размещение информации (рекламы) на
                                    Ледовой Арене</h1>
                                <div class="desc center">
                                    <p>Реклама на ледовой арене – <em>это эффективный инструмент коммуникаций&nbsp;</em>с
                                        позитивно настроенной публикой.</p>
                                    <p>У нас регулярно проходят и <span style="text-decoration: underline;">пользуются большой популярностью</span>
                                        массовые катания,&nbsp;собирая на льду людей всех возрастов и профессий.</p>
                                    <p>На протяжении всего свободного катания, хоккейных матчей, тренировок&nbsp;и во
                                        время проведения мастер-классов <strong>люди будут видеть вашу рекламу.</strong>
                                    </p>
                                    <p>Информацию можно разместить не только на бортах хоккейной площадки, но и на
                                        внутренних элементах здания.</p>
                                    <p>Размещение рекламы производится на основании договора оказания услуг.</p>
                                    <p>Дополнительная информация и прием заявок по телефону <a href="tel:+78172272423">(8172)
                                        27-24-23</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="a-bg price2 u-tab">
                            <div class="container">
                                <div class="row center">
                                    <h3 class="center">СТОИМОСТЬ РАЗМЕЩЕНИЯ В МЕСЯЦ:</h3>
                                    <table class="table price-table" style="max-width: 600px;">
                                        <tbody>
                                        <tr>
                                            <td>На внутренней стороне бортов (сектор А,В,С)</td>
                                            <td>500 <i class="fa fa-rub" aria-hidden="true"></i> за 1 пог. метр</td>
                                        </tr>
                                        <tr>
                                            <td>На внешней стороне бортов (сектор D)</td>
                                            <td>350 <i class="fa fa-rub" aria-hidden="true"></i> за 1 пог. метр</td>
                                        </tr>
                                        <tr>
                                            <td>На внутренних элементах здания</td>
                                            <td>250 <i class="fa fa-rub" aria-hidden="true"></i> за 1 кв. метр</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="a-bg a-gallery">
                            <div class="container">
                                <div class='ba-gallery ' data-gallery='9' style="background-color:rgba(0,0,0,0.9);">
                                    <div id="ba-notification" class="gallery-notification"><i
                                            class="zmdi zmdi-close"></i><h4>Error</h4>
                                        <p></p></div>
                                    <div class="modal-scrollable" style="display:none;">
                                        <div class="ba-modal gallery-modal " style="display:none">
                                            <div class="ba-share-icons" style="background-color:rgba(0,0,0,0.9);">
                                                <div class="ba-share"><i
                                                        class="ba-twitter-share-button zmdi zmdi-twitter"></i><i
                                                        class="ba-facebook-share-button zmdi zmdi-facebook"></i><i
                                                        class="ba-google-share-button zmdi zmdi-google"></i><i
                                                        class="ba-pinterest-share-button zmdi zmdi-pinterest"></i><i
                                                        class="ba-linkedin-share-button zmdi zmdi-linkedin"></i><i
                                                        class="ba-vk-share-button zmdi zmdi-vk"></i><i
                                                        class="ba-ok-share-button zmdi zmdi-odnoklassniki"></i></div>
                                            </div>
                                            <div class="ba-modal-header row-fluid"
                                                 style="box-shadow: inset 0px 130px 100px -125px rgba(0,0,0,0.9);">
                                                <div class="ba-modal-title"><h3 class="modal-title"
                                                                                style="color:rgba(255, 255, 255, 1);">
                                                    Размещение информации (рекламы) - Ледовая арена города Арск</h3>
                                                </div>
                                                <div class="ba-center-icons"><i style="color:rgba(255, 255, 255, 1)"
                                                                                class="ba-zoom-in zmdi zmdi-zoom-in"></i><i
                                                        class="ba-zoom-out disabled-item zmdi zmdi-fullscreen-exit"
                                                        style="color:rgba(255, 255, 255, 1)"></i></div>
                                                <div class="ba-right-icons">
                                                    <div class="header-icons"><a href="#"
                                                                                 class="ba-download-img zmdi zmdi-download"
                                                                                 style="color:rgba(255, 255, 255, 1)"
                                                                                 download></a><i class="zmdi zmdi-share"
                                                                                                 style="color:rgba(255, 255, 255, 1)"></i>
                                                        <div class="ba-like-wrapper">
                                                            <div class="ba-like">
                                                                <div class="ba-likes"><p></p></div>
                                                                <i class="ba-add-like zmdi zmdi-favorite"
                                                                   style="color:rgba(255, 255, 255, 1)"></i></div>
                                                        </div>
                                                        <i class="zmdi zmdi-fullscreen display-lightbox-fullscreen"
                                                           style="color:rgba(255, 255, 255, 1)"></i><i
                                                                class="ba-icon-close zmdi zmdi-close"
                                                                style="color:rgba(255, 255, 255, 1)"></i></div>
                                                </div>
                                            </div>
                                            <div class="ba-modal-body">
                                                <div class="modal-image"><input type="hidden" class="ba-juri" value="/">
                                                </div>
                                                <div class="description-wrapper"></div>
                                            </div>
                                        </div>
                                        <input type='hidden' class='lightbox-options'
                                               value='{"lightbox_border":"rgba(255, 255, 255, 1)","lightbox_bg":"#000000","lightbox_bg_transparency":"0.9","display_likes":"1","display_header":"1","display_zoom":"1","lightbox_display_title":"1","lightbox_width":"45","auto_resize":"1","disable_lightbox":"0","twitter_share":"1","odnoklassniki_share":"1","description_position":"below","facebook_share":"1","google_share":"1","pinterest_share":"1","linkedin_share":"1","vkontakte_share":"1","display_download":"1","enable_alias":"1","display_fullscreen":"1","header_icons_color":"rgba(255, 255, 255, 1)"}'>
                                        <div class="modal-nav" style="display:none"><i
                                                class="ba-left-action zmdi zmdi-chevron-left"
                                                style="color:rgba(255, 255, 255, 1); background-color:rgba(35, 35, 35, 1)"></i><i
                                                class="ba-right-action zmdi zmdi-chevron-right"
                                                style="color:rgba(255, 255, 255, 1); background-color:rgba(35, 35, 35, 1)"></i>
                                        </div>
                                    </div>
                                    <div class="ba-gallery-row-wrapper">
                                        <div class='ba-gallery-content-wrapper'>
                                            <div class='ba-gallery-content'>
                                                <div class='row-fluid'>
                                                    <div class='span12 ba-gallery-grid css-style-1'>
                                                        <div class='ba-gallery-items category-0 category-1'
                                                             style='display: none;'><a
                                                                href='/uslugi/razmeshchenie-informatsii-reklamy?96'
                                                                class='ba-gallery-image-link'></a>
                                                            <div class='ba-image'><img
                                                                    data-original='/public/images/bagallery/gallery-9/thumbnail/category-1/Razmeshchenie-reklami-4.jpg?1543072550'
                                                                    alt=''>
                                                                <div class='ba-caption'>
                                                                    <div class='ba-caption-content'></div>
                                                                </div>
                                                                <input type='hidden' class='image-id'
                                                                       data-id='ba-image-96'
                                                                       value='{"id":"96","form_id":"9","category":"category-1","name":"Razmeshchenie-reklami-4.jpg","path":"\/images\/bagallery\/original\/Razmeshchenie-reklami-4.jpg","url":"https:\/\/arena-vologda.ru\/images\/bagallery\/gallery-9\/watermark\/Razmeshchenie-reklami-4.jpg","thumbnail_url":"\/images\/bagallery\/gallery-9\/thumbnail\/category-1\/Razmeshchenie-reklami-4.jpg","title":"","short":"","alt":"","description":"","link":"","video":"","settings":null,"likes":"0","imageId":"39","target":"blank","lightboxUrl":"","watermark_name":"Razmeshchenie-reklami-4.jpg","hideInAll":"0","suffix":""}'>
                                                            </div>
                                                        </div>
                                                        <div class='ba-gallery-items category-0 category-1'
                                                             style='display: none;'><a
                                                                href='/uslugi/razmeshchenie-informatsii-reklamy?97'
                                                                class='ba-gallery-image-link'></a>
                                                            <div class='ba-image'><img
                                                                    data-original='/public/images/bagallery/gallery-9/thumbnail/category-1/Razmeshchenie-reklami-3.jpg?1543072550'
                                                                    alt=''>
                                                                <div class='ba-caption'>
                                                                    <div class='ba-caption-content'></div>
                                                                </div>
                                                                <input type='hidden' class='image-id'
                                                                       data-id='ba-image-97'
                                                                       value='{"id":"97","form_id":"9","category":"category-1","name":"Razmeshchenie-reklami-3.jpg","path":"\/images\/bagallery\/original\/Razmeshchenie-reklami-3.jpg","url":"https:\/\/arena-vologda.ru\/images\/bagallery\/gallery-9\/watermark\/Razmeshchenie-reklami-3.jpg","thumbnail_url":"\/images\/bagallery\/gallery-9\/thumbnail\/category-1\/Razmeshchenie-reklami-3.jpg","title":"","short":"","alt":"","description":"","link":"","video":"","settings":null,"likes":"0","imageId":"40","target":"blank","lightboxUrl":"","watermark_name":"Razmeshchenie-reklami-3.jpg","hideInAll":"0","suffix":""}'>
                                                            </div>
                                                        </div>
                                                        <div class='ba-gallery-items category-0 category-1'
                                                             style='display: none;'><a
                                                                href='/uslugi/razmeshchenie-informatsii-reklamy?98'
                                                                class='ba-gallery-image-link'></a>
                                                            <div class='ba-image'><img
                                                                    data-original='/public/images/bagallery/gallery-9/thumbnail/category-1/Razmeshchenie-reklami-2.jpg?1543072550'
                                                                    alt=''>
                                                                <div class='ba-caption'>
                                                                    <div class='ba-caption-content'></div>
                                                                </div>
                                                                <input type='hidden' class='image-id'
                                                                       data-id='ba-image-98'
                                                                       value='{"id":"98","form_id":"9","category":"category-1","name":"Razmeshchenie-reklami-2.jpg","path":"\/images\/bagallery\/original\/Razmeshchenie-reklami-2.jpg","url":"https:\/\/arena-vologda.ru\/images\/bagallery\/gallery-9\/watermark\/Razmeshchenie-reklami-2.jpg","thumbnail_url":"\/images\/bagallery\/gallery-9\/thumbnail\/category-1\/Razmeshchenie-reklami-2.jpg","title":"","short":"","alt":"","description":"","link":"","video":"","settings":null,"likes":"0","imageId":"41","target":"blank","lightboxUrl":"","watermark_name":"Razmeshchenie-reklami-2.jpg","hideInAll":"0","suffix":""}'>
                                                            </div>
                                                        </div>
                                                        <div class='ba-gallery-items category-0 category-1'
                                                             style='display: none;'><a
                                                                href='/uslugi/razmeshchenie-informatsii-reklamy?99'
                                                                class='ba-gallery-image-link'></a>
                                                            <div class='ba-image'><img
                                                                    data-original='/public/images/bagallery/gallery-9/thumbnail/category-1/Razmeshchenie-reklami-1.jpg?1543072550'
                                                                    alt=''>
                                                                <div class='ba-caption'>
                                                                    <div class='ba-caption-content'></div>
                                                                </div>
                                                                <input type='hidden' class='image-id'
                                                                       data-id='ba-image-99'
                                                                       value='{"id":"99","form_id":"9","category":"category-1","name":"Razmeshchenie-reklami-1.jpg","path":"\/images\/bagallery\/original\/Razmeshchenie-reklami-1.jpg","url":"https:\/\/arena-vologda.ru\/images\/bagallery\/gallery-9\/watermark\/Razmeshchenie-reklami-1.jpg","thumbnail_url":"\/images\/bagallery\/gallery-9\/thumbnail\/category-1\/Razmeshchenie-reklami-1.jpg","title":"","short":"","alt":"","description":"","link":"","video":"","settings":null,"likes":"0","imageId":"42","target":"blank","lightboxUrl":"","watermark_name":"Razmeshchenie-reklami-1.jpg","hideInAll":"0","suffix":""}'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type='hidden' class='gallery-options'
                                                       value='{"thumbnail_layout":"1","column_number":"4","image_spacing":"10","caption_bg":"#000000","title_color":"rgba(255, 255, 255, 1)","title_weight":"bold","title_size":"18","title_alignment":"left","tags_method":"","colors_method":"","category_color":"rgba(255, 255, 255, 1)","category_weight":"normal","category_size":"14","category_alignment":"left","description_color":"rgba(255, 255, 255, 1)","description_weight":"normal","description_size":"12","id":"9","pagination_type":"slider","description_alignment":"left","caption_opacity":"0.75","sorting_mode":"","random_sorting":"0","tablet_numb":"3","phone_land_numb":"2","phone_port_numb":"2","disable_auto_scroll":"1"}'><input
                                                    type="hidden" class="current-root"
                                                    value="/uslugi/razmeshchenie-informatsii-reklamy"><input
                                                    type='hidden' value='grid' class='gallery-layout'><input
                                                    type='hidden' value='0' class='page-refresh'><input type='hidden'
                                                                                                        value='Галерея создает изображения для предпросмотра. Подождите, пожалуйста...'
                                                                                                        class='creating-thumbnails'><input
                                                    type='hidden'
                                                    value='{"disable_right_clk":"1","disable_shortcuts":"1","disable_dev_console":"1"}'
                                                    class='copyright-options'>
                                                <div class='row-fluid'>
                                                    <div class='span12 ba-pagination'><input type='hidden'
                                                                                             class='ba-pagination-options'
                                                                                             value='{"pagination_type":"slider","images_per_page":"4","pagination_bg":"rgba(238, 238, 238, 1)","pagination_bg_hover":"rgba(156, 12, 113, 1)","pagination_border":"rgba(0, 0, 0, 0)","pagination_font":"rgba(26, 26, 26, 1)","pagination_font_hover":"rgba(255, 255, 255, 1)","pagination_radius":"50","pagination_alignment":"center"}'><input
                                                            type='hidden' class='ba-pagination-constant'
                                                            value='Предыдущий-_-Следующий-_-Загрузить ещё-_-Прокрутить наверх'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='ba-gallery-substrate' style='height: 0;'></div>
                            </div>
                        </div>
                    </section>

                    <!-- footer -->
                    <!-- //footer -->


                </article>
                <!-- //Article -->


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
                <li><a href="/uslugi" class="pathway">Услуги</a><span class="divider">/</span></li>
                <li><span>Размещение информации (рекламы)</span></li>
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