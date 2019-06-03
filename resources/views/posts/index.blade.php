@extends('layouts.main')
@section('head')
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>{{$post->title}}</title>
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
                <div class="row">
                    <!-- MAIN CONTENT -->
                    <div id="t3-content" class="t3-content col-xs-12 col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">
                        <div class="item-page news-page-bg clearfix">
                            <!-- Article -->
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
                            <article>
                                <meta itemprop="inLanguage" content="ru-RU"/>
                                <meta itemprop="url"
                                      content="{{ asset('posts/'.$post->link) }}"/>
                                <header class="article-header clearfix">
                                    <h1 class="article-title" itemprop="headline">
                                        <a href="{{ asset('posts/'.$post->link) }}"
                                           itemprop="url"
                                           title="{{$post->title}}">
                                            {{$post->title}}</a>
                                    </h1>
                                </header>
                                <!-- Aside -->
                                <aside class="article-aside clearfix">
                                    <dl class="article-info  muted">
                                        <dt class="article-info-term">
                                            Подробности
                                        </dt>
                                        <dd class="category-name hasTooltip" title="Категория: ">
                                            <i class="fa fa-folder-open"></i>
                                            <a href="{{ asset('posts/categories/'.$post->category_id) }}"><span
                                                        itemprop="genre">{{$post->category->name}}</span></a></dd>
                                        <dd class="published hasTooltip" title="Опубликовано: ">
                                            <i class="icon-calendar"></i>
                                            <time datetime="{{date('Y-m-d H:i',strtotime($post->created_at))}}"
                                                  itemprop="datePublished">
                                                {{date('d F Y',strtotime($post->created_at))}}
                                            </time>
                                        </dd>
                                    </dl>

                                </aside>
                                <!-- //Aside -->

                                <link rel="stylesheet"
                                      href="/public/css/jquery.fancybox.min.css"/>
                                <script src="/public/js/jquery.fancybox.min.js"></script>
                                <div class="article-full-image-container">
                                    <a href="{{ asset('public/images/upload/'.$post->image->link) }}" data-fancybox
                                       data-caption="">
                                        <div class="article-full-image">
                                            <img src="{{ asset('public/images/upload/'.$post->image->link) }}" alt="">
                                        </div>
                                    </a>
                                </div>

                                <section class="article-content clearfix">
                                    {!! $post->text !!}
                                </section>

                                <!-- footer -->
                                <!-- //footer -->


                            </article>
                            @auth
                                {{--@if(Auth::user()->permission === 'admin')--}}
                                    <a href="{{ asset("admin/posts/$post->link/edit") }}"
                                       class="btn btn-primary btn-lg btn-block">
                                         Редактировать
                                    </a>
                                    <a href="{{ asset("admin/posts/$post->link/delete") }}" class="btn btn-danger btn-lg btn-block">
                                         Удалить
                                    </a>
                                {{--@endif--}}
                            @endauth
                            <!-- //Article -->
                            <hr>
                            <div class="card">
                                <div class="card-header">
                                    <h3>Комментарии</h3>
                                </div>
                                <div class="card-body">
                                    @forelse($post->comments() as $comment)
                                        <div class="card bg-light mb-3">
                                            <div class="card-header row" style="margin: 0">
                                                <div class="col-sm-6 text-left ">
                                                    <h5 class="text-muted">{{ $comment->author }}</h5>
                                                </div>
                                                <div class="col-sm-6 text-right">
                                                    <small class="text-muted">{{date('H:i d.m.Y',strtotime($comment->created_at))}}</small>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">{{ $comment->comment}}</p>
                                            </div>
                                        </div>
                                    @empty
                                        <h4>Комментариев нет</h4>
                                    @endforelse
                                </div>
                            </div>
                            <hr>
                            
                                <div class="card">
                                    <form class="card-body" action="{{route('comment.store',$post)}}" method="POST">
                                        @csrf
                                        <h3>Добавить комментарий</h3>
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

                    <!-- SIDEBAR LEFT -->
                    <div class="t3-sidebar t3-sidebar-left col-xs-12 col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9 ">
                        <div class="t3-module module_menu vmenu-mod " id="Mod123">
                            <div class="module-inner"><h3 class="module-title "><span>Каталог</span></h3>
                                <div class="module-ct">
                                    <ul class="menu" id="vmenu">
                                        @forelse($categories as $category)
                                            <li class="item-224 li-"><a
                                                        href="{{ asset('posts/categories/'.$category->link) }}">
                                                    <span class="" aria-hidden="true"></span>
                                                    <span class="item-text">{{$category->name}}</span>
                                                </a>
                                            </li>
                                        @empty
                                            <li class="item-224 li-"><a
                                                        href="#">
                                                    <span class="" aria-hidden="true"></span>
                                                    <span class="item-text">Новости</span>
                                                </a>
                                            </li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="t3-module module sidebar-news " id="Mod126">
                            <div class="module-inner"><h3 class="module-title "><span>Смотрите также:</span></h3>
                                <div class="module-ct">
                                    <div class="junewsultra  sidebar-news">
                                        @forelse($news_more as $news)
                                            <div class="news-item-cont">
                                                <div class="news-item">
                                                    <div class="news-desc">
                                                        <h4 class="news-title">
                                                            <a href="{{ asset('posts/'.$news->link) }}">
                                                                {{$news->title}} </a>
                                                        </h4>
                                                        <div class="news-info">
                                                            <dl class="article-info  muted">
                                                                <dd class="published hasTooltip" title=""
                                                                    data-original-title="Опубликовано: ">
                                                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                    <time datetime="{{date('d.m.Y',strtotime($news->created_at))}}"
                                                                          itemprop="datePublished">
                                                                        {{date('d.m.Y',strtotime($news->created_at))}}
                                                                    </time>
                                                                </dd>
                                                            </dl>
                                                            <div class="jn-hit-n-rating">
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="news-item-cont">
                                                <div class="news-item">
                                                    <div class="news-img">

                                                    </div>
                                                    <div class="news-desc">
                                                        <h4 class="news-title">
                                                            <a href="/press-tsentr/premera-ledovogo-shou">
                                                                Премьера ледового шоу мирового уровня для всей
                                                                семьи... </a>
                                                        </h4>
                                                        <div class="news-info">
                                                            <dl class="article-info  muted">
                                                                <dd class="published">
                                                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                    <time datetime="09.11.2018"
                                                                          itemprop="datePublished">
                                                                        09.11.2018
                                                                    </time>
                                                                </dd>

                                                                <dd class="hits">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    <meta itemprop="interactionCount"
                                                                          content="UserPageVisits:448">
                                                                    448
                                                                </dd>
                                                            </dl>

                                                            <div class="jn-hit-n-rating">
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //SIDEBAR LEFT -->

                </div>
            </div>
            <nav class="wrap t3-navhelper ">
                <div class="container">

                    <ol class="breadcrumb ">
                        <li class="active"><span class="hasTooltip"><i class="fa fa-map-marker" data-toggle="tooltip"
                                                                       title="Вы здесь: "></i></span></li>
                        <li><a href="/" class="pathway">Главная</a><span class="divider">/</span></li>
                        <li><a href="{{asset('posts/categories/'.$post->category->link) }}"
                               class="pathway">{{$post->category->name}}</a><span class="divider">/</span></li>
                        <li><span>{{$post->title}}</span>
                        </li>
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