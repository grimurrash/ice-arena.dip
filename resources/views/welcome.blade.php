@extends('layouts.main')
@section('head')
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Катание на коньках, тренажерный зал - Ледовая арена города Арск</title>
        <link href="/public/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
        <link href="/public/css/css-36da8-27468.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/public/css/css-579db-00020.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/public/css/fonts.css" rel="stylesheet" type="text/css"/>
        <script src="/public/js/js-3444a-00020.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(window).on('load', function () {
                new JCaption('img.caption');
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

        <!-- Fonts -->
        <meta name="theme-color" content="#003399">
    </head>
    <body>
    <div class="t3-wrapper features-intro features-intro-2">
@endsection

@section('content')
            <div class="slider-wrap">
                <div class="slider">


                    <div class="custom features-intro-2fw mp-banner">
                        <div class="a-header a-bg center">
                            <div class="container container-bg">
                                <h3 class="header">Массовые катания 2 и 3 марта (суббота, воскресенье)</h3>
                                <h3 class="header"><i class="fa fa-snowflake-o" aria-hidden="true"></i> <i
                                            class="fa fa-snowflake-o" aria-hidden="true"></i> <i
                                            class="fa fa-snowflake-o"
                                            aria-hidden="true"></i></h3>
                                <div class="desc">
                                    <p class="med-text">Сеанс 1 час, начало:<br/> <b> суббота - 17:30, 19:00<br/>
                                            воскресенье -
                                            16:30, 18:00</b></p>
                                </div>
                                <div class="col-md-12">
                                    <table class="table price-table" style="max-width: 600px;">
                                        <tbody>
                                        <tr>
                                            <td>Цена билета:</td>
                                            <td>Прокат коньков:</td>
                                        </tr>
                                        <tr>
                                            <td>детский - 120 <i class="fa fa-rub" aria-hidden="true"></i></td>
                                            <td>120 <i class="fa fa-rub" aria-hidden="true"></i> за пару</td>
                                        </tr>
                                        <tr>
                                            <td>взрослый - 170 <i class="fa fa-rub" aria-hidden="true"></i></td>
                                            <td>залог - 1000 <i class="fa fa-rub" aria-hidden="true"></i></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="btns center"><a class="btn btn-default" href="/uslugi/massovoe-katanie"><i
                                                class="fa fa-chevron-circle-right" aria-hidden="true"></i> Подробнее...</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="features-intro ">
                <div class="row-feature  news-wrap-mod " id="Mod98">
                    <div class="container"><h2 class="row row-feature-title "><span>Новости и события</span></h2>
                        <div class="row row-feature-ct">

                            <div class="custom news-wrap-mod">
                                <div class="news-mp-col col-md-8 col-sm-12">
                                    <div class="moduletable news1">
                                        <div class="junewsultra  news1">
                                            @forelse($posts as $post)
                                                <div class="news-item-cont col-md-12">
                                                    <div class="news-item">
                                                        <div class="news-img"
                                                             style="display: flex; align-items: center; height: 100%">
                                                            <a href="{{ asset('posts/'.$post->link) }}"
                                                               title="{{$post->title}}" style="width: 100%;"><img
                                                                        src="{{ asset("public/images/upload/".$post->image->link)}}"
                                                                        alt="{{$post->title}}" style="width: 100%;"/></a>
                                                        </div>
                                                        <div class="news-desc">
                                                            <h4 class="news-title">
                                                                <a href="{{asset('posts/'.$post->link)}}">
                                                                    {{ $post->title }} </a>
                                                            </h4>
                                                            <div class="news-info">
                                                                <dl class="article-info  muted">
                                                                    <dd class="published hasTooltip" title=""
                                                                        data-original-title="Опубликовано: ">
                                                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                        <time datetime="{{date('d.m.Y',strtotime($post->created_at))}}"
                                                                              itemprop="datePublished">
                                                                            {{date('d.m.Y',strtotime($post->created_at))}}
                                                                        </time>
                                                                    </dd>
                                                                </dl>

                                                                <div class="jn-hit-n-rating">
                                                                </div>
                                                            </div>

                                                            <div class="news-intro">
                                                                {{ $post->anons }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="news-item-cont col-md-12">
                                                    <div class="news-item">
                                                        <div class="news-img">
                                                            <a href="{{route('posts.default')}}"
                                                               title="А ТЫ ИДЕШЬ НА ЛЕДОВУЮ ВЕЧЕРИНКУ &amp;quot;Love Ice Party&amp;quot; 14 февраля в 19.00?"><img
                                                                        src="/public/images/290x250/diamond620525640-9a1dec96619451f303c293cff36dfde9.jpg"
                                                                        alt="А ТЫ ИДЕШЬ НА ЛЕДОВУЮ ВЕЧЕРИНКУ &amp;quot;Love Ice Party&amp;quot; 14 февраля в 19.00?"/></a>
                                                        </div>
                                                        <div class="news-desc">
                                                            <h4 class="news-title">
                                                                <a href="{{route('posts.default')}}">
                                                                    А ТЫ ИДЕШЬ НА ЛЕДОВУЮ ВЕЧЕРИНКУ &quot;Love Ice Party&quot;
                                                                    14
                                                                    февраля в 19.00? </a>
                                                            </h4>
                                                            <div class="news-info">
                                                                <dl class="article-info  muted">
                                                                    <dd class="published hasTooltip" title=""
                                                                        data-original-title="Опубликовано: ">
                                                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                        <time datetime="10.02.2019"
                                                                              itemprop="datePublished">
                                                                            10.02.2019
                                                                        </time>
                                                                    </dd>

                                                                    <dd class="hits">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        <meta itemprop="interactionCount"
                                                                              content="UserPageVisits:88">
                                                                        Просмотров: 88
                                                                    </dd>
                                                                </dl>

                                                                <div class="jn-hit-n-rating">
                                                                </div>
                                                            </div>

                                                            <div class="news-intro">
                                                                💘Романтическая вечеринка в Ледовом дворце состоится 14
                                                                февраля в
                                                                19.00!!! Ледовая Арена и Love Radio Vologda 96,4 FM
                                                                приглашают тебя
                                                                провести, пожалуй, самый романтичный вечер в году...
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                <div class="news-mp-col col-md-4 col-sm-12">
                                    <div class="news-more-wrap">
                                        <div class="moduletable news-more-mod">
                                            <h3>Смотрите также:</h3>
                                            <div class="junewsultra  news-more-mod">
                                                @forelse($news_more as $news)
                                                    <div class="news-item-cont col-md-12">
                                                        <div class="news-item">
                                                            <div class="news-desc">
                                                                <h4 class="news-title">
                                                                    <a href="{{ asset('posts/'.$post->link) }}">
                                                                        {{$news->title}} </a>
                                                                </h4>
                                                                <div class="news-info">
                                                                    <dl class="article-info  muted">
                                                                        <dd class="published hasTooltip" title=""
                                                                            data-original-title="Опубликовано: ">
                                                                            <i class="fa fa-clock-o"
                                                                               aria-hidden="true"></i>
                                                                            <time datetime="{{date('d.m.Y',strtotime($post->created_at))}}"
                                                                                  itemprop="datePublished">
                                                                                {{date('d.m.Y',strtotime($post->created_at))}}
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
                                                    <div class="news-item-cont col-md-12">
                                                        <div class="news-item">
                                                            <div class="news-img">

                                                            </div>
                                                            <div class="news-desc">
                                                                <h4 class="news-title">
                                                                    <a href="/press-tsentr/ob-yavleniya/pervenstvo-sankt-peterburga-sredi-yunoshej-2005-g-r">
                                                                        Первенство Санкт-Петербурга среди юношей 2005
                                                                        г.р. </a>
                                                                </h4>
                                                                <div class="news-info">
                                                                    <dl class="article-info  muted">
                                                                        <dd class="published hasTooltip" title=""
                                                                            data-original-title="Опубликовано: ">
                                                                            <i class="fa fa-clock-o"
                                                                               aria-hidden="true"></i>
                                                                            <time datetime="12.01.2019"
                                                                                  itemprop="datePublished">
                                                                                12.01.2019
                                                                            </time>
                                                                        </dd>

                                                                        <dd class="hits">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            <meta itemprop="interactionCount"
                                                                                  content="UserPageVisits:66">
                                                                            Просмотров: 66
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
                        </div>
                    </div>
                </div>
                <div class="row-feature  comments-wrap " id="Mod105">
                    <div class="container">
                        <div class="row row-feature-ct">

                            <div class="custom comments-wrap">
                                <h3 class="row-feature-title center"><i class="fa fa-comments-o" aria-hidden="true"></i>
                                    Отзывы
                                </h3>
                                <div class="comments-wrap">
                                    <div class="moduletable">
                                        <div class="jcomments-latest equal">
                                            @forelse($comments as $comment)
                                                <div class="c-item-wrap col-md-4 col-xs-12">
                                                    <div class="c-item">
                                                        <ul class="c-info list-inline">
                                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> <span
                                                                        class="date">{{date('d.m.Y H:i',strtotime($comment->created_at))}}</span>
                                                            </li>
                                                            <li><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                                                <span
                                                                        class="author">{{$comment->author}}</span></li>
                                                        </ul>
                                                        <div class="comment rounded ">
                                                            <div>{{$comment->anons() }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="c-item-wrap col-md-4 col-xs-12">
                                                    <div class="c-item">
                                                        <ul class="c-info list-inline">

                                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> <span
                                                                        class="date">10.02.2019 23:17</span>
                                                            </li>


                                                            <li><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                                                <span
                                                                        class="author">Анастасия</span></li>
                                                        </ul>

                                                        <div class="comment rounded ">


                                                            <div>
                                                                Были на массовых катаниях в Ледовом дворце с детьми,
                                                                причем младший
                                                                ребенок не умеет кататься на ...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c-item-wrap col-md-4 col-xs-12">
                                                    <div class="c-item">
                                                        <ul class="c-info list-inline">

                                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> <span
                                                                        class="date">07.01.2019 18:05</span>
                                                            </li>


                                                            <li><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                                                <span
                                                                        class="author">Александр Викторов</span></li>
                                                        </ul>

                                                        <div class="comment rounded ">


                                                            <div>
                                                                Решил тоже написать отзыв. Мы катаемся на коньках редко,
                                                                обычно на
                                                                каникулах зимой ездим семьей и ...
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="c-item-wrap col-md-4 col-xs-12">
                                                    <div class="c-item">
                                                        <ul class="c-info list-inline">

                                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> <span
                                                                        class="date">09.11.2018 17:37</span>
                                                            </li>


                                                            <li><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                                                <span
                                                                        class="author">Иван Иванович</span></li>
                                                        </ul>

                                                        <div class="comment rounded ">


                                                            <div>
                                                                Катались с коллегами, заказывали массовое катание для
                                                                организации.
                                                                Очень весело провели время!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">&nbsp;</div>
                                <div class="btns center"><a class="btn btn-default" href="{{route('reviews')}}"><i
                                                class="fa fa-chevron-circle-right" aria-hidden="true"></i> Все
                                        отзывы</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-feature  u-mod " id="Mod95">
                    <div class="container"><h2 class="row row-feature-title "><span>Наши услуги</span></h2>
                        <div class="row row-feature-ct">

                            <div class="custom u-mod">
                                <div class="container">
                                    <div class="row">
                                        <div class="u-item-cont col-md-6 col-sm-12">
                                            <div class="u-item"><a href="/uslugi/massovoe-katanie">
                                                    <div class="u-img"
                                                         style="background: url('/public/images/uslugi-cat/mass1.jpg') center no-repeat;">
                                                        &nbsp;
                                                    </div>
                                                    <div class="u-desc">
                                                        <h3 class="u-title">Массовое катание</h3>
                                                        <p>Массовое катание на коньках проходит согласно расписанию в
                                                            любое
                                                            время
                                                            года, в любую погоду на крытой ледовой арене.</p>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="u-item-cont col-md-6 col-sm-12">
                                            <div class="u-item"><a href="/uslugi/arenda-ledovogo-polya">
                                                    <div class="u-img"
                                                         style="background: url('/public/images/uslugi-cat/arenda.jpg') center no-repeat;">
                                                        &nbsp;
                                                    </div>
                                                    <div class="u-desc">
                                                        <h3 class="u-title">Аренда ледового поля</h3>
                                                        <p>Почасовая аренда ледового поля для проведения тренировок на
                                                            льду,
                                                            соревнований и других спортивно-массовых мероприятий
                                                            предоставляется
                                                            по
                                                            предварительной заявке.</p>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="u-item-cont col-md-6 col-sm-12">
                                            <div class="u-item"><a href="/uslugi/sportivnoe-katanie">
                                                    <div class="u-img"
                                                         style="background: url('/public/images/uslugi-cat/sport-kat.jpg') center no-repeat;">
                                                        &nbsp;
                                                    </div>
                                                    <div class="u-desc">
                                                        <h3 class="u-title">Спортивное катание</h3>
                                                        <p>Спортивное катание – это время для занятий на льду учащихся
                                                            детско-юношеских спортивных школ отделений фигурного катания
                                                            и
                                                            хоккея с
                                                            шайбой.</p>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="u-item-cont col-md-6 col-sm-12">
                                            <div class="u-item"><a href="/uslugi/prokat-zatochka-i-formovka-konkov">
                                                    <div class="u-img"
                                                         style="background: url('/public/images/uslugi-cat/prokat.jpg') center no-repeat;">
                                                        &nbsp;
                                                    </div>
                                                    <div class="u-desc">
                                                        <h3 class="u-title">Прокат коньков</h3>
                                                        <p>Предоставляем коньки напрокат (размерный ряд от 26 размера).
                                                            Обязательно
                                                            внесение залога.</p>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-feature  features-item-mod " id="Mod99">
                    <div class="container">
                        <div class="row row-feature-ct">

                            <div class="custom features-item-mod">
                                <h2 class="row row-feature-title"><img src="/public/images/osobennosti-h-img.png"
                                                                       alt=""/>
                                    Преимущества
                                    Ледовой Арены</h2>
                                <div class="features-item-cont col-md-6 col-sm-12">
                                    <div class="f-item">
                                        <div class="f-img col-md-2"><img src="/public/images/features/1.png" alt=""/>
                                        </div>
                                        <div class="f-desc col-md-10">
                                            <h3 class="f-title">Крытая ледовая арена в черте города</h3>
                                            <p>Ледовая Арена расположена в черте города и оборудованная всем необходимым
                                                как для
                                                массовых катаний и мероприятий, так и для профессиональных тренировок и
                                                соревнований.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="features-item-cont col-md-6 col-sm-12">
                                    <div class="f-item">
                                        <div class="f-img col-md-2"><img src="/public/images/features/4.png" alt=""/>
                                        </div>
                                        <div class="f-desc col-md-10">
                                            <h3 class="f-title">Уютное кафе</h3>
                                            <p>На втором этаже Ледовой арены располагается кафе на 24 посадочных места с
                                                видом
                                                на ледовое поле.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">&nbsp;</div>
                                <div class="features-item-cont col-md-6 col-sm-12">
                                    <div class="f-item">
                                        <div class="f-img col-md-2"><img src="/public/images/features/2.png" alt=""/>
                                        </div>
                                        <div class="f-desc col-md-10">
                                            <h3 class="f-title">Раздевалки</h3>
                                            <p>В здании оборудованы раздевалки для хоккеистов, фигуристов, посетителей
                                                массовых
                                                катаний, класса хореографии и тренажерного зала.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="features-item-cont col-md-6 col-sm-12">
                                    <div class="f-item">
                                        <div class="f-img col-md-2"><img src="/public/images/features/5.png" alt=""/>
                                        </div>
                                        <div class="f-desc col-md-10">
                                            <h3 class="f-title">Автомобильная парковка</h3>
                                            <p>Рядом со зданием Ледовой Арены имеется бесплатная автомобильная
                                                парковка.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">&nbsp;</div>
                                <div class="features-item-cont col-md-6 col-sm-12">
                                    <div class="f-item">
                                        <div class="f-img col-md-2"><img src="/public/images/features/3.png" alt=""/>
                                        </div>
                                        <div class="f-desc col-md-10">
                                            <h3 class="f-title">Общественный транспорт в шаговой доступности</h3>
                                            <p>В шаговой доступности находятся остановки городских автобусов № 19, № 8,
                                                № 43</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
