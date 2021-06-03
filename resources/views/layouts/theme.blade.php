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
</head>
<body>


@yield('content')


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
