<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@yield('head')
    <header id="t3-mainnav" class="header-div-wrap">
        <!-- OFF-CANVAS -->

        <!-- OFF-CANVAS SIDEBAR -->
        <div id="t3-off-canvas" class="t3-off-canvas ">

            <div class="t3-off-canvas-header">
                <h2 class="t3-off-canvas-header-title">Навигация</h2>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="t3-off-canvas-body">
                <div class="t3-module module main-menu-sidebar " id="Mod103">
                    <div class="module-inner">
                        <div class="module-ct">
                            <ul class="menu">
                                <li class="item-101 li- hidden"><a href="/">
                                        <span class="" aria-hidden="true"></span>
                                        <span class="item-text">Главная страница</span>
                                    </a>
                                </li>
                                <li class="item-111 li- hidden-child current active deeper parent"><a
                                            href="/uslugi">
                                        <span class="" aria-hidden="true"></span>
                                        <span class="item-text">Услуги</span>
                                    </a>
                                    <ul class="nav-child unstyled small">
                                        <li class="item-227 li-"><a href="/uslugi/massovoe-katanie">
                                                <span class="" aria-hidden="true"></span>
                                                <span class="item-text">Массовое катание</span>
                                            </a>
                                        </li>
                                        <li class="item-229 li-"><a href="/uslugi/arenda-ledovogo-polya">
                                                <span class="" aria-hidden="true"></span>
                                                <span class="item-text">Аренда ледового поля</span>
                                            </a>
                                        </li>
                                        <li class="item-235 li-"><a href="/uslugi/prokat-zatochka-i-formovka-konkov">
                                                <span class="" aria-hidden="true"></span>
                                                <span class="item-text">Прокат коньков</span>
                                            </a>
                                        </li>
                                        <li class="item-233 li-"><a href="/uslugi/sportivnoe-katanie">
                                                <span class="" aria-hidden="true"></span>
                                                <span class="item-text">Спортивное катание</span>
                                            </a>
                                        </li>
                                        <li class="item-237 li-"><a href="/uslugi/razmeshchenie-informatsii-reklamy">
                                                <span class="" aria-hidden="true"></span>
                                                <span class="item-text">Размещение информации (рекламы)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="item-112 li-"><a href="/uslugi/razmeshchenie-informatsii-reklamy">
                                        <span aria-hidden="true"></span>
                                        <span class="item-text">Реклама</span>
                                    </a>
                                </li>
                                <li class="item-112 li-"><a href="/uslugi/razmeshchenie-informatsii-reklamy">
                                        <span aria-hidden="true"></span>
                                        <span class="item-text">Контакт</span>
                                    </a>
                                </li>
                                {{--<li class="item-115 li- rasp-btn hidden-child deeper parent"><a href="/raspisaniya">--}}
                                        {{--<span class="fa fa-calendar" aria-hidden="true"></span>--}}
                                        {{--<span class="item-text">Расписания</span>--}}
                                    {{--</a>--}}
                                    {{--<ul class="nav-child unstyled small">--}}
                                        {{--<li class="item-274 li- deeper parent"><a--}}
                                                    {{--href="/raspisaniya/grafik-zagruzki-ledovoj-areny">--}}
                                                {{--<span class="" aria-hidden="true"></span>--}}
                                                {{--<span class="item-text">График загрузки ледовой арены</span>--}}
                                            {{--</a>--}}
                                            {{--<ul class="nav-child unstyled small">--}}
                                                {{--<li class="item-277 li-"><a--}}
                                                            {{--href="/raspisaniya/grafik-zagruzki-ledovoj-areny">--}}
                                                        {{--<span aria-hidden="true"></span>--}}
                                                        {{--<span class="item-text">Расписание на текущую неделю</span>--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="item-278 li-"><a--}}
                                                            {{--href="/raspisaniya/grafik-zagruzki-ledovoj-areny/grafik-zagruzki-ledovoj-areny-2">--}}
                                                        {{--<span class="" aria-hidden="true"></span>--}}
                                                        {{--<span class="item-text">Расписание на следующую неделю</span>--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li class="item-275 li- deeper parent"><a--}}
                                                    {{--href="/raspisaniya/grafik-zagruzki-klassa-khoreografii">--}}
                                                {{--<span class="" aria-hidden="true"></span>--}}
                                                {{--<span class="item-text">График загрузки класса хореографии</span>--}}
                                            {{--</a>--}}
                                            {{--<ul class="nav-child unstyled small">--}}
                                                {{--<li class="item-280 li-"><a--}}
                                                            {{--href="/raspisaniya/grafik-zagruzki-klassa-khoreografii">--}}
                                                        {{--<span aria-hidden="true"></span>--}}
                                                        {{--<span class="item-text">Расписание на текущую неделю</span>--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="item-279 li-"><a--}}
                                                            {{--href="/raspisaniya/grafik-zagruzki-klassa-khoreografii/grafik-zagruzki-klassa-khoreografii-2">--}}
                                                        {{--<span class="" aria-hidden="true"></span>--}}
                                                        {{--<span class="item-text">Расписание на следующую неделю</span>--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- //OFF-CANVAS SIDEBAR -->

        <!-- //OFF-CANVAS -->
        <div class="top-line navbar-fixed-top hidden-md hidden-lg">
            <div class="container">
                <div class="row">
                    <button class="tl-btn off-canvas-toggle" type="button" data-pos="left" data-nav="#t3-off-canvas"
                            data-effect="off-canvas-effect-4">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="tl-logo">
                        <a title="Ледовая арена Арск" href="/"><img src="/public/images/logo.png"
                                                                       alt="Ледовая арена"></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="header-div hidden-sm hidden-xs">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 v-logo">


                        <div class="custom">
                            <a title="Ледовая арена Арск" href="/"><img class="img-responsive"
                                                                           src="/public/images/logo.png"
                                                                           alt=""/></a></div>

                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 hidden-sm hidden-xs top-menu">
                        <ul class="menu list-inline">
                            <li class="item-101 li- hidden"><a href="/">
                                    <span class="" aria-hidden="true"></span>
                                    <span class="item-text">Главная страница</span>
                                </a>
                            </li>
                            <li class="item-111 li- hidden-child"><a href="/uslugi">
                                    <span class="" aria-hidden="true"></span>
                                    <span class="item-text">Услуги</span>
                                </a>
                            </li>
                            <li class="item-112 li-"><a href="/uslugi/razmeshchenie-informatsii-reklamy">
                                    <span aria-hidden="true"></span>
                                    <span class="item-text">Реклама</span>
                                </a>
                            </li>
                            <li class="item-112 li-"><a href="{{ route('info') }}">
                                    <span aria-hidden="true"></span>
                                    <span class="item-text">О нас</span>
                                </a>
                            </li>
                            <li class="item-112 li-"><a href="{{ route('kontakty') }}">
                                    <span aria-hidden="true"></span>
                                    <span class="item-text">Контакты</span>
                                </a>
                            </li>
                            {{--<li class="item-115 li- rasp-btn hidden-child parent"><a href="/raspisaniya">--}}
                                    {{--<span class="fa fa-calendar" aria-hidden="true"></span>--}}
                                    {{--<span class="item-text">Расписания</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="uslugi-menu">
            <div class="container">
                <a href="#" class="menu-open hidden-md hidden-lg">Услуги <i class="fa fa-chevron-circle-down"
                                                                            aria-hidden="true"></i></a>
                <ul class="menu flex list-inline">
                    <li class="m-item-li  item-122"><a href="/uslugi/massovoe-katanie"><img
                                    src="/public/images/icons/mass2.png" alt="Массовое катание"/><span
                                    class="image-title">Массовое катание</span></a>
                    </li>
                    <li class="m-item-li  item-171"><a href="/uslugi/arenda-ledovogo-polya"><img
                                    src="/public/images/icons/arend.png" alt="Аренда ледового поля"/><span
                                    class="image-title">Аренда ледового поля</span></a>
                    </li>
                    <li class="m-item-li  item-244"><a href="/uslugi/razmeshchenie-informatsii-reklamy"><img
                                    src="/public/images/icons/rekl.png" alt="Размещение рекламы"/><span
                                    class="image-title">Размещение рекламы</span></a>
                    </li>
                    <li class="m-item-li  item-242"><a href="/uslugi/sportivnoe-katanie"><img
                                    src="/public/images/icons/mass.png" alt="Спортивное катание"/><span
                                    class="image-title">Спортивное катание</span></a>
                    </li>
                    <li class="m-item-li  item-241"><a href="/uslugi/prokat-zatochka-i-formovka-konkov"><img
                                    src="/public/images/icons/prokat.png" alt="Прокат коньков"/><span
                                    class="image-title">Прокат коньков</span></a>
                    </li>
                </ul>

            </div>
        </div>
    </header>
    @yield('content')
<!-- FOOTER -->
    <footer id="t3-footer" class="wrap t3-footer">
        <section class="t3-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 copyright ">
                        <p class="center">Арск арена - © 2019</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- //FOOTER -->
</div>
</body>
</html>