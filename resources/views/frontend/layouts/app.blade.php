<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title','Asia Tours')</title>

    <meta name="description" content="@yield('meta_description','Best Asia tours & travel experiences')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    {{-- CSS --}}
    <link rel="canonical" href="http://www.asiatours.com/">
    {{-- CSS riêng từng page --}}
    @yield('css')
    @stack('head')
</head>

<body>
    <div class="app">
        @include('frontend.partials.header')

        @yield('content')

        @include('frontend.partials.footer')

        <div id="google_translate_element2" style="display: none;"></div>
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/intlTelInput.min.js" defer></script>
        <script type="text/javascript" src="/js/slick.min.js" defer></script>
        <script type="text/javascript" src="/js/jquery.lazyload.mini.js" defer></script>
        <script type="text/javascript" src="/js/common.js?v=1.0" defer></script>
        <script type="text/javascript" src="/js/custom.js?v=4.0" defer></script>
        <script type="text/javascript" src="/js/translate.js?v=1.0" defer></script>
        <script type="text/javascript"
            src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2" defer></script>
        <div id="google_translate_element2" style="display: none;"></div>
        <!-- <script language="JavaScript" type="text/javascript"
            defer>
            setTimeout(function() {
                ft001_os(0, 0, 0, 0, document.referrer, window.location.href, 0)
            }, 3000);
        </script> -->
        <!-- <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-111256274-1');
        </script> -->
        {{-- JS riêng từng page --}}
        @yield('js')
    </div>
</body>

</html>