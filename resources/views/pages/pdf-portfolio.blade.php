<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', '-')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="vCard template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ mix('css/theme.css') }}">
    <style>
        body{
            font-family: DejaVu Sans!important;
        }
    </style>
</head>
<body>
<ul class="general_info_list">
    <li class="d-flex flex-row align-items-center justify-content-start">
        <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ url('i/icon_1.png') }}" alt=""></div>
        <div class="general_info_text">Аты-жөні: <span>{{ auth()->user()->name.' '.auth()->user()->data->surname }}</span></div>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
        <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"></div>
        <div class="general_info_text">Мекен-жайы: <span>{{ auth()->user()->data->city }}</span></div>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
        <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ url('i/icon_2.png') }}" alt=""></div>
        <div class="general_info_text">Туған күні: <span>{{ auth()->user()->data->bday }}</span></div>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
        <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ url('i/icon_3.png') }}" alt=""></div>
        <div class="general_info_text">Поштасы:<a href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->email }}</a></div>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
        <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ url('i/icon_4.png') }}" alt=""></div>
        <div class="general_info_text">Телефоны:{{ auth()->user()->data->phone }}</div>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
        <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ url('i/icon_5.png') }}" alt=""></div>
        <div class="general_info_text">Веб-сайты:<a href="{{ auth()->user()->data->website }}" target="_blank">{{ auth()->user()->data->website }}</a></div>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
        <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ url('i/icon_5.png') }}" alt=""></div>
        <div class="general_info_text">Мінездеме: {!! auth()->user()->data->characteristic !!}</div>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
        <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ url('i/icon_5.png') }}" alt=""></div>
        <div class="general_info_text">Портфолио:{{ auth()->user()->data->portfolio }}</div>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
        <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ url('i/icon_5.png') }}" alt=""></div>
        <div class="general_info_text">Портфолио-сайты: <a href="{{ auth()->user()->data->portfolio_link }}">{{ auth()->user()->data->portfolio_link }}</a></div>
    </li>
    <li class="d-flex flex-row align-items-center justify-content-start">
        <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="{{ url('i/icon_5.png') }}" alt=""></div>
        <div class="general_info_text">Портфолио-суретi:</div>
        <img src="{{ url('i/photos/'.auth()->user()->data->portfolio_image) }}" alt="item-1">
    </li>
</ul>

<script>
    let phoneMask = @json(config('promo.'.app()->getLocale().'.mask'));
    let smsCodeMask = @json(config('promo.'.app()->getLocale().'.smsCodeMask'));
    let dropzoneForms = @json(config('promo.dropzones'));
    let validations = @json(config('promo.validations'));
</script>

<script src="{{ mix('js/theme.js') }}"></script>
<script src="{{ url('/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('/js/popper.js') }}"></script>
<script src="{{ url('/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/js/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ url('/js/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ url('/js/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ url('/js/plugins/greensock/animation.gsap.min') }}.js"></script>
<script src="{{ url('/js/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ url('/js/plugins/progressbar/progressbar.js">') }}</script>
<script src="{{ url('/js/plugins/mCustomScrollbar/jquery.mCustomScrollbar.js') }}"></script>
<script src="{{ url('/js/plugins/easing/easing.js">') }}</script>
<script src="{{ url('/js/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ url('/js/custom.js') }}/"></script>
@stack('js')
</body>
</html>
