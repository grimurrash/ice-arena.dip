@extends('layouts.main')
@section('head')
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Отзывы - Ледовая арена города Арск</title>
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
        <meta name="theme-color" content="#003399">
    </head>
    <body>
    <div class="t3-wrapper features-intro features-intro-2">
        @endsection
        @section('content')
            <div id="t3-mainbody" class="container t3-mainbody">
                <div class="row">

                    <!-- MAIN CONTENT -->
                    <div id="t3-content" class="t3-content col-xs-12">


                        <div class="item-page clearfix">


                            <!-- Article -->
                            <article>
                                <meta itemprop="inLanguage" content="ru-RU"/>
                                <meta itemprop="url" content="/otzyvy"/>


                                <!-- Aside -->
                                <!-- //Aside -->


                                <section class="article-content clearfix">
                                    <p></p></section>

                                <!-- footer -->
                                <!-- //footer -->


                            </article>
                            <!-- //Article -->


                            <div id="jc">

                                @if(session()->has('message'))
                                    <div class="text-center">
                                        <div class="alert alert-success">{{ session()->get('message') }}</div>
                                    </div>
                                @endif
                                @if(session()->has('errors'))
                                    <div class="text-center">
                                        <div class="alert alert-danger">{{ session()->get('errors') }}</div>
                                    </div>
                                @endif
                                <div id="comments"><h4>Отзывы
                                    </h4>
                                    @forelse($reviews as $review)
                                        <div class="comments-list" id="comments-list-0">
                                            <div class="even" id="comment-item-7">
                                                <div class="rbox">
                                                    <div class="comment-box">
                                                        <div class="comment-header">
                                                            <span class="comment-author">{{$review->author}}</span>
                                                        </div>
                                                        <div class="comment-body"
                                                             id="comment-body-7">{{$review->comment}}
                                                            <span class="comments-buttons">
                                                        <span class="comment-date">{{date('d.m.Y H:i',strtotime($review->created_at))}}</span>
                                                        </span>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="comments-list" id="comments-list-0">
                                            <div class="even" id="comment-item-7">
                                                <div class="rbox">
                                                    <div class="comment-box">
                                                        <div class="comment-header">
                                                            <span class="comment-author">Анастасия</span>
                                                        </div>
                                                        <div class="comment-body" id="comment-body-7">Нет отзывов
                                                            <span class="comments-buttons">
                                                        <span class="comment-date">10.02.2019 23:17</span>
                                                        </span>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                                <hr>

                                <div class="card">
                                    <form class="card-body" action="{{route('review.store')}}" method="POST">
                                        @csrf
                                        <h3>Добавить отзыв</h3>
                                        <div class="form-group">
                                            <label for="name">Имя(обязательно):</label>
                                            <input type="text" required id="name" class="form-control" name="author">
                                        </div>
                                        <div class="form-group">
                                            <label for="comment">Комментарий:</label>
                                            <textarea required id="comment" class="form-control"
                                                      name="comment"></textarea>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Отправить">
                                    </form>
                                </div>
                            </div>


                        </div>
                        <!-- //MAIN CONTENT -->

                    </div>
                </div>


                <nav class="wrap t3-navhelper ">
                    <div class="container">

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